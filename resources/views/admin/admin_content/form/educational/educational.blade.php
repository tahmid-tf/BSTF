<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Educational Information</title>
    <link rel="stylesheet" href="{{ asset('assets/css/form.css') }}"/>
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    />
</head>
<body id="body">
<div class="container">
    <div>
        <div class="form-heading">
            <p>BSTF Application Form</p>
        </div>
    </div>
    <div class="form-part">
        <div class="form-display-flex">
            <p>Educational Information</p>

            <div>
                <a href="{{ route('application-bank') }}" class="btn btn-secondary" type="button">Application Bank</a>
            </div>
        </div>
        <hr/>

        <!-- --------------------------- form -------------------------------- -->
        <div class="form">
            <!-- --- SSC or equivalent exam result --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
                >SSC or equivalent exam result (write CGPA out of total or
                    division/class obtained) *</label
                >
                <input
                    type="text"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Enter Your Answer"
                    name="ssc_exam_result"
                    class="@error('ssc_exam_result') is-invalid @enderror"
                    value="{{ $educational_form->ssc_exam_result }}"
                    disabled
                />
            </div>

            @error('ssc_exam_result')
            <div class="alert alert-danger">Field cannot left empty</div>
            @enderror

        <!-- --- SSC or equivalent exam result --- -->

            <!-- --- form option --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
                >SSC or equivalent exam passing year *</label
                >
                <input
                    type="text"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Enter Your Answer"
                    name="ssc_passing_year"
                    class="@error('ssc_passing_year') is-invalid @enderror"
                    value="{{ $educational_form->ssc_passing_year }}"
                    disabled
                />
            </div>

            @error('ssc_passing_year')
            <div class="alert alert-danger">Field cannot left empty</div>
            @enderror
        <!-- --- form option --- -->

            <!-- --- form option --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
                >HSC or equivalent exam result (write CGPA out of total or
                    division/class obtained) *</label
                >
                <input
                    type="text"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Enter Your Answer"
                    name="hsc_exam_result"
                    class="@error('hsc_exam_result') is-invalid @enderror"
                    value="{{ $educational_form->hsc_exam_result }}"
                    disabled
                />
            </div>

            @error('hsc_exam_result')
            <div class="alert alert-danger">Field cannot left empty</div>
            @enderror
        <!-- --- form option --- -->

            <!-- --- form option --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
                >HSC or equivalent exam passing year *</label
                >
                <input
                    type="text"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Enter Your Answer"
                    name="hsc_passing_year"
                    class="@error('hsc_passing_year') is-invalid @enderror"
                    value="{{ $educational_form->hsc_passing_year }}"
                    disabled
                />
            </div>

            @error('hsc_passing_year')
            <div class="alert alert-danger">Field cannot left empty</div>
            @enderror
        <!-- --- form option --- -->

            <!-- --- form option --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
                >Last academic degree obtained *</label
                >
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="academic_degree"
                        id="bachelors"
                        value="Bachelor's"
                        @if($educational_form->academic_degree == "Bachelor's") checked @else disabled @endif
                    />
                    <label class="form-check-label" for="exampleRadios1">
                        Bachelor's
                    </label>
                </div>

                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="academic_degree"
                        id="masters"
                        value="Master's"
                        @if($educational_form->academic_degree == "Master's") checked @else disabled @endif
                    />
                    <label class="form-check-label" for="exampleRadios2">
                        Master's
                    </label>
                </div>

                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="academic_degree"
                        id="phd"
                        value="PhD"
                        @if($educational_form->academic_degree == "PhD") checked @else disabled @endif
                    />
                    <label class="form-check-label" for="exampleRadios2">
                        PhD
                    </label>
                </div>

                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="academic_degree"
                        id="diploma"
                        value="Diploma"
                        @if($educational_form->academic_degree == "Diploma") checked @else disabled @endif
                    />
                    <label class="form-check-label" for="exampleRadios2">
                        Diploma
                    </label>
                </div>

                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="academic_degree"
                        id="hsc"
                        value="HSC"
                        @if($educational_form->academic_degree == "HSC") checked @else disabled @endif
                    />
                    <label class="form-check-label" for="exampleRadios2">
                        HSC
                    </label>
                </div>

                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="academic_degree"
                        id="olevel"
                        value="O level"
                        @if($educational_form->academic_degree == "O level") checked @else disabled @endif
                    />
                    <label class="form-check-label" for="exampleRadios2">
                        O level
                    </label>
                </div>

                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="academic_degree"
                        id="other"
                        value="Other"
                        @if($educational_form->academic_degree == "Other") checked @else disabled @endif
                    />
                    <label class="form-check-label" for="exampleRadios2">
                        Other
                    </label>
                </div>

            </div>
            <!-- --- form option --- -->

            <!-- --- form option --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
                >Result of bachelor's degree (write CGPA or division/class OR
                    write "not applicable" if not done yet) *</label
                >
                <input
                    type="text"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Enter Your Answer"
                    name="bachelors_degree_result"
                    class="@error('bachelors_degree_result') is-invalid @enderror"
                    value="{{ $educational_form->bachelors_degree_result }}"
                    disabled

                />
            </div>

            @error('bachelors_degree_result')
            <div class="alert alert-danger">Field cannot left empty</div>
            @enderror
        <!-- --- form option --- -->

            <!-- --- form option --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
                >Country to which applicant is going to study/studying *</label
                >
                <input
                    type="text"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Enter Your Answer"
                    name="study_country"
                    class="@error('study_country') is-invalid @enderror"
                    value="{{ $educational_form->study_country }}"
                    disabled
                />
            </div>

            @error('study_country')
            <div class="alert alert-danger">Field cannot left empty</div>
            @enderror
        <!-- --- form option --- -->

            <!-- --- form option --- -->
            <div class="form-group">
                <label for=""
                >Name of university</label
                >
                <input
                    type="text"
                    class="form-control"
                    id="name_of_university"
                    aria-describedby="emailHelp"
                    placeholder="Enter Your Answer"
                    name="name_of_university"
                    class="@error('name_of_university') is-invalid @enderror"
                    value="{{ $educational_form->name_of_university }}"
                    disabled
                />
            </div>

            @error('name_of_university')
            <div class="alert alert-danger">Field cannot left empty</div>
            @enderror
        <!-- --- form option --- -->


            <!-- --- form option --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
                >Postal address of university/educational institution in which
                    applicant is studying *</label
                >
                {{--                    <input--}}
                {{--                        type="text"--}}
                {{--                        class="form-control"--}}
                {{--                        id="exampleInputEmail1"--}}
                {{--                        aria-describedby="emailHelp"--}}
                {{--                        placeholder="Enter Your Answer"--}}
                {{--                        name="portal_address_of_university"--}}
                {{--                        class="@error('portal_address_of_university') is-invalid @enderror"--}}
                {{--                        value="{{ $educational_form->portal_address_of_university }}"--}}
                {{--                        disabled--}}
                {{--                    />--}}

                <textarea name="portal_address_of_university" id="portal_address_of_university" cols="30" rows="10"
                          name="portal_address_of_university"
                          class="form-control @error('portal_address_of_university') is-invalid @enderror"
                          disabled>{{ $educational_form->portal_address_of_university  }}</textarea>

            </div>

            @error('portal_address_of_university')
            <div class="alert alert-danger">Field cannot left empty</div>
            @enderror
        <!-- --- form option --- -->

            <!-- --- form option --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
                >Phone number of university/educational institution (with
                    country and city code) *</label
                >
                <input
                    type="text"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Enter Your Answer"
                    name="phone_number_of_university"
                    class="@error('phone_number_of_university') is-invalid @enderror"
                    value="{{ $educational_form->phone_number_of_university }}"
                    disabled
                />
            </div>

            @error('phone_number_of_university')
            <div class="alert alert-danger">Field cannot left empty</div>
            @enderror
        <!-- --- form option --- -->

            <!-- --- form option --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
                >Email address of university/educational institution *</label
                >
                <input
                    type="email"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Enter Your Answer"
                    name="email_address_of_university"
                    class="@error('email_address_of_university') is-invalid @enderror"
                    value="{{ $educational_form->email_address_of_university }}"
                    disabled
                />
            </div>

            @error('email_address_of_university')
            <div class="alert alert-danger">Field cannot left empty</div>
            @enderror
        <!-- --- form option --- -->

            <!-- --- form option --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
                >Course in which applicant is studying/planning to study
                    *</label
                >
                <input
                    type="text"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Enter Your Answer"
                    name="course_for_applicant"
                    class="@error('course_for_applicant') is-invalid @enderror"
                    value="{{ $educational_form->course_for_applicant }}"
                    disabled
                />
            </div>

            @error('course_for_applicant')
            <div class="alert alert-danger">Field cannot left empty</div>
            @enderror
        <!-- --- form option --- -->

            <!-- --- form option --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
                >Degree that will be conferred after completion of the course
                    *</label
                >
                <input
                    type="text"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Enter Your Answer"
                    name="degree_after_completion"
                    class="@error('degree_after_completion') is-invalid @enderror"
                    value="{{ $educational_form->degree_after_completion }}"
                    disabled
                />
            </div>

            @error('degree_after_completion')
            <div class="alert alert-danger">Field cannot left empty</div>
            @enderror
        <!-- --- form option --- -->

            <!-- --- form option --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
                >Duration of the course (in years) *</label
                >
                <input
                    type="text"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Enter Your Answer"
                    name="duration_of_course"
                    class="@error('duration_of_course') is-invalid @enderror"
                    value="{{ $educational_form->duration_of_course }}"
                    disabled
                />
            </div>

            @error('duration_of_course')
            <div class="alert alert-danger">Field cannot left empty</div>
            @enderror
        <!-- --- form option --- -->

            <!-- --- form option --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
                >Date of commencement of the course *</label
                >
                <input
                    type="date"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Enter Your Answer"
                    name="date_of_commencement"
                    class="@error('date_of_commencement') is-invalid @enderror"
                    value="{{ $educational_form->date_of_commencement }}"
                    disabled
                />
            </div>

            @error('date_of_commencement')
            <div class="alert alert-danger">Field cannot left empty</div>
        @enderror
        <!-- --- form option --- -->

            <!-- --- form option --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
                >Is the applicant a full-time student? *</label
                >
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="applicant_status"
                        id="applicant_yes"
                        value="Yes"
                        @if($educational_form->applicant_status == "Yes") checked @else disabled @endif

                    />
                    <label class="form-check-label" for="exampleRadios1">
                        Yes
                    </label>
                </div>

                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="applicant_status"
                        id="applicant_no"
                        value="No"
                        @if($educational_form->applicant_status == "No") checked @else disabled @endif
                    />
                    <label class="form-check-label" for="exampleRadios2">
                        No
                    </label>
                </div>
            </div>
            <!-- --- form option --- -->

            <!-- --- form option --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
                >If the applicant is a part-time student, then how long in week
                    is the working hours? *</label
                >
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="working_hours"
                        id="less_1"
                        value="10 or less"
                        @if($educational_form->working_hours == "10 or less") checked @else disabled @endif
                    />
                    <label class="form-check-label" for="exampleRadios1">
                        10 or less
                    </label>
                </div>

                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="working_hours"
                        id="less_2"
                        value="10 - 30"
                        @if($educational_form->working_hours == "10 - 30") checked @else disabled @endif

                    />
                    <label class="form-check-label" for="exampleRadios1">
                        10 - 30
                    </label>
                </div>

                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="working_hours"
                        id="less_3"
                        value="more than 30"
                        @if($educational_form->working_hours == "more than 30") checked @else disabled @endif

                    />
                    <label class="form-check-label" for="exampleRadios1">
                        more than 30
                    </label>
                </div>

                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="working_hours"
                        id="less_4"
                        value="Not applicable"
                        @if($educational_form->working_hours == "Not applicable") checked @else disabled @endif

                    />
                    <label class="form-check-label" for="exampleRadios1">
                        Not applicable
                    </label>
                </div>
            </div>
            <!-- --- form option --- -->

            <!-- --- form option --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
                >Is the applicant receiving scholarship from the
                    university/education institution? *</label
                >
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="applicant_receiving"
                        id="institution_1"
                        value="Yes"
                        @if($educational_form->applicant_receiving == "Yes") checked @else disabled @endif
                    />
                    <label class="form-check-label" for="exampleRadios1">
                        Yes
                    </label>
                </div>

                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="applicant-receiving"
                        id="institution_2"
                        value="No"
                        @if($educational_form->applicant_receiving == "No") checked @else disabled @endif

                    />
                    <label class="form-check-label" for="exampleRadios2">
                        No
                    </label>
                </div>
            </div>
            <!-- --- form option --- -->

            <!-- --- form option --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
                >Amount of scholarship in US dollar per year *</label
                >
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="scholarship_amount"
                        id="dollar_1"
                        value="Equal or less than USD 12000"
                        @if($educational_form->scholarship_amount == "Equal or less than USD 12000") checked
                        @else disabled @endif

                    />
                    <label class="form-check-label" for="exampleRadios1">
                        Equal or less than USD 12000
                    </label>
                </div>

                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="scholarship_amount"
                        id="dollar_2"
                        value="More than USD 12000"
                        @if($educational_form->scholarship_amount == "More than USD 12000") checked
                        @else disabled @endif

                    />
                    <label class="form-check-label" for="exampleRadios1">
                        More than USD 12000
                    </label>
                </div>

                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="scholarship_amount"
                        id="dollar_3"
                        value="Not applicable"
                        @if($educational_form->scholarship_amount == "Not applicable") checked @else disabled @endif

                    />
                    <label class="form-check-label" for="exampleRadios1">
                        Not applicable
                    </label>
                </div>
            </div>
            <!-- --- form option --- -->

            <!-- --- form option --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
                >Has the applicant already finished her/his course at the time
                    of this application *</label
                >
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="finished_status"
                        id="applicant_1"
                        value="yes"
                        @if($educational_form->finished_status == "yes") checked @else disabled @endif

                    />
                    <label class="form-check-label" for="exampleRadios1">
                        yes
                    </label>
                </div>

                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="finished_status"
                        id="applicant_2"
                        value="Course ongoing"
                        @if($educational_form->finished_status == "Course ongoing") checked @else disabled @endif

                    />
                    <label class="form-check-label" for="exampleRadios1">
                        Course ongoing
                    </label>
                </div>

                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="finished_status"
                        id="applicant_3"
                        value="Course has not started yet"
                        @if($educational_form->finished_status == "Course has not started yet") checked
                        @else disabled @endif
                    />
                    <label class="form-check-label" for="exampleRadios1">
                        Course has not started yet
                    </label>
                </div>
            </div>
            <!-- --- form option --- -->

            <!-- --- form option --- -->

            <div class="form-group submit-button-css form-button-margin-padding">
                {{--                    <a href="">--}}
                {{--                        <button type="submit" class="btn btn-secondary">Prev</button>--}}
                {{--                    </a>--}}

                <a href="{{ route('travel-verification',$educational_form->user_id) }}">
                    <button type="submit" class="btn btn-primary">Next</button>
                </a>
            </div>
            <!-- --- form option --- -->
        </div>
        <!-- ------------------------------------------------------- end - form -->
    </div>
</div>
</body>

<script
    src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"
></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"
></script>
<script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"
></script>
</html>
