<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Banking information</title>
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
            <div style="display: flex; justify-content: center">
                <img src="{{ asset('assets/images/banking.png') }}" alt="" class="img-fluid" unselectable="on">
            </div>
            <br>

            {{-- ------------------------------- form tab system ----------------------------- --}}

            <x-form-tab></x-form-tab>

            {{-- -------------------------------- form tab system -------------------------- --}}

            <div class="form-display-flex">
                <p>Banking Information</p>
                {{--            <button class="btn btn-secondary" type="button" onclick="saveDraft()">Save Data</button> --}}
                <a class="btn btn-secondary" type="button" style="color: white" href="{{ route('home') }}">Return to
                    dashboard</a>

            </div>
            <hr />

            <!-- --------------------------- form -------------------------------- -->
            <div class="form">
                <form action="{{ route('banking-form.store') }}" method="POST" enctype="multipart/form-data">
                    <!-- --- form option --- -->
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Applicant's Passport number *</label>
                        <input type="text" class="form-control" id="passport_number" aria-describedby="emailHelp"
                            placeholder="Enter Your Answer" name="passport_number"
                            class="@error('passport_number') is-invalid @enderror"
                            value="{{ $banking->passport_number }}" />
                    </div>

                    @error('passport_number')
                        <div class="alert alert-danger">Passport number required</div>
                    @enderror
                    <!-- --- form option --- -->

                    <!-- --- form option --- -->
                    <div class="form-group">
                        <label for="">Applicant's passport issue date *</label>
                        <input type="date" class="form-control" id="passport_issue" aria-describedby="emailHelp"
                            placeholder="Enter Your Answer" name="passport_issue"
                            class="@error('passport_issue') is-invalid @enderror"
                            value="{{ $banking->passport_issue }}" />
                    </div>

                    @error('passport_issue')
                        <div class="alert alert-danger">Passport issue date required</div>
                    @enderror
                    <!-- --- form option --- -->

                    <!-- --- form option --- -->
                    <div class="form-group">
                        <label for="">Applicant's NID number *</label>
                        <input type="number" class="form-control" id="nid" aria-describedby="emailHelp"
                            placeholder="Enter Your Answer" name="nid"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            maxlength="17" minlength="10" min="0" class="@error('nid')
