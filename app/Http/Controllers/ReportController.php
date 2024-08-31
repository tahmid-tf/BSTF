<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function show($id){
        $user = User::findOrFail($id);
        return view('admin.report.report',compact('user'));
    }

    public function deleteReport($id){
        $user = User::find($id);
        $user->personal()->delete();
        $user->educational()->delete();
        $user->travel()->delete();
        $user->banking()->delete();
        $user->application()->delete();

        return back();
    }
}
