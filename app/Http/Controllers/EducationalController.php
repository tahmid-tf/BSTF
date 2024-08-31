<?php

namespace App\Http\Controllers;

use App\Educational;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EducationalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->educational()->count() > 0){
            return redirect()->route('travel-form.index');
        }else{


            return view('user.admin_content.form.educational.educational');
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
            "ssc_exam_result" => 'required',
            "ssc_passing_year" => 'required',
            "hsc_exam_result" => 'required',
            "hsc_passing_year" => 'required',
            "academic_degree" => 'required',
            "bachelors_degree_result" => 'required',
            "study_country" => 'required',
            "name_of_university" => 'required',
            "portal_address_of_university" => 'required',
            "phone_number_of_university" => 'required',
            "email_address_of_university" => 'required',
            "course_for_applicant" => 'required',
            "degree_after_completion" => 'required',
            "duration_of_course" => 'required',
            "date_of_commencement" => 'required',
            "applicant_status" => 'required',
            "working_hours" => 'required',
            "applicant_receiving" => 'required',
            "scholarship_amount" => 'required',
            "finished_status" => 'required'
        ]);


        if(auth()->user()->educational()->count() == 0){
            auth()->user()->educational()->create($inputs);
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

        return redirect()->route('travel-form.index');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Educational $educational
     * @return \Illuminate\Http\Response
     */
    public function show(Educational $educational)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Educational $educational
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(auth()->user()->application()->count() <= 0) {
            $educational = auth()->user()->educational()->first();
            return view('user.admin_content.form.educational.educational-update', ['educational' => $educational]);
        }else{
            return redirect()->route('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Educational $educational
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $educational = auth()->user()->educational()->first();

        $inputs = \request()->validate([
            "ssc_exam_result" => 'required',
            "ssc_passing_year" => 'required',
            "hsc_exam_result" => 'required',
            "hsc_passing_year" => 'required',
            "academic_degree" => 'required',
            "bachelors_degree_result" => 'required',
            "study_country" => 'required',
            "name_of_university" => 'required',
            "portal_address_of_university" => 'required',
            "phone_number_of_university" => 'required',
            "email_address_of_university" => 'required',
            "course_for_applicant" => 'required',
            "degree_after_completion" => 'required',
            "duration_of_course" => 'required',
            "date_of_commencement" => 'required',
            "applicant_status" => 'required',
            "working_hours" => 'required',
            "applicant_receiving" => 'required',
            "scholarship_amount" => 'required',
            "finished_status" => 'required'
        ]);

        $educational->update($inputs);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Educational $educational
     * @return \Illuminate\Http\Response
     */
    public function destroy(Educational $educational)
    {
        //
    }
}
