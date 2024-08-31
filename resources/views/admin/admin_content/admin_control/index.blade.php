@extends('admin.admin_panel.admin')

@section('content')
    <div>
        <h4>Create Admin <span style="color: red"></span></h4>
        <hr>

        <form action="{{ route('store_admin') }}">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="name">
            </div>

            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="email">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="password">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Add Admin">
            </div>
        </form>
    </div>


    <div>
        <table id="example" class="display" style="width:100%">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Email Verified</th>
                <th>Created at</th>
                <th>Delete Admin</th>
            </tr>
            </thead>
            <tbody>
            @foreach($user_admin as $admin)
            <tr>
                <td>{{ $admin->name }}</td>
                <td>{{ $admin->email }}</td>
                <td>{{ $admin->email_verified_at ? 'Verified' : "Not verified" }}</td>
                <td>{{ $admin->created_at }}</td>
                <td><a href="{{ route('delete_admin', $admin->id) }}" class="btn btn-danger">Delete Admin</a></td>
            </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Email Verified</th>
                <th>Created at</th>
                <th>Delete Admin</th>
            </tr>
            </tfoot>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection
