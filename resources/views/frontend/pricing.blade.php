@extends('layouts.main')
@section('content')

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Pricing Plan</h2>
                            <h5>home <span></span> Pricing</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

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
                            <h3>$60.00 <span>/ mo</span></h3>
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

    <!--::accordion part start::-->
    <section class="accordion_part padding_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_tittle text-center">
                        <h2>Frequently Ask Question</h2>
                        <p>Beginning gathered divided upon blessed seasons form herb years subdue</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        What is white box testing and list the types of white box testing?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Saw shall light. Us their to place had creepeth day night great
                                    wher appear to. Hath, called, sea called, gathering wherein open
                                    make living Female itself gathering man. Waters and, two. Bearing.
                                    Saw she'd all let she'd lights abundantly blessed.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What is the difference between static and dynamic testing?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Saw shall light. Us their to place had creepeth day night great
                                    wher appear to. Hath, called, sea called, gathering wherein open
                                    make living Female itself gathering man. Waters and, two. Bearing.
                                    Saw she'd all let she'd lights abundantly blessed.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        What is the function of the software testing tool "phantom"?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Saw shall light. Us their to place had creepeth day night great
                                    wher appear to. Hath, called, sea called, gathering wherein open
                                    make living Female itself gathering man. Waters and, two. Bearing.
                                    Saw she'd all let she'd lights abundantly blessed.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                                <div class="card-header" id="heading_4">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapse_4" aria-expanded="false" aria-controls="collapse_4">
                                            What is the difference between static and dynamic testing?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse_4" class="collapse" aria-labelledby="heading_4"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        Saw shall light. Us their to place had creepeth day night great
                                        wher appear to. Hath, called, sea called, gathering wherein open
                                        make living Female itself gathering man. Waters and, two. Bearing.
                                        Saw she'd all let she'd lights abundantly blessed.
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::accordion part end::-->
@endsection
