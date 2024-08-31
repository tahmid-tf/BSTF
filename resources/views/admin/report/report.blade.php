<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{ asset('assets/css/report.css') }}"/>
    <!-- bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;700&family=Poppins:wght@500;700&family=Roboto+Slab&display=swap"
        rel="stylesheet"
    />
    <title>BSTF APPLICATION FORM</title>
</head>
<body>
<header>
    <section>
        <div class="container mt-5 pt-2">
            <div class="d-flex justify-content-between">
                <h5>Application ID: <span class="fw-bold">{{ $user->application->applicant_unique_id }}</span></h5>
                <img
                    class="img-fluid img-size"
                    src="{{ asset('storage/'.$user->personal->image) }}"
                    alt=""
                />
            </div>
        </div>
        <h4 class="text-center fw-bold pt-4">Application Form</h4>
        <p class="text-center fw-bolder mt-2 pt-4">
            Reimbursement of Expenses against one way air travel from the
            Bangladesh Trust Fund
        </p>
        <p class="text-center">
            <small>(Academic Session: January - December {{ Carbon\Carbon::now()->format('Y') }})</small>
        </p>
    </section>
</header>

<section class="sec2-bg mt-5">
    <div class="container py-4">

        {{-- ------------------- Name --------------------- --}}

        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>Name</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4">{{ $user->personal->fname . ' '. $user->personal->lname }}</p>
            </div>
        </div>

        {{-- ------------------- Name --------------------- --}}

        {{-- ------------------- Gender --------------------- --}}

        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>Gender</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4">{{ \Illuminate\Support\Str::ucfirst($user->personal->gender) }}</p>
            </div>
        </div>

        {{-- ------------------- Gender --------------------- --}}

        {{-- ------------------ Guardian -----------------------}}

        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>Father's Name</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4">{{ \Illuminate\Support\Str::ucfirst($user->personal->fathers_name) }}</p>
            </div>
        </div>

        {{-- ------------------ Guardian -----------------------}}

        {{-- -------------- Guardians income -------------------}}


        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>Father's income</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4">{{ \Illuminate\Support\Str::ucfirst($user->personal->fathers_gross_income) }}</p>
            </div>
        </div>


        {{-- -------------- Guardians income -------------------}}





                {{-- ------------------ Guardian (Mother) -----------------------}}

                <div class="row">
                    <div class="col-lg-4 col-5">
                        <div class="d-flex justify-content-between">
                            <p>Mother's Name</p>
                            <p>:</p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-7">
                        <p class="ps-4">{{ \Illuminate\Support\Str::ucfirst($user->personal->mothers_name) }}</p>
                    </div>
                </div>

                {{-- ------------------ Guardian (Mother) -----------------------}}

                {{-- -------------- Guardians income (Mother) -------------------}}


                <div class="row">
                    <div class="col-lg-4 col-5">
                        <div class="d-flex justify-content-between">
                            <p>Mother's income</p>
                            <p>:</p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-7">
                        <p class="ps-4">{{ \Illuminate\Support\Str::ucfirst($user->personal->mothers_gross_income) }}</p>
                    </div>
                </div>


                {{-- -------------- Guardians income (Mother) -------------------}}


        <div class="bg-dark">
            <p class="text-white fw-bold">
                Address of the Applicant in Bangladesh
            </p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>Present Address</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4">{{ \Illuminate\Support\Str::ucfirst($user->personal->contact_address) }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>Present Phone</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4">{{ \Illuminate\Support\Str::ucfirst($user->personal->phone_number) }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>Parmanent Address</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4">{{ \Illuminate\Support\Str::ucfirst($user->personal->permanent_address) }}</p>
            </div>
        </div>
{{--        <div class="row">--}}
{{--            <div class="col-lg-4 col-5">--}}
{{--                <div class="d-flex justify-content-between">--}}
{{--                    <p>Contact Number(In Bangladesh)</p>--}}
{{--                    <p>:</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-8 col-7">--}}
{{--                <p class="ps-4">01755163340</p>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>Email</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4">{{ $user->email }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>NID</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4">{{ $user->banking->nid }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>Passport Number</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4">{{ $user->banking->passport_number }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>Passport Issue Date</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4">{{ \Carbon\Carbon::parse($user->banking->passport_issue)->format('d/m/Y') }}</p>
            </div>
        </div>
        <div class="bg-dark">
            <p class="text-white fw-bold">
                Bank Account Information (In Bangladesh)
            </p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>Account Name</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4">{{ \Illuminate\Support\Str::ucfirst($user->banking->name_of_account) }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>Relationship with Applicant</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4">{{ \Illuminate\Support\Str::ucfirst($user->banking->belongs_to) }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>Account Number</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4">{{ \Illuminate\Support\Str::ucfirst($user->banking->bank_account_number) }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>Bank name</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4">{{ \Illuminate\Support\Str::ucfirst($user->banking->bank_account_number) }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>Branch Name</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4">{{ \Illuminate\Support\Str::ucfirst($user->banking->name_of_bank) }}</p>
            </div>
        </div>
{{--        <div class="row">--}}
{{--            <div class="col-lg-4 col-5">--}}
{{--                <div class="d-flex justify-content-between">--}}
{{--                    <p>Bank Routing Number</p>--}}
{{--                    <p>:</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-8 col-7">--}}
{{--                <p class="ps-4">020913827</p>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="bg-dark">
            <p class="text-white fw-bold">
                University Information(where the applicant has been enrolled)
            </p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>Country</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4">{{ \Illuminate\Support\Str::ucfirst($user->educational->study_country) }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>University Name</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4">{{ \Illuminate\Support\Str::ucfirst($user->educational->name_of_university) }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>Institution in which applicant is studying in details</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4">
                   {{ \Illuminate\Support\Str::ucfirst($user->educational->portal_address_of_university) }}
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>Field of Study</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4">
                    {{ \Illuminate\Support\Str::ucfirst($user->educational->academic_degree) }}
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>Admission Certificate</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4 fw-bold">Attached</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>Scholarship/Followship Certificate</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4 fw-bold">Attached</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>Certificate of No Travel Grant Received</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4 fw-bold">Attached</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>I-20</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4 fw-bold">Attached</p>
            </div>
        </div>
        <div class="bg-dark">
            <p class="text-white fw-bold">
                Cost of one-way ticket (in US and BD Taka)
            </p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>Ticket Number</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4">{{ $user->travel->ticket_number_text }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>Ticket Date</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4">{{ \Carbon\Carbon::parse($user->travel->date_of_departure)->format('d/m/y') }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>Destination Airport</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4">{{ $user->travel->port_of_disembarkation }}</p>
            </div>
        </div>
{{--        <div class="row">--}}
{{--            <div class="col-lg-4 col-5">--}}
{{--                <div class="d-flex justify-content-between">--}}
{{--                    <p>Ticket Fare including TAX(in US$)</p>--}}
{{--                    <p>:</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-8 col-7">--}}
{{--                <p class="ps-4"></p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-4 col-5">--}}
{{--                <div class="d-flex justify-content-between">--}}
{{--                    <p>Ticket Fare without TAX(in US$)</p>--}}
{{--                    <p>:</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-8 col-7">--}}
{{--                <p class="ps-4"></p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-4 col-5">--}}
{{--                <div class="d-flex justify-content-between">--}}
{{--                    <p>Ticket Fare including TAX(in BDT)</p>--}}
{{--                    <p>:</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-8 col-7">--}}
{{--                <p class="ps-4"></p>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>Ticket Fare without TAX(in BDT)</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4">{{ "BDT ".(int) $user->travel->ticket_purchased }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-5">
                <div class="d-flex justify-content-between">
                    <p>Ticket Document</p>
                    <p>:</p>
                </div>
            </div>
            <div class="col-lg-8 col-7">
                <p class="ps-4 fw-bold">Attached</p>
            </div>
        </div>

        <!-- -------------------- digital signature --------------------------- -->
        <br/><br/>
        <div class="signature">
            <div>
                <img
                    src="{{ asset('storage/'.$user->personal->digital_signature_image) }}"
                    alt=""
                    style="width: 100px"
                />
                <br/>
                <p>Applicant's signature</p>
            </div>
        </div>

        <!-- -------------------- digital signature --------------------------- -->
    </div>
</section>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
></script>
</body>
</html>
