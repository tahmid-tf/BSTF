@extends('admin.admin_panel.admin')

@section('content')
    <div class="container">

        @if(session('password_success'))
            <div style="background-color: lightgreen;">
                <p style="padding: 2px">Password Changed Successfully</p>
            </div>

        @elseif(session('password_failed'))
            <div style="background-color: #ff6766;">
                <p style="padding: 2px">Password Changed Failed</p>
            </div>
        @endif


        <section id="password">
            <div class="setting-title">
                <h4>Settings</h4>
            </div>
            <form action="{{ route('changePass') }}" method="post">
                {{ csrf_field() }}
                <div class="setting-content">
                    <h4>Password</h4>
                    <div class="password-form">
                        <form action="">
                            <label for="">Current Password</label><br>
                            <input type="password" name="current_password"
                                   class="@error('current_password') is-invalid @enderror"
                            />
                            <br/>
                            @error('current_password')
                            <div class="password-validation-text">Field cannot left empty</div>
                            @enderror
                            <label for="">New Password</label> <br>
                            <input type="password" name="new_password"
                                   class="@error('new_password') is-invalid @enderror"
                            /> <br/>
                            @error('new_password')
                            <div class="password-validation-text">Field cannot left empty</div>
                            @enderror
                            <label for="">Retype Password</label><br>
                            <input type="password" name="verify_password"
                                   class="@error('verify_password') is-invalid @enderror"
                            /> <br>
                            @error('verify_password')
                            <div class="password-validation-text">Field cannot left empty</div>
                            @enderror
                        </form>
                    </div>
                    <div class="changePass-btn">
                        <button class="btn" type="submit">Change Password</button>
                    </div>
                </div>
            </form>

        </section>
    </div>
@endsection
