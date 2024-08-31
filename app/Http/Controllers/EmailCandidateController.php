<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailCandidateController extends Controller
{
    public function createMail($id)
    {
        $email = User::findOrFail($id)->email;
        return view('admin.mail.email_candidate', compact('email'));
    }

    public function sendMail(Request $request)
    {
        $inputs = \request()->validate([
            "receiver" => "required",
            "subject" => "required",
            "body" => "required",
        ]);

        $user = User::where('email','=',$inputs['receiver'])->first();
        $user_name = $user->name;
        $user_email = $inputs['receiver'];
        $subject = $inputs['subject'];
        $body = $inputs['body'];

        Mail::send('admin.mail.email_candidate_body', $inputs, function ($message) use ($user_name, $user_email, $subject) {
            $message->to($user_email,$user_name)->subject($subject);
        });

        return redirect()->route('application-bank');
    }
}
