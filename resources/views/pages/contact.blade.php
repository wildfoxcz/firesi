@extends('layouts.main')
@section('content')
    <!-- Start Theme Style  -->
    <div>
        <div class="rn-gradient-circle"></div>
        <div class="rn-gradient-circle theme-pink"></div>
    </div>
    <!-- End Theme Style  -->
<!-- Start Contact Area  -->
<div class="main-content" style="padding-top: 50px">
    <div class="rwt-contact-area rn-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb--40">
                    <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <h2 class="title w-600 mb--20">Contact us</h2>
                    </div>
                </div>
            </div>
            <div class="row row--15">
                <div class="col-lg-12">
                    <div class="rn-contact-address mt_dec--30">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="rn-address">
                                    <div class="icon">
                                        <i class="feather-headphones"></i>
                                    </div>
                                    <div class="inner">
                                        <h4 class="title">Contact Phone Number</h4>
                                        <p><a href="#">+420 727 883 586</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="rn-address">
                                    <div class="icon">
                                        <i class="feather-mail"></i>
                                    </div>
                                    <div class="inner">
                                        <h4 class="title">Our Email Address</h4>
                                        <p><a href="mailto:admin@gmail.com">firesi@firesi.cz</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="rn-address">
                                    <div class="icon">
                                        <i class="feather-map-pin"></i>
                                    </div>
                                    <div class="inner">
                                        <h4 class="title">Our Location</h4>
                                        <p>Lidická kolonie 1108, 586 01 Jihlava</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt--40 row--15">
                <div class="col-lg-7">
                    <form class="contact-form-1 rwt-dynamic-form" id="contact-form" method="POST" action="mail.php">
                        <div class="form-group">
                            <input type="text" name="contact-name" id="contact-name" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="contact-phone" id="contact-phone" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <input type="email" id="contact-email" name="contact-email" placeholder="Your Email">
                        </div>

                        <div class="form-group">
                            <input type="text" id="subject" name="subject" placeholder="Your Subject">
                        </div>

                        <div class="form-group">
                            <textarea name="contact-message" id="contact-message" placeholder="Your Message"></textarea>
                        </div>

                        <div class="form-group">
                            <button name="submit" type="submit" id="submit" class="btn-default btn-large rn-btn">
                                <span>Send now</span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 mt_md--30 mt_sm--30">
                    <div class="google-map-style-1">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2597.292672486755!2d15.59296011588316!3d49.384455471474936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470d1a0f2319118b%3A0xcbb43b641f242149!2sFIRESI%20s.r.o.!5e0!3m2!1scs!2scz!4v1635798549103!5m2!1scs!2scz" width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Area  -->
@endsection
