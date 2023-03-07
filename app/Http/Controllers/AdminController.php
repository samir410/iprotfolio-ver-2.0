<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;

class AdminController extends Controller
{
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        $notification = array(
            'message' => 'Logged in Successfully', 
            'alert-type' => 'info'
        );

        return redirect('/login')->with($notification);
    }

    public function profile(){

        $id = Auth::user()->id;
        $admindata = User::find($id);
        // dd($admindata);
        return view('admin.userprofile',compact('admindata'));
    }

    public function edit_profile(){

        $id = Auth::user()->id;
        $edit_admindata = User::find($id);
        return view('admin.user_profile_edit',compact('edit_admindata'));
    }
    public function store_profile(Request $request){
   
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;

        if ($request->file('profile_image')) {
           $file = $request->file('profile_image');

           $filename = date('YmdHi').$file->getClientOriginalName();
           $file->move(public_path('upload/admin_images'),$filename);
           $data['profile_image'] = $filename;
        }
        $data->save();
        //return redirect()->route('admin.profile');

        $notification = array(
            'message' => 'Admin Profile Updated Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('admin.profile')->with($notification);

     
    }
    // public function ChangePassword(){

    //     return view('admin.admin_change_password');

    // }// End Method


    // public function UpdatePassword(Request $request){

    //     $validateData = $request->validate([
    //         'oldpassword' => 'required',
    //         'newpassword' => 'required',
    //         'confirm_password' => 'required|same:newpassword',

    //     ]);

    //     $hashedPassword = Auth::user()->password;
    //     if (Hash::check($request->oldpassword,$hashedPassword )) {
    //         $users = User::find(Auth::id());
    //         $users->password = bcrypt($request->newpassword);
    //         $users->save();

    //         session()->flash('message','Password Updated Successfully');
    //         return redirect()->back();
    //     } else{
    //         session()->flash('message','Old password is not match');
    //         return redirect()->back();
    //     }

}
