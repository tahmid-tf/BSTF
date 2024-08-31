<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{

    public function passwordChangePage(){
        return view('admin.admin_content.password.password');
    }

    public function changePassword(Request $request){

        request()->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'verify_password' => 'required'
        ]);

        $pass = auth()->user()->password;

        $current_password = request('current_password');
        $new_password = request('new_password');
        $confirm_password = request('verify_password');

        if(\Illuminate\Support\Facades\Hash::check($current_password,$pass) && $new_password === $confirm_password){
            auth()->user()->update([
                'password' => bcrypt($new_password)
            ]);
            session()->flash('password_success', 'Password updated successfully');
            return back();
        }else{
            session()->flash('password_failed', 'Password Change failed');
            return back();
        }
    }
}
