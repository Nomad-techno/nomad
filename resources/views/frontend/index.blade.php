@php
    $lang =App::getLocale();
    $i=1;
@endphp
@extends('layouts.main')
@section('content')
<section class="banner_part">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5">
                    <div class="banner_img d-none d-lg-block">
                        <img src="{{asset('/frontend/img/banner_img.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>{{ $try_for_free!=null?$try_for_free->{'title_'.$lang}:'' }}</h1>
                            <p>{{ $try_for_free!=null?$try_for_free->{'value_'.$lang}:'' }}</p>
                            <a href="#" class="btn_2">try for free</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{asset('/frontend/img/animate_icon/Ellipse_7.png')}}" alt="" class="feature_icon_1 custom-animation1">
        <img src="{{asset('/frontend/img/animate_icon/Ellipse_8.png')}}" alt="" class="feature_icon_2 custom-animation2">
        <img src="{{asset('/frontend/img/animate_icon/Ellipse_1.png')}}" alt="" class="feature_icon_3 custom-animation3">
        <img src="{{asset('/frontend/img/animate_icon/Ellipse_2.png')}}" alt="" class="feature_icon_4 custom-animation4">
        <img src="{{asset('/frontend/img/animate_icon/Ellipse_3.png')}}" alt="" class="feature_icon_5 custom-animation5">
        <img src="{{asset('/frontend/img/animate_icon/Ellipse_4.png')}}" alt="" class="feature_icon_6 custom-animation6">
    </section>
    <!--::banner part start::-->

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

    <!--::pricing part start::-->
    <section class="pricing_part section_padding home_page_pricing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_tittle text-center">
                        <h2>Simple Pricing</h2>
                        <p>Life firmament under them evening make after called dont
                            saying likeness isn't wherein also forth she'd air two without</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_pricing_part">
                        <img src="{{asset('frontend/img/icon/pricing_icon_1.png')}}" alt="">
                        <p>Standart</p>
                        <h3>$50.00 <span>/ mo</span></h3>
                        <ul>
                                @foreach ($standart as $item)
                            <li>{{ $item->list }}</li>
                            @endforeach
                        </ul>
                        <a href="#" class="pricing_btn">Purchase Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_pricing_part">
                        <img src="{{asset('frontend/img/icon/pricing_icon_2.png')}}" alt="">
                        <p>Business</p>
                        <h3>$50.00 <span>/ mo</span></h3>
                        <ul>
                                @foreach ($standart as $item)
                                <li>{{ $item->list }}</li>
                                @endforeach
                        </ul>
                        <a href="#" class="pricing_btn">Purchase Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_pricing_part">
                        <img src="{{asset('frontend/img/icon/pricing_icon_3.png')}}" alt="">
                        <p>Premium</p>
                        <h3>${{ $item->price }} <span>/ mo</span></h3>
                        <ul>
                            @foreach ($standart as $item)
                                <li>{{ $item->list }}</li>
                                @endforeach
                            </ul>
                        <a href="#" class="pricing_btn">Purchase Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_pricing_part">
                        <img src="{{asset('frontend/img/icon/pricing_icon_4.png')}}" alt="">
                        <p>Ultimate</p>
                        <h3>$80.00 <span>/ mo</span></h3>
                        <ul>
                                @foreach ($standart as $item)
                            <li>{{ $item->list }}</li>
                            @endforeach
                        </ul>
                        <a href="#" class="pricing_btn">Purchase Now</a>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{asset('frontend/img/animate_icon/Ellipse_2.png')}}" alt="" class="feature_icon_2 custom-animation2">
    </section>
    <!--::pricing part end::-->

    <!--::about_us part start::-->
    <section class="review_part padding_bottom">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-6">
                    <div class="review_img">
                        <img src="{{asset('frontend/img/review_bg.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="review_slider owl-carousel">
                        @foreach ($post as $one)

                        <div class="review_part_text <?= $i == 1 ? 'active' : '' ?>" >
                            <h2>{{ $one->{'title_'.$lang} }}</h2>
                            <p>{{ $one->{'description_'.$lang} }}</p>
                            <h3>{{ $one->user_id }} <span>CEO of softking</span> </h3>
                        </div>
                        @php
                            $i++
                        @endphp
                        @endforeach
                        {{-- <div class="review_part_text">
                            <h2>With efficiency to
                                unlock more opportunities</h2>
                            <p>Saw shall light. Us their to place had creepeth day
                                night great wher appear to. Hath, called, sea called,
                                gathering wherein open make living Female itself
                                gathering man. Waters and, two. Bearing. Saw she'd
                                all let she'd lights abundantly blessed.</p>
                            <h3>Mitchel Jeferson, <span>CEO of softking</span> </h3>
                        </div>
                        <div class="review_part_text">
                            <h2>With efficiency to
                                unlock more opportunities</h2>
                            <p>Saw shall light. Us their to place had creepeth day
                                night great wher appear to. Hath, called, sea called,
                                gathering wherein open make living Female itself
                                gathering man. Waters and, two. Bearing. Saw she'd
                                all let she'd lights abundantly blessed.</p>
                            <h3>Mitchel Jeferson, <span>CEO of softking</span> </h3>
                        </div> --}}
                    </div>

                </div>
            </div>
        </div>
        <img src="{{asset('frontend/img/animate_icon/Ellipse_4.png')}}" alt="" class="feature_icon_2 custom-animation2">
    </section>

    <section class="subscribe_part padding_bottom">
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
