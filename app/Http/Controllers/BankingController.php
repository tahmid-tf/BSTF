<?php

namespace App\Http\Controllers;

use App\Banking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BankingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->banking()->count() > 0) {
            return redirect()->route('home');
        } else {
            return view('user.admin_content.form.banking.banking');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = \request()->validate([
            "passport_number" => 'required',
            "passport_issue" => 'required',
            "nid" => ['required','unique:bankings'],
            "name_of_bank" => 'required',
            "name_of_branch" => 'required',
            "bank_account_number" => 'required',
            "name_of_account" => 'required',
            "bank_account_type" => 'required',
            "account_belongs" => 'required',
            "belongs_to" => 'required',
        ]);



        if(auth()->user()->banking()->count() == 0){
            auth()->user()->banking()->create($inputs);
        }else{
            abort(403);
        }

        // ------- Application submission status  ----------------------------------

        if (auth()->user()->personal()->count() > 0 && auth()->user()->educational()->count() > 0 && auth()->user()->travel()->count() > 0 && auth()->user()->banking()->count() > 0) {
            auth()->user()->application()->create([
                'username' => auth()->user()->name,
                'applicant_unique_id' => "BSTF-2022".random_int(100000, 999999)
            ]);
        }

        // ------- Application submission status  ----------------------------------
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Banking $banking
     * @return \Illuminate\Http\Response
     */
    public function show(Banking $banking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Banking $banking
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (auth()->user()->application()->count() <= 0) {

            $banking = auth()->user()->banking()->first();
            // $response = Http::get('https://sheltered-peak-03802.herokuapp.com/api/banklist')['data'];
            return view('user.admin_content.form.banking.banking-update', ['banking' => $banking]);
        } else {
            return redirect()->route('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Banking $banking
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $banking = auth()->user()->banking()->first();

        $inputs = \request()->validate([
            "passport_number" => 'required',
            "passport_issue" => 'required',
            "nid" => 'required',
            "name_of_bank" => 'required',
            "name_of_branch" => 'required',
            "bank_account_number" => 'required',
            "name_of_account" => 'required',
            "bank_account_type" => 'required',
            "account_belongs" => 'required',
            "belongs_to" => 'required',
        ]);

        $banking->update($inputs);
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Banking $banking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banking $banking)
    {
        //
    }
}
