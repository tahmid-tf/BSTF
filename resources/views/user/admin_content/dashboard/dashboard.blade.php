@extends('user.admin_panel.admin')

@section('content')
    <div class="content">

        <div class="row">
            <div class="col"></div>

            {{-- ------------------------------------------ Apply now ------------------------------------------------------ --}}
            <div class="col-xl-10 m-3 bg-white" style="border-radius: 20px">
                <div class="p-5">
                    <p class="text-sm-center">If you are eligible for the
                        scholarship then
                        Apply right now.</p>

                    @if($time_difference > 0)
                        <span href="{{ route('personal-form.index') }}" style="text-decoration: none; display: inline-block; display:flex ;justify-content: center" onclick="apply()">
                            @if(auth()->user()->personal()->count() > 0 && auth()->user()->educational()->count() > 0 && auth()->user()->travel()->count() > 0 && auth()->user()->banking()->count() > 0)
                                <p style="text-align: center; background-color: #1A3051; color: white; padding: 7px 13px; border-radius: 50px;">
                                    Already applied
                                </p>
                            @else
                                @if(auth()->user()->personal()->count() <= 0)
                                    <button class="m-auto d-block btn btn-success apply">
                                        Apply Now
                                    </button>
                                @else
                                    <button class="m-auto d-block btn btn-success apply">
                                        Continue
                                    </button>
                                @endif
                            @endif
                        </span>

                        {{-- -------------------- js --------------------------- --}}

                        <script>
                            function apply(){
                                window.location.href = '{{ route('personal-form.index') }}';
                            }
                        </script>

                        {{-- -------------------- js --------------------------- --}}

                    @elseif($time_difference <= 0)
                        <p style="text-align: center; color: red">Application period has ended</p>
                    @endif

                </div>
            </div>

            {{-- ------------------------------------------ Apply now ------------------------------------------------------ --}}


            {{--    --------------------------------------- Application status past ------------------------------------------    --}}

{{--            <div class="col-xl-3 m-3 bg-white" style="border-radius: 20px">--}}
{{--                <div class="p-5">--}}
{{--                    <p class="text-sm-center">Application Status.</p>--}}
{{--                    @if(auth()->user()->application()->count() > 0)--}}
{{--                        <br>--}}
{{--                        <div class="pending-margin">--}}
{{--                            <button--}}
{{--                                class="m-auto d-block btn @if(auth()->user()->application->status == 'pending') btn-warning @elseif(auth()->user()->application->status == 'accepted') btn-success @elseif(auth()->user()->application->status == 'rejected') btn-danger @endif status">{{ \Illuminate\Support\Str::ucfirst(auth()->user()->application->status) }}--}}
{{--                            </button>--}}
{{--                        </div>--}}

{{--                    @else--}}
{{--                        <div class="pending-margin-2">--}}
{{--                            <button--}}
{{--                                class="m-auto d-block btn btn-info status">Not yet applied--}}
{{--                            </button>--}}
{{--                        </div>--}}

{{--                    @endif--}}
{{--                </div>--}}
{{--            </div>--}}

            {{--    --------------------------------------- Application status past ------------------------------------------    --}}

            {{--    --------------------------------------- FAQ past ------------------------------------------    --}}


