<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>School Management System</title>

    <link rel="shortcut icon" type="image/x-icon" href="1.ico" />

    <link rel="stylesheet" href="../css/style2.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="hello.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
   <link rel="stylesheet" href="http://images.apple.com/v/home/cm/built/styles/main.built.css" type="text/css" />
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="../css/apple2.css">
    <link rel="stylesheet" href="css/apple3.css">
    <link rel="stylesheet" href="css/apple1.css">
    <link rel="stylesheet" type="text/css" href="css/team.css">

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">

<!--<nav class="main-v2 no-button">
    <ul>
        <li><a href="/" class="logo"></a></li>
            <li id="search-container" class="spacer"></li>
        <li class="cart mobile">
            <span class="flaticon-cart"></span>
            <span id="cart-badge-mob"></span>
        </li>
        <li class="menu mobile">
            <span class="flaticon-menu"></span>
            <span class="flaticon-cancel"></span>
        </li>
        <li class="nav-items">
            <ul>
                <li class="explore" onclick="navigateToUri('/explore/categories')">
                    <span class="normal-label">Explore</span>
                    <span class="flaticon-explore"></span>
                    <span class="mobile label">Explore</span>
                </li>
                <li class="expandable notifications">
                    <span class="normal-label" onclick="navigateToUri('/notifications')">Notifications</span>
                    <span class="flaticon-bell" onclick="navigateToUri('/notifications')"></span>
                    <span class="mobile label">Notifications</span>
                    <span id="notifications-badge" class="desktop"></span>
                    <div id="notifications-nav" class="desktop dropdown notifications animated fadeIn"></div>
                </li>
                <li class="expandable cart desktop">
                    <span class="normal-label" onclick="navigateToUri('/cart')">Shopping</span>
                    <span class="flaticon-cart" onclick="navigateToUri('/cart')"></span>
                    <span class="mobile label">Shopping</span>
                    <span id="cart-badge" class="desktop"></span>
                    <div id="cart-nav" class="desktop dropdown cart animated fadeIn"></div>
                </li>
                <li class="expandable user">
                    <span class="normal-label" onclick="navigateToUri('/backpack#requests')">Tariq</span>
                    <span id="nav-avatar" class="profile alt" onclick="navigateToUri('/backpack#requests')" style="background-image: url('https://graph.facebook.com/10205865639752742/picture?width=200&height=200')"></span>
                    <span class="mobile label">Tariq Adnan</span>

                    </li>
                    </ul>
                    </li>
                    </ul>
                    </nav>-->
<!--
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top affix-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Start Bootstrap</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    -->


    <!--<nav class="main-v2 no-button with-bg">
        <div class="container">-->





<!--
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top affix-top">
        <div class="container-fluid">
            <div class="navbar-header">


                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>


            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">

                <ul class="nav navbar-nav">
                </ul>

                <ul class="nav navbar-nav navbar-right">

                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                      
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <i class="fa fa-user"> </i>
                                {{ Auth::user()->username }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>-->
<br><br><br style="line-height: .5em"/>
    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}



<script type="text/javascript" src="/ac/globalfooter/2.0/en_US/scripts/ac-globalfooter.built.js"></script>

            </div>
        </footer>

        <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "url": "http://www.apple.com/",
            "name": "Apple",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "http://www.apple.com/us/search/{search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
        </script>
        <script src="http://images.apple.com/v/home/cm/built/scripts/main.built.js" type="text/javascript" charset="utf-8"></script>



</body>
</html>
