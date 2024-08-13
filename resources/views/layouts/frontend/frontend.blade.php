<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>BRZL</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="frontend/img/favicon.png">
		
		<!-- all css here -->
        <link rel="stylesheet" href="frontend/css/bootstrap.min.css">
        <link rel="stylesheet" href="frontend/css/animate.css">
        <link rel="stylesheet" href="frontend/css/owl.carousel.min.css">
        <link rel="stylesheet" href="frontend/css/chosen.min.css">
        <link rel="stylesheet" href="frontend/css/themify-icons.css">
        <link rel="stylesheet" href="frontend/css/ionicons.min.css">
        <link rel="stylesheet" href="frontend/css/meanmenu.min.css">
        <link rel="stylesheet" href="frontend/css/bundle.css">
        <link rel="stylesheet" href="frontend/css/style.css">
        <link rel="stylesheet" href="frontend/css/responsive.css">
        
    </head>
    <body>
        <div class="wrapper">
            @include('layouts.frontend.common.header')
            @include('layouts.frontend.common.sidebarcart')
            @include('layouts.frontend.common.mainsearch')

            @yield('home')

            @include('layouts.frontend.common.footer')
        </div>

        <!-- all js here -->
        <script src="frontend/js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="frontend/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="frontend/js/popper.js"></script>
        <script src="frontend/js/bootstrap.min.js"></script>
        <script src="frontend/js/isotope.pkgd.min.js"></script>
        <script src="frontend/js/imagesloaded.pkgd.min.js"></script>
        <script src="frontend/js/jquery.counterup.min.js"></script>
        <script src="frontend/js/waypoints.min.js"></script>
        <script src="frontend/js/ajax-mail.js"></script>
        <script src="frontend/js/owl.carousel.min.js"></script>
        <script src="frontend/js/plugins.js"></script>
        <script src="frontend/js/main.js"></script>
    </body>
</html>