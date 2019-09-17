<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Nomade-Teach.uz</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('backend/style5.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />

    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <!-- @toastr_css -->
{{--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6/js/select2.min.js"></script>
    <!-- @stack('script') -->
    <style>
        .list-unstyled li:hover a{
            font-family:"Barlow Semi Condensed", sans-serif;
            color: #ff4800 !important
        }
        .navbar, #sidebarCollapse{
            background-color: #113372 !important;
        }
        #sidebarCollapse span{
            background: #ff5e00 !important;
        }
        .nav-item a{
            color: #ff5e00 !important;
            font-weight: bold
        }
        #content{
            padding: 0 !important;
        }
        .sidebar-header{
            /* background: #113372 !important; */
        }
        .sidebar-header img{
            background: white !important;
        }
        .list-unstyled > .active{
            background-color: #ff5e00 !important;
        }
    </style>
</head>

<body>

<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar" style="background:#113372">
        <div class="sidebar-header">
            <h3><img src="{{asset('backend/img/logont.png')}}" alt="" width="200px" height="200px"></h3>
        </div>
        <ul class="list-unstyled components">
            <li class="">
                <a href="{{route('category.index')}}" >Category</a>
            </li>
            <li class="">
                <a href="{{route('post.index')}}" >Post</a>
            </li>
            <li class="">
                <a href="{{route('menu.index')}}" >Menu</a>
            </li>
            <li class="">
                <a href="{{route('settings.index')}}" >Settings</a>
            </li>
            <li class="">
                <a href="{{route('partners.index')}}" >Partners</a>
            </li>
            <li class="">
                <a href="{{route('pages.index')}}" >Pages</a>
            </li>
            <!-- <li class="">
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Settings</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Roles</a>
                    </li>
                    <li>
                        <a href="#">Permissions</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="#userSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Users</a>
                <ul class="collapse list-unstyled" id="userSubmenu">
                    <li>
                        <a href="#">Members</a>
                    </li>
                    <li>
                        <a href="#">Account ochish</a>
                    </li>
                </ul>
            </li> -->
        </ul>
    </nav>

    <!-- Page Content Holder -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="navbar-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                            <a id="questionDropdown" href="#" class="nav-link bg-transparent" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer">
                                <i class="far fa-question-circle"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="questionDropdown">
                                <div class="container" style="max-width: 20em">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem corporis enim et eum, laborum maiores modi. Aliquam, cupiditate delectus doloremque in ipsa natus, perferendis quia sed tempora velit vero voluptate?
                                </div>
                            </div>
                        </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="/login">
                                Tizimga kirish
                                <i class="fas fa-sign-in-alt"></i>
                            </a>
                        </li>
                    @else

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link bg-transparent" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer">
                                {{ Auth::user()->name }}
                                <i class="fas fa-sign-out-alt"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right text-center" aria-labelledby="navbarDropdown">
                                <a class="nav-link" href="#"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                                 </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    </ul>
                </div>
            </div>
        </nav>
       @yield('content')
    </div>
</div>

<!-- jQuery CDN - Slim version (=without AJAX) -->

<script type="text/javascript">
    $(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
        });
    });

</script>

</body>

</html>
