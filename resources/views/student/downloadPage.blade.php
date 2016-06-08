@extends('layouts.student')

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
<link rel="stylesheet" type="text/css" href="../../new/flow1.css">

<div class="gray-bg">
          <section id="blog" class="section container blog-columns blog-preview">
            <div class="row">
              
              <header class="sec-heading">
                <h2>My Downloads</h2>
                <span class="subheading">Select A Section and Explore</span>
              </header>

              
              <!-- Blog Post 1 -->
              <div class="col-lg-4 col-md-4 mb-sm-50">
                <div class="blog-post wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation: fadeIn 2s; -webkit-animation: fadeIn 2s;">

                  <!-- Image -->
              

                  <div class="bp-content">
                    
                    <!-- Meta data -->
                    <div class="post-meta">
                      
                    </div><!-- / .meta -->

                    <!-- Post Title -->
                    <a href="{{url('/student/download/study_materials')}}" class="post-title"><h4>Study Materials</h4></a>

                    <!-- Blurb -->
                    <p>Currently you are connected with Clubs. Here can select any club and view your recent activities and membership status.</p>

                    <!-- Link -->
                    <a href="{{url('/student/download/study_materials')}}" class="btn btn-small">Enter</a>

                  </div><!-- / .bp-content -->

                </div><!-- / .blog-post -->
              </div><!-- / .col-lg-4 -->
               <!-- Blog Post 1 -->
              <div class="col-lg-4 col-md-4 mb-sm-50">
                <div class="blog-post wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation: fadeIn 2s; -webkit-animation: fadeIn 2s;">

                  <!-- Image -->
              

                  <div class="bp-content">
                    
                    <!-- Meta data -->
                    <div class="post-meta">
                      
                    </div><!-- / .meta -->

                    <!-- Post Title -->
                    @if(count($section->routine != '0'))
                    <a href="{{url('/student/download/class_routine')}}" class="post-title"><h4>Class Routine</h4></a>
                    @else
                    <a href="#" class="post-title"><h4>Class Routine</h4></a>
                    @endif
                    <!-- Blurb -->
                    <p>@if($section->routine != '0')Class Routine of your Section is available. Click Enter to Download your Class Routine <br><br> @else Your Class Routine is not still available. Wait for the authority to upload the Class Routine. @endif </p>

                    <!-- Link -->
                    <!-- Post Title -->
                    @if(count($section->routine != '0'))
                    <a href="{{url('/student/download/class_routine')}}" class="btn btn-small">Download</a>
                    @endif
                  </div><!-- / .bp-content -->

                </div><!-- / .blog-post -->
              </div><!-- / .col-lg-4 -->
              <div class="col-lg-4 col-md-4 mb-sm-50">
                <div class="blog-post wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation: fadeIn 2s; -webkit-animation: fadeIn 2s;">

                  <!-- Image -->
              

                  <div class="bp-content">
                    
                    <!-- Meta data -->
                    <div class="post-meta">
                      
                    </div><!-- / .meta -->

                    <!-- Post Title -->
                    @if(count($exam))
                    <a href="{{url('../')}}/{{$exam->exam_routine}}" class="post-title"><h4>Exam Routine</h4></a>
                    @else
                    <a href="#" class="post-title"><h4>Exam Routine</h4></a>
                      @endif
                    <!-- Blurb -->
                    <p>@if(count($exam))Exam Routine of {{$exam->exam_name}} is available. Click Enter to Download this Exam Routine <br><br> @else Your Class Routine is not still available. Wait for the authority to upload the Class Routine.<br><br><br> @endif </p>

                    <!-- Link -->
                    @if(count($exam))
                    <a href="{{url('../')}}/{{$exam->exam_routine}}" class="btn btn-small">Download</a>
                    @endif
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