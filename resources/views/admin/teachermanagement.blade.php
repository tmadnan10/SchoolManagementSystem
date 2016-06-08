@extends('layouts.admin')
<?php
$classes = DB::table('section')
			->select('class_id')
			->distinct()
			->get();
?>

@section('content')

<script type="text/javascript" src="../bootstrap-colorpicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="../bootstrap-colorpicker.min.css">
<link rel="stylesheet" type="text/css" href="../app.css">

<link rel="stylesheet" type="text/css" href="../css/app.min.css">
<link rel="stylesheet" type="text/css" href="../css/temp.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//www.google-analytics.com/ga.js"></script>
<style type="text/css"></style> <!--[if lt IE 9]> <script type="text/javascript" src="/min-js?f=js/lib/html5shiv.min.js,js/lib/respond.min.js"></script> <![endif]-->
<style type="text/css">.header-color{background: #ff3b31;}</style>
<script type="text/javascript" src="../new/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="../new/smoothscroll.js"></script>
<script type="text/javascript" src="../new/marker.js"></script>

<link rel="stylesheet" type="text/css" href="../new/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="../new/animate.css">
<link rel="stylesheet" type="text/css" href="../new/responsive.css">
<link rel="stylesheet" type="text/css" href="../new/slick.css">
<link rel="stylesheet" type="text/css" href="../new/style.css">
<link rel="stylesheet" type="text/css" href="../new/linea-font.css">
<link rel="stylesheet" type="text/css" href="../new/flow.css">
<div class="gray-bg">
          <section id="blog" class="section container blog-columns blog-preview">
            <div class="row">
              
              <header class="sec-heading">
                <h2>Teacher Management</h2>
                <span class="subheading">Select A Task and Explore</span>
              </header>

              
              <!-- Blog Post 1 -->
              <div class="col-lg-6 col-md-6 mb-sm-50">
                <div class="blog-post wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation: fadeIn 2s; -webkit-animation: fadeIn 2s;">

                  <!-- Image -->
              <a href="{{url('/teacher_management/st')}}" class="post-img"><img src="http://www.octarinethemes.com/demos/definity/assets/images/blog-post-img-1.4.jpg" alt="Blog Post 1"></a>

                  <div class="bp-content">
                    
                    <!-- Meta data -->
                    <div class="post-meta">
                      
                    </div><!-- / .meta -->

                    <!-- Post Title -->
                    <a href="{{url('/teacher_management/st')}}" class="post-title"><h4>Add or Change Any Subject Teacher</h4></a>

                    <!-- Blurb -->
                    <p>Here can select any class, section and subject then assign a subject teacher. Moreover
                    you can cahnge an ongoing teacher of a particular subject and assign a new one. The Teacher will be notified
                    as soon as he is assigned to take a class and also if he is released from this responsibility......</p>

                    <!-- Link -->
                    <a href="{{url('/teacher_management/st')}}" class="btn btn-small">Enter</a>

                  </div><!-- / .bp-content -->

                </div><!-- / .blog-post -->
              </div><!-- / .col-lg-4 -->
               <!-- Blog Post 1 -->
              <div class="col-lg-6 col-md-6 mb-sm-50">
                <div class="blog-post wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation: fadeIn 2s; -webkit-animation: fadeIn 2s;">

                  <!-- Image -->
                <a href="pages/blog/blog-post.html" class="post-img"><img src="http://media1.fdncms.com/tucsonweekly/imager/u/original/5983346/bigstock-flat-vector-teacher-and-study--79186009.jpg" alt="Blog Post 1"></a>

                  <div class="bp-content">
                    
                    <!-- Meta data -->
                    <div class="post-meta">
                      
                    </div><!-- / .meta -->

                    <!-- Post Title -->
                    <a href="{{url('/teacher_management/ct')}}" class="post-title"><h4>Add or Change Any Class Teacher</h4></a>

                    <!-- Blurb -->
                     <p>Here can select any class and section and then assign a subject teacher. Moreover
                    you can change an ongoing class teacher of a particular section and assign a new one. The Teacher will be notified
                    as soon as he is assigned as a class teacher and also if he is released from this responsibility......</p>

                    <!-- Link -->
                    <a href="{{url('/teacher_management/ct')}}" class="btn btn-small">Enter</a>

                  </div><!-- / .bp-content -->

                </div><!-- / .blog-post -->
              </div><!-- / .col-lg-4 -->

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
