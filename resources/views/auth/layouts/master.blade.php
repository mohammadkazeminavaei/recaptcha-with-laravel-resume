<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#f7858d">
    <meta name="msapplication-navbutton-color" content="#f7858d">
    <meta name="apple-mobile-web-app-status-bar-style" content="#f7858d">
    <title>ورود / ثبت نام | فروشگاه اینترنتی دیدی کالا</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href=" {{ asset('/assets/css/vendor/bootstrap.min.css') }} ">
    <!-- Plugins -->
    <link rel="stylesheet" href=" {{ asset('/assets/css/vendor/owl.carousel.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/assets/css/vendor/jquery.horizontalmenu.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/assets/css/vendor/nouislider.min.css') }} ">
    <!-- Font Icon -->
    <link rel="stylesheet" href=" {{ asset('/assets/css/vendor/materialdesignicons.min.css') }} ">
    <!-- Main CSS File -->
    <link rel="stylesheet" href=" {{ asset('/assets/css/main.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/assets/css/colors/default.css') }} " id="colorswitch">
</head>

<body>

    <div class="wrapper">

       

        <!-- Start main-content -->
        @yield('main')
        <!-- End main-content -->

       

    </div>



    <!-- Core JS Files -->
    <script src=" {{ asset('/assets/js/vendor/jquery-3.4.1.min.js') }} "></script>
    <script src=" {{asset('/assets/js/vendor/popper.min.js')}} "></script>
    <script src=" {{asset('/assets/js/vendor/bootstrap.min.js')}} "></script>
    <!-- Plugins -->
    <script src=" {{asset('/assets/js/vendor/owl.carousel.min.js')}} "></script>
    <script src=" {{asset('/assets/js/vendor/isotope.pkgd.min.js')}} "></script>
    <script src=" {{asset('/assets/js/vendor/jquery.horizontalmenu.js')}} "></script>
    <script src=" {{asset('/assets/js/vendor/nouislider.min.js')}} "></script>
    <script src=" {{asset('/assets/js/vendor/wNumb.js')}} "></script>
    <script src=" {{asset('/assets/js/vendor/ResizeSensor.min.js')}} "></script>
    <script src=" {{asset('/assets/js/vendor/theia-sticky-sidebar.min.js')}} "></script>
    <!-- Main JS File -->
    <script src=" {{asset('/assets/js/main.js')}} "></script>
</body>

</html>