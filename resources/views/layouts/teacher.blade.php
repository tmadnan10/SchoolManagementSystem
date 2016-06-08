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
            <a href="{{ url('/') }}" class="navbar-brand logo-app-name">
                @foreach ($teacher as $task)
                &nbsp&nbsp{{ $task->first_name }}'s Portal&nbsp&nbsp
                @endforeach
            </a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="snippets-index snippets-view snippets-add snippets-edit">
                    <a href="{{url('/teacher/exam')}}"> <span class="glyphicon glyphicon-book"></span> Upload Result </a>
                </li>
                <li class="themes-index themes-view themes-add">
                    <a href="{{url('/teacher/class_test')}}"> <span class="glyphicon glyphicon-th-large"></span> Class Tests  </a>
                </li>
                <li class="utilities-index utilities-view utilities-add">
                    <a href="{{url('/').'/teacher/club'}}"> <span class="glyphicon glyphicon-th-large"></span> Club Management </a>
                </li>
                <li class="utilities-index utilities-view utilities-add">
                    <a href="{{url('/').'/teacher/activities'}}"> <span class="glyphicon glyphicon-th-large"></span> Present Activities </a>
                </li>
                 <li class="utilities-index utilities-view utilities-add">
                    <a href="{{url('/').'/teacher/upload'}}"> <span class="glyphicon glyphicon-upload"></span> Study Materials </a>
                </li>
            </ul>



            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-user"> </i>&nbsp{{ Auth::user()->username }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{url('/teacher/changepropic')}}"> <i class="fa fa-camera"></i> Change Profile Picture </a>
                        </li>
                        <li>
                            <a href="{{url('/teacher/changepass')}}"> <i class="fa fa-gear"></i> Change Password </a>
                        </li>
                        <li>
                            <a href="{{ url('/logout') }}"> <i class="fa fa-power-off"></i> Logout </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>

    </nav>
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
