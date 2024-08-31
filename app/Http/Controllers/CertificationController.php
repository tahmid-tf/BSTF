<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificationController extends Controller
{
    public function index(){
        if(auth()->user()->application->status == "accepted"){
            $user = auth()->user();
            return view('admin.certification.certificate', compact('user'));
        }else{
            return redirect()->route('user.dashboard');
        }
    }
}
