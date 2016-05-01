<html>

    <head>

        <title>Add New User</title>

        <link href="../css/hello.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/reg.css">
        <link rel="stylesheet" href="../css/bootstrap1.css">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="c../ss/prettyPhoto.css" rel="stylesheet">
        <link href="../css/animate.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/style2.css">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/prettyPhoto.css" rel="stylesheet">
        <link href="../css/animate.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="../css/hello.css" rel="stylesheet">

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    
    </head>

    <body>
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top affix-top">
        <div class="container-fluid">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/').'/tasks' }}">
                    Task List
                </a>
                <a class="navbar-brand" href="{{ url('/') }}">
                    Home
                </a>
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
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <!--<li><a href="{{ url('/register') }}">Register</a></li>-->
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
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
    </nav>
    <ul class="ul">
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="adminportal.php">Admin's Portal</a></li>
        <li><a class="active"  href="addnewuser.php">Add New User</a></li>
        <li><a href="uploadroutine.php">Upload Class Routine</a></li>
        <li><a href="eroutine.php">Upload Exam Routine</a></li>
        <li><a href="assgn.php">Add Subject Teacher</a></li>
        <li><a href="classteacher.php">Add Class Teacher</a></li>
        <li><a href="moderator.php">Add Moderator</a></li>
        <ul style="float:right;list-style-type:none;">
        <li><a href="logout.php">Logout</a></li>
        </ul>
    </ul>

    
    

    <div class="wrapper">
        <div class="container">
        <form action="#" method="post">
            <h1>Create A New User</h1>
        
            <form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
            <div><?php echo "<h4><font color='#FFF'>Username<h4>"; ?></div>
            <input type="text" placeholder="" name="user_id1" value="<?php if(isset($_SESSION["user_id1"])) echo $_SESSION["user_id1"]; ?>" />
            <div style="color:red;"><?php if(isset($message["user_id1"])) echo $message["user_id1"]; ?></div>

            <div><?php echo "<h4><font color='#FFF'>Password<h4>"; ?></div>
            <input type="password" Placeholder="" name="password1" />
            <div style="color:red;"><?php if(isset($message["password1"])) echo $message["password1"]; ?></div>

            <div><?php echo "<h4><font color='#FFF'>Retype Password<h4>"; ?></div>
            <input type="password" Placeholder=" " name="retype_password1" />
            <div style="color:red;"><?php if(isset($message["retype_password1"])) echo $message["retype_password1"]; ?></div>


            <form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
            <div><?php echo "<h4><font color='#FFF'>E Mail ID<h4>"; ?></div>
            <input type="text" placeholder="" name="e_mail_id1" value="<?php if(isset($_SESSION["e_mail_id1"])) echo $_SESSION["e_mail_id1"]; ?>" />
            <div style="color:red;"><?php if(isset($message["e_mail_id1"])) echo $message["e_mail_id1"]; ?></div>

            <br>
            <form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
            <select class="form-control" name= "select3" id="third"> 
                <option value="-1">Select Account Type</option>
                <option value="students">Student</option>
                <option value="teachers">Teacher</option>
            </select>
            <div style="color:red;"><?php if(isset($message["select3"])) echo $message["select3"]; ?></div>

            <?php if(isset($error["login"])) echo "<p style=\"color:red;\">".$error["login"]."</p>"; ?>

            <br><button type="submit" name="action" value="Next" >Next</button><br><br>

        </form>
        
    
        </div>    
        <ul class="bg-bubbles">
            <li><a>TM</a></li>
            <li><a>Tariq</a></li>
            <li><a>91</a></li>
            <li><a>Samiul</a></li>
            <li><a>73</a></li>
            <li><a>Project</a></li>
            <li><a>Madhusudan</a></li>
            <li></li>
            <li></li>
            <li><a>Management</a></li>
        </ul>
    </div>
    </div>


    <script src='js/jquery.min.js'></script>
    <script src="js/index.js"></script>
        
    </body>

</html>
@yield('content')