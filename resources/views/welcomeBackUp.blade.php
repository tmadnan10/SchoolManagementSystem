@extends('layouts.app')

@section('content')
<script type="text/javascript" src="bootstrap-colorpicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap-colorpicker.min.css">
<link rel="stylesheet" type="text/css" href="app.css">

<link rel="stylesheet" type="text/css" href="css/app.min.css">
<link rel="stylesheet" type="text/css" href="css/temp.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//www.google-analytics.com/ga.js"></script>
<style type="text/css"></style> <!--[if lt IE 9]> <script type="text/javascript" src="/min-js?f=js/lib/html5shiv.min.js,js/lib/respond.min.js"></script> <![endif]-->
<style type="text/css">.header-color{background: #ff3b31;}</style>
<script type="text/javascript" src="new/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="new/smoothscroll.js"></script>
<script type="text/javascript" src="new/marker.js"></script>

<link rel="stylesheet" type="text/css" href="new/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="new/animate.css">
<link rel="stylesheet" type="text/css" href="new/responsive.css">
<link rel="stylesheet" type="text/css" href="new/slick.css">
<link rel="stylesheet" type="text/css" href="new/style.css">
<link rel="stylesheet" type="text/css" href="new/linea-font.css">
<link rel="stylesheet" type="text/css" href="new/flow.css">

<div id="home" class="landing-hero">
          <div class="bg-overlay">
            <div class="hero-wrapper">
              <div class="hero-content">
                <div class="container">
                  <div class="row">

                    <!-- Heading -->
                    <div class="col-md-5 heading-wrapper wow fadeInLeft" data-wow-duration="1.5s" style="visibility: visible; animation: fadeInLeft 1.5s; -webkit-animation: fadeInLeft 1.5s;">
                      <h1 class="lead">Please Log In to Continue</h1>
                      <h4 class="h-alt subheading">Catchy Subheading</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita neque praesentium eum earum aperiam quas impedit commodi hic, architecto, error, quae. Commodi, similique! Voluptatum iste necessitatibus eum aut temporibus, alias!</p>
                      <a href="#features" class="cta-btn">Learn more</a>
                    </div>

                    <!-- Signup Form -->
                    <div class="col-md-offset-3 col-md-4 form-wrapper wow fadeInRight" data-wow-duration="1.5s" style="visibility: visible; animation: fadeInRight 1.5s; -webkit-animation: fadeInRight 1.5s;">
                       <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}
                        <!--<label>User Name</label>-->
                        <input class="form-control" type="text" placeholder="User Name" name="username">
                        @if ($errors->has('username'))
                                    <span class="help-block">
                                        <font color="red"><strong>{{ $errors->first('username') }}</strong></font>
                                    </span>
                                @endif
                         <!--<label>Password</label>-->
                        <input class="form-control" type="password" placeholder="Password" name="password">
                        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <font color="red"><strong>{{ $errors->first('password') }}</strong></font>
                                    </span>
                                @endif
                        
                        <input class="btn-ghost-light" type="submit" value="Login">
                      </form>
                    </div>

                  </div><!-- / .row -->
                </div><!-- / .container -->
              </div><!-- / .hero-content -->
            </div><!-- / .hero-wrapper -->

            <!-- Scroller -->
          <a href="#features" class="scroller">
            <span class="scroller-text">scroll down</span>
            <span class="linea-basic-magic-mouse"></span>
          </a>

          </div><!-- / .bg-overlay -->
        </div>
@endsection
