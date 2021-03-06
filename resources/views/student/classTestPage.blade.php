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
<link rel="stylesheet" type="text/css" href="../../new/flow.css">

<div class="gray-bg">
          <section id="blog" class="section container blog-columns blog-preview">
            <div class="row">
              
              <header class="sec-heading">
                <h2>Class Tests</h2>
                <span class="subheading">Select A Task and Explore</span>
              </header>

              
              <!-- Blog Post 1 -->
              <div class="col-lg-6 col-md-6 mb-sm-50">
                <div class="blog-post wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation: fadeIn 2s; -webkit-animation: fadeIn 2s;">

                  <!-- Image -->
              

                  <div class="bp-content">
                    
                    <!-- Meta data -->
                    <div class="post-meta">
                      
                    </div><!-- / .meta -->

                    <!-- Post Title -->
                    <a href="{{url('/student/class_test/upcomings')}}" class="post-title"><h4>Upcoming Class Tests</h4></a>

                    <!-- Blurb -->
                    <p>You have {{count($CTs)}} upcoming class tests. Click Enter to see them</p>

                    <!-- Link -->
                    <a href="{{url('/student/class_test/upcomings')}}" class="btn btn-small">Enter</a>

                  </div><!-- / .bp-content -->

                </div><!-- / .blog-post -->
              </div><!-- / .col-lg-4 -->
               <!-- Blog Post 1 -->
              <div class="col-lg-6 col-md-6 mb-sm-50">
                <div class="blog-post wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation: fadeIn 2s; -webkit-animation: fadeIn 2s;">

                  <!-- Image -->
              

                  <div class="bp-content">
                    
                    <!-- Meta data -->
                    <div class="post-meta">
                      
                    </div><!-- / .meta -->

                    <!-- Post Title -->
                    <a href="{{url('/student/class_test/marks')}}" class="post-title"><h4>Class Test Marks</h4></a>

                    <!-- Blurb -->
                    <p>Click Enter to see uploaded class test marks</p>

                    <!-- Link -->
                    <a href="{{url('/student/class_test/marks')}}" class="btn btn-small">Enter</a>

                  </div><!-- / .bp-content -->

                </div><!-- / .blog-post -->
              </div><!-- / .col-lg-4 -->

            </div><!-- / .row -->
          </section><!-- / .container -->
        </div>
@endsection