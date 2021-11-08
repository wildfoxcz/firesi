@extends('layouts.main')
@section('content')
    <!-- Start Slider Area  -->
    <div class="slider-area slider-style-1 variation-default height-850 bg_image bg_image--frs-rack-3" data-black-overlay="7">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner pt--80 text-center" data-sal="slide-up" data-sal-duration="400" data-sal-delay="150">
                        <div>
                        </div>
                        <h2 class="title">Fire protection of Data Center server rack cabinets <br>FRS-RACK®3</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area  -->

    <!-- Start Service Area  -->
    <div class="service-area rn-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="content" style="padding-right: 20px" >
                        <iframe width="480" height="315" src="https://www.youtube.com/embed/UxnNQi-T-0s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6" style="text-align: justify">
                    <p class="mb--10">FRS-RACK®3 is an autonomous, fully automatic detection and extinguishing system.
                        It is purposefully designed for fire protection of control, telecommunication and server cabinets
                        or any other enclosures equipped with 19” rack frames.</p>
                    <p class="mb--10">The device consists of a fully equipped automatic fire detection system, control,
                        evaluation, communication, and extinguishing units. The extinguishing agent FK 5-1-12 fulfills
                        EN 15004-2 requirements and does not affect protected technologies or data stored on protected media.
                        The extinguishant is non-corrosive, non-conductive and allows extinguishing of electrical circuits
                        with nominal voltage up to 1000V.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Area  -->

    <!-- Start Service Area  -->
    <div class="service-area rn-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="padding-bottom: 100px">
                    <div class="row mt_dec--30 row--15" id="animated-lightbox3">
                        <a class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30" href="{{ url('assets/images/frs-rack-3/DSC08348.JPG') }}">
                            <div class="rn-gallery icon-center">
                                <div class="thumbnail">
                                    <img class="radius-small" src="{{ url('assets/images/frs-rack-3/DSC08348.JPG') }}" alt="Corporate Image">
                                </div>
                                <div class="video-icon">
                                    <div class="btn-default rounded-player sm-size">
                                        <span>
                                            <i class="feather-zoom-in"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30" href="{{ url('assets/images/frs-rack-3/DSC08350.JPG') }}">
                            <div class="rn-gallery icon-center">
                                <div class="thumbnail">
                                    <img class="radius-small" src="{{ url('assets/images/frs-rack-3/DSC08350.JPG') }}" alt="Corporate Image">
                                </div>
                                <div class="video-icon">
                                    <div class="btn-default rounded-player sm-size">
                                        <span>
                                            <i class="feather-zoom-in"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30" href="{{ url('assets/images/frs-rack-3/DSC08360.JPG') }}">
                            <div class="rn-gallery icon-center">
                                <div class="thumbnail">
                                    <img class="radius-small" src="{{ url('assets/images/frs-rack-3/DSC08360.JPG') }}" alt="Corporate Image">
                                </div>
                                <div class="video-icon">
                                    <div class="btn-default rounded-player sm-size">
                                        <span>
                                            <i class="feather-zoom-in"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30" href="{{ url('assets/images/frs-rack-3/DSC08403.JPG') }}">
                            <div class="rn-gallery icon-center">
                                <div class="thumbnail">
                                    <img class="radius-small" src="{{ url('assets/images/frs-rack-3/DSC08403.JPG') }}" alt="Corporate Image">
                                </div>
                                <div class="video-icon">
                                    <div class="btn-default rounded-player sm-size">
                                        <span>
                                            <i class="feather-zoom-in"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Area  -->
@endsection
