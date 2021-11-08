<!-- Start Header Area  -->
<header class="rn-header header-default header-transparent header-sticky">
    <div class="container position-relative">
        <div class="row align-items-center row--0">
            <div class="col-lg-3 col-md-6 col-4">
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img class="logo-light" src="{{ url('assets/images/logo/logo.png') }}" alt="Corporate Logo">
                        <img class="logo-dark" src="{{ url('assets/images/logo/logo-dark.png') }}" alt="Corporate Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-9 col-md-6 col-8 position-static">
                <div class="header-right">
                    <nav class="mainmenu-nav d-none d-lg-block">
                        <ul class="mainmenu">
                            <li><a href="#">WHY FIRESI</a></li>
                            <li class="has-droupdown has-menu-child-item"><a href="#">SERVICES</a>
                                <ul class="submenu">
                                    <li><a href="{{ url('/services') }}">SERVICES</a></li>
                                    <li><a href="">MANUFACTURING</a></li>
                                    <li><a href="">INSTALLATION</a></li>
                                    <li><a href="">PRESSURE VESSEL INSPECTION</a></li>
                                </ul>
                            </li>
                            <li><a href="#">PROJECTS</a></li>
                            <li class="has-droupdown has-menu-child-item"><a href="#">PRODUCTS</a>
                                <ul class="submenu">
                                    <li><a href="">FRS RACK 3</a></li>
                                    <li><a href="">FIRESI MODUL Fire Suppression</a></li>
                                    <li><a href="">VALVES FRS-H</a></li>
                                </ul>
                            </li>
                            <li class="has-droupdown has-menu-child-item"><a href="{{ url('/about-us') }}">ABOUT US</a>
                                <ul class="submenu">
                                    <li><a href=""> OUR TEAM</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('contact') }}">CONTACT</a></li>
                        </ul>
                    </nav>

                    <!-- Start Mobile-Menu-Bar -->
                    <div class="mobile-menu-bar ml--5 d-block d-lg-none">
                        <div class="hamberger">
                            <button class="hamberger-button">
                                <i class="feather-menu"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header Area  -->

<div class="popup-mobile-menu">
    <div class="inner">
        <div class="header-top">
            <div class="logo">
                <a href="index.html">
                    <img class="logo-light" src="{{ url('assets/images/logo/logo.png') }}" alt="Corporate Logo">
                </a>
            </div>
            <div class="close-menu">
                <button class="close-button">
                    <i class="feather-x"></i>
                </button>
            </div>
        </div>
        <ul class="mainmenu">
            <li><a href="#">ABOUT US</a></li>
            <li><a href="#">TEAM</a></li>
            <li><a href="#">WHY FIRESI</a></li>
            <li><a href="#">PRODUCTS</a></li>
            <li><a href="#">SERVICES</a></li>
            <li><a href="contact.html">CONTACT</a></li>
        </ul>
    </div>
</div>
