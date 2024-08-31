<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class AdminChangeController extends Controller
{
    public function index()
    {

        $user_admin = User::where('admin', '=', 'admin')->get();
        return view('admin.admin_content.admin_control.index', compact('user_admin'));
    }

    public function store(Request $request)
    {
        \request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        User::create([
            'name' => \request()->name,
            'email' => \request()->email,
            'password' => Hash::make($request->password),
            'admin' => 'admin'
        ]);
        return back();
    }

    public function delete($id)
    {
        $user = User::find($id)->delete();
        return back();
    }
}
