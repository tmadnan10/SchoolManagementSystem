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
<div class="gray-bg">

@if(count($exam))
<input type="hidden" name="id" value="{{$exam->exam_name}}">
          <section id="blog" class="section container blog-columns blog-preview">
            <div class="row">
              
              <header class="sec-heading">
                <h2>Examinations</h2>
                <span class="subheading">Select An Examination and Upload The Result</span>
              </header>

              
              <!-- Blog Post 1 -->
              <div class="col-lg-4 col-md-6 mb-sm-50">
                <div class="blog-post wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation: fadeIn 2s; -webkit-animation: fadeIn 2s;">

                  <!-- Image -->
              

                  <div class="bp-content">
                    <!-- Meta data -->
                    <div class="post-meta">
                      <a href="#" class="post-date">
                        <i class="fa fa-calendar-o"></i>
                        <span>@if(count($exam)) @if ($exam->exam_name =="1st Terminal Exam") <?php $timestamp = strtotime( $exam->exam_date ); print date( 'd M Y', $timestamp );?> @endif @endif</span>
                      </a>

                    </div><!-- / .meta -->

                    <!-- Post Title -->
                    @if ($exam->exam_name =="1st Terminal Exam")
                    <a href="{{url('/teacher/uploadResult')}}" class="post-title"><h4>1st Terminal Exam</h4></a>
                    @else
                    <a href="#" class="post-title"><h4>1st Terminal Exam</h4></a>
                    @endif

                    <!-- Blurb -->
                    <p>Lorem ipsum dolor sit amet, tempor consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Ut enim ad ...</p>

                    <!-- Link -->
                    @if ($exam->exam_name =="1st Terminal Exam")
                    <a href="{{url('/teacher/uploadResult')}}" class="btn btn-small">Upload Result</a>
                    @endif
                  </div><!-- / .bp-content -->

                </div><!-- / .blog-post -->
              </div><!-- / .col-lg-4 -->


              <!-- Blog Post 2 -->
              <div class="col-lg-4 col-md-6 mb-sm-50">
                <div class="blog-post wow fadeIn" data-wow-duration="2s" data-wow-delay=".3s" style="visibility: visible; animation: fadeIn 2s 0.3s; -webkit-animation: fadeIn 2s 0.3s;">

                  <!-- Image -->
                  

                  <div class="bp-content">
                    
                    <!-- Meta data -->
                    <div class="post-meta">
                      <a href="#" class="post-date">
                        <i class="fa fa-calendar-o"></i>
                        <span>@if(count($exam)) @if ($exam->exam_name =="2nd Terminal Exam") <?php $timestamp = strtotime( $exam->exam_date ); print date( 'd M Y', $timestamp );?> @endif @endif</span>
                      </a>

                    </div><!-- / .meta -->

                    <!-- Post Title -->
                    @if ($exam->exam_name =="2nd Terminal Exam")
                    <a href="{{url('/teacher/uploadResult')}}" class="post-title"><h4>2nd Terminal Exam</h4></a>
                    @else
                    <a href="#" class="post-title"><h4>2nd Terminal Exam</h4></a>
                    @endif

                    <!-- Blurb -->
                    <p>Lorem ipsum dolor sit amet, tempor consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Ut enim ad ...</p>

                    <!-- Link -->
                    @if ($exam->exam_name =="2nd Terminal Exam")
                    <a href="{{url('/teacher/uploadResult')}}" class="btn btn-small">Upload Result</a>
                    @endif
                  </div><!-- / .bp-content -->

                </div><!-- / .blog-post -->
              </div><!-- / .col-lg-4 -->

              
              <!-- Blog Post 3 -->
              <div class="col-lg-4 col-md-6">
                <div class="blog-post wow fadeIn" data-wow-duration="2s" data-wow-delay=".6s" style="visibility: visible; animation: fadeIn 2s 0.6s; -webkit-animation: fadeIn 2s 0.6s;">

                  <!-- Image -->


                  <div class="bp-content">
                    
                    <!-- Meta data -->
                    <div class="post-meta">
                      <a href="#" class="post-date">
                        <i class="fa fa-calendar-o"></i>
                       <span>@if(count($exam)) @if ($exam->exam_name =="Term Final Exam") <?php $timestamp = strtotime( $exam->exam_date ); print date( 'd M Y', $timestamp );?> @endif @endif</span>
                      </a>
                      
                    </div><!-- / .meta -->

                    <!-- Post Title -->
                    @if ($exam->exam_name =="Term Final Exam")
                    <a href="{{url('/teacher/uploadResult')}}" class="post-title"><h4>Term Final Exam</h4></a>
                    @else
                    <a href="#" class="post-title"><h4>Term Final Exam</h4></a>
                    @endif

                    <!-- Blurb -->
                    <p>Lorem ipsum dolor sit amet, tempor consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Ut enim ad ...</p>

                    <!-- Link -->
                    @if ($exam->exam_name =="Term Final Exam")
                    <a href="{{url('/teacher/uploadResult')}}" class="btn btn-small">Upload Result</a>
                    @endif

                  </div><!-- / .bp-content -->

                </div><!-- / .blog-post -->
              </div><!-- / .col-lg-4 -->


            </div><!-- / .row -->
          </section><!-- / .container -->
          @else
          <section id="blog" class="section container blog-columns blog-preview">
            <div class="row">
              
              <header class="sec-heading">
                <h2>This is not result Upload Time</h2>
                <span class="subheading">See you later.......</span>
              </header>
        </div>
        </section>
        <br><br><br><br><br><br><br><br><br><br><br>
        @endif
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