is-invalid
@enderror"
                            value="{{ $banking->nid }}" />
                    </div>

                    @error('nid')
                        <div class="alert alert-danger">Applicant's NID number required</div>
                    @enderror
                    <!-- --- form option --- -->

                    <!-- --- form option --- -->
                    <div class="form-group">
                        <label for="">Name of Bank in which stipend will be credited *</label>
                        >
                        {{--                    <input --}}
                        {{--                        type="text" --}}
                        {{--                        class="form-control" --}}
                        {{--                        id="name_of_bank" --}}
                        {{--                        aria-describedby="emailHelp" --}}
                        {{--                        placeholder="Enter Your Answer" --}}
                        {{--                        name="name_of_bank" --}}
                        {{--                        class="@error('name_of_bank') is-invalid @enderror" --}}
                        {{--                    /> --}}

                        {{--                    <select id="cars" name="name_of_bank" class="form-control"> --}}
                        {{--                        <option value="{{$banking->name_of_bank}}" selected>{{$banking->name_of_bank}}</option> --}}
                        {{--                        @foreach ($response as $resData) --}}
                        {{--                            <option value="{{ $resData['BankName'] }}">{{ $resData['BankName'] }}</option> --}}
                        {{--                        @endforeach --}}
                        {{--                    </select> --}}

                        <input type="text" class="form-control" id="name_of_bank" aria-describedby="emailHelp"
                            placeholder="Enter Your Answer" name="name_of_bank"
                            class="@error('name_of_bank') is-invalid @enderror" value="{{ $banking->name_of_bank }}" />

                    </div>

                    @error('nid')
                        <div class="alert alert-danger">Field required</div>
                    @enderror
                    <!-- --- form option --- -->

                    <!-- --- form option --- -->
                    <div class="form-group">
                        <label for="">Name of branch *</label>
                        <input type="text" class="form-control" id="name_of_branch" aria-describedby="emailHelp"
                            placeholder="Enter Your Answer" name="name_of_branch"
                            class="@error('name_of_branch') is-invalid @enderror"
                            value="{{ $banking->name_of_branch }}" />
                    </div>

                    @error('name_of_branch')
                        <div class="alert alert-danger">Branch name required</div>
                    @enderror

                    <!-- --- form option --- -->

                    <!-- --- form option --- -->
                    <div class="form-group">
                        <label for="">Bank account number *</label>
                        <input type="text" class="form-control" id="bank_account_number" aria-describedby="emailHelp"
                            placeholder="Enter Your Answer" name="bank_account_number"
                            class="@error('bank_account_number') is-invalid @enderror"
                            value="{{ $banking->bank_account_number }}" />
                    </div>

                    @error('bank_account_number')
                        <div class="alert alert-danger">Bank account number required</div>
                    @enderror
                    <!-- --- form option --- -->

                    <!-- --- form option --- -->
                    <div class="form-group">
                        <label for="">Name of account *</label>
                        <input type="text" class="form-control" id="name_of_account" aria-describedby="emailHelp"
                            placeholder="Enter Your Answer" name="name_of_account"
                            class="@error('name_of_account') is-invalid @enderror"
                            value="{{ $banking->name_of_account }}" />
                    </div>

                    @error('name_of_account')
                        <div class="alert alert-danger">Name of account required</div>
                    @enderror
                    <!-- --- form option --- -->

                    <!-- --- form option --- -->
                    <div class="form-group">
                        <label for="">Routing No *</label>
                        <input type="text" class="form-control" id="bank_account_type"
                            aria-describedby="emailHelp" placeholder="Enter Your Answer" name="bank_account_type"
                            class="@error('bank_account_type') is-invalid @enderror"
                            value="{{ $banking->bank_account_type }}" />
                    </div>

                    @error('bank_account_type')
                        <div class="alert alert-danger">Routing No required</div>
                    @enderror
                    <!-- --- form option --- -->

                    <!-- --- form option --- -->
                    <div class="form-group">
                        <label for="">Does the account belong to the applicant? *</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="account_belongs"
                                id="account_belongs_yes" value="yes"
                                @if ($banking->account_belongs == 'yes') checked @endif />
                            <label class="form-check-label" for="exampleRadios1">
                                yes
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="account_belongs"
                                id="account_belongs_no" value="No"
                                @if ($banking->account_belongs == 'No') checked @endif />
                            <label class="form-check-label" for="exampleRadios1">
                                No
                            </label>
                        </div>
                    </div>
                    <!-- --- form option --- -->

                    <!-- --- form option --- -->
                    <div class="form-group">
                        <label for="">If the bank account does not belong to the applicant, who it
                            belongs to? *</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="belongs_to" id="father"
                                value="father" @if ($banking->belongs_to == 'father') checked @endif />
                            <label class="form-check-label" for="exampleRadios1">
                                father
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="belongs_to" id="mother"
                                value="mother" @if ($banking->belongs_to == 'mother') checked @endif />
                            <label class="form-check-label" for="exampleRadios1">
                                mother
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="belongs_to" id="brother"
                                value="brother" @if ($banking->belongs_to == 'brother') checked @endif />
                            <label class="form-check-label" for="exampleRadios1">
                                brother
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="belongs_to" id="sister"
                                value="sister" @if ($banking->belongs_to == 'sister') checked @endif />
                            <label class="form-check-label" for="exampleRadios1">
                                sister
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="belongs_to" id="spouse"
                                value="spouse" @if ($banking->belongs_to == 'spouse') checked @endif />
                            <label class="form-check-label" for="exampleRadios1">
                                spouse
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="belongs_to" id="not_applicable"
                                value="not applicable" @if ($banking->belongs_to == 'not applicable') checked @endif />
                            <label class="form-check-label" for="exampleRadios1">
                                not applicable
                            </label>
                        </div>
                    </div>
                    <!-- --- form option --- -->

                    <!-- --- form option --- -->

                    <div class="form-group submit-button-css">
                        <input type="submit" class="btn btn-success" id="" aria-describedby="emailHelp" />
                    </div>
                    <!-- --- form option --- -->
                </form>
            </div>
            <!-- ------------------------------------------------------- end - form -->
        </div>
    </div>
</body>

{{-- ----------------------------------- local storage ------------------------------------- --}}

