<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class CommentController extends Controller
{
    public function showComment()
    {
        $comments = Comment::latest()->get();
        return view('admin/comments', compact('comments'));
    }
    public function destroyComment($id)
    {
        $commentInfo = Comment::findOrFail($id);
        $commentInfo->delete();
        Toastr::warning('Comment delete successfully','Delete Comment');
        return redirect()->back();
    }
}
