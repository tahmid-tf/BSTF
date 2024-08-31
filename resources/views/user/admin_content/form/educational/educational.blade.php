<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Educational Information</title>
    <link rel="stylesheet" href="assets/css/form.css"/>
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
            <div>
                <button class="btn btn-secondary savedState" type="button" onclick="saveData()">Save Data</button>
                <a class="btn btn-secondary" type="button" style="color: white" href="{{ route('home') }}">Return to dashboard</a>
            </div>
        </div>
        <hr/>

        <!-- --------------------------- form -------------------------------- -->
        <div class="form">
            <form action="{{ route('educational-form.store') }}" method="POST">
            {{ csrf_field() }}
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
{{--                        min="0.00"--}}
{{--                        max="5.00"--}}
                        class="@error('ssc_exam_result') is-invalid @enderror"
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
                        type="number"
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

                    />
                </div>

                @error('bachelors_degree_result')
                <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
            <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >Country to which applicant is plannig to study/studying *</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="study_country"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="study_country"
                        class="@error('study_country') is-invalid @enderror"
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
                    />
                </div>

                @error('name_of_university')
                <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
            <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >Postal address of university, educational institution in which
                        applicant is studying *</label
                    >
                    <textarea name="portal_address_of_university" id="portal_address_of_university" cols="30" rows="10" name="portal_address_of_university" class="form-control @error('portal_address_of_university') is-invalid @enderror"></textarea>
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
                        />
                        <label class="form-check-label" for="exampleRadios1">
                            Course has not started yet
                        </label>
                    </div>
                </div>
                <!-- --- form option --- -->

                <!-- --- form option --- -->

                <br>
                <p>* please save data before submit</p>

                <div class="d-flex justify-content-sm-between">
                    <div class="form-group submit-button-css">

{{--                        <a href="{{ route('personal-form.edit', auth()->user()->id) }}">--}}
{{--                            <button type="button"--}}
{{--                                    class="btn btn-info"--}}
{{--                                    id=""--}}
{{--                                    aria-describedby="emailHelp"--}}
{{--                                    value="prev">prev--}}
{{--                            </button>--}}
{{--                        </a>--}}

                    </div>


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

{{-- ----------------------------- checking localstorage exists or not --------------------- --}}

<script>
    // if (window.localStorage.length == 0){
    //     document.querySelector(".savedState").style.backgroundColor = "gray";
    // }else {
    //     document.querySelector(".savedState").style.backgroundColor = "green";
    //     document.querySelector(".savedState").innerHTML = "Saved";
    // }
</script>

{{-- ----------------------------- checking localstorage exists or not --------------------- --}}

{{-- ------------------------------------- local storage ---------------------------------- --}}

