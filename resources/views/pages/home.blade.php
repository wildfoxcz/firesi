@extends('layouts.main')
@section('content')
<!-- Start Slider Area  -->
<div class="slider-area slider-style-1 variation-default height-950 bg_image bg_image--5" data-black-overlay="2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner text-left">
                    <h3 class="title display-one">„You won’t burn out with us!“</h3>
                    <ul class="list-icon">
                        <li>
                                    <span class="icon background-transparent">
                                        <i class="feather-check"></i>
                                    </span> We protect your business and property.
                        </li>
                        <li>
                                    <span class="icon background-transparent">
                                        <i class="feather-check"></i>
                                    </span> Professional solutions for fire safety in any phase of the project.
                        </li>
                        <li>
                                    <span class="icon background-transparent">
                                        <i class="feather-check"></i>
                                    </span> Saving your investments, time and resources
                        </li>
                    </ul>
                    <div class="button-group mt--40 mt_sm--20">
                        <a class="btn-default btn-icon" href="{{ url('/services') }}">Read more<i class="icon feather-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Slider Area  -->
@endsection
