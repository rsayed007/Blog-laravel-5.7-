<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function add($post_id)
    {
        $user =Auth::user();
        $isFavorite = $user->favoriteToPost()->where('post_id',$post_id)->count();
        
        if ($isFavorite === 0) {
            $user->favoriteToPost()->attach($post_id);
            Toastr::success('Post successfully added to your favorite list','Success');
            return redirect()->back();
        }else{
            $user->favoriteToPost()->detach($post_id);
            Toastr::info('Post successfully remove from your favorite list','Info');
            return redirect()->back();
        }

    }
}
