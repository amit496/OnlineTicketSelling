<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Zoogler - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('admin.layouts.allcss')
    @yield('css')
</head>


<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        @include('admin.layouts.left-sidebar')
        <!-- Left Sidebar End -->


        <!-- Start right Content here -->

        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <!-- Top Bar Start -->
                @include('admin.layouts.header')
                <!-- Top Bar End -->

                <div class="page-content-wrapper ">

                    @yield('content')

                </div> <!-- Page content Wrapper -->

            </div> <!-- content -->

            @include('admin.layouts.footer')

        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->
    @include('admin.layouts.alljs')
    @yield('script')


</body>

</html>
