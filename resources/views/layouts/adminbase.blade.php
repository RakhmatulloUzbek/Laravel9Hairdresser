<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets')}}/Admin/vendors/feather/feather.css">
    <link rel="stylesheet" href="{{asset('assets')}}/Admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/Admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets')}}/Admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="{{asset('assets')}}/Admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/Admin/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets')}}/Admin/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('assets')}}/Admin/images/favicon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @yield('head')
</head>
<body>
    <div class="container-scroller">
    @include('admin.navbar')
         <div class="container-fluid page-body-wrapper">
              @include('admin.settings')

    @include('admin.sidebar')

             <div class="main-panel">
             @yield('content')

    @include('admin.footer')
    @yield('foot')
<!-- partial -->
            </div>
<!-- main-panel ends -->
        </div>
<!-- page-body-wrapper ends -->
    </div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="{{asset('assets')}}/Admin/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('assets')}}/Admin/vendors/chart.js/Chart.min.js"></script>
<script src="{{asset('assets')}}/Admin/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="{{asset('assets')}}/Admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="{{asset('assets')}}/Admin/js/dataTables.select.min.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('assets')}}/Admin/js/off-canvas.js"></script>
<script src="{{asset('assets')}}/Admin/js/hoverable-collapse.js"></script>
<script src="{{asset('assets')}}/Admin/js/template.js"></script>
<script src="{{asset('assets')}}/Admin/js/settings.js"></script>
<script src="{{asset('assets')}}/Admin/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('assets')}}/Admin/js/dashboard.js"></script>
<script src="{{asset('assets')}}/Admin/js/Chart.roundedBarCharts.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- End custom js for this page-->

</body>
</html>
