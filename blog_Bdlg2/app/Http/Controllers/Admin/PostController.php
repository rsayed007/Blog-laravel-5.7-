<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use App\Post;
use App\User;
use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Notifications\ApprovedPost;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Notification;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();
        return view('Admin\post\post', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin/post/createPost', compact('categories','tags'));
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
            'title' => 'required|max:50|min:10',
            'image' => 'required|mimes:jpeg,jpg,png,gif',
            'categories' => 'required',
            'tags' => 'required',
            'body' => 'required',
        ]);
        
        $image = $request->file('image');
        $slug = str_slug($request->title);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('postImage')) {
                Storage::disk('public')->makeDirectory('postImage');
            }
            $postImageTemp =Image::make($image)->resize(1600,1066)->save($imageName,50);
            Storage::disk('public')->put('postImage/'.$imageName,$postImageTemp);
            
        }else{
            $imageName = 'default.jpg';
        }

        $post = new Post();
        $post->user_id = Auth::user()->id;
        $post->title = $request->title;
        $post->slug = $slug;
        $post->image = $imageName;
        if (isset($request->status)) {
            $post->status = true;
        }else{
            $post->status = false;
        }
        $post->is_approved = true;
        $post->body = $request->body;
        $post->save();

        $post->categories()->attach($request->categories);
        $post->tags()->attach($request->tags);
        
        // tost notification
        Toastr::success('Success','Create a new Post');

        return redirect()->route('admin.post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin/post/showPost', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin/post/editPost', compact( 'post','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|max:50|min:10',
            'categories' => 'required',
            'tags' => 'required',
            'body' => 'required',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->title);

        if (isset($image)) {

            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('postImage')) {
                Storage::disk('public')->makeDirectory('postImage');
            }
             // delete old image
            if (Storage::disk('public')->exists('postImage/'.$post->image)) {
                Storage::disk('public')->delete('postImage/'.$post->image);
            }
            $postImageTemp =Image::make($image)->resize(1600,1066)->save($imageName,50);
            Storage::disk('public')->put('postImage/'.$imageName,$postImageTemp);
            
        }else{
            $imageName = $post->image;
        }

        $post->user_id = Auth::user()->id;
        $post->title = $request->title;
        $post->slug = $slug;
        $post->image = $imageName;
        if (isset($request->status)) {
            $post->status = true;
        }else{
            $post->status = false;
        }
        $post->is_approved = true;
        $post->body = $request->body;
        $post->save();

        $post->categories()->sync($request->categories);
        $post->tags()->sync($request->tags);
        Toastr::success('Update','Update Post successfully');

        return redirect()->route('admin.post.index');
    }

    // show pending post 
    public function pendingPost()
    {
        $posts = Post::where('is_approved', false)->get();
        return view('Admin/post/pendingPost', compact('posts'));
    }

    // post approved by admin
    public function approvedPost($id)
    {
        $post = Post::find($id);
        if ($post->is_approved == false) {
            $post->is_approved = true;
            $post->save();
            
            // send Author post ApprovedPost mail notification
            $post->user->notify( new ApprovedPost($post)); // single post author 
            
            Toastr::success('Post Successfully Approved :)', 'Success');
        }else{
            Toastr::info('POst is already Approved :)', 'Info');
        }

        return redirect()->back();
        // return redirect()->route('admin.post.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
         // delete old image
         if (Storage::disk('public')->exists('postImage/'.$post->image)) {
            Storage::disk('public')->delete('postImage/'.$post->image);
        }
        $post->categories()->detach();
        $post->tags()->detach();
        $post->delete();
        Toastr::success('Update','Delete Post successfully');
        return back();
        
    }
}