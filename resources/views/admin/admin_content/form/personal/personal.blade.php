<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal Information</title>
    <link rel="stylesheet" href="{{ asset('assets/css/form.css') }}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
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
                <p>Personal Information</p>
                <div>
                    <a href="{{ route('application-bank') }}" class="btn btn-secondary" type="button">Application
                        Bank</a>
                </div>
            </div>
            <hr />

            <!-- --------------------------- form -------------------------------- -->
            <div class="form">
                <!-- --- form option --- -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Applicant's first name (as in passport) *</label>
                    <input type="text" class="form-control" id="first_name" aria-describedby="emailHelp"
                        placeholder="Enter Your Answer" name="fname" class="@error('fname') is-invalid @enderror"
                        value="{{ $personal_form->fname }}" disabled />

                </div>

                @error('fname')
                    <div class="alert alert-danger">First name required</div>
                @enderror
                <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Applicant's last name (as in passport) *</label>
                    <input type="text" class="form-control" id="last_name" aria-describedby="emailHelp"
                        placeholder="Enter Your Answer" name="lname" class="@error('lname') is-invalid @enderror"
                        value="{{ $personal_form->lname }}" disabled />
                </div>

                @error('lname')
                    <div class="alert alert-danger">Last name required</div>
                @enderror
                <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for="exampleFormControlFile1">Applicant's Image</label><br>
                    <img src="{{ asset('storage/' . $personal_form->image) }}" alt="No image"
                        style="width: 250px; height: 250px">
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
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male"
                            @if ($personal_form->gender == 'male') checked @else disabled @endif />
                        <label class="form-check-label" for="exampleRadios1">
                            Male
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female"
                            @if ($personal_form->gender == 'female') checked @else disabled @endif />
                        <label class="form-check-label" for="exampleRadios1">
                            Female
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="other" value="other"
                            @if ($personal_form->gender == 'other') checked @else disabled @endif />
                        <label class="form-check-label" for="exampleRadios1">
                            Other
                        </label>
                    </div>


                </div>
                <!-- --- form option --- -->


                {{-- ---------------------------- Gender ------------------------------- --}}

                <!-- ---------------------------------------- digital signature image option -------------------------------- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for="exampleFormControlFile1">Applicant's Digital Signature Image</label><br>
                    <img src="{{ asset('storage/' . $personal_form->digital_signature_image) }}" alt="No image"
                        style="width: 250px; height: 250px">
                </div>

                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <!-- ---------------------------------------- digital signature image option -------------------------------- -->

                <!-- ---------------------------------------- passport image option -------------------------------- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for="exampleFormControlFile1">Applicant's passport Image</label><br>
                    {{--                <img src="{{asset('storage/'.$personal_form->passport_image) }}" alt="No image" --}}
                    {{--                     style="width: 250px; height: 250px"> --}}

                    <span
                        style="display: none">{{ $passport_image = pathinfo(asset('storage/' . $personal_form->passport_image), PATHINFO_EXTENSION) }}</span>

                    @if ($passport_image == 'jpeg' || $passport_image == 'jpg' || $passport_image == 'png')
                        <img src="{{ asset('storage/' . $personal_form->passport_image) }}" alt="No image"
                            style="width: 250px; height: 250px">
                    @else
                        <a href="{{ asset('storage/' . $personal_form->passport_image) }}">View File</a><br>
                        <a href="{{ asset('storage/' . $personal_form->passport_image) }}" download="">Download
                            File</a>
                    @endif
                </div>

                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <!-- ---------------------------------------- passport image option -------------------------------- -->

                <!-- ---------------------------------------- nid image option -------------------------------- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for="exampleFormControlFile1">Applicant's NID Image</label><br>
                    {{--                <img src="{{asset('storage/'.$personal_form->nid_image) }}" alt="No image" --}}
                    {{--                     style="width: 250px; height: 250px"> --}}

                    <span
                        style="display: none">{{ $nid_image = pathinfo(asset('storage/' . $personal_form->nid_image), PATHINFO_EXTENSION) }}</span>

                    @if ($nid_image == 'jpeg' || $nid_image == 'jpg' || $nid_image == 'png')
                        <img src="{{ asset('storage/' . $personal_form->nid_image) }}" alt="No image"
                            style="width: 100px; height: 100px">
                    @else
                        <a href="{{ asset('storage/' . $personal_form->nid_image) }}">View File</a><br>
                        <a href="{{ asset('storage/' . $personal_form->nid_image) }}" download="">Download File</a>
                    @endif
                </div>

                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <!-- ---------------------------------------- nid image option -------------------------------- -->

                <!-- ---------------------------------------- certification image option -------------------------------- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for="exampleFormControlFile1">Applicant's academic/ scholarship/ fellowship certificate and
                        other Image / PDF</label><br>
                    {{--                <img src="{{asset('storage/'.$personal_form->certification_image) }}" alt="No image" --}}
                    {{--                     style="width: 250px; height: 250px"> --}}

                    <span
                        style="display: none">{{ $certification_image = pathinfo(asset('storage/' . $personal_form->certification_image), PATHINFO_EXTENSION) }}</span>

                    @if ($certification_image == 'jpeg' || $certification_image == 'jpg' || $certification_image == 'png')
                        <img src="{{ asset('storage/' . $personal_form->certification_image) }}" alt="No image"
                            style="width: 100px; height: 100px">
                    @else
                        <a href="{{ asset('storage/' . $personal_form->certification_image) }}">View File</a><br>
                        <a href="{{ asset('storage/' . $personal_form->certification_image) }}" download="">Download
                            File</a>
                    @endif
                </div>

                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <!-- ---------------------------------------- certification image option -------------------------------- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Applicant's date of birth *</label>
                    <input type="date" class="form-control" id="dob" aria-describedby="emailHelp"
                        placeholder="Enter Your Answer" name="dob" class="@error('dob') is-invalid @enderror"
                        value="{{ $personal_form->dob }}" disabled />
                </div>

                @error('dob')
                    <div class="alert alert-danger">The date of birth field cannot left empty</div>
                @enderror
                <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Applicant's mother's name (as in passport) *</label>
                    <input type="text" class="form-control" id="mothers_name" aria-describedby="emailHelp"
                        placeholder="Enter Your Answer" name="mothers_name"
                        class="@error('mothers_name') is-invalid @enderror"
                        value="{{ $personal_form->mothers_name }}" disabled />
                </div>

                @error('mothers_name')
                    <div class="alert alert-danger">Applicant's mother's name required</div>
                @enderror
                <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Applicant's mother's NID number *</label>
                    <input type="text" class="form-control" id="mothers_nid" aria-describedby="emailHelp"
                        placeholder="Enter Your Answer" name="mothers_nid"
                        class="@error('mothers_nid') is-invalid @enderror" value="{{ $personal_form->mothers_nid }}"
                        disabled />
                </div>

                @error('mothers_nid')
                    <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
                <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Details of mother's profession including name of office,
                        designation, phone and email *</label>
                    <input type="text" class="form-control" id="mothers_profession" aria-describedby="emailHelp"
                        placeholder="Enter Your Answer" name="mothers_profession"
                        class="@error('mothers_profession') is-invalid @enderror"
                        value="{{ $personal_form->mothers_profession }}" disabled />
                </div>

                @error('mothers_profession')
                    <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
                <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Mother's gross monthly income *</label>
                    <input type="text" class="form-control" id="mothers_gross_income"
                        aria-describedby="emailHelp" placeholder="Enter Your Answer" name="mothers_gross_income"
                        class="@error('mothers_gross_income') is-invalid @enderror"
                        value="{{ $personal_form->mothers_gross_income }}" disabled />
                </div>

                @error('mothers_gross_income')
                    <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
                <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Applicant's father's name (as in passport) *</label>
                    <input type="text" class="form-control" id="fathers_name" aria-describedby="emailHelp"
                        placeholder="Enter Your Answer" name="fathers_name"
                        class="@error('fathers_name') is-invalid @enderror"
                        value="{{ $personal_form->fathers_name }}" disabled />
                </div>

                @error('fathers_name')
                    <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
                <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Details of father's profession including name of office,
                        designation, phone and email *</label>
                    <input type="text" class="form-control" id="fathers_profession" aria-describedby="emailHelp"
                        placeholder="Enter Your Answer" name="fathers_profession"
                        class="@error('fathers_profession') is-invalid @enderror"
                        value="{{ $personal_form->fathers_profession }}" disabled />
                </div>

                @error('fathers_profession')
                    <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
                <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Applicant's father's gross monthly income *</label>
                    <input type="text" class="form-control" id="fathers_gross_income"
                        aria-describedby="emailHelp" placeholder="Enter Your Answer" name="fathers_gross_income"
                        class="@error('fathers_gross_income') is-invalid @enderror"
                        value="{{ $personal_form->fathers_gross_income }}" disabled />
                </div>

                @error('fathers_gross_income')
                    <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
                <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Applicant's contact address in Bangladesh *</label>
                    <input type="text" class="form-control" id="contact_address" aria-describedby="emailHelp"
                        placeholder="Enter Your Answer" name="contact_address"
                        class="@error('contact_address') is-invalid @enderror"
                        value="{{ $personal_form->contact_address }}" disabled />
                </div>

                @error('contact_address')
                    <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
                <!-- --- form option --- -->

                <!-- --- form option --- -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Applicant's permanent address in Bangladesh (as in passport)
                        *</label>
                    <input type="text" class="form-control" id="permanent_address" aria-describedby="emailHelp"
                        placeholder="Enter Your Answer" name="permanent_address"
                        class="@error('permanent_address') is-invalid @enderror"
                        value="{{ $personal_form->permanent_address }}" disabled />
                </div>

                @error('permanent_address')
                    <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
                <!-- --- form option --- -->

                <div class="form-group">
                    <label for="exampleInputEmail1">Applicant's current phone number (with country code and city
                        code)*</label>
                    <input type="text" class="form-control" id="phone_number" aria-describedby="emailHelp"
                        placeholder="Enter Your Answer" name="phone_number"
                        class="@error('phone_number') is-invalid @enderror"
                        value="{{ $personal_form->phone_number }}" disabled />
                </div>

                @error('phone_number')
                    <div class="alert alert-danger">Field cannot left empty</div>
                @enderror
                <!-- --- form option --- -->

                <!-- --- form option --- -->

                <div class="form-group submit-button-css form-button-margin-padding">

                    {{--                <a href=""> --}}
                    {{--                    <button type="submit" class="btn btn-secondary">Prev</button> --}}
                    {{--                </a> --}}

                    <a href="{{ route('educational-verification', $personal_form->user_id) }}">
                        <button type="submit" class="btn btn-primary">Next</button>
                    </a>
                </div>
                <!-- --- form option --- -->
            </div>
            <!-- ------------------------------------------------------- end - form -->
        </div>
    </div>
</body>

<script>
    function exportPdf() {
        window.print();
    }
</script>

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
