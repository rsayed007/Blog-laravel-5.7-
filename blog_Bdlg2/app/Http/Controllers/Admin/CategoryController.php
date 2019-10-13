<?php

namespace App\Http\Controllers\Admin;
use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.category', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif',
        ]);
        // get image from form
        $image = $request->file('image');
        $slug = str_slug($request->category); // get slug for image name
        // return $image;
        
        if (isset($image))
        {
//            make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
//            check category dir is exists
            if (!Storage::disk('public')->exists('category'))
            {
                Storage::disk('public')->makeDirectory('category');
            }
//            resize image for category and upload
            $category = Image::make($image)->resize(1600,479)->save();
            Storage::disk('public')->put('category/'.$imagename,$category);

            // --------------------Slider------------------------------------------------
            //            check category slider dir is exists
            if (!Storage::disk('public')->exists('category/slider'))
            {
                Storage::disk('public')->makeDirectory('category/slider');
            }
            //            resize image for category slider and upload
            $slider = Image::make($image)->resize(500,333)->save();
            Storage::disk('public')->put('category/slider/'.$imagename,$slider);
        } else {
            $imagename = "category.jpg";
        }

        $category = new Category();
        $category->category = $request->category;
        $category->slug = $slug;
        $category->image = $imagename;
        $category->save();
        Toastr::success('Category successFully Added', 'Success');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('Admin.category.editCategory', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif',
        ]);

        // get image from form
        $image = $request->file('image');
        $slug = str_slug($request->category); // get slug for image name
        $category =  Category::find($id);

        // return $image;
        
        if (isset($image))
        {
            //            make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            //            check category dir is exists
            if (!Storage::disk('public')->exists('category'))
            {
                Storage::disk('public')->makeDirectory('category');
            }
            // delete old image
            if (Storage::disk('public')->exists('category/'.$category->image) && $category->image != 'category.jpg' ) {
                Storage::disk('public')->delete('category/'.$category->image);
            }
            //   resize image for category and upload
            $resizeImage = Image::make($image)->resize(1600,479)->save($imagename,50);
            Storage::disk('public')->put('category/'.$imagename,$resizeImage);



            //            check category slider dir is exists
            if (!Storage::disk('public')->exists('category/slider'))
            {
                Storage::disk('public')->makeDirectory('category/slider');
            }
            // delete old slider image
            if (Storage::disk('public')->exists('category/slider/'.$category->image) && $category->image != 'category.jpg' ) {
                Storage::disk('public')->delete('category/slider/'.$category->image);
            }
            //            resize image for category slider and upload
            $sliderResizeImage = Image::make($image)->resize(500,333)->save($imagename,50);
            Storage::disk('public')->put('category/slider/'.$imagename,$sliderResizeImage);
        } else {
            $imagename = $category->image;
        }

        $category->category = $request->category;
        $category->slug = $slug;
        $category->image = $imagename;
        $category->save();
        Toastr::success('Category successFully Updated', 'Success');
        return redirect()->route('admin.category.index');

        // return $category;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if (Storage::disk('public')->exists('category/'.$category->image)) {
            Storage::disk('public')->delete('category/'.$category->image);
        }
        if (Storage::disk('public')->exists('category/slider/'.$category->image)) {
            Storage::disk('public')->delete('category/slider/'.$category->image);
        }
        $category = Category::find($id)->delete();
        Toastr::success('Category Successfully Deleted :)','Success');
        return back();
    }
}
