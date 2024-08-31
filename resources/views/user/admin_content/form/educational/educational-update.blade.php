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
        <div style="display: flex; justify-content: center">
            <img src="{{ asset('assets/images/educational.png') }}" alt="" class="img-fluid" unselectable="on">
        </div>
        <br>

        {{-- ------------------------------- form tab system ----------------------------- --}}

        <x-form-tab></x-form-tab>

        {{-- -------------------------------- form tab system -------------------------- --}}

        <div class="form-display-flex">
            <p>Educational Information</p>
{{--            <button class="btn btn-secondary" type="button" onclick="saveData()">Save Data</button>--}}
            <a class="btn btn-secondary" type="button" style="color: white" href="{{ route('home') }}">Return to dashboard</a>
        </div>
        <hr/>

        <!-- --------------------------- form -------------------------------- -->
        <div class="form">
            <form action="{{ route('educational-form.update',$educational->id) }}" method="POST">
            {{ csrf_field() }}
                @method('put')
            <!-- --- SSC or equivalent exam result --- -->
                <div class="form-group">
                    <label for=""
                    >SSC or equivalent exam result (write CGPA out of total or
                        division/class obtained) *</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="ssc_exam_result"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="ssc_exam_result"
{{--                        step="0.01"--}}
{{--                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"--}}
{{--                        maxlength="4"--}}
{{--                        min="0"--}}
{{--                        max="5.00"--}}
                        class="@error('ssc_exam_result') is-invalid @enderror"
                        value="{{ $educational->ssc_exam_result }}"
                    />
                </div>

                @error('ssc_exam_result')
                <div class="alert alert-danger">Field cannot left empty</div>
                @enderror

            <!-- --- SSC or equivalent exam result --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >SSC or equivalent exam passing year *</label
                    >
                    <input
                        type="number"
                        class="form-control"
                        id="ssc_passing_year"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="ssc_passing_year"
                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        maxlength="4"
                        min="0"
                        max="2019"
                        class="@error('ssc_passing_year') is-invalid @enderror"
                        value="{{ $educational->ssc_passing_year }}"

                    />
                </div>

                @error('ssc_passing_year')
                <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
            <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >HSC or equivalent exam result (write CGPA out of total or
                        division/class obtained) *</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="hsc_exam_result"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="hsc_exam_result"
{{--                        step="0.01"--}}
{{--                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"--}}
{{--                        maxlength="4"--}}
{{--                        min="0"--}}
{{--                        max="5"--}}
                        class="@error('hsc_exam_result') is-invalid @enderror"
                        value="{{ $educational->hsc_exam_result }}"
                    />
                </div>

                @error('hsc_exam_result')
                <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
            <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >HSC or equivalent exam passing year *</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="hsc_passing_year"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="hsc_passing_year"
                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        maxlength="4"
                        min="0"
                        max="2021"
                        class="@error('hsc_passing_year') is-invalid @enderror"
                        value="{{ $educational->hsc_passing_year }}"

                    />
                </div>

                @error('hsc_passing_year')
                <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
            <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >Last academic degree obtained *</label
                    >
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="academic_degree"
                            id="bachelors"
                            value="Bachelor's"
                            @if($educational->academic_degree == "Bachelor's") checked @endif
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
                            @if($educational->academic_degree == "Master's") checked @endif

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
                            @if($educational->academic_degree == "PhD") checked @endif
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
                            @if($educational->academic_degree == "Diploma") checked @endif
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
                            @if($educational->academic_degree == "HSC") checked @endif
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
                            @if($educational->academic_degree == "O level") checked @endif
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
                            @if($educational->academic_degree == "Other") checked @endif
                        />
                        <label class="form-check-label" for="exampleRadios2">
                            Other
                        </label>
                    </div>

                </div>
                <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >Result of bachelor's degree (write CGPA or division/class OR
                        write "not applicable" if not done yet) *</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="bachelors_degree_result"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="bachelors_degree_result"
                        class="@error('bachelors_degree_result') is-invalid @enderror"
                        value="{{ $educational->bachelors_degree_result }}"
                    />
                </div>

                @error('bachelors_degree_result')
                <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
            <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >Country to which applicant is plannisng to study/studying *</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="study_country"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="study_country"
                        class="@error('study_country') is-invalid @enderror"
                        value="{{ $educational->study_country }}"

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
                        value="{{ $educational->name_of_university }}"
                    />
                </div>

                @error('name_of_university')
                <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
            <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >Postal address of university/educational institution in which
                        applicant is studying *</label
                    >
{{--                    <input--}}
{{--                        type="text"--}}
{{--                        class="form-control"--}}
{{--                        id="portal_address_of_university"--}}
{{--                        aria-describedby="emailHelp"--}}
{{--                        placeholder="Enter Your Answer"--}}
{{--                        name="portal_address_of_university"--}}
{{--                        class="@error('portal_address_of_university') is-invalid @enderror"--}}
{{--                        value="{{ $educational->portal_address_of_university }}"--}}
{{--                    />--}}

                    <textarea name="portal_address_of_university" id="portal_address_of_university" cols="30" rows="10" name="portal_address_of_university" class="form-control @error('portal_address_of_university') is-invalid @enderror">{{ $educational->portal_address_of_university }}</textarea>

                </div>

                @error('portal_address_of_university')
                <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
            <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >Phone number of university/educational institution (with
                        country and city code) *</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="phone_number_of_university"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="phone_number_of_university"
                        class="@error('phone_number_of_university') is-invalid @enderror"
                        value="{{ $educational->phone_number_of_university }}"
                    />
                </div>

                @error('phone_number_of_university')
                <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
            <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >Email address of university/educational institution *</label
                    >
                    <input
                        type="email"
                        class="form-control"
                        id="email_address_of_university"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="email_address_of_university"
                        class="@error('email_address_of_university') is-invalid @enderror"
                        value="{{ $educational->email_address_of_university }}"
                    />
                </div>

                @error('email_address_of_university')
                <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
            <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >Course in which applicant is studying/planning to study
                        *</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="course_for_applicant"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="course_for_applicant"
                        class="@error('course_for_applicant') is-invalid @enderror"
                        value="{{ $educational->course_for_applicant }}"
                    />
                </div>

                @error('course_for_applicant')
                <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
            <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >Degree that will be conferred after completion of the course
                        *</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="degree_after_completion"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="degree_after_completion"
                        class="@error('degree_after_completion') is-invalid @enderror"
                        value="{{ $educational->degree_after_completion }}"
                    />
                </div>

                @error('degree_after_completion')
                <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
            <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >Duration of the course (in years) *</label
                    >
                    <input
                        type="number"
                        class="form-control"
                        id="duration_of_course"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="duration_of_course"
                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        maxlength="4"
                        min="0"
                        class="@error('duration_of_course') is-invalid @enderror"
                        value="{{ $educational->duration_of_course }}"

                    />
                </div>

                @error('duration_of_course')
                <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
            <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >Date of commencement of the course *</label
                    >
                    <input
                        type="date"
                        class="form-control"
                        id="date_of_commencement"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="date_of_commencement"
                        class="@error('date_of_commencement') is-invalid @enderror"
                        value="{{ $educational->date_of_commencement }}"

                    />
                </div>

                @error('date_of_commencement')
                <div class="alert alert-danger">Field cannot left empty</div>
            @enderror
            <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >Is the applicant a full-time student? *</label
                    >
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="applicant_status"
                            id="applicant_yes"
                            value="Yes"
                            @if($educational->applicant_status == "Yes") checked @endif
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
                            @if($educational->applicant_status == "No") checked @endif
                        />
                        <label class="form-check-label" for="exampleRadios2">
                            No
                        </label>
                    </div>
                </div>
                <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
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
                            @if($educational->working_hours == "10 or less") checked @endif
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
                            @if($educational->working_hours == "10 - 30") checked @endif

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
                            @if($educational->working_hours == "more than 30") checked @endif
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
                            @if($educational->working_hours == "Not applicable") checked @endif
                        />
                        <label class="form-check-label" for="exampleRadios1">
                            Not applicable
                        </label>
                    </div>
                </div>
                <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
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
                            @if($educational->applicant_receiving == "Yes") checked @endif

                        />
                        <label class="form-check-label" for="exampleRadios1">
                            Yes
                        </label>
                    </div>

                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="applicant_receiving"
                            id="institution_2"
                            value="No"
                            @if($educational->applicant_receiving == "No") checked @endif

                        />
                        <label class="form-check-label" for="exampleRadios2">
                            No
                        </label>
                    </div>
                </div>
                <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >Amount of scholarship in US dollar per year *</label
                    >
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="scholarship_amount"
                            id="dollar_1"
                            value="Equal or less than USD 12000"
                            @if($educational->scholarship_amount == "Equal or less than USD 12000") checked @endif
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
                            @if($educational->scholarship_amount == "More than USD 12000") checked @endif
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
                            @if($educational->scholarship_amount == "Not applicable") checked @endif
                        />
                        <label class="form-check-label" for="exampleRadios1">
                            Not applicable
                        </label>
                    </div>
                </div>
                <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
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
                            @if($educational->finished_status == "yes") checked @endif
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
                            @if($educational->finished_status == "Course ongoing") checked @endif
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
                            @if($educational->finished_status == "Course has not started yet") checked @endif
                        />
                        <label class="form-check-label" for="exampleRadios1">
                            Course has not started yet
                        </label>
                    </div>
                </div>
                <!-- --- form option --- -->

                <!-- --- form option --- -->

                <div class="d-flex justify-content-sm-between">

                    <div class="form-group submit-button-css">
                        <input
                            type="submit"
                            class="btn btn-success"
                            id=""
                            aria-describedby="emailHelp"
                            value="Next"
                        />
                    </div>
                </div>
                <!-- --- form option --- -->
            </form>
        </div>
        <!-- ------------------------------------------------------- end - form -->
    </div>
</div>
</body>

{{-- ------------------------------------- local storage ---------------------------------- --}}

{{-- ----------------------------------------------------------------- end - local storage  --}}

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
