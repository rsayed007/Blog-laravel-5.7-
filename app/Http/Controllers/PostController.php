<?php

namespace App\Http\Controllers;

use random;
use App\Tag;
use App\Post;
use App\User;
use App\Comment;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index($slug)
    {
        $posts = Post::where('slug',$slug)->approved()->published()->first();
        $blogKey = 'blog'.$posts->id;
        if (!Session::has($blogKey)) {
            $posts->increment('view_count');
            Session::put($blogKey,1);
        }
        $randomPost = Post::approved()->published()->take(3)->inRandomOrder()->get();
        
        return view('posts', compact('posts','randomPost'));
    }
    public function postByCategory($slug)
    {
        $categories = Category::where('slug',$slug)->first();
        $posts = $categories->posts()->approved()->published()->paginate(9);
        // return $categories;
        return view('categoryPost', compact('categories','posts'));
    }
    public function postByTag($slug)
    {
        $tags = Tag::where('slug',$slug)->first();
        $posts = $tags->posts()->approved()->published()->paginate(9);
        // return $categories;
        return view('tagPost', compact('tags','posts'));
    }
    public function postByUser($id)
    {
        $users = User::where('id',$id)->first();
        $posts = $users->posts()->approved()->published()->paginate(6);
        // return $posts;
        // return $categories;
        return view('userPost', compact('users','posts'));
    }
}
