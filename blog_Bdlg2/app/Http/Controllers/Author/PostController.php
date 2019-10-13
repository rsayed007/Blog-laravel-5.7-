<?php

namespace App\Http\Controllers\Author;

use App\Tag;
use App\Post;
use App\User;
use App\Category;
use Carbon\Carbon;
use PharIo\Manifest\Author;
use Illuminate\Http\Request;
use App\Notifications\PendingPost;
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
        $posts = Auth::user()->posts()->latest()->get();
        return view('Author/post/post', compact('posts'));
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
        return view('author/post/createPost', compact('categories','tags'));
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
        $slug = str_slug($request->title).uniqid();

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
        $post->is_approved = false;
        $post->body = $request->body;
        $post->save();

        $post->categories()->attach($request->categories);
        $post->tags()->attach($request->tags);
        // for pending post mail notification
        $users = User::where('role_id','1')->get();
        Notification::send($users, new PendingPost($post));


        // for tost notification
        Toastr::success('Create a new Post, Wet for admin approve ','Success');

        return redirect()->route('author.post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        if ($post->user_id != Auth::id()) {
            Toastr::error('Your not authorize to access for This post','Error');
            return redirect()->back();
        }
        return view('author/post/showPost', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        if ($post->user_id != Auth::id()) {
            Toastr::error('Your not authorize to access for This post','Error');
            return redirect()->back();
        }
        $categories = Category::all();
        $tags = Tag::all();
        return view('author/post/editPost', compact( 'post','categories','tags'));
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
        if ($post->user_id != Auth::id()) {
            Toastr::error('Your not authorize to access for This post','Error');
            return redirect()->back();
        }
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
        $post->is_approved = false;
        $post->body = $request->body;
        $post->save();

        $post->categories()->sync($request->categories);
        $post->tags()->sync($request->tags);
        Toastr::success('Update','Update Post successfully');

        return redirect()->route('author.post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if ($post->user_id != Auth::id()) {
            Toastr::error('Your not authorize to access for This post','Error');
            return redirect()->back();
        }
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
