<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->admin == "user"){
            // if(auth()->user() != null){
            //     Auth::logoutOtherDevices(auth()->user()->password);
            // }
            return redirect()->route('user.dashboard');
        }
        else if (auth()->user()->admin == "admin"){
            // if(auth()->user() != null){
            //     Auth::logoutOtherDevices(auth()->user()->password);
            // }

            return redirect()->route('admin-panel');
        }else{
            abort(403);
        }
    }
}
