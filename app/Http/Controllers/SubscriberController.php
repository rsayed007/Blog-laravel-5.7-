<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class SubscriberController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers'
        ]);
        $subscriber = new Subscriber();
        $subscriber->email = $request->email;
        $subscriber->save();
        Toastr::success('You Successfully added to our subscriber list :)','Success');
        return redirect()->back();
    }
}
