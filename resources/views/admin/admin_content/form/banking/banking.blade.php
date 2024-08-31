<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Banking Information</title>
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
            <p>Banking Information</p>
            <div>
                <a href="{{ route('application-bank') }}" class="btn btn-secondary" type="button">Application Bank</a>
            </div>
        </div>
        <hr/>

        <!-- --------------------------- form -------------------------------- -->
        <div class="form">
            <!-- --- form option --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
                >Applicant's Passport number *</label
                >
                <input
                    type="text"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Enter Your Answer"
                    name="passport_number"
                    value="{{ $banking_form->passport_number }}"
                    disabled
                />
            </div>
            <!-- --- form option --- -->

            <!-- --- form option --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
                >Applicant's passport issue date *</label
                >
                <input
                    type="text"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Enter Your Answer"
                    name="passport_issue"
                    value="{{ $banking_form->passport_issue }}"
                    disabled
                />
            </div>
            <!-- --- form option --- -->

            <!-- --- form option --- -->
            <div class="form-group">
                <label for="exampleInputEmail1">Applicant's NID number *</label>
                <input
                    type="text"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Enter Your Answer"
                    name="nid"
                    value="{{ $banking_form->nid }}"
                    disabled
                />
            </div>
            <!-- --- form option --- -->

            <!-- --- form option --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
                >Name of Bank in which stipend will be credited *</label
                >
                <input
                    type="text"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Enter Your Answer"
                    name="name_of_bank"
                    value="{{ $banking_form->name_of_bank }}"
                    disabled
                />
            </div>
            <!-- --- form option --- -->

            <!-- --- form option --- -->
            <div class="form-group">
                <label for="exampleInputEmail1">Name of branch *</label>
                <input
                    type="text"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Enter Your Answer"
                    name="name_of_branch"
                    value="{{ $banking_form->name_of_branch }}"
                    disabled
                />
            </div>
            <!-- --- form option --- -->

            <!-- --- form option --- -->
            <div class="form-group">
                <label for="exampleInputEmail1">Bank account number *</label>
                <input
                    type="text"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Enter Your Answer"
                    name="bank_account_number"
                    value="{{ $banking_form->bank_account_number }}"
                    disabled
                />
            </div>
            <!-- --- form option --- -->

            <!-- --- form option --- -->
            <div class="form-group">
                <label for="exampleInputEmail1">Name of account *</label>
                <input
                    type="text"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Enter Your Answer"
                    name="name_of_account"
                    value="{{ $banking_form->name_of_account }}"
                    disabled
                />
            </div>
            <!-- --- form option --- -->

            <!-- --- form option --- -->
            <div class="form-group">
                <label for="exampleInputEmail1">Routing No *</label>
                <input
                    type="text"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Enter Your Answer"
                    name="bank_account_type"
                    value="{{ $banking_form->bank_account_type }}"
                    disabled
                />
            </div>
            <!-- --- form option --- -->

            <!-- --- form option --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
                >Does the account belong to the applicant? *</label
                >
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="account_belongs"
                        id="exampleRadios1"
                        value="yes"
                        @if($banking_form->account_belongs == "yes") checked @else disabled @endif
                    />
                    <label class="form-check-label" for="exampleRadios1">
                        yes
                    </label>
                </div>

                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="account-belongs"
                        id="exampleRadios1"
                        value="No"
                        @if($banking_form->account_belongs == "No") checked @else disabled @endif

                    />
                    <label class="form-check-label" for="exampleRadios1">
                        No
                    </label>
                </div>
            </div>
            <!-- --- form option --- -->

            <!-- --- form option --- -->
            <div class="form-group">
                <label for="exampleInputEmail1"
                >If the bank account does not belong to the applicant, who it
                    belongs to? *</label
                >
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="belongs_to"
                        id="exampleRadios1"
                        value="father"
                        @if($banking_form->belongs_to == "father") checked @else disabled @endif

                    />
                    <label class="form-check-label" for="exampleRadios1">
                        father
                    </label>
                </div>

                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="belongs-to"
                        id="exampleRadios1"
                        value="mother"
                        @if($banking_form->belongs_to == "mother") checked @else disabled @endif

                    />
                    <label class="form-check-label" for="exampleRadios1">
                        mother
                    </label>
                </div>
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="belongs-to"
                        id="exampleRadios1"
                        value="brother"
                        @if($banking_form->belongs_to == "brother") checked @else disabled @endif

                    />
                    <label class="form-check-label" for="exampleRadios1">
                        brother
                    </label>
                </div>
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="belongs-to"
                        id="exampleRadios1"
                        value="sister"
                        @if($banking_form->belongs_to == "sister") checked @else disabled @endif

                    />
                    <label class="form-check-label" for="exampleRadios1">
                        sister
                    </label>
                </div>

                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="belongs_to"
                        id="spouse"
                        value="spouse"
                        @if($banking_form->belongs_to == "spouse") checked @else disabled @endif

                    />
                    <label class="form-check-label" for="exampleRadios1">
                        spouse
                    </label>
                </div>

                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="belongs-to"
                        id="exampleRadios1"
                        value="not applicable"
                        @if($banking_form->belongs_to == "not applicable") checked @else disabled @endif
                    />
                    <label class="form-check-label" for="exampleRadios1">
                        not applicable
                    </label>
                </div>
            </div>
            <!-- --- form option --- -->

            <!-- --- form option --- -->

            <div class="form-group submit-button-css form-button-margin-padding">
{{--                <a href="">--}}
{{--                    <button type="submit" class="btn btn-secondary">Prev</button>--}}
{{--                </a>--}}

                <div>
{{--                    <a href="{{ route('accept-approval',$banking_form->user_id) }}">--}}
{{--                        <button type="submit" class="btn btn-success">Accept</button>--}}
{{--                    </a>--}}
{{--                    <a href="{{ route('reject-approval',$banking_form->user_id) }}">--}}
{{--                        <button type="submit" class="btn btn-danger">Reject</button>--}}
{{--                    </a>--}}

                    <a href="{{ route('remarks-index',$banking_form->user_id) }}">
                        <button type="submit" class="btn btn-danger">Remarks</button>
                    </a>
                </div>
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
