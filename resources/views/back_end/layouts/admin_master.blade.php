<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>conX | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/et_line_font.css') }}">

    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('/back_end/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4
    .min
    .css') }}">
    <link rel="stylesheet" href="{{ asset('/back_end/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('/back_end/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/back_end/plugins/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('/back_end/dist/css/main.css') }}">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Main Navbar Section Started Here -->
    <nav class="main-header navbar navbar-expand navbar-dark navbar-gray-dark">
        <!-- Left navbar links -->
{{--        <ul class="navbar-nav">--}}
{{--            <li class="nav-item d-none d-sm-inline-block">--}}
{{--                <a href="" class="nav-link">Home</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item d-none d-sm-inline-block">--}}
{{--                <a href="#" class="nav-link">Contact</a>--}}
{{--            </li>--}}
{{--        </ul>--}}

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!--Account Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fal fa-comment"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
{{--                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <!-- Message Start -->--}}
{{--                        <div class="media">--}}
{{--                            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">--}}
{{--                            <div class="media-body">--}}
{{--                                <h3 class="dropdown-item-title">--}}
{{--                                    Brad Diesel--}}
{{--                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>--}}
{{--                                </h3>--}}
{{--                                <p class="text-sm">Call me whenever you can...</p>--}}
{{--                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Message End -->--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <!-- Message Start -->--}}
{{--                        <div class="media">--}}
{{--                            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">--}}
{{--                            <div class="media-body">--}}
{{--                                <h3 class="dropdown-item-title">--}}
{{--                                    John Pierce--}}
{{--                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>--}}
{{--                                </h3>--}}
{{--                                <p class="text-sm">I got your message bro</p>--}}
{{--                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Message End -->--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <!-- Message Start -->--}}
{{--                        <div class="media">--}}
{{--                            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">--}}
{{--                            <div class="media-body">--}}
{{--                                <h3 class="dropdown-item-title">--}}
{{--                                    Nora Silvester--}}
{{--                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>--}}
{{--                                </h3>--}}
{{--                                <p class="text-sm">The subject goes here</p>--}}
{{--                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Message End -->--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>--}}
{{--                </div>--}}
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fal fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
{{--                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
{{--                    <span class="dropdown-item dropdown-header">15 Notifications</span>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <i class="fas fa-envelope mr-2"></i> 4 new messages--}}
{{--                        <span class="float-right text-muted text-sm">3 mins</span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <i class="fas fa-users mr-2"></i> 8 friend requests--}}
{{--                        <span class="float-right text-muted text-sm">12 hours</span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <i class="fas fa-file mr-2"></i> 3 new reports--}}
{{--                        <span class="float-right text-muted text-sm">2 days</span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>--}}
{{--                </div>--}}
            </li>

            <!-- Account Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fad fa-th"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-md-right user-custom-dropdown do-separator">
                    <a href="#" class="dropdown-item px-4 pb-3">
                        <i class="fal fa-users-cog do-nav-separator"></i>
                        <span>My Account</span>
                    </a>

                    <a href="#" class="dropdown-item px-4 pb-3">
                        <i class="fal fa-cogs do-nav-separator"></i>
                        <span>Settings</span>
                    </a>

                    <a href="#" class="dropdown-item px-4 pb-3">
                        <i class="fal fa-user-lock do-nav-separator"></i>
                        <span>Lock Screen</span>
                    </a>

                    <a href="{{ route('logout') }}" class="dropdown-item px-4 pb-3">
                        <i class="fal fa-sign-out-alt do-nav-separator"></i>
                        <span>Log Out</span>
                    </a>
                </div>
            </li>
        </ul>
    </nav>
    <!-- Main Navbar Section Ended Here -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-teal">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <div class="do-users text-center">
                <div class="do-user-profile">
                    <img class="do-user-profile-img" src="{{ asset('back_end/images/profile.jpeg') }}" alt="" srcset="">
                </div>
                <p class="do-user-name">Dr Mamun</p>
                <p class="do-user-email">dr@mamun.com</p>
            </div>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="">
                <ul class="mb nav nav-pills nav-sidebar flex-column text-sm nav-child-indent" data-widget="treeview"
                    role="menu"
                    data-accordion="false">

                    <!-- Dashboard Menu Started From Here-->
                    <li class="nav-header">General</li>

                    <li class="nav-item has-treeview ">
                        <a href="#" class="nav-link active">
                            <i class="fal fa-tachometer-alt nav-icon"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>

                    <!-- Outlets Menu Started From Here -->
                    <li class="nav-item has-treeview">
                        <a href="pages/widgets.html" class="nav-link">
                            <i class="fal fa-warehouse-alt nav-icon"></i>
                            <p>
                                Outlets
                                <i class="fad fa-angle-left right"></i>
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>

                        <ul class="nav nav-treeview collapse">
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    <i class="fal fa-dot-circle nav-sub-icon"></i>
                                    <p>Uttara Outlet</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fal fa-dot-circle nav-sub-icon"></i>
                                    <p>Dhanmondi Outlet</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fal fa-dot-circle nav-sub-icon"></i>
                                    <p>Gulshan Outlet</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Franchise Menu Started From Here -->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fal fa-store-alt nav-icon"></i>
                            <p>
                                Franchise
                                <i class="fad fa-angle-left right"></i>
                                <span class="badge badge-info right">6</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/layout/top-nav.html" class="nav-link">
                                    <i class="fal fa-dot-circle nav-sub-icon"></i>
                                    <p>All Franchise</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/boxed.html" class="nav-link">
                                    <i class="fal fa-dot-circle nav-sub-icon"></i>
                                    <p>Add Franchise</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Inventory -->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fal fa-inventory nav-icon"></i>
                            <p>
                                Inventory
                                <i class="fad fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/charts/chartjs.html" class="nav-link">
                                    <i class="fal fa-dot-circle nav-sub-icon"></i>
                                    <p>All Vendor</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/charts/flot.html" class="nav-link">
                                    <i class="fal fa-dot-circle nav-sub-icon"></i>
                                    <p>Flot</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Reservation List -->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fal fa-calendar-check nav-icon"></i>
                            <p>
                                Reservation List
                                <i class="fad fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/UI/general.html" class="nav-link">
                                    <i class="fal fa-dot-circle nav-sub-icon"></i>
                                    <p>General</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/UI/icons.html" class="nav-link">
                                    <i class="fal fa-dot-circle nav-sub-icon"></i>
                                    <p>Icons</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/UI/buttons.html" class="nav-link">
                                    <i class="fal fa-dot-circle nav-sub-icon"></i>
                                    <p>Buttons</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Category Section Started From here-->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fal fa-layer-group nav-icon"></i>
                            <p>
                                Category
                                <i class="fad fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/forms/general.html" class="nav-link">
                                    <i class="fal fa-dot-circle nav-sub-icon"></i>
                                    <p>All Category</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/forms/advanced.html" class="nav-link">
                                    <i class="fal fa-dot-circle nav-sub-icon"></i>
                                    <p>Add Category</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Food Menu -->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fal fa-address-book nav-icon"></i>
                            <p>
                                Food Menu
                                <i class="fad fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('menu.view-all') }}" class="nav-link">
                                    <i class="fal fa-dot-circle nav-sub-icon"></i>
                                    <p>All Food Item</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('menu.show-add-item') }}" class="nav-link">
                                    <i class="fal fa-dot-circle nav-sub-icon"></i>
                                    <p>Add Food Item</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Payroll Management Section Started-->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fal fa-money-check-alt nav-icon"></i>
                            <p>
                                Payroll
                                <i class="fad fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/tables/simple.html" class="nav-link">
                                    <i class="fal fa-dot-circle nav-sub-icon"></i>
                                    <p>Simple Tables</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/tables/data.html" class="nav-link">
                                    <i class="fal fa-dot-circle nav-sub-icon"></i>
                                    <p>DataTables</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/tables/jsgrid.html" class="nav-link">
                                    <i class="fal fa-dot-circle nav-sub-icon"></i>
                                    <p>jsGrid</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Marketing Management Section Started-->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fal fa-mail-bulk nav-icon"></i>
                            <p>
                                Marketing
                                <i class="fad fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/tables/simple.html" class="nav-link">
                                    <i class="fal fa-dot-circle nav-sub-icon"></i>
                                    <p>Simple Tables</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/tables/data.html" class="nav-link">
                                    <i class="fal fa-dot-circle nav-sub-icon"></i>
                                    <p>DataTables</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/tables/jsgrid.html" class="nav-link">
                                    <i class="fal fa-dot-circle nav-sub-icon"></i>
                                    <p>jsGrid</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- FeedBack Section Started From Here-->
                    <li class="nav-header mt-n4">Feedback</li>

                    <li class="nav-item has-treeview">
                        <a href="pages/calendar.html" class="nav-link">
                            <i class="fal fa-comments-alt nav-icon"></i>
                            <p>
                                Feedback
                                <i class="fad fa-angle-left right"></i>
                                <span class="badge badge-info right">2</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/gallery.html" class="nav-link">
                                    <i class="fal fa-dot-circle nav-sub-icon"></i>
                                    <p>
                                        Franchises
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/gallery.html" class="nav-link">
                                    <i class="fal fa-dot-circle nav-sub-icon"></i>
                                    <p>
                                        Employees
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="fal fa-dot-circle nav-sub-icon"></i>
                                    <p>
                                        Customers
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- Sidebar Menu Section Ended-->

        </div>

        <!-- sidebar Section Ended -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background: #2d343d">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mt-3">
                    <div class="col-sm-9">
                        <h5 class="ml-2 text-muted">Dashboard</h5>
                    </div><!-- /.col -->
                    <div class="col-sm-3">
                        <div class="input-group ">
                            <input type="text" class="form-control-sm do-date-time" id="doDateTime" readonly>
                            <div class="input-group-append">
                                <div class="input-group-text bg-danger" style="border: none"><i class="fal fa-calendar-alt"></i></div>
                            </div>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        @yield('dashboard')
        @yield('add-food-menu')
        @yield('menu')
    </div>
    <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('/back_end/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('/back_end/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/back_end/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- jQuery Knob Chart -->
<script src="{{ asset('/back_end/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('/back_end/plugins/moment/moment.min.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('/back_end/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<!-- overlayScrollbars -->
<script src="{{ asset('/back_end/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- App -->
<script src="{{ asset('/back_end/dist/js/adminlte.js') }}"></script>
<script src="{{ asset('/back_end/plugins/summernote/summernote-bs4.js') }}"></script>
<script src="{{ asset('/back_end/dist/js/pages/dashboard.js') }}"></script>
<script src="{{ asset('/back_end/dist/js/main.js') }}"></script>
<script >

</script>
</body>
</html>
