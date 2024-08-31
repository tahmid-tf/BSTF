<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Personal information</title>
    <link rel="stylesheet" href="{{ asset('assets/css/form.css') }}"/>
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    />

    {{--  -------------------------------- phone number ----------------------------  --}}

    <link rel="stylesheet" href="assets/build/css/intlTelInput.css"/>
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
            {{--            <button class="btn btn-secondary savedState" type="button" onclick="saveDraft()">Save Data</button>--}}
            <a class="btn btn-secondary" type="button" style="color: white" href="{{ route('home') }}">Return to
                dashboard</a>
        </div>

        <hr/>


        <!-- --------------------------- form -------------------------------- -->
        <div class="form">
            <form action="{{ route('personal-form.update',$personal->id) }}" method="POST"
                  enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('put')
            <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >Applicant's first name (as in passport) *</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="first_name"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="fname"
                        class="@error('fname') is-invalid @enderror"
                        value="{{ $personal->fname }}"
                    />

                </div>

                @error('fname')
                <div class="alert alert-danger">First name required</div>
                @enderror
            <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >Applicant's last name (as in passport) *</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="last_name"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="lname"
                        class="@error('lname') is-invalid @enderror"
                        value="{{ $personal->lname }}"
                    />
                </div>

                @error('lname')
                <div class="alert alert-danger">Last name required</div>
                @enderror
            <!-- --- form option --- -->

                <!-- --- form option --- -->

                <div class="form-group">
                    <label for="exampleFormControlFile1">Applicant's Image</label><br>

                    <img src="{{asset('storage/'.$personal->image) }}" alt="No image"
                    style="width: 100px; height: 100px">
                </div>


                {{--                <a href="{{  asset('storage/'.$personal->image) }}">defded</a>--}}

                <div class="form-group">
                    <label for="">Change Image ( if needed )</label>
                    <input
                        type="file"
                        class="form-control-file"
                        id="image"
                        name="image"
                        class="@error('image') is-invalid @enderror"
                    />
                </div>

                {{--                @error('image')--}}
                {{--                <div class="alert alert-danger">{{ $message }}</div>--}}
                {{--                @enderror--}}
            <!-- --- form option --- -->

                {{-- ---------------------------- Gender ------------------------------- --}}

            <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >Gender *</label
                    >
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="gender"
                            id="male"
                            value="male"
                            @if($personal->gender == "male") checked @endif
                        />
                        <label class="form-check-label" for="exampleRadios1">
                            Male
                        </label>
                    </div>

                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="gender"
                            id="female"
                            value="female"
                            @if($personal->gender == "female") checked @endif
                        />
                        <label class="form-check-label" for="exampleRadios1">
                            Female
                        </label>
                    </div>

                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="gender"
                            id="other"
                            value="other"
                            @if($personal->gender == "other") checked @endif
                        />
                        <label class="form-check-label" for="exampleRadios1">
                            Other
                        </label>
                    </div>


                </div>
                <!-- --- form option --- -->


                {{-- ---------------------------- Gender ------------------------------- --}}

            <!-- -------------------------------- digital signature option ------------------------------------- -->


                <div class="form-group">
                    <label for="exampleFormControlFile1">Digital Signature Image</label><br>

                    <img src="{{asset('storage/'.$personal->digital_signature_image) }}" alt="No image"
                         style="width: 100px; height: 100px">
                </div>

                <div class="form-group">
                    <label for="">Change Digital Signature Image ( if needed ) [ 300px * 300px ]</label>
                    <input
                        type="file"
                        class="form-control-file"
                        id="image"
                        name="digital_signature_image"
                        class="@error('digital_signature_image') is-invalid @enderror"
                    />
                </div>

                @error('digital_signature_image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                {{--                @error('image')--}}
                {{--                <div class="alert alert-danger">{{ $message }}</div>--}}
                {{--                @enderror--}}
            <!-- ----------------------------------------- digital signature option ----------------------------------------- -->

                <!-- -------------------------------- passport option ------------------------------------- -->


                <div class="form-group">
                    <label for="exampleFormControlFile1">Passport Image / PDF</label><br>

                    <span
                        style="display: none">{{ $passport_image = pathinfo(asset('storage/'.$personal->passport_image),PATHINFO_EXTENSION) }}</span>

                    @if($passport_image == 'jpeg' || $passport_image == 'jpg' || $passport_image == 'png')

                        <img src="{{asset('storage/'.$personal->passport_image) }}" alt="No image"
                             style="width: 100px; height: 100px">

                    @else
                        <a href="{{ asset('storage/'.$personal->passport_image) }}">View File</a><br>
                        <a href="{{ asset('storage/'.$personal->passport_image) }}" download="">Download File</a>
                    @endif
                </div>

                <div class="form-group">
                    <label for="">Change passport Info ( if needed )</label>
                    <input
                        type="file"
                        class="form-control-file"
                        id="image"
                        name="passport_image"
                        class="@error('passport_image') is-invalid @enderror"
                    />
                </div>

                {{--                @error('image')--}}
                {{--                <div class="alert alert-danger">{{ $message }}</div>--}}
                {{--                @enderror--}}
            <!-- ----------------------------------------- passport option ----------------------------------------- -->


                <!-- -------------------------------- nid option ------------------------------------- -->


                <div class="form-group">
                    <label for="exampleFormControlFile1">NID Image / PDF</label><br>

                    <span style="display: none">{{ $nid_image = pathinfo(asset('storage/'.$personal->nid_image),PATHINFO_EXTENSION) }}</span>

                    @if($nid_image == 'jpeg' || $nid_image == 'jpg' || $nid_image == 'png')

                        <img src="{{asset('storage/'.$personal->nid_image) }}" alt="No image"
                             style="width: 100px; height: 100px">

                    @else
                        <a href="{{ asset('storage/'.$personal->nid_image) }}">View File</a><br>
                        <a href="{{ asset('storage/'.$personal->nid_image) }}" download="">Download File</a>
                    @endif
                </div>


                <div class="form-group">
                    <label for="">Change NID Info ( if needed )</label>
                    <input
                        type="file"
                        class="form-control-file"
                        id="image"
                        name="nid_image"
                        class="@error('nid_image') is-invalid @enderror"
                    />
                </div>

                {{--                @error('image')--}}
                {{--                <div class="alert alert-danger">{{ $message }}</div>--}}
                {{--                @enderror--}}

            <!-- ----------------------------------------- nid option ----------------------------------------- -->

                <!-- -------------------------------- certification_image option ------------------------------------- -->


                <div class="form-group">
                    <label for="exampleFormControlFile1">Scholarship/Fellowship certificate / PDF</label><br>

                    <span style="display: none">{{ $certification_image = pathinfo(asset('storage/'.$personal->certification_image),PATHINFO_EXTENSION) }}</span>

                    @if($certification_image == 'jpeg' || $certification_image == 'jpg' || $certification_image == 'png')

                        <img src="{{asset('storage/'.$personal->certification_image) }}" alt="No image"
                             style="width: 100px; height: 100px">

                    @else
                        <a href="{{ asset('storage/'.$personal->certification_image) }}">View File</a><br>
                        <a href="{{ asset('storage/'.$personal->certification_image) }}" download="">Download File</a>
                    @endif
                </div>

                <div class="form-group">
                    <label for="">Change Certification Info ( if needed )</label>
                    <input
                        type="file"
                        class="form-control-file"
                        id="image"
                        name="certification_image"
                        class="@error('certification_image') is-invalid @enderror"
                    />
                </div>

                {{--                @error('image')--}}
                {{--                <div class="alert alert-danger">{{ $message }}</div>--}}
                {{--                @enderror--}}

            <!-- ----------------------------------------- certification_image option ----------------------------------------- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >Applicant's date of birth *</label
                    >
                    <input
                        type="date"
                        class="form-control"
                        id="dob"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="dob"
                        max='{{ Carbon\Carbon::now()->subYear(10)->toDateString() }}'
                        class="@error('dob') is-invalid @enderror"
                        value="{{ $personal->dob }}"

                    />
                </div>

                @error('dob')
                <div class="alert alert-danger">The date of birth field cannot left empty</div>
                @enderror
            <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >Applicant's mother's name (as in passport) *</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="mothers_name"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="mothers_name"
                        class="@error('mothers_name') is-invalid @enderror"
                        value="{{ $personal->mothers_name }}"

                    />
                </div>

                @error('mothers_name')
                <div class="alert alert-danger">Applicant's mother's name required</div>
                @enderror
            <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >Applicant's mother's NID number *</label
                    >
                    <input
                        type="number"
                        class="form-control"
                        id="mothers_nid"
                        placeholder="Enter Your Answer"
                        name="mothers_nid"
                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        maxlength="17"
                        minlength="10"
                        min="0"
                        class="@error('mothers_nid') is-invalid @enderror"
                        value="{{ $personal->mothers_nid }}"

                    />
                </div>

                @error('mothers_nid')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >Details of mother's profession including name of office,
                        designation, phone and email *</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="mothers_profession"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="mothers_profession"
                        class="@error('mothers_profession') is-invalid @enderror"
                        value="{{ $personal->mothers_profession }}"
                    />
                </div>

                @error('mothers_profession')
                <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
            <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >Mother's gross monthly income *</label
                    >
                    <input
                        type="number"
                        class="form-control"
                        id="mothers_gross_income"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="mothers_gross_income"
                        min="0"
                        class="@error('mothers_gross_income') is-invalid @enderror"
                        value="{{ $personal->mothers_gross_income }}"
                    />
                </div>

                @error('mothers_gross_income')
                <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
            <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >Applicant's father's name (as in passport) *</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="fathers_name"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="fathers_name"
                        class="@error('fathers_name') is-invalid @enderror"
                        value="{{ $personal->fathers_name }}"
                    />
                </div>

                @error('fathers_name')
                <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
            <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >Details of father's profession including name of office,
                        designation, phone and email *</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="fathers_profession"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="fathers_profession"
                        class="@error('fathers_profession') is-invalid @enderror"
                        value="{{ $personal->fathers_profession }}"

                    />
                </div>

                @error('fathers_profession')
                <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
            <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >Applicant's father's gross monthly income *</label
                    >
                    <input
                        type="number"
                        class="form-control"
                        id="fathers_gross_income"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="fathers_gross_income"
                        min="0"
                        class="@error('fathers_gross_income') is-invalid @enderror"
                        value="{{ $personal->fathers_gross_income }}"

                    />
                </div>

                @error('fathers_gross_income')
                <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
            <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >Applicant's contact address in Bangladesh *</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="contact_address"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="contact_address"
                        class="@error('contact_address') is-invalid @enderror"
                        value="{{ $personal->contact_address }}"
                    />
                </div>

                @error('contact_address')
                <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
            <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for=""
                    >Applicant's permanent address in Bangladesh (as in passport)
                        *</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="permanent_address"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Answer"
                        name="permanent_address"
                        class="@error('permanent_address') is-invalid @enderror"
                        value="{{ $personal->permanent_address }}"
                    />
                </div>

                @error('permanent_address')
                <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
            <!-- --- form option --- -->

                <div class="form-group">
                    <label for=""
                    >Applicant's current phone number (with country code and city
                        code)*</label>
                    <br>
                    <input id="phone" name="phone_number" type="tel" class="form-control"
                           value="{{ $personal->phone_number }}"/>

                </div>

                @error('phone_number')
                <div class="alert alert-danger">Field cannot left empty</div>
            @enderror
            <!-- --- form option --- -->

                <!-- --- form option --- -->

                <div class="form-group submit-button-css">
                    <input
                        type="submit"
                        class="btn btn-success"
                        id="exampleInputEmail1"
                        aria-describedby="emailHelp"
                        value="Update"
                    />
                </div>
                <!-- --- form option --- -->
            </form>
        </div>
        <!-- ------------------------------------------------------- end - form -->
    </div>
</div>
</body>


{{-- ----------------------------------  phone number js  ----------------------------------------}}

<script src="assets/build/js/intlTelInput.js"></script>
<script>
    // Vanilla Javascript
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
        // options here
    });

    $(document).ready(function () {
        $(".iti__flag-container").click(function () {
            var countryCode = $(".iti__selected-flag").attr("title");
            var countryCode = countryCode.replace(/[^0-9]/g, "");
            $("#phone").val("");
            $("#phone").val("+" + countryCode + " " + $("#phone").val());
        });
    });
</script>

{{-- ----------------------------------  phone number js  ----------------------------------------}}


<script src="{{ asset('assets/js/form/personal.js') }}"></script>

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
