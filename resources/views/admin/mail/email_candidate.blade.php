@extends('admin.admin_panel.admin')

@section('content')
    <h4>Email Candidate</h4>
    <hr>

    <form action="{{ route('email-candidate') }}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <input type="text" placeholder="Email" class="form-control @error('receiver') is-invalid @enderror" name="receiver" value="{{ $email }}">
        </div>

        @error('receiver')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <input type="text" placeholder="Subject" class="form-control @error('subject') is-invalid @enderror" name="subject">
        </div>

        @error('subject')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <textarea name="body" id="" cols="30" rows="10" class="form-control @error('body') is-invalid @enderror" placeholder="Message body"></textarea>
        </div>

        @error('body')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <button class="btn btn-info">Send Mail</button>
        </div>
    </form>
@endsection
