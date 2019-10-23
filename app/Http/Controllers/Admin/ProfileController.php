<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin/profileSating');
    }
    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'district' => 'required|string|max:20',
            'division' => 'required|string|max:20',
            'image' => 'required|mimes:jpeg,jpg,png,gif,JPG,JPEG,PNG',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        $user = User::findOrFail(Auth::user()->id);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            
            if (!Storage::disk('public')->exists('profileImage')) {
                Storage::disk('public')->makeDirectory('profileImage');
            }
             // delete old image
             if (Storage::disk('public')->exists('profileImage/'.$user->image)) {
                Storage::disk('public')->delete('profileImage/'.$user->image);
                $link = base_path('public/').$user->image;
                unlink($link);
            }
            
            $profileImageTemp =Image::make($image)->resize(500,500)->save($imageName,50);
            Storage::disk('public')->put('profileImage/'.$imageName,$profileImageTemp);
        }else{
            $imageName= 'default.jpg';
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->district = $request->district;
        $user->division = $request->division;
        $user->image = $imageName;
        $user->about = $request->about;
        $user->save();
        Toastr::success('User Information successfully Updated','Update');
        return redirect()->route('admin.dashboard');
    }
    public function updatePassword(Request $request){
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);
        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->old_password, $hashedPassword)) {
            if (!Hash::check($request->password, $hashedPassword)) {
                $user = User::find(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();
                Toastr::success('Password Successfully Changed','Success');
                Auth::logout();
                return redirect()->back();
            }else{
                Toastr::error('Password dose not same with your old password','Error');
                return redirect()->back();

            }
        }else{
            Toastr::error('Dose not match your old password','Error');
            return redirect()->back();

        }
    }
}