<script>
    let ssc_exam_result = document.querySelector("#ssc_exam_result");
    let ssc_passing_year = document.querySelector("#ssc_passing_year");
    let hsc_exam_result = document.querySelector("#hsc_exam_result");
    let hsc_passing_year = document.querySelector("#hsc_passing_year");
    let bachelors_degree_result = document.querySelector("#bachelors_degree_result");
    let study_country = document.querySelector("#study_country");
    let name_of_university = document.querySelector("#name_of_university");
    let portal_address_of_university = document.querySelector("#portal_address_of_university");
    let phone_number_of_university = document.querySelector("#phone_number_of_university");
    let email_address_of_university = document.querySelector("#email_address_of_university");
    let course_for_applicant = document.querySelector("#course_for_applicant");
    let degree_after_completion = document.querySelector("#degree_after_completion");
    let duration_of_course = document.querySelector("#duration_of_course");
    let date_of_commencement = document.querySelector("#date_of_commencement");


    ssc_exam_result.value = localStorage.getItem('ssc_exam_result');
    ssc_passing_year.value = localStorage.getItem('ssc_passing_year');
    hsc_exam_result.value = localStorage.getItem('hsc_exam_result');
    hsc_passing_year.value = localStorage.getItem('hsc_passing_year');
    bachelors_degree_result.value = localStorage.getItem('bachelors_degree_result');
    study_country.value = localStorage.getItem('study_country');
    portal_address_of_university.value = localStorage.getItem('portal_address_of_university');
    name_of_university.value = localStorage.getItem('name_of_university');
    phone_number_of_university.value = localStorage.getItem('phone_number_of_university');
    email_address_of_university.value = localStorage.getItem('email_address_of_university');
    course_for_applicant.value = localStorage.getItem('course_for_applicant');
    degree_after_completion.value = localStorage.getItem('degree_after_completion');
    duration_of_course.value = localStorage.getItem('duration_of_course');
    date_of_commencement.value = localStorage.getItem('date_of_commencement');


    // ------------------------------ ssc result combining to hsc -------------------------

    let ssc = [];
    let ssc_join = "";

    ssc_passing_year.addEventListener('keydown', function (e) {
        ssc.push(e.key);
        if (e.key == "Backspace") {
            ssc.pop();
            ssc.pop();
        }
        ssc_join = ssc.join("");

        localStorage.getItem('hsc_passing_year') == null ? hsc_passing_year.value = parseInt(ssc_join) + 2 : "";
    });

    // ------------------------------ ssc result combining to hsc -------------------------

    function saveData() {

        document.querySelector(".savedState").style.backgroundColor = "green";
        document.querySelector(".savedState").innerHTML = "Saved";

        localStorage.setItem('ssc_exam_result', ssc_exam_result.value);
        localStorage.setItem('ssc_passing_year', ssc_passing_year.value);
        localStorage.setItem('hsc_exam_result', hsc_exam_result.value);
        localStorage.setItem('hsc_passing_year', hsc_passing_year.value);
        localStorage.setItem('bachelors_degree_result', bachelors_degree_result.value);
        localStorage.setItem('study_country', study_country.value);
        localStorage.setItem('portal_address_of_university', portal_address_of_university.value);
        localStorage.setItem('name_of_university', name_of_university.value);
        localStorage.setItem('phone_number_of_university', phone_number_of_university.value);
        localStorage.setItem('email_address_of_university', email_address_of_university.value);
        localStorage.setItem('course_for_applicant', course_for_applicant.value);
        localStorage.setItem('degree_after_completion', degree_after_completion.value);
        localStorage.setItem('duration_of_course', duration_of_course.value);
        localStorage.setItem('date_of_commencement', date_of_commencement.value);

    }

    {{--  --------------------------------------- Is the applicant a full-time student? * -------------------------------  --}}

    let applicant_yes = document.querySelector("#applicant_yes");
    let applicant_no = document.querySelector("#applicant_no");

    applicant_yes.addEventListener('click', function (e) {
        localStorage.setItem('applicant-yes', "yes");
    });

    applicant_no.addEventListener('click', function () {
        localStorage.setItem('applicant-yes', "no");
    });

    if (localStorage.getItem('applicant-yes') == "yes") {
        applicant_yes.checked = true;
    } else if (localStorage.getItem('applicant-yes') == "no") {
        applicant_no.checked = true;
    }

    {{--  --------------------------------------- Is the applicant a full-time student? * -------------------------------  --}}

    {{--  ------------------------------------------- Last academic degree obtained * -----------------------------------  --}}

    let bachelors = document.querySelector("#bachelors");
    let masters = document.querySelector("#masters");
    let phd = document.querySelector("#phd");
    let hsc = document.querySelector("#hsc");
    let diploma = document.querySelector("#diploma");
    let olevel = document.querySelector("#olevel");
    let other = document.querySelector("#other");

    bachelors.addEventListener('click', function () {
        localStorage.setItem('bachelors', "yes");
        localStorage.setItem('masters', "no");
        localStorage.setItem('phd', "no");
        localStorage.setItem('hsc', "no");
        localStorage.setItem('diploma','no');
        localStorage.setItem('olevel','no');
        localStorage.setItem('other','no');
    });

    masters.addEventListener('click', function () {
        localStorage.setItem('bachelors', "no");
        localStorage.setItem('masters', "yes");
        localStorage.setItem('phd', "no");
        localStorage.setItem('hsc', "no");
        localStorage.setItem('diploma','no');
        localStorage.setItem('olevel','no');
        localStorage.setItem('other','no');
    });

    phd.addEventListener('click', function () {
        localStorage.setItem('bachelors', "no");
        localStorage.setItem('masters', "no");
        localStorage.setItem('phd', "yes");
        localStorage.setItem('hsc', "no");
        localStorage.setItem('diploma','no');
        localStorage.setItem('olevel','no');
        localStorage.setItem('other','no');
    });

    diploma.addEventListener('click', function (){
        localStorage.setItem('bachelors', "no");
        localStorage.setItem('masters', "no");
        localStorage.setItem('phd', "no");
        localStorage.setItem('hsc', "no");
        localStorage.setItem('diploma','yes');
        localStorage.setItem('olevel','no');
        localStorage.setItem('other','no');
    });

    olevel.addEventListener('click', function (){
        localStorage.setItem('bachelors', "no");
        localStorage.setItem('masters', "no");
        localStorage.setItem('phd', "no");
        localStorage.setItem('hsc', "no");
        localStorage.setItem('diploma','no');
        localStorage.setItem('olevel','yes');
        localStorage.setItem('other','no');
    });

    hsc.addEventListener('click', function (){
        localStorage.setItem('bachelors', "no");
        localStorage.setItem('masters', "no");
        localStorage.setItem('phd', "no");
        localStorage.setItem('hsc', "yes");
        localStorage.setItem('diploma','no');
        localStorage.setItem('olevel','no');
        localStorage.setItem('other','no');
    });

    other.addEventListener('click', function (){
        localStorage.setItem('bachelors', "no");
        localStorage.setItem('masters', "no");
        localStorage.setItem('phd', "no");
        localStorage.setItem('hsc', "no");
        localStorage.setItem('diploma','no');
        localStorage.setItem('olevel','no');
        localStorage.setItem('other','yes');
    });



    if (localStorage.getItem('bachelors') == "yes") {
        bachelors.checked = true;
    } else if (localStorage.getItem('masters') == "yes") {
        masters.checked = true;
    } else if (localStorage.getItem('phd') == "yes") {
        phd.checked = true;
    } else if (localStorage.getItem('hsc') == "yes") {
        hsc.checked = true;
    }else if (localStorage.getItem('diploma') == "yes") {
        diploma.checked = true;
    }else if (localStorage.getItem('olevel') == "yes") {
        olevel.checked = true;
    }else if (localStorage.getItem('other') == "yes") {
        other.checked = true;
    }

    {{--  -------------------------------------------- Last academic degree obtained * ----------------------------------  --}}

    {{--  --------------------------------------- If the applicant is a part-time student, then how long in week is the working hours? * -------------------------------  --}}

    let less_1 = document.querySelector("#less_1");
    let less_2 = document.querySelector("#less_2");
    let less_3 = document.querySelector("#less_3");
    let less_4 = document.querySelector("#less_4");

    less_1.addEventListener('click', function () {
        localStorage.setItem('less_1', "yes");
        localStorage.setItem('less_2', "no");
        localStorage.setItem('less_3', "no");
        localStorage.setItem('less_4', "no");
    });

    less_2.addEventListener('click', function () {
        localStorage.setItem('less_1', "no");
        localStorage.setItem('less_2', "yes");
        localStorage.setItem('less_3', "no");
        localStorage.setItem('less_4', "no");
    });


    less_3.addEventListener('click', function () {
        localStorage.setItem('less_1', "no");
        localStorage.setItem('less_2', "no");
        localStorage.setItem('less_3', "yes");
        localStorage.setItem('less_4', "no");
    });

    less_4.addEventListener('click', function () {
        localStorage.setItem('less_1', "no");
        localStorage.setItem('less_2', "no");
        localStorage.setItem('less_3', "no");
        localStorage.setItem('less_4', "yes");
    });

    if (localStorage.getItem('less_1') == "yes") {
        less_1.checked = true;
    } else if (localStorage.getItem('less_2') == "yes") {
        less_2.checked = true;
    } else if (localStorage.getItem('less_3') == "yes") {
        less_3.checked = true;
    } else if (localStorage.getItem('less_4') == "yes") {
        less_4.checked = true;
    }

    {{--  --------------------------------------- If the applicant is a part-time student, then how long in week is the working hours? * -------------------------------  --}}

    {{--  --------------------- Is the applicant receiving scholarship from the university/education institution? * ------------------------  --}}

    let institution_1 = document.querySelector("#institution_1");
    let institution_2 = document.querySelector("#institution_2");

    institution_1.addEventListener('click', function (e) {
        localStorage.setItem('institution_1-yes', "yes");
    });

    institution_2.addEventListener('click', function () {
        localStorage.setItem('institution_1-yes', "no");
    });

    if (localStorage.getItem('institution_1-yes') == "yes") {
        institution_1.checked = true;
    } else if (localStorage.getItem('institution_1-yes') == "no") {
        institution_2.checked = true;
    }


    {{--  --------------------- Is the applicant receiving scholarship from the university/education institution? * ------------------------  --}}

    {{-- ------------------------------------ Amount of scholarship in US dollar per year ---------------------------   --}}

    let dollar_1 = document.querySelector("#dollar_1");
    let dollar_2 = document.querySelector("#dollar_2");
    let dollar_3 = document.querySelector("#dollar_3");

    dollar_1.addEventListener('click', function () {
        localStorage.setItem('dollar_1', "yes");
        localStorage.setItem('dollar_2', "no");
        localStorage.setItem('dollar_3', "no");
    });

    dollar_2.addEventListener('click', function () {
        localStorage.setItem('dollar_1', "no");
        localStorage.setItem('dollar_2', "yes");
        localStorage.setItem('dollar_3', "no");
    });

    dollar_3.addEventListener('click', function () {
        localStorage.setItem('dollar_1', "no");
        localStorage.setItem('dollar_2', "no");
        localStorage.setItem('dollar_3', "yes");
    });

    if (localStorage.getItem('dollar_1') == "yes") {
        dollar_1.checked = true;
    } else if (localStorage.getItem('dollar_2') == "yes") {
        dollar_2.checked = true;
    } else if (localStorage.getItem('dollar_3') == "yes") {
        dollar_3.checked = true;
    }

    {{-- ------------------------------------ Amount of scholarship in US dollar per year ---------------------------   --}}

    {{-- ------------------- Has the applicant already finished her/his course at the time of this application * --------------   --}}

    let applicant_1 = document.querySelector("#applicant_1");
    let applicant_2 = document.querySelector("#applicant_2");
    let applicant_3 = document.querySelector("#applicant_3");

    applicant_1.addEventListener('click', function () {
        localStorage.setItem('applicant_1', "yes");
        localStorage.setItem('applicant_2', "no");
        localStorage.setItem('applicant_3', "no");
    });

    applicant_2.addEventListener('click', function () {
        localStorage.setItem('applicant_1', "no");
        localStorage.setItem('applicant_2', "yes");
        localStorage.setItem('applicant_3', "no");
    });

    applicant_3.addEventListener('click', function () {
        localStorage.setItem('applicant_1', "no");
        localStorage.setItem('applicant_2', "no");
        localStorage.setItem('applicant_3', "yes");
    });

    if (localStorage.getItem('applicant_1') == "yes") {
        applicant_1.checked = true;
    } else if (localStorage.getItem('applicant_2') == "yes") {
        applicant_2.checked = true;
    } else if (localStorage.getItem('applicant_3') == "yes") {
        applicant_3.checked = true;
    }

    {{-- ------------------- Has the applicant already finished her/his course at the time of this application * --------------   --}}

</script>

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
