
<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIRESI s.r.o. - You won’t burn out with us!</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/images/favicon.png') }}">

    <!-- CSS ============================================ -->
    <link rel="stylesheet" href="{{ url('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/animation.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/feature.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/magnify.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/lightbox.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
</head>

<body class="active-dark-mode">
<main class="page-wrapper">
    <div class="header-transparent-with-topbar">
        <div class="header-top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 col-12">
                    </div>
                    <div class="col-lg-8 col-md-12 col-12">
                        <div class="header-right">
                            <div class="address-content">
                                <p>
                                    <i class="feather-map-pin"></i>
                                    <span>Lidická kolonie 1108, 586 01 Jihlava</span>
                                </p>
                                <p>
                                    <i class="feather-phone"></i>
                                    <span><a href="#">+420 727 883 586</a></span>
                                </p>
                            </div>
                            <div class="social-icon-wrapper">
                                <ul class="social-icon social-default icon-naked">
                                    <li><a href="https://www.facebook.com/">
                                            <i class="feather-facebook"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.instagram.com/">
                                            <i class="feather-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @include('includes.navigation')
    </div>
    <!-- Start Theme Style  -->
    <div>
        <div class="rn-gradient-circle"></div>
        <div class="rn-gradient-circle theme-pink"></div>
    </div>
    <!-- End Theme Style  -->

    @yield('content')

    <!-- Start Copy Right Area  -->
    <div class="copyright-area copyright-style-one">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8 col-sm-12 col-12">
                    <div class="copyright-left">
                        <ul class="ft-menu link-hover">
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#">Terms And Condition</a>
                            </li>
                            <li>
                                <a href="{{ url('/contact') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-12 col-12">
                    <div class="copyright-right text-center text-lg-end">
                        <p class="copyright-text">© FIRESI s.r.o. 2021 - All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copy Right Area  -->
</main>

<!-- All Scripts  -->
<!-- Start Top To Bottom Area  -->
<div class="rn-back-top">
    <i class="feather-arrow-up"></i>
</div>
<!-- End Top To Bottom Area  -->
<!-- JS
============================================ -->
<script src="{{ url('assets/js/vendor/modernizr.min.js') }}"></script>
<script src="{{ url('assets/js/vendor/jquery.min.js') }}"></script>
<script src="{{ url('assets/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ url('assets/js/vendor/popper.min.js') }}"></script>
<script src="{{ url('assets/js/vendor/waypoint.min.js') }}"></script>
<script src="{{ url('assets/js/vendor/wow.min.js') }}"></script>
<script src="{{ url('assets/js/vendor/counterup.min.js') }}"></script>
<script src="{{ url('assets/js/vendor/feather.min.js') }}"></script>
<script src="{{ url('assets/js/vendor/sal.min.js') }}"></script>
<script src="{{ url('assets/js/vendor/masonry.js') }}"></script>
<script src="{{ url('assets/js/vendor/imageloaded.js') }}"></script>
<script src="{{ url('assets/js/vendor/magnify.min.js') }}"></script>
<script src="{{ url('assets/js/vendor/lightbox.js') }}"></script>
<script src="{{ url('assets/js/vendor/slick.min.js') }}"></script>
<script src="{{ url('assets/js/vendor/easypie.js') }}"></script>
<script src="{{ url('assets/js/vendor/text-type.js') }}"></script>
<script src="{{ url('assets/js/vendor/jquery.style.swicher.js') }}"></script>
<script src="{{ url('assets/js/vendor/js.cookie.js') }}"></script>
<!-- Main JS -->
<script src="{{ url('assets/js/main.js') }}"></script>
</body>

</html>