{{--            <div class="col-xl-3 m-3 bg-white" style="border-radius: 20px">--}}
{{--                <div class="p-5">--}}
{{--                    <p class="text-sm-center">Check Requirements--}}
{{--                        to attain the scholarship. Click Here.</p>--}}
{{--                    <a href="{{ route('front.faq') }}" style="text-decoration: none">--}}
{{--                        <button class="m-auto d-block btn btn-success requirements">Requirements</button>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}

            {{--    --------------------------------------- FAQ past ------------------------------------------    --}}


            <div class="col"></div>
        </div>
    </div>



    <div class="row">
        <div class="col"></div>

        {{--    --------------------------------------- Application status ------------------------------------------    --}}

        <div class="col-xl-3 m-3 bg-white" style="border-radius: 20px">
            <div class="p-5">
                <p class="text-sm-center">Application Status.</p>
                @if(auth()->user()->application()->count() > 0)
                    <br>
                    <div class="">
                        <button
                            class="m-auto d-block btn @if(auth()->user()->application->status == 'pending') btn-warning @elseif(auth()->user()->application->status == 'accepted') btn-success @elseif(auth()->user()->application->status == 'rejected') btn-danger @endif status">{{ \Illuminate\Support\Str::ucfirst(auth()->user()->application->status) }}
                        </button>
                    </div>

                @else
                    <div class="">
                        <button
                            class="m-auto d-block btn btn-info status">Not yet applied
                        </button>
                    </div>

                @endif
            </div>
        </div>

        {{--    --------------------------------------- Application status ------------------------------------------    --}}

        {{--   ---------------------------- certification -------------------------------     --}}


        @if(auth()->user()->application()->count() > 0)

            @if(auth()->user()->application->status == 'accepted')
                <div class="col-xl-3 m-3 bg-white" style="border-radius: 20px">
                    <div class="p-5">
                        <p class="text-sm-center">Application accepted! Get your certification</p>
                        <a style="text-decoration: none" href="{{ route('user.certificate') }}">
                            <button class="m-auto d-block btn btn-success" style="border-radius: 50px">Certification
                            </button>
                        </a>
                    </div>
                </div>
            @endif
        @endif

        {{--   ---------------------------- certification -------------------------------     --}}

        {{--  ------------------------------ Edit form -------------------------------------- --}}

        @if(auth()->user()->application()->count() <= 0)


            <div class="col-xl-3 m-3 bg-white" style="border-radius: 20px">
                <div class="p-5">
                    <p class="text-sm-center">Edit Form</p>

                    @if(auth()->user()->personal()->count() > 0)
                        <a href="{{ route('personal-form.edit',auth()->user()->id) }}">Personal Form</a><br>
                    @endif

                    @if(auth()->user()->educational()->count() > 0)
                        <a href="{{ route('educational-form.edit',auth()->user()->id) }}">Educational Form</a><br>
                    @endif

                    @if(auth()->user()->travel()->count() > 0)
                        <a href="{{ route('travel-form.edit',auth()->user()->id) }}">Travel Form</a><br>
                    @endif
                    @if(auth()->user()->banking()->count() > 0)

                        <a href="{{ route('banking-form.edit',auth()->user()->id) }}">Banking Form</a>

                    @endif
                </div>
            </div>

        @endif

        {{--  ------------------------------ Edit form -------------------------------------- --}}

        {{-- ------------------------ Expiration date ----------------------------------  --}}

        <div class="col-xl-3 m-3 bg-white" style="border-radius: 20px">
            <div class="p-5">
                <p class="text-sm-center">Application Deadline</p>
                <p style="text-align: center"><span>{{ $time_difference }}</span> Days left</p>
            </div>
        </div>
        <div class="col"></div>
    </div>

    {{-- ------------------------ Expiration date ----------------------------------  --}}


    {{--  ------------------------------------- internal css ------------------------------------  --}}

    <style>

        a {
            text-decoration: none;
        }

        p {
            font-size: 14px;
        }

        .apply {
            background-color: #609513;
            border: none;
            border-radius: 50px;
        }

        .status {
            /*background-color: #1A3051;*/
            border: none;
            border-radius: 50px;
        }

        .requirements {
            background-color: #1A3051;
            border: none;
            border-radius: 50px;
        }

        .pending-margin-2 {
            margin-top: 33px;
        }

        @media only screen and (min-width: 1281px) and (max-width: 1366px) {
            .pending-margin {
                margin-top: 14px;
            }

            .pending-margin-2 {
                margin-top: 56px;
            }
        }
    </style>

    {{--  ------------------------------------------------------------------- end - internal css   --}}

@endsection
