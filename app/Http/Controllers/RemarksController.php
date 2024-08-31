<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class RemarksController extends Controller
{
    public function index($id)
    {
        \session()->forget('id');
        Session::put(['id' => $id]);
        return view("admin.remarks.remarks");
    }

    public function store(Request $request)
    {

        $inputs = \request()->validate([
            "acceptance_committee" => 'required',
            "session_for_scholarship" => 'required',
            "remarks" => 'required',
            "digital_signature" => 'required|mimes:jpeg,jpg,png',
            "authorized_personnel" => 'required',
            "status" => 'required',
        ]);


        if (request('digital_signature')) {
            $inputs['digital_signature'] = \request('digital_signature')->store('images');
        }

        if ($inputs['status'] == "accepted") {
            User::findOrFail(Session::get('id'))->application()->update($inputs);


            $user = User::findOrFail(Session::get('id'));
            $user_name = $user->name;
            $user_email = $user->email;

            $data = [
                'applicant' => $user_name,
            ];

            Mail::send('admin.mail.success', $data, function ($message) use ($user_name, $user_email) {
                $message->to($user_email, $user_name)->subject("Approval notice from Bangladesh Sweden Trust Fund");
            });

            return redirect()->route('application-bank');
        } elseif ($inputs['status'] == "rejected") {
            User::findOrFail(Session::get('id'))->application()->update($inputs);


            $user = User::findOrFail(Session::get('id'));
            $user_name = $user->name;
            $user_email = $user->email;

            $data = [
                'applicant' => $user_name,
            ];

            Mail::send('admin.mail.reject', $data, function ($message) use ($user_name, $user_email) {
                $message->to($user_email, $user_name)->subject("Approval notice from Bangladesh Sweden Trust Fund");
            });

            return redirect()->route('application-bank');
        }

    }
}
