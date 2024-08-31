@extends('admin.admin_panel.admin')

@section('content')
    <div class="d-flex flex-wrap justify-content-between">
        <div>
            <h4>{{ $type }}</h4>
        </div>
        <div>
            <a href="{{ route('export-excel') }}">
                <button class="btn btn-success">Export Excel</button>
            </a>
            <a href="{{ route('export-csv') }}">
                <button class="btn btn-warning">Export Csv</button>
            </a>
            <a href="{{ route('export-json') }}" target="_blank">
                <button class="btn btn-info">Export Json</button>
            </a>
        </div>
    </div>
    <br><br>
    <div class="container dataTable-container">
        <section id="application-bank">
            <div class="application-title">
            </div>
            <div class="application-bank">
                <table
                    id="example"
                    class="table table-striped table-bordered"
                    style="width: 100%"
                >
                    <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Unique ID</th>
                        <th>Username</th>
                        <th>Date of Submission</th>
                        <th>Status</th>
                        <th>Contact</th>
                        <th>Report</th>
                        <th>Delete</th>
                        <th>View</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $id = 0 ?>
                    @foreach($applications as $application)
                        <tr>
                            <td>{{ $id += 1 }}</td>
                            <th>{{ $application->applicant_unique_id}}</th>
                            <td>{{ $application->username }}</td>
                            <td>{{ $application->created_at->format('M d Y') }}</td>
                            <td>{{ $application->status }}</td>
                            <td><a href="{{ route('create-email', $application->user_id) }}">
                                    <button class="btn btn-success">Email</button>
                                </a></td>
                            <td><a href="{{ route('applicant-report', $application->user_id) }}">
                                    <button class="btn btn-success">Report</button>
                                </a></td>
                            <td>
                                <div class="view-btn">
                                    <a href="{{ route('personal-verification',$application->user_id) }}">
                                        <button class="btn" id="view-btn">View</button>
                                    </a>
                                </div>
                            </td>
                            <td><a href="{{ route('delete-report', $application->user_id) }}">
                                    <button class="btn btn-danger">Delete</button>
                                </a></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </section>
    </div>
@endsection
