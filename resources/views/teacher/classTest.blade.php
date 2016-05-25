@extends('layouts.teacher')
@section('content')
<script type="text/javascript" src="../../bootstrap-colorpicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../bootstrap-colorpicker.min.css">
<link rel="stylesheet" type="text/css" href="../../app.css">

<link rel="stylesheet" type="text/css" href="../../css/app.min.css">
<link rel="stylesheet" type="text/css" href="../../css/temp.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//www.google-analytics.com/ga.js"></script>
<style type="text/css"></style> <!--[if lt IE 9]> <script type="text/javascript" src="/min-js?f=js/lib/html5shiv.min.js,js/lib/respond.min.js"></script> <![endif]-->
<style type="text/css">.header-color{background: #ff3b31;}</style>
<script type="text/javascript" src="../../new/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="../../new/smoothscroll.js"></script>
<script type="text/javascript" src="../../new/marker.js"></script>

<link rel="stylesheet" type="text/css" href="../../new/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="../../new/animate.css">
<link rel="stylesheet" type="text/css" href="../../new/responsive.css">
<link rel="stylesheet" type="text/css" href="../../new/slick.css">
<link rel="stylesheet" type="text/css" href="../../new/style.css">
<link rel="stylesheet" type="text/css" href="../../new/linea-font.css">
<link rel="stylesheet" type="text/css" href="../../new/flow.css">
<!--


<link rel="stylesheet" type="text/css" href="../../new/bootstrap.min.css">




-->





<div class="gray-bg">
          <section id="services" class="container ft-cards">
            <div class="row section">

              <header class="sec-heading">
                <h2>What You Can Do</h2>
                <span class="subheading"></span>
              </header>
              
              <!-- Item 1 -->
              <div class="col-lg-4 col-md-6 mb-sm-50">
                <div class="ft-item wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation: fadeInUp 1s; -webkit-animation: fadeInUp 1s;">
                  <span class="linea-basic-pencil-ruler"></span>
                  <h4>Add New Class Test</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur elit adipisicing , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimv</p>
                  <a href="{{url('/addClassTest')}}">Explore <span class="linea-arrows-slim-right"></span></a>
                </div>
              </div>

              <!-- Item 2 -->
              <div class="col-lg-4 col-md-6 mb-sm-50">
                <div class="ft-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation: fadeInUp 1s 0.3s; -webkit-animation: fadeInUp 1s 0.3s;">
                  <span class="linea-basic-cards-diamonds"></span>
                  <h4>Change An Upcoming One</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur elit adipisicing , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimv</p>
                  <a href="#">Explore <span class="linea-arrows-slim-right"></span></a>
                </div>
              </div>

              <!-- Item 3 -->
              <div class="col-lg-4 col-md-6 mb-sm-50">
                <div class="ft-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s" style="visibility: visible; animation: fadeInUp 1s 0.6s; -webkit-animation: fadeInUp 1s 0.6s;">
                  <span class="linea-basic-star"></span>
                  <h4>Class Test Marks</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur elit adipisicing , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimv</p>
                  <a href="#">Explore <span class="linea-arrows-slim-right"></span></a>
                </div>
              </div>

            </div><!-- / .row -->
          </section>
          <footer class="footer row" role="contentinfo">
      <div class="bs-docs-social">
        <ul class="bs-docs-social-buttons">
          <li class="follow-btn">
            <a itemprop="sameAs" rel="nofollow" href="https://www.facebook.com/ils" class="btn btn-primary btn-xs">
             <i class="fa fa-facebook"></i> Like ILS </a></li>
          <li class="tweet-btn">
            <a itemprop="sameAs" rel="nofollow" href="https://twitter.com/ils" class="btn btn-info btn-xs">
              <i class="fa fa-twitter"></i> Follow @ILS </a></li>
          </ul>
        </div>

        <ul class="footer-links text-muted">
          <li><span class="glyphicon glyphicon-globe"></span> School Management System © 2016</li><li>.</li><li>Created by&nbsp;&nbsp;&nbsp;<a href="#" class="label label-info">ILS</a></li>
          <li>.</li>
          <li> <span class="glyphicon glyphicon-list-alt"></span> <a href="#"> Site Privacy policy </a></li>
          <li>.</li><li> <span class="fa fa-facebook"></span> <a class="isTooltip" title="" href="https://www.facebook.com/ils/" data-original-title="send us a message using facebook">Contact us</a></li>
          <li>.</li><li> <i class="fa fa-google-plug"></i> <a itemprop="sameAs" rel="nofollow" href="https://plus.google.com/+ils/posts">Google +</a></li>
        </ul>
      </footer>
        </div>


@endsection
