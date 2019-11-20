@php
    $lang =App::getLocale();
@endphp
<header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand main_logo" href="{{route('index')}}"> <img src="{{asset('frontend/img/logo.png')}}" alt="logo"> </a>
                        <a class="navbar-brand single_page_logo" href="{{route('index')}}"> <img src="{{asset('frontend/img/footer_logo.png')}}" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav" style="margin-left:-80px">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('index')}}">@lang('pages.home')</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('features')}}">@lang('pages.features')</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('pricing')}}">@lang('pages.pricing')</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        @lang('pages.blog')
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('blog')}}"> @lang('pages.blog')</a>
                                        <a class="dropdown-item" href="{{ route('single-blog')}}">@lang('pages.single-blog')</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        @lang('pages.pages')
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                        <a class="dropdown-item" href="{{route('elements')}}">@lang('pages.elements')</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('contact')}}">@lang('pages.contact')</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="d-none d-sm-block btn_1 home_page_btn">@lang('pages.sing-up')</a>
                        <span class="ml-5">
                                <a href=" {{ route('locale', ['lang' => 'en']) }}" class="d-none d-sm-block home_page_btn m-2">Eng</a>
                        </span>
                        <span class="">
                                <a href="{{ route('locale', ['lang' => 'ru']) }}" class="d-none d-sm-block home_page_btn m-2">Ru</a>

                        </span>
                        <span>
                                <a href="{{ route('locale', ['lang' => 'uz']) }}" class="d-none d-sm-block home_page_btn m-2">Uz</a>
                        </span>
                    </nav>

                </div>
            </div>
        </div>
    </header>
