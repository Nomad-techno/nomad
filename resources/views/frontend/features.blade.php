@php
    $lang =App::getLocale();
    $i=1;
@endphp
@extends('layouts.main')
@section('content')
<section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Our Features</h2>
                            <h5>home <span></span> feature</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::use sasu part end::-->
    <section class="use_sasu padding_top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_feature">
                            <div class="single_feature_part">
                                <img src="{{asset('frontend/img/icon/feature_icon_1.png')}}" alt="">
                                <h4>{{ $service_secured!=null?$service_secured->{'title_'.$lang}:'' }}</h4>
                                <p>{{ $service_secured!=null?$service_secured->{'value_'.$lang}:'' }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_feature">
                            <div class="single_feature_part">
                                <img src="{{asset('frontend/img/icon/feature_icon_2.png')}}" alt="">
                                <h4>{{ $service_design!=null?$service_design->{'title_'.$lang}:'' }}</h4>
                                <p>{{ $service_design!=null?$service_design->{'value_'.$lang}:'' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_feature">
                            <div class="single_feature_part">
                                <img src="{{asset('frontend/img/icon/feature_icon_3.png')}}" alt="">
                                <h4>{{ $service_volunteer!=null?$service_volunteer->{'title_'.$lang}:'' }}</h4>
                                <p>{{ $service_volunteer!=null?$service_volunteer->{'value_'.$lang}:'' }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{asset('frontend/img/animate_icon/Ellipse_1.png')}}" alt="" class="feature_icon_1 custom-animation1">
        </section>
    <!--::use sasu part end::-->

    <!--::about_us part start::-->
    <section class="about_us section_padding">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-6 col-lg-5">
                        <div class="about_us_text">
                            <img src="{{asset('frontend/img/icon/Icon_1.png')}}" alt="">
                            <h2>{{ $one_number!=null?$one_number->{'title_'.$lang}:'' }}</h2>
                            <p>{{ $one_number!=null?$one_number->{'value_'.$lang}:'' }}</p>
                            <a href="#" class="btn_2">learn more</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="learning_img">
                            <img src="{{ $one_number!=null?asset('storage').'/'. $one_number->image:'' }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{asset('frontend/img/animate_icon/Ellipse_4.png')}}" alt="" class="feature_icon_1 custom-animation1">
        </section>
    <!--::about_us part end::-->

    <!--::about_us part start::-->
    <section class="about_us right_time">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-6 col-lg-6">
                        <div class="learning_img">
                            <img src="{{ $two_number!=null?asset('storage').'/'.$two_number->image:'' }}"  alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="about_us_text">
                            <img src="{{asset('frontend/img/icon/Icon_2.png')}}" alt="">
                            <h2>{{ $two_number!=null?$two_number->{'title_'.$lang}:'' }}</h2>
                            <p>{{ $two_number!=null?$two_number->{'value_'.$lang}:'' }}</p>
                            <a href="#" class="btn_2">learn more</a>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{asset('frontend/img/animate_icon/Ellipse_5.png')}}" alt="" class="feature_icon_2 custom-animation2">
        </section>
    <!--::about_us part end::-->

    <!--::subscribe us part end::-->
    <section class="subscribe_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="subscribe_part_text text-center">
                        <h2>Experience the most simple way to <br>
                            manage business</h2>
                        <div class="subscribe_form">
                            <form action="#">
                                <div class="form-row">
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" placeholder="enter your email">
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="subscribe_btn">
                                            <div class="btn_2 d-block">free trail</div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{asset('frontend/img/animate_icon/Ellipse_5.png')}}" alt="" class="feature_icon_2 custom-animation2">
    </section>
    <!--::subscribe us part end::-->

    <!--::client logo part end::-->
    <section class="client_logo">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="client_logo_slider owl-carousel d-flex justify-content-between">
                            @foreach ($partners as $item)
                            <div class="single_client_logo">
                                <img src="{{asset('storage').'/'.$item->image}}" alt="">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
