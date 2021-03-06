<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('md_assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{URL::asset('md_assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@hasSection('page-title') @yield('page-title') @endif</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    @include('admin.partial.css')
    @hasSection('css')
        @yield('css')
    @endif
</head>

<body class="">
<div class="wrapper">
    <div class="sidebar main-sidebar" data-color="purple" data-background-color="white" data-image="{{URL::asset('md_assets/img/sidebar-1.jpg')}}">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

          Tip 2: you can also add an image using data-image tag
      -->
        @include('admin.partial.sidebar')
    </div>
    <div class="sidebar-toogle-bar">
        <div class="row">
            <i class="material-icons sidebar-toggler-custom">dashboard</i>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="{{route('admin_dashboard')}}">
                        <img src="{{URL::asset('img/logo/2.png')}}" alt="">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
{{--                    <form class="navbar-form">--}}
{{--                        <div class="input-group no-border">--}}
{{--                            <input type="text" value="" class="form-control" placeholder="Search...">--}}
{{--                            <button type="submit" class="btn btn-white btn-round btn-just-icon">--}}
{{--                                <i class="material-icons">search</i>--}}
{{--                                <div class="ripple-container"></div>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
                    <ul class="navbar-nav">
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="javascript:;">--}}
{{--                                <i class="material-icons">dashboard</i>--}}
{{--                                <p class="d-lg-none d-md-block">--}}
{{--                                    Stats--}}
{{--                                </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                <i class="material-icons">notifications</i>--}}
{{--                                <span class="notification">5</span>--}}
{{--                                <p class="d-lg-none d-md-block">--}}
{{--                                    Some Actions--}}
{{--                                </p>--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                                <a class="dropdown-item" href="#">Mike John responded to your email</a>--}}
{{--                                <a class="dropdown-item" href="#">You have 5 new tasks</a>--}}
{{--                                <a class="dropdown-item" href="#">You're now friend with Andrew</a>--}}
{{--                                <a class="dropdown-item" href="#">Another Notification</a>--}}
{{--                                <a class="dropdown-item" href="#">Another One</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                <i class="material-icons">person</i>--}}
{{--                                <p class="d-lg-none d-md-block">--}}
{{--                                    Account--}}
{{--                                </p>--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">--}}
{{--                                <a class="dropdown-item" href="#">Profile</a>--}}
{{--                                <a class="dropdown-item" href="#">Settings</a>--}}
{{--                                <div class="dropdown-divider"></div>--}}
{{--                                <a class="dropdown-item" href="#">Log out</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin_log_out')}}">
                                <i class="material-icons">logout</i>
                                <p>Log Out</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            @yield('content')
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="float-left">
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="https://creative-tim.com/presentation">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="https://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright float-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, made with <i class="material-icons">favorite</i> by
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                </div>
            </div>
        </footer>
    </div>
</div>
<form action="" method="POST" id="dynamicForm" class="invisible">
    {{ csrf_field() }}
</form>
@include('admin.partial.popups')
@include('admin.partial.js')
@include('admin.partial.js-2')
@hasSection('js')
    @yield('js')
@endif
</body>

</html>
