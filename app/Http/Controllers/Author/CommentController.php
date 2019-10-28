<?php

namespace App\Http\Controllers\Author;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function showComment()
    {
        $posts = Auth::user()->posts;
        return view('author/comments', compact('posts'));
    }
    public function destroyComment($id)
    {
        $commentInfo = Comment::findOrFail($id);
        $commentInfo->delete();
        Toastr::warning('Comment delete successfully','Delete Comment');
        return redirect()->back();
    }
}
