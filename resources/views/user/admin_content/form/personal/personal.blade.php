<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal information</title>
    <link rel="stylesheet" href="{{ asset('assets/css/form.css') }}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    {{--  -------------------------------- phone number ----------------------------  --}}

    <link rel="stylesheet" href="assets/build/css/intlTelInput.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    {{--  -------------------------------- phone number ----------------------------  --}}

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
                <img src="{{ asset('assets/images/personal.png') }}" alt="" class="img-fluid" unselectable="on">
            </div>
            <br>

            {{-- ------------------------------- form tab system ----------------------------- --}}

            <x-form-tab></x-form-tab>

            {{-- -------------------------------- form tab system -------------------------- --}}

            <div class="form-display-flex">
                <p>Personal Information</p>
                <div>
                    <button class="btn btn-secondary savedState" type="button" onclick="saveDraft()">Save as
                        draft</button>
                    <a class="btn btn-secondary" type="button" style="color: white" href="{{ route('home') }}">Return
                        to
                        dashboard</a>
                </div>
            </div>
            <hr />

            <!-- --------------------------- form -------------------------------- -->
            <div class="form">
                <form action="{{ route('personal-form.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <!-- --- form option --- -->
                    <div class="form-group">
                        <label for="">Applicant's first name (as in passport) *</label>
                        <input type="text" class="form-control" id="first_name" aria-describedby="emailHelp"
                            placeholder="Enter Your Answer" name="fname"
                            class="@error('fname') is-invalid @enderror" />

                    </div>

                    @error('fname')
                        <div class="alert alert-danger">First name required</div>
                    @enderror
                    <!-- --- form option --- -->

                    <!-- --- form option --- -->
                    <div class="form-group">
                        <label for="">Applicant's last name (as in passport) *</label>
                        <input type="text" class="form-control" id="last_name" aria-describedby="emailHelp"
                            placeholder="Enter Your Answer" name="lname"
                            class="@error('lname') is-invalid @enderror" />
                    </div>

                    @error('lname')
                        <div class="alert alert-danger">Last name required</div>
                    @enderror
                    <!-- --- form option --- -->

                    <!-- --- form option --- -->
                    <div class="form-group">
                        <label for="">Applicant's Image</label>
                        <input type="file" class="form-control-file" id="image" name="image"
                            class="@error('image') is-invalid @enderror" />
                    </div>

                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <!-- --- form option --- -->

                    {{-- ---------------------------- Gender ------------------------------- --}}

                    <!-- --- form option --- -->
                    <div class="form-group">
                        <label for="">Gender *</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="male"
                                value="male" />
                            <label class="form-check-label" for="exampleRadios1">
                                Male
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="female"
                                value="female" />
                            <label class="form-check-label" for="exampleRadios1">
                                Female
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="other"
                                value="other" />
                            <label class="form-check-label" for="exampleRadios1">
                                Other
                            </label>
                        </div>


                    </div>
                    <!-- --- form option --- -->


                    {{-- ---------------------------- Gender ------------------------------- --}}


                    <!-- ---------------------------- digital signature image ------------------------------ -->
                    <div class="form-group">
                        <label for="">Digital Signature Image [ 300px * 300px ] *</label>
                        <input type="file" class="form-control-file" id="image" name="digital_signature_image"
                            class="@error('digital_signature_image') is-invalid @enderror" />
                    </div>

                    @error('digital_signature_image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <!-- -------------------------------- digital signature image ---------------------------- -->

                    <!-- ---------------------------- passport image ------------------------------ -->
                    <div class="form-group">
                        <label for="">Passport Image / PDF *</label>
                        <input type="file" class="form-control-file" id="image" name="passport_image"
                            class="@error('passport_image') is-invalid @enderror" />
                    </div>

                    @error('passport_image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <!-- -------------------------------- passport image ---------------------------- -->


                    <!-- ------------------------ nid image ------------------------------ -->
                    <div class="form-group">
                        <label for="">NID Image / PDF *</label>
                        <input type="file" class="form-control-file" id="image" name="nid_image"
                            class="@error('nid_image') is-invalid @enderror" />
                    </div>

                    @error('nid_image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <!-- -------------- nid image --------------------------------------------- -->


                    <!-- ------------------------ certification image ----------------------------- -->
                    <div class="form-group">
                        <label for="">Scholarship/Fellowship certificate Image / PDF *</label>
                        <input type="file" class="form-control-file" id="image" name="certification_image"
                            class="@error('certification_image') is-invalid @enderror" />
                    </div>

                    @error('certification_image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <!-- -------------- certification image --------------------------------------------- -->


                    <!-- --- form option --- -->
                    <div class="form-group">
                        <label for="">Applicant's date of birth *</label>
                        <input type="date" class="form-control" id="dob" aria-describedby="emailHelp"
                            placeholder="Enter Your Answer" name="dob"
                            max='{{ Carbon\Carbon::now()->subYear(10)->toDateString() }}'
                            class="@error('dob') is-invalid @enderror" />
                    </div>

                    @error('dob')
                        <div class="alert alert-danger">The date of birth field cannot left empty</div>
                    @enderror
                    <!-- --- form option --- -->

                    <!-- --- form option --- -->
                    <div class="form-group">
                        <label for="">Applicant's mother's name (as in passport) *</label>
                        <input type="text" class="form-control" id="mothers_name" aria-describedby="emailHelp"
                            placeholder="Enter Your Answer" name="mothers_name"
                            class="@error('mothers_name') is-invalid @enderror" />
                    </div>

                    @error('mothers_name')
                        <div class="alert alert-danger">Applicant's mother's name required</div>
                    @enderror
                    <!-- --- form option --- -->

                    <!-- --- form option --- -->
                    <div class="form-group">
                        <label for="">Applicant's mother's NID number *</label>
                        <input type="number" class="form-control" id="mothers_nid" placeholder="Enter Your Answer"
                            name="mothers_nid"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            maxlength="17" minlength="10" min="0"
                            class="@error('mothers_nid')
is-invalid
@enderror" />
                    </div>

                    @error('mothers_nid')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <!-- --- form option --- -->

                    <!-- --- form option --- -->
                    <div class="form-group">
                        <label for="">Details of mother's profession including name of office,
                            designation, phone and email *</label>
                        <input type="text" class="form-control" id="mothers_profession"
                            aria-describedby="emailHelp" placeholder="Enter Your Answer" name="mothers_profession"
                            class="@error('mothers_profession') is-invalid @enderror" />
                    </div>

                    @error('mothers_profession')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <!-- --- form option --- -->

                    <!-- --- form option --- -->
                    <div class="form-group">
                        <label for="">Mother's gross monthly income *</label>
                        <input type="number" class="form-control" id="mothers_gross_income"
                            aria-describedby="emailHelp" placeholder="Enter Your Answer" name="mothers_gross_income"
                            min="0" class="@error('mothers_gross_income') is-invalid @enderror" />
                    </div>

                    @error('mothers_gross_income')
                        <div class="alert alert-danger">Field cannot left empty</div>
                    @enderror
                    <!-- --- form option --- -->

                    <!-- --- form option --- -->
                    <div class="form-group">
                        <label for="">Applicant's father's name (as in passport) *</label>
                        <input type="text" class="form-control" id="fathers_name" aria-describedby="emailHelp"
                            placeholder="Enter Your Answer" name="fathers_name"
                            class="@error('fathers_name') is-invalid @enderror" />
                    </div>

                    @error('fathers_name')
                        <div class="alert alert-danger">Field cannot left empty</div>
                    @enderror
                    <!-- --- form option --- -->

                    <!-- --- form option --- -->
                    <div class="form-group">
                        <label for="">Details of father's profession including name of office,
                            designation, phone and email *</label>
                        <input type="text" class="form-control" id="fathers_profession"
                            aria-describedby="emailHelp" placeholder="Enter Your Answer" name="fathers_profession"
                            class="@error('fathers_profession') is-invalid @enderror" />
                    </div>

                    @error('fathers_profession')
                        <div class="alert alert-danger">Field cannot left empty</div>
                    @enderror
                    <!-- --- form option --- -->

                    <!-- --- form option --- -->
                    <div class="form-group">
                        <label for="">Applicant's father's gross monthly income *</label>
                        <input type="number" class="form-control" id="fathers_gross_income"
                            aria-describedby="emailHelp" placeholder="Enter Your Answer" name="fathers_gross_income"
                            min="0" class="@error('fathers_gross_income') is-invalid @enderror" />
                    </div>

                    @error('fathers_gross_income')
                        <div class="alert alert-danger">Field cannot left empty</div>
                    @enderror
                    <!-- --- form option --- -->

                    <!-- --- form option --- -->
                    <div class="form-group">
                        <label for="">Applicant's contact address in Bangladesh *</label>
                        <input type="text" class="form-control" id="contact_address" aria-describedby="emailHelp"
                            placeholder="Enter Your Answer" name="contact_address"
                            class="@error('contact_address') is-invalid @enderror" />
                    </div>

                    @error('contact_address')
                        <div class="alert alert-danger">Field cannot left empty</div>
                    @enderror
                    <!-- --- form option --- -->

                    <!-- --- form option --- -->
                    <div class="form-group">
                        <label for="">Applicant's permanent address in Bangladesh (as in passport)
                            *</label>
                        <input type="text" class="form-control" id="permanent_address"
                            aria-describedby="emailHelp" placeholder="Enter Your Answer" name="permanent_address"
                            class="@error('permanent_address') is-invalid @enderror" />
                    </div>

                    @error('permanent_address')
                        <div class="alert alert-danger">Field cannot left empty</div>
                    @enderror
                    <!-- --- form option --- -->

                    <div class="form-group">
                        <label for="">Applicant's current phone number (with country code and city
                            code)*</label>
                        <br>
                        <input id="phone" name="phone_number" type="tel" class="form-control" />

                    </div>

                    @error('phone_number')
                        <div class="alert alert-danger">Field cannot left empty</div>
                    @enderror
                    <!-- --- form option --- -->

                    <br>
                    <p>* please save data before submit</p>

                    <!-- --- form option --- -->

                    <div class="form-group submit-button-css">
                        <input type="submit" class="btn btn-success" id="exampleInputEmail1"
                            aria-describedby="emailHelp" />
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

{{-- ----------------------------------  phone number js  -------------------------------------- --}}

<script src="assets/build/js/intlTelInput.js"></script>
<script>
    // Vanilla Javascript
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
        // options here
    });

    $(document).ready(function() {
        $(".iti__flag-container").click(function() {
            var countryCode = $(".iti__selected-flag").attr("title");
            var countryCode = countryCode.replace(/[^0-9]/g, "");
            $("#phone").val("");
            $("#phone").val("+" + countryCode + " " + $("#phone").val());
        });
    });
</script>

{{-- ----------------------------------  phone number js  -------------------------------------- --}}

{{-- ------------------------------------- local storage -------------------------------------- --}}

<script>
    let first_name = document.querySelector("#first_name");
    let last_name = document.querySelector("#last_name");
    let dob = document.querySelector("#dob");
    let mothers_name = document.querySelector("#mothers_name");
    let mothers_nid = document.querySelector("#mothers_nid");
    let mothers_profession = document.querySelector("#mothers_profession");
    let mothers_gross_income = document.querySelector("#mothers_gross_income");
    let fathers_name = document.querySelector("#fathers_name");
    let fathers_profession = document.querySelector("#fathers_profession");
    let fathers_gross_income = document.querySelector("#fathers_gross_income");
    let contact_address = document.querySelector("#contact_address");
    let permanent_address = document.querySelector("#permanent_address");
    let phone_number = document.querySelector("#phone_number");

    first_name.value = localStorage.getItem('first_name');
    last_name.value = localStorage.getItem('last_name');
    dob.value = localStorage.getItem('dob');
    mothers_name.value = localStorage.getItem('mothers_name');
    mothers_nid.value = localStorage.getItem('mothers_nid');
    mothers_profession.value = localStorage.getItem('mothers_profession');
    mothers_gross_income.value = localStorage.getItem('mothers_gross_income');
    fathers_name.value = localStorage.getItem('fathers_name');
    fathers_profession.value = localStorage.getItem('fathers_profession');
    fathers_gross_income.value = localStorage.getItem('fathers_gross_income');
    contact_address.value = localStorage.getItem('contact_address');
    permanent_address.value = localStorage.getItem('permanent_address');
    // phone_number.value = localStorage.getItem('phone_number');

    // current phone number with country code

    // localStorage.getItem('phone_number') == null ? phone_number.value = +88 : "";

    // current phone number with country code


    function saveDraft() {

        document.querySelector(".savedState").style.backgroundColor = "green";
        document.querySelector(".savedState").innerHTML = "Saved";

        localStorage.setItem('first_name', first_name.value);
        localStorage.setItem('last_name', last_name.value);
        localStorage.setItem('dob', dob.value);
        localStorage.setItem('mothers_name', mothers_name.value);
        localStorage.setItem('mothers_nid', mothers_nid.value);
        localStorage.setItem('mothers_profession', mothers_profession.value);
        localStorage.setItem('mothers_gross_income', mothers_gross_income.value);
        localStorage.setItem('fathers_name', fathers_name.value);
        localStorage.setItem('fathers_profession', fathers_profession.value);
        localStorage.setItem('fathers_gross_income', fathers_gross_income.value);
        localStorage.setItem('contact_address', contact_address.value);
        localStorage.setItem('permanent_address', permanent_address.value);
        localStorage.setItem('phone_number', phone_number.value);
    }


    {{--  --------------------- gender * ------------------------  --}}

    let male = document.querySelector("#male");
    let female = document.querySelector("#female");
    let other = document.querySelector("#other");

    male.addEventListener('click', function(e) {
        localStorage.setItem('male', "yes");
        localStorage.setItem('female', "no");
        localStorage.setItem('other', "no");
    });

    female.addEventListener('click', function() {
        localStorage.setItem('male', "no");
        localStorage.setItem('female', "yes");
        localStorage.setItem('other', "no");
    });

    other.addEventListener('click', function() {
        localStorage.setItem('male', "no");
        localStorage.setItem('female', "no");
        localStorage.setItem('other', "yes");
    });

    if (localStorage.getItem('male') == "yes") {
        male.checked = true;
    } else if (localStorage.getItem('female') == "yes") {
        female.checked = true;
    } else if (localStorage.getItem('other') == "yes") {
        other.checked = true;
    }


    {{--  --------------------- gender * ------------------------  --}}
</script>


{{-- -------------------------------------------------------------------- end -  local storage  --}}


<script src="{{ asset('assets/js/form/personal.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

</html>
