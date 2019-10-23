<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function index()
    {
        $favoriteLists = Auth::user()->favoriteToPost;
        return view('admin/favoritePost', compact('favoriteLists'));
    }
}