<script>
    {{-- ------------------------------------------------ Does the account belong to the applicant? * --------------------------------------------------   --}}

    // let applicant_yes = document.querySelector("#account_belongs_yes");
    // let applicant_no = document.querySelector("#account_belongs_no");
    //
    // applicant_yes.addEventListener('click', function (e) {
    //     localStorage.setItem('applicant-yes', "yes");
    // });
    //
    // applicant_no.addEventListener('click', function () {
    //     localStorage.setItem('applicant-yes', "no");
    // });
    //
    // if (localStorage.getItem('applicant-yes') == "yes") {
    //     applicant_yes.checked = true;
    // } else if (localStorage.getItem('applicant-yes') == "no") {
    //     applicant_no.checked = true;
    // } else {
    //     applicant_yes.checked = false;
    //     applicant_no.checked = false;
    // }

    {{-- ------------------------------------------------ Does the account belong to the applicant? * --------------------------------------------------   --}}

    {{--   -------------------------- If the bank account does not belong to the applicant, who it belongs to? * ----------------------------------------- --}}

    // let father = document.querySelector("#father");
    // let mother = document.querySelector("#mother");
    // let brother = document.querySelector("#brother");
    // let sister = document.querySelector("#sister");
    // let not_applicable = document.querySelector("#not_applicable");
    //
    // father.addEventListener('click', function (e) {
    //     localStorage.setItem('belongs-to', "1");
    // });
    //
    // mother.addEventListener('click', function (e) {
    //     localStorage.setItem('belongs-to', "2");
    // });
    //
    // brother.addEventListener('click', function (e) {
    //     localStorage.setItem('belongs-to', "3");
    // });
    //
    // sister.addEventListener('click', function (e) {
    //     localStorage.setItem('belongs-to', "4");
    // });
    //
    // not_applicable.addEventListener('click', function (e) {
    //     localStorage.setItem('belongs-to', "5");
    // });
    //
    // if (localStorage.getItem('belongs-to') == "1") {
    //     father.checked = true;
    // } else if (localStorage.getItem('belongs-to') == "2") {
    //     mother.checked = true;
    // } else if (localStorage.getItem('belongs-to') == "3") {
    //     brother.checked = true;
    // } else if (localStorage.getItem('belongs-to') == "4") {
    //     sister.checked = true;
    // } else if (localStorage.getItem('belongs-to') == "5") {
    //     not_applicable.checked = true;
    // }



    {{--   -------------------------- If the bank account does not belong to the applicant, who it belongs to? * ----------------------------------------- --}}

    // let passport_number = document.querySelector("#passport_number");
    // let passport_issue = document.querySelector("#passport_issue");
    // let nid = document.querySelector("#nid");
    // let name_of_bank = document.querySelector("#name_of_bank");
    // let name_of_branch = document.querySelector("#name_of_branch");
    // let bank_account_number = document.querySelector("#bank_account_number");
    // let name_of_account = document.querySelector("#name_of_account");
    // let bank_account_type = document.querySelector("#bank_account_type");
    //
    // passport_number.value = localStorage.getItem('passport_number');
    // passport_issue.value = localStorage.getItem('passport_issue');
    // nid.value = localStorage.getItem('nid');
    // name_of_bank.value = localStorage.getItem('name_of_bank');
    // name_of_branch.value = localStorage.getItem('name_of_branch');
    // bank_account_number.value = localStorage.getItem('bank_account_number');
    // name_of_account.value = localStorage.getItem('name_of_account');
    // bank_account_type.value = localStorage.getItem('bank_account_type');


    // function saveDraft() {
    //     localStorage.setItem('passport_number', passport_number.value);
    //     localStorage.setItem('passport_issue', passport_issue.value);
    //     localStorage.setItem('nid', nid.value);
    //     localStorage.setItem('name_of_bank', name_of_bank.value);
    //     localStorage.setItem('name_of_branch', name_of_branch.value);
    //     localStorage.setItem('bank_account_number', bank_account_number.value);
    //     localStorage.setItem('name_of_account', name_of_account.value);
    //     localStorage.setItem('bank_account_type', bank_account_type.value);
    //
    // }
</script>

{{-- ----------------------------------- local storage ------------------------------------- --}}

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
