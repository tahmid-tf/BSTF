@extends('admin.admin_panel.admin')

@section('content')
    <div class="container">
        <div class="dashboard-title">
            <h4>Dashboard</h4>
        </div>
        <div class="dashboard-content">
            <!-- upper section start -->
            <div class="upper-section row">
                <div class="col-md-5 left">
                    <div class="applications">
                        <img src="assets/user-dashboard/images/note.png" alt=""/>
                        Applications
                    </div>
                    <div class="application-bank">
                        <a href="{{ route('application-bank') }}">
                            <button class="btn">Application Bank</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-5 right">
                    <div class="review-applications">
                        <img src="assets/user-dashboard/images/checked.png" alt=""/>
                        Accepted Applications
                    </div>
                    <div class="application-amount"><h2>{{ $applications_acceptance_counter ?? 0 }}</h2></div>
                </div>
            </div>
            <!-- upper section end -->
            <div class="lower-section">
                <div class="counter">
                    <img src="assets/user-dashboard/images/counter.png" alt=""/>
                    Application Counter
                </div>
                <div class="live-counter"><h2>{{ $applications_counter ?? 0 }}</h2></div>
            </div>
        </div>
    </div>

@endsection
