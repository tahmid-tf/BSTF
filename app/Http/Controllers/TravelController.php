<?php

namespace App\Http\Controllers;

use App\Travel;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->travel()->count() > 0) {
            return redirect()->route('banking-form.index');
        } else {
            return view('user.admin_content.form.travel.travel');

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
            'airlines_name' => 'required',
            'ticket_number' => ['required','mimes:jpeg,jpg,png,pdf'],
            'ticket_number_text' => 'required',
            'ticket_purchased' => 'required',
            'date_of_departure' => 'required',
            'port_of_embarkation' => 'required',
            'name_of_city' => 'required',
            'date_of_arrival' => 'required',
            'port_of_disembarkation' => 'required',
            'name_of_city_2' => 'required',
            'approximate_distance' => 'required'
        ]);

        if (request('ticket_number')) {
            $inputs['ticket_number'] = \request('ticket_number')->store('images');
        }


        if(auth()->user()->travel()->count() == 0){
            auth()->user()->travel()->create($inputs);
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

        return redirect()->route('banking-form.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Travel $travel
     * @return \Illuminate\Http\Response
     */
    public function show(Travel $travel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Travel $travel
     * @return \Illuminate\Http\Response
     */
    public function edit(Travel $travel)
    {
        if(auth()->user()->application()->count() <= 0) {
            $travel = auth()->user()->travel()->first();
            return view('user.admin_content.form.travel.travel-update', ['travel' => $travel]);
        }
        else{
            return redirect()->route('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Travel $travel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Travel $travel)
    {
        $travel = auth()->user()->travel()->first();
        $inputs = \request()->validate([
            'airlines_name' => 'required',
            'ticket_purchased' => 'required',
            'ticket_number_text' => 'required',
            'date_of_departure' => 'required',
            'port_of_embarkation' => 'required',
            'name_of_city' => 'required',
            'date_of_arrival' => 'required',
            'port_of_disembarkation' => 'required',
            'name_of_city_2' => 'required',
            'approximate_distance' => 'required',

            'ticket_number' => ['mimes:jpeg,jpg,png,pdf'],

        ]);

        if (request('ticket_number')) {
            $inputs['ticket_number'] = \request('ticket_number')->store('images');
        } else {
            $inputs['ticket_number'] = $travel->ticket_number;
        }

        $travel->update($inputs);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Travel $travel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Travel $travel)
    {
        //
    }
}
