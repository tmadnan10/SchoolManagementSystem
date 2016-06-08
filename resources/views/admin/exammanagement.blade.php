@extends('layouts.admin')
@section('content')
<?php 
	$date = date('m');
	if ($date<7) {
		$exam = '2nd Terminal Exam';	
	}
	elseif ($date<4) {
		$exam = '1st Terminal Exam';	
	}
	elseif ($date<11) {
		$exam = 'Term Final Exam';	
	}
?>

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

<div id="services" class="gray-bg">
          <section class="container section ft-cards-2">
            
            <header class="sec-heading">
              <h2>Manage Upcoming Examinations</h2>
              <span class="subheading">Announce and Upload</span>
            </header>

            <div class="row">
              
              <div class="col-md-6">

                <!-- Item 1 -->
                <div class="ft-card-item wow fadeInUp" data-wow-duration="1.2s" style="visibility: visible; animation: fadeInUp 1.2s; -webkit-animation: fadeInUp 1.2s;">
                  <img src="http://www.octarinethemes.com/demos/definity/assets/images/ft-card2-img-1.jpg" alt="Feature Image">
                  <div class="ft-content">
                    <h5>Announce An Upcoming Exam</h5>
                    <p>{{$exam}} is upcoming. You can anounce the exam by setting the starting date of the exam... </p>
                    <a href="{{url('/admin/exam/addnew')}}" class="link-btn">Enter <span class="linea-arrows-slim-right"></span></a>
                  </div>
                </div><!-- / .ft-card-item -->
                

                <!-- Item 2 -->
                <div class="ft-card-item wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.2s" style="visibility: visible; animation: fadeInUp 1.2s 0.2s; -webkit-animation: fadeInUp 1.2s 0.2s;">
                  <img src="http://www.octarinethemes.com/demos/definity/assets/images/ft-card2-img-3.jpg" alt="Feature Image">
                  <div class="ft-content">
                    <h5>Upload Exam Seat Plan</h5>
                    <p>{{$exam}} is upcoming. Upload the exam seat plan after announding the starting date of the exam...<br></p>
                    <a href="{{url('/admin/exam/seat')}}" class="link-btn">Enter <span class="linea-arrows-slim-right"></span></a>
                  </div>
                </div><!-- / .ft-card-item -->

              </div><!-- / .col-md-6 -->



              
              <div class="col-md-6">

                <!-- Item 3 -->
                <div class="ft-card-item wow fadeInUp" data-wow-duration="1.2s" style="visibility: visible; animation: fadeInUp 1.2s; -webkit-animation: fadeInUp 1.2s;">
                  <img src="http://www.octarinethemes.com/demos/definity/assets/images/ft-card2-img-2.jpg" alt="Feature Image">
                  <div class="ft-content">
                    <h5>Upload Exam Routine</h5>
                    <p>{{$exam}} is upcoming. Upload the exam routine after announding the starting date of the exam...<br></p>
                    <a href="{{url('/admin/exam/rout')}}" class="link-btn">Enter <span class="linea-arrows-slim-right"></span></a>
                  </div>
                </div><!-- / .ft-card-item -->

                  

                <!-- Item 2 -->
                <div class="ft-card-item wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.2s" style="visibility: visible; animation: fadeInUp 1.2s 0.2s; -webkit-animation: fadeInUp 1.2s 0.2s;">
                  <img src="http://www.octarinethemes.com/demos/definity/assets/images/ft-card2-img-4.jpg" alt="Feature Image">
                  <div class="ft-content">
                    <h5>Upload Class Routine</h5>
                    <p>Upload class routine of any section of a class...<br><br><br></p>
                    <a href="{{url('/admin/class_routine')}}" class="link-btn">Enter <span class="linea-arrows-slim-right"></span></a>
                  </div>
                </div><!-- / .ft-card-item -->

              </div><!-- / .col-md-6 -->

              <div class="col-md-6">
              <div class="ft-card-item wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.2s" style="visibility: visible; animation: fadeInUp 1.2s 0.2s; -webkit-animation: fadeInUp 1.2s 0.2s;">
                  <img src="http://www.octarinethemes.com/demos/definity/assets/images/ft-card2-img-4.jpg" alt="Feature Image">
                  <div class="ft-content">
                    <h5>Announce Exam Result</h5>
                    <p>Select An Exam and Publish the result....<br><br><br></p>
                    <a href="{{url('/admin/resultpublish')}}" class="link-btn">Enter <span class="linea-arrows-slim-right"></span></a>
                  </div>
                </div><!-- / .ft-card-item -->


              </div>



            </div><!-- / .row -->
          </section><!-- / .container -->
        </div>

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
@endsection
