@extends('master')

@section('sidebar')

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span></span></a>
        </li>

    </ul>

    <!-- End of Sidebar -->

@endsection

@section('main_content')

        <div class="container-fluid">
            @yield('dashboard_main_content')
        </div>


@endsection



@yield('dashboard_script')
