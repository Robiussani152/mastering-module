<!DOCTYPE html>
<html lang="en">
<head>
    @include('mastering::layouts.css')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
@include('mastering::layouts.header')
@include('mastering::layouts.sidebar')
    @yield('content')
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    @include('mastering::layouts.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('mastering::layouts.scripts')
</body>
</html>
