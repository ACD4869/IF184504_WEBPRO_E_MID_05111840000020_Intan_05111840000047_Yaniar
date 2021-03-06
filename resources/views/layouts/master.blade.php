<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    @yield('title')

    <!-- Fontfaces CSS-->
    <link href="{{asset('tmp/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('tmp/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('tmp/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('tmp/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('tmp/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('tmp/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('tmp/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('tmp/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('tmp/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('tmp/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('tmp/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('tmp/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('tmp/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">

          @yield('bar')

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                                @yield('search')
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{auth()->user()->name}}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                    <h5 class="name">
                                                        <h4>{{auth()->user()->name}}</h4>
                                                    </h5>
                                                    <span class="email">{{auth()->user()->email}}</span>
                                                    <b><span class="email">{{auth()->user()->role}}</span></b>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="/logout">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            @yield('content')
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{asset('tmp/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('tmp/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('tmp/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('tmp/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('tmp/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('tmp/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('tmp/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('tmp/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('tmp/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('tmp/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('tmp/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('tmp/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('tmp/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('tmp/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
