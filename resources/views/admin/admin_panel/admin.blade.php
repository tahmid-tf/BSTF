<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content=""/>
    <meta name="author" content=""/>

    <title>BSTF Admin Panel</title>

    <!-- Custom fonts for this template-->
    <link
        href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}"
        rel="stylesheet"
        type="text/css"
    />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"
    />

    <link
        rel="stylesheet"
        href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css"
    />

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/change-password/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/application-bank/style.css')}}"/>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet"/>

    {{--  ------------------------------------ admin dashboard css -------------------------------------  --}}

    <!-- css link -->
    <link
        rel="stylesheet"
        type="text/css"
        href="assets/user-dashboard/style.css"
    />
    <!-- Bootstrap CSS -->
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    />

    {{--  ------------------------------------ admin dashboard  css-------------------------------------  --}}
</head>

<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    <ul
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar"
    >
        <!-- Sidebar - Brand -->
        <a
            class="sidebar-brand d-flex align-items-center justify-content-center"
            href="/"
        >
            <div class="sidebar-brand-icon rotate-n-15">
                {{--                <i class="fas fa-laugh-wink"></i>--}}
            </div>
            <div class="sidebar-brand-text mx-3" style="font-size: 11px">Bangladesh-Sweden
                Trust Fund
            </div>
        </a>

        {{--    ----------------------------------------------------- Sidebar Items -----------------------------------------------------------    --}}

        {{--  ----------------------------------------- Dashboard ------------------------------------------ --}}

        <!-- Divider -->
        <hr class="sidebar-divider my-0"/>

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin-panel') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Nav Item - Dashboard -->

        {{--  ------------------------------------------------------------------------- end - Dashboard  --}}


        {{--  ----------------------------------------- Application Bank ------------------------------------------ --}}


        <li class="nav-item">
            <a class="nav-link" href="{{ route('application-bank') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Application Bank</span></a>
        </li>


        {{--  ----------------------------------------------------------------------------- end - Application Bank  --}}

        {{--  ----------------------------------------- Archived Application Bank ------------------------------------------ --}}


        <li class="nav-item">
            <a class="nav-link" href="{{ route('archived-application-bank') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Archived Applications</span></a>
        </li>


        {{--  ----------------------------------------------------------------------------- end - Archived Application Bank  --}}

        {{--  ---------------------------------------------- Settings --------------------------------------------- --}}


        <li class="nav-item">
            <a class="nav-link" href="{{ route('password-change') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Settings</span></a
            >
        </li>

        {{--  ------------------------------------------------------------------------------------- end - Settings  --}}


        {{-- ---------------------------------------------- Admin control ---------------------------------------- --}}

        <li class="nav-item">
            <a class="nav-link" href="{{ route('index_admin') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Admin Control <span style="color: red"></span></span></a
            >
        </li>

        {{-- -------------------------------------------------------------------------------------- Admin control  --}}

        {{--  ----------------------------------------- Deadline settings ---------------------------------------- --}}

        <li class="nav-item">
            <a class="nav-link" type="button" class="btn btn-primary" href="{{ route('expire.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Deadline Settings</span></a>
        </li>

        {{--  -------------------------------------------------------------------------- end -  Deadline settings  --}}


        {{--  ----------------------------------------- Archive Site ------------------------------------------ --}}


        <li class="nav-item">
            <a class="nav-link" type="button" class="btn btn-primary" data-toggle="modal" data-target="#siteArchive">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span style="color: red">Site Archive</span></a>
        </li>

        <!-- Modal -->
        <div class="modal fade" id="siteArchive" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure to archive site?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                        <a href="{{ route('archive') }}">
                            <button type="button" class="btn btn-danger">Archive</button>
                        </a>

                    </div>
                </div>
            </div>
        </div>


        {{--  -------------------------------------------------------------------------------- end - Archive site  --}}

        {{--  ----------------------------------------- Data Archive ------------------------------------------ --}}


        <li class="nav-item">
            <a class="nav-link" type="button" class="btn btn-primary" data-toggle="modal" data-target="#Data_Archive">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span style="color: red">Current Data Archive</span></a>
        </li>

        <!-- Modal -->
        <div class="modal fade" id="Data_Archive" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure to archive all current data?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                        <a href="{{ route('data.archive') }}">
                            <button type="button" class="btn btn-danger">Archive</button>
                        </a>

                    </div>
                </div>
            </div>
        </div>


        {{--  -------------------------------------------------------------------------------- end - Data Archive  --}}

        {{--  ----------------------------------------- Data UnArchive ------------------------------------------ --}}


        <li class="nav-item">
            <a class="nav-link" type="button" class="btn btn-primary" data-toggle="modal" data-target="#UnArchive">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span style="color: red">All Data Unarchive</span></a>
        </li>

        <!-- Modal -->
        <div class="modal fade" id="UnArchive" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure to unarchive all current data?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                        <a href="{{ route('data.unArchive') }}">
                            <button type="button" class="btn btn-danger">unarchive</button>
                        </a>

                    </div>
                </div>
            </div>
        </div>


        {{--  -------------------------------------------------------------------------------- end - Data UnArchive  --}}



        {{--    --------------------------------------------------------------------------------------------------------- end - Sidebar Items     --}}


        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content" style="background-color: #E5E5E5">
            <!-- Topbar -->
            <nav
                class="
              navbar navbar-expand navbar-light
              bg-white
              topbar
              mb-4
              static-top
              shadow
            "
            >
                <!-- Sidebar Toggle (Topbar) -->
                <button
                    id="sidebarToggleTop"
                    class="btn btn-link d-md-none rounded-circle mr-3"
                >
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="searchDropdown"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div
                            class="
                    dropdown-menu dropdown-menu-right
                    p-3
                    shadow
                    animated--grow-in
                  "
                            aria-labelledby="searchDropdown"
                        >
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input
                                        type="text"
                                        class="form-control bg-light border-0 small"
                                        placeholder="Search for..."
                                        aria-label="Search"
                                        aria-describedby="basic-addon2"
                                    />
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="userDropdown"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"
                  >{{ auth()->user()->name }}</span
                  >

                            {{--   --------------------- admin image ----------------------------- --}}

                            <img
                                class="img-profile rounded-circle"
                                src="data:image/png;base64,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"
                                alt="No image"
                            />

                            {{--                            @if(auth()->user()->personal()->first() != null)--}}
                            {{--                                <img--}}
                            {{--                                    class="img-profile rounded-circle"--}}
                            {{--                                    src="{{ asset('storage/'.auth()->user()->personal->image) }}" alt="No image"--}}
                            {{--                                />--}}
                            {{--                            @endif--}}


                            {{--   --------------------- admin image ----------------------------- --}}

                        </a>
                        <!-- Dropdown - User Information -->
                        <div
                            class="
                    dropdown-menu dropdown-menu-right
                    shadow
                    animated--grow-in
                  "
                            aria-labelledby="userDropdown"
                        >
                            <a
                                class="dropdown-item"
                                href="#"
                                data-toggle="modal"
                                data-target="#logoutModal"
                            >
                                <i
                                    class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                                ></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                @yield('content')
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Design And Developed by SIS Inflexionpoint BD for Economics Relations Division.</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div
    class="modal fade"
    id="logoutModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button
                    class="close"
                    type="button"
                    data-dismiss="modal"
                    aria-label="Close"
                >
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                Select "Logout" below if you are ready to end your current session.
            </div>
            <div class="modal-footer">
                <button
                    class="btn btn-secondary"
                    type="button"
                    data-dismiss="modal"
                >
                    Cancel
                </button>
                <a class="btn btn-primary" href="{{ route('logout-page') }}">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('js/sb-admin-2.js')}}"></script>


<!-- data table -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function () {
        // $('#example').DataTable();

        var table = $('#example').DataTable({
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        });
    });
</script>

</body>
</html>
