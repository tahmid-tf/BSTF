@extends('admin.admin_panel.admin')

@section('content')
    <h4>Form deadline settings</h4>
    <hr>
    <form action="{{ route('expire.update', $expire->id) }}" method="post" enctype="multipart/form-data">
        @method('put')
        {{ csrf_field() }}

        <div class="form-group">
            <label for="">Change deadline settings</label>
            <input type="date" class="form-control @error('expire_date') is-invalid @enderror" id="" placeholder="dd-mm-yyyy" name="expire_date"><br>
            <p>Current expire date : {{ \Carbon\Carbon::parse($expire->expire_date)->format('d-m-Y') }}</p>
        </div>

        @error('expire_date')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

