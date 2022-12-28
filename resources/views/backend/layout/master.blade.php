<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 08:40:04 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Digitalogies Offical</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
@include('backend.include.css')

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
@include('backend.include.header')
        <!-- ========== App Menu ========== -->
@include('backend.include.nav')
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        @yield('content')
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->





    <!-- Theme Settings -->
@include('backend.include.setting')

    <!-- JAVASCRIPT -->
@include('backend.include.script')
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 08:40:54 GMT -->
</html>
