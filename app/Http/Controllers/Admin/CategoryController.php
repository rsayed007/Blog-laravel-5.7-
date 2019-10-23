<?php

namespace App\Http\Controllers\Admin;
use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


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
        
        // get image from form
        $request->validate([
            'category' => 'required|unique:categories',
            'image' => 'required|mimes:jpeg,bmp,png,jpg'
        ]);
        // get form image
        $image = $request->file('image');
        $slug = str_slug($request->category);
        if (isset($image))
        {
        //            make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(1600,479)->save( base_path('public/storage/category/' . $imageName ),80 );
            Image::make($image)->resize(500,333)->save( base_path('public/storage/category/slider/' . $imageName ),80 );

        } else {
            $imageName = "default.png";
        }

        $category = new Category();
        $category->category = $request->category;
        $category->slug = $slug;
        $category->image = $imageName;
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
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

         
            // delete old image
            if (base_path('public/storage/category/' . $category->image ) && $category->image != 'category.jpg' ) {
                $link = base_path('public/storage/category/' . $category->image );
                unlink($link);
            }
            Image::make($image)->resize(1600,479)->save( base_path('public/storage/category/' . $imageName ),80 );
            // delete old image
            if (base_path('public/storage/category/slider/' . $category->image ) && $category->image != 'category.jpg' ) {
                $link = base_path('public/storage/category/slider/' . $category->image );
                unlink($link);
            }
            Image::make($image)->resize(500,333)->save( base_path('public/storage/category/slider/' . $imageName ),80 );

        } else {
            $imageName = $category->image;
        }

        $category->category = $request->category;
        $category->slug = $slug;
        $category->image = $imageName;
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
        if (base_path('public/storage/category/' . $category->image )) {
            $link = base_path('public/storage/category/' . $category->image );
            unlink($link);
        }
        if (base_path('public/storage/category/slider/' . $category->image )) {
            $link = base_path('public/storage/category/slider/' . $category->image );
            unlink($link);
        }
        $category = Category::find($id)->delete();
        Toastr::success('Category Successfully Deleted :)','Success');
        return back();
    }
}
