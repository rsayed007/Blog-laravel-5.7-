<?php

namespace App\Http\Controllers\Admin;

use App\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class SubscriberController extends Controller
{
    public function getSubscriber()
    {
        $subscribers = Subscriber::latest()->get();
        return view('admin/subscriberList', compact('subscribers'));
    }
    public function deleteSubscriber($id)
    {
        Subscriber::findOrFail($id)->delete();
        Toastr::info('Delete Subscriber  successfully','Delete');
        return back();
    }
}
