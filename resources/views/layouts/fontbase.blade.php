<!-- PHP INCLUDES -->

<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->


<!-- Mirrored from localhost/BarbershopWebsite/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Apr 2022 11:30:07 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
    <meta name="description" content="Barbershop Booking Space">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="JAIRI IDRISS">
    <title>@yield('title')</title>

    <!-- EXTERNAL CSS LINKS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/Design/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/Design/fonts/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/Design/css/main.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/Design/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/Design/css/barber-icons.css">

    <!-- GOOGLE FONTS -->

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prata&amp;display=swap" rel="stylesheet">
    @yield('head')
</head>
<body>
@include('home.header')

@section('slider')
@show

@yield('content')

@include('home.footer')
@yield('foot')
</body>
</html>
