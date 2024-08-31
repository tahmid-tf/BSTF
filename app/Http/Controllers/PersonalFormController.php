<?php

namespace App\Http\Controllers;

use App\PersonalForm;
use App\User;
use Illuminate\Http\Request;

class PersonalFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->personal()->count() > 0) {
            return redirect()->route('educational-form.index');
        } else {
            return view('user.admin_content.form.personal.personal');
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
            'fname' => 'required',
            'lname' => 'required',

            'image' => ['required', 'mimes:jpeg,jpg,png'],
            'digital_signature_image' => ['required', 'mimes:jpeg,jpg,png'],

            'gender' => 'required',

            'passport_image' => ['required', 'mimes:jpeg,jpg,png,pdf'],
            'nid_image' => ['required', 'mimes:jpeg,jpg,png,pdf'],
            'certification_image' => ['required', 'mimes:jpeg,jpg,png,pdf'],

            'dob' => 'required',
            'mothers_name' => 'required',
            'mothers_nid' => 'required|min:10|unique:personal_forms',
            'mothers_profession' => 'required',
            'mothers_gross_income' => ['required', 'min:0'],
            'fathers_name' => 'required',
            'fathers_profession' => 'required',
            'fathers_gross_income' => ['required', 'min:0'],
            'contact_address' => 'required',
            'permanent_address' => 'required',
            'phone_number' => 'required'
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('images');
        }

        if (request('digital_signature_image')) {
            $inputs['digital_signature_image'] = \request('digital_signature_image')->store('images');
        }

        if (request('passport_image')) {
            $inputs['passport_image'] = \request('passport_image')->store('images');
        }

        if (request('nid_image')) {
            $inputs['nid_image'] = \request('nid_image')->store('images');
        }

        if (request('certification_image')) {
            $inputs['certification_image'] = \request('certification_image')->store('images');
        }

        if (auth()->user()->personal()->count() == 0) {
            auth()->user()->personal()->create($inputs);
        } else {
            abort(403);
        }


        // ------- Application submission status  ----------------------------------

        if (auth()->user()->personal()->count() > 0 && auth()->user()->educational()->count() > 0 && auth()->user()->travel()->count() > 0 && auth()->user()->banking()->count() > 0) {
            auth()->user()->application()->create([
                'username' => auth()->user()->name,
                'applicant_unique_id' => "BSTF-2022" . random_int(100000, 999999)
            ]);
        }

        // ------- Application submission status  ----------------------------------

        return redirect()->route('educational-form.index');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\PersonalForm $personalForm
     * @return \Illuminate\Http\Response
     */
    public function show(PersonalForm $personalForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\PersonalForm $personalForm
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (auth()->user()->application()->count() <= 0) {
            $personal = auth()->user()->personal()->first();
            return view('user.admin_content.form.personal.personal-update', ['personal' => $personal]);
        } else {
            return redirect()->route('home');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\PersonalForm $personalForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonalForm $personalForm)
    {

        $personal = auth()->user()->personal()->first();

        $inputs = \request()->validate([
            'fname' => 'required',
            'lname' => 'required',
            'dob' => 'required',
            'mothers_name' => 'required',
            'mothers_nid' => 'required|min:10',
            'mothers_profession' => 'required',
            'mothers_gross_income' => ['required', 'min:0'],
            'fathers_name' => 'required',
            'fathers_profession' => 'required',
            'fathers_gross_income' => ['required', 'min:0'],
            'contact_address' => 'required',
            'permanent_address' => 'required',
            'phone_number' => 'required',

            'digital_signature_image' => ['mimes:jpeg,jpg,png'],
            'image' => ['mimes:jpeg,jpg,png'],
            'passport_image' => ['mimes:jpeg,jpg,png,pdf'],
            'nid_image' => ['mimes:jpeg,jpg,png,pdf'],
            'certification_image' => ['mimes:jpeg,jpg,png,pdf'],


        ]);


        if (request('image')) {
            $inputs['image'] = \request('image')->store('images');
        } else {
            $inputs['image'] = $personal->image;
        }

        if (request('digital_signature_image')) {
            $inputs['digital_signature_image'] = \request('digital_signature_image')->store('images');
        } else {
            $inputs['digital_signature_image'] = $personal->digital_signature_image;
        }

        if (request('passport_image')) {
            $inputs['passport_image'] = \request('passport_image')->store('images');
        } else {
            $inputs['passport_image'] = $personal->passport_image;
        }

        if (request('nid_image')) {
            $inputs['nid_image'] = \request('nid_image')->store('images');
        } else {
            $inputs['nid_image'] = $personal->nid_image;
        }


        if (request('certification_image')) {
            $inputs['certification_image'] = \request('certification_image')->store('images');
        } else {
            $inputs['certification_image'] = $personal->certification_image;
        }


        $personal->update($inputs);
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\PersonalForm $personalForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalForm $personalForm)
    {
        //
    }
}
