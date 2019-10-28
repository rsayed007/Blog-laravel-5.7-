<?php

namespace App\Http\Controllers;

use random;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index($slug)
    {
        $posts = Post::where('slug',$slug)->first();
        $blogKey = 'blog'.$posts->id;
        if (!Session::has($blogKey)) {
            $posts->increment('view_count');
            Session::put($blogKey,1);
        }
        $randomPost = Post::all()->random(3);
        
        return view('posts', compact('posts','randomPost'));
    }
}
