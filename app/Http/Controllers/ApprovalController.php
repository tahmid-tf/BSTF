<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApprovalController extends Controller
{
    public function personalForm($id){

        $personal_form = User::findOrFail($id)->personal()->first();
        return view('admin.admin_content.form.personal.personal',compact('personal_form'));
    }

    public function educationalForm($id){
        $educational_form = User::findOrFail($id)->educational()->first();
        return view('admin.admin_content.form.educational.educational',compact('educational_form'));
    }

    public function travelForm($id){
        $travel_form = User::findOrFail($id)->travel()->first();
        return view('admin.admin_content.form.travel.travel',compact('travel_form'));
    }

    public function bankingForm($id){
        $banking_form = User::findOrFail($id)->banking()->first();
        return view('admin.admin_content.form.banking.banking',compact('banking_form'));
    }

//    public function accept($id){
//            User::findOrFail($id)->application()->update([
//                'status' => 'accepted'
//            ]);
//
//            $user = User::findOrFail($id);
//            $user_name = $user->name;
//            $user_email = $user->email;
//
//        $data = [
//            'applicant' => $user_name,
//        ];
//
//        Mail::send('admin.mail.success', $data, function ($message) use ($user_name, $user_email) {
//            $message->to($user_email,$user_name)->subject("Approval notice from Bangladesh Sweden Trust Fund");
//        });
//
//            return redirect()->route('application-bank');
//    }
//
//    public function reject($id){
//        User::findOrFail($id)->application()->update([
//            'status' => 'rejected'
//        ]);
//
//        $user = User::findOrFail($id);
//        $user_name = $user->name;
//        $user_email = $user->email;
//
//        $data = [
//            'applicant' => $user_name,
//        ];
//
//        Mail::send('admin.mail.reject', $data, function ($message) use ($user_name, $user_email) {
//            $message->to($user_email,$user_name)->subject("Approval notice from Bangladesh Sweden Trust Fund");
//        });
//
//        return redirect()->route('application-bank');
//    }
}
