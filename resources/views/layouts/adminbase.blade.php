<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"/>
    <link rel="stylesheet" href="{{asset('assets')}}/Admin/vendors/feather/feather.css">
    <link rel="stylesheet" href="{{asset('assets')}}/Admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/Admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/Admin/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/Admin/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/Admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets')}}/Admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="{{asset('assets')}}/Admin/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets')}}/Admin/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('assets')}}/Admin/images/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @yield("head")
</head>
<body>
<div class="container-scroller">
    @include('admin.navbar')
    <div class="container-fluid page-body-wrapper">
    @include('admin.sidebar')
        <div class="main-panel">
            @yield('content')
    @include('admin.footer')



        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

@yield('foot')
<!-- plugins:js -->
<script src="{{asset('assets')}}/Admin/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('assets')}}/Admin/vendors/chart.js/Chart.min.js"></script>
<script src="{{asset('assets')}}/Admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="{{asset('assets')}}/Admin/vendors/progressbar.js/progressbar.min.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('assets')}}/Admin/js/off-canvas.js"></script>
<script src="{{asset('assets')}}/Admin/js/hoverable-collapse.js"></script>
<script src="{{asset('assets')}}/Admin/js/template.js"></script>
<script src="{{asset('assets')}}/Admin/js/settings.js"></script>
<script src="{{asset('assets')}}/Admin/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('assets')}}/Admin/js/jquery.cookie.js" type="text/javascript"></script>
<script src="{{asset('assets')}}/Admin/js/dashboard.js"></script>
<script src="{{asset('assets')}}/Admin/js/Chart.roundedBarCharts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>
