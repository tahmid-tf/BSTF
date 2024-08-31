@extends('user.admin_panel.admin')

@section('content')
    <div class="profile-div">
        <p>Profile</p>

        <div>
            <div class="row" style="margin: 0; padding: 0">
                <div class="col"></div>
                <div class="col-md-5 profile-form-div">
                    <div class="profile-box">
                        <img src="{{ asset('storage/'.auth()->user()->personal->image) }}" alt="No image" class="img-rounded profile-image">
                    </div>
                    <div class="info-div">
                        <div class="info-display">
                            <div>
                                <img src="{{ asset('assets/images/user.png') }}" alt="" class="icon-img">
                            </div>
                            <div class="info-text">
                                <span class="info-text-label">Name</span><br>
                                <span class="info-text-name">{{ auth()->user()->name }}</span>
                            </div>
                        </div>

{{--                        <div class="info-display">--}}
{{--                            <div>--}}
{{--                                <img src="{{ asset('assets/images/university.png') }}" alt="" class="icon-img">--}}
{{--                            </div>--}}
{{--                            <div class="info-text">--}}
{{--                                <span class="info-text-label">Institution</span><br>--}}
{{--                                <span class="info-text-name">University Of Sweden</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="info-display">
                            <div>
                                <img src="{{ asset('assets/images/email.png') }}" alt="" class="icon-img">
                            </div>
                            <div class="info-text">
                                <span class="info-text-label">Email</span><br>
                                <span class="info-text-name">{{ auth()->user()->email }}</span>
                            </div>
                        </div>

                        <div class="info-display">
                            <div>
                                <img src="{{ asset('assets/images/phone.png') }}" alt="" class="icon-img">
                            </div>
                            <div class="info-text">
                                <span class="info-text-label">Phone</span><br>
                                <span class="info-text-name">{{ auth()->user()->personal->phone_number }}</span>
                            </div>
                        </div>
                        <div>
{{--                            <button class="edit-profile">Edit profile</button>--}}
                        </div>
                    </div>

                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
@endsection
