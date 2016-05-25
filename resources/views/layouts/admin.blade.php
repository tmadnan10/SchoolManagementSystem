<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>School Management System</title>

    <link rel="shortcut icon" type="image/x-icon" href="1.ico" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <link href="hello.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/reg.css">
        <link rel="stylesheet" href="css/bootstrap1.css">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style2.css">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="hello.css" rel="stylesheet">

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

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
    <!--<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">-->
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
</head>
<body id="app-layout">

<header class="navbar navbar-default navbar-fixed-top affix-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ url('/') }}" class="navbar-brand logo-app-name">Admin's Portal</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="snippets-index snippets-view snippets-add snippets-edit">
                    <a href="{{ url('/').'/addnew' }}"> <span class="glyphicon glyphicon-user"></span><font color="black"> Add New User </font></a>
                </li>
                <li class="themes-index themes-view themes-add">
                    <a href="{{url('/teacher_management')}}"> <span class="glyphicon glyphicon-briefcase"></span> <font color="black"> Teacher Management </font></a>
                </li>
                <li class="utilities-index utilities-view utilities-add">
                    <a href="{{url('admin/exam_management')}}"> <span class="glyphicon glyphicon-book"></span> <font color="black">Examination Management </font></a>
                </li>
                <li class="utilities-index utilities-view utilities-add">
                    <a href="{{url('admin/club_management')}}"> <span class="glyphicon glyphicon-th-large"></span><font color="black"> Club Management </font></a>
                </li>
            </ul>



            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-user"> </i>&nbsp{{ Auth::user()->username }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <!--<li>
                            <a href="/users/edit_profile"> <i class="fa fa-gear"></i> Edit profile </a>
                        </li>-->
                        <li>
                            <a href="{{ url('/logout') }}"> <i class="fa fa-power-off"></i> Logout </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>


<!--<nav id="mainNav" class="navbar navbar-default navbar-fixed-top affix-top">
        <div class="container-fluid">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>



                <a class="navbar-brand" href="{{ url('/') }}">
                    Admin Portal
                </a>
                <a class="navbar-brand" href="{{ url('/').'/addnew' }}">
                    Add New User
                </a>
                <a class="navbar-brand" href="{{ url('/') }}">
                    Upload Section
                </a>
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
                                <i class="fa fa-user"> </i>&nbsp{{ Auth::user()->username }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-power-off"></i>&nbsp&nbspLogout</a></li>
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
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
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
