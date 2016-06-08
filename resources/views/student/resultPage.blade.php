@extends('layouts.student')
@section('content')
<?php $x = 0;?>
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


@if(count($exams) == 3)

<div class="gray-bg">
          <section id="blog" class="section container blog-columns blog-preview">
            <div class="row">
              
              <header class="sec-heading">
                <h2>Examinations</h2>
                <span class="subheading">Select An Examination and See The Result</span>
              </header>

              <!-- Blog Post 1 -->
              <div class="col-lg-4 col-md-4 mb-sm-100">
                <div class="blog-post wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation: fadeIn 2s; -webkit-animation: fadeIn 2s;">

                  <!-- Image -->
              

                  <div class="bp-content">
                   <!-- Meta data -->
                    <div class="post-meta">
                      <a href="#" class="post-date">
                        <i class="fa fa-calendar-o"></i>
                        <span>April 3. 2016</span>
                      </a>

                    </div><!-- / .meta -->

                    <!-- Post Title -->
                   
                    <a href="{{url('/student/firstTerminal')}}" class="post-title"><h4>1st Terminal Exam</h4></a>


                    <!-- Blurb -->
                    <p>Lorem ipsum dolor sit amet, tempor consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Ut enim ad ...</p>

                    <!-- Link -->
                    
                    <a href="{{url('/student/firstTerminal')}}" class="btn btn-small">View Result</a>

                  </div><!-- / .bp-content -->

                </div><!-- / .blog-post -->
              </div><!-- / .col-lg-4 -->



              <!-- Blog Post 1 -->
              <div class="col-lg-4 col-md-4 mb-sm-100">
                <div class="blog-post wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation: fadeIn 2s; -webkit-animation: fadeIn 2s;">

                  <!-- Image -->
              

                  <div class="bp-content">
                   <!-- Meta data -->
                    <div class="post-meta">
                      <a href="#" class="post-date">
                        <i class="fa fa-calendar-o"></i>
                        <span>June 11. 2016</span>
                      </a>

                    </div><!-- / .meta -->

                    <!-- Post Title -->
                   
                    <a href="{{url('/student/secondTerminal')}}" class="post-title"><h4>2nd Terminal Exam</h4></a>


                    <!-- Blurb -->
                    <p>Lorem ipsum dolor sit amet, tempor consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Ut enim ad ...</p>

                    <!-- Link -->
                    
                    <a href="{{url('/second/secondTerminal')}}" class="btn btn-small">View Result</a>

                  </div><!-- / .bp-content -->

                </div><!-- / .blog-post -->
              </div><!-- / .col-lg-4 -->

              <!-- Blog Post 1 -->
              <div class="col-lg-4 col-md-4 mb-sm-100">
                <div class="blog-post wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation: fadeIn 2s; -webkit-animation: fadeIn 2s;">

                  <!-- Image -->
              

                  <div class="bp-content">
                   <!-- Meta data -->
                    <div class="post-meta">
                      <a href="#" class="post-date">
                        <i class="fa fa-calendar-o"></i>
                        <span>November 13. 2016</span>
                      </a>

                    </div><!-- / .meta -->

                    <!-- Post Title -->
                   
                    <a href="{{url('/student/termFinal')}}" class="post-title"><h4>Term Final Exam</h4></a>


                    <!-- Blurb -->
                    <p>Lorem ipsum dolor sit amet, tempor consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Ut enim ad ...</p>

                    <!-- Link -->
                    
                    <a href="{{url('/student/termFinal')}}" class="btn btn-small">View Result</a>

                  </div><!-- / .bp-content -->

                </div><!-- / .blog-post -->
              </div><!-- / .col-lg-4 -->


			</div><!-- / .row -->
          </section><!-- / .container -->
 </div>


@elseif(count($exams) == 2)

<div class="gray-bg">
          <section id="blog" class="section container blog-columns blog-preview">
            <div class="row">
              
              <header class="sec-heading">
                <h2>Examinations</h2>
                <span class="subheading">Select An Examination and See The Result</span>
              </header>

              <!-- Blog Post 1 -->
              <div class="col-lg-6 col-md-6 mb-sm-100">
                <div class="blog-post wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation: fadeIn 2s; -webkit-animation: fadeIn 2s;">

                  <!-- Image -->
              

                  <div class="bp-content">
                   <!-- Meta data -->
                    <div class="post-meta">
                      <a href="#" class="post-date">
                        <i class="fa fa-calendar-o"></i>
                        <span>April 3. 2016</span>
                      </a>

                    </div><!-- / .meta -->

                    <!-- Post Title -->
                   
                    <a href="{{url('/student/firstTerminal')}}" class="post-title"><h4>1st Terminal Exam</h4></a>


                    <!-- Blurb -->
                    <p>Lorem ipsum dolor sit amet, tempor consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Ut enim ad ...</p>

                    <!-- Link -->
                    
                    <a href="{{url('/student/firstTerminal')}}" class="btn btn-small">View Result</a>

                  </div><!-- / .bp-content -->

                </div><!-- / .blog-post -->
              </div><!-- / .col-lg-4 -->



              <!-- Blog Post 1 -->
              <div class="col-lg-6 col-md-6 mb-sm-100">
                <div class="blog-post wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation: fadeIn 2s; -webkit-animation: fadeIn 2s;">

                  <!-- Image -->
              

                  <div class="bp-content">
                   <!-- Meta data -->
                    <div class="post-meta">
                      <a href="#" class="post-date">
                        <i class="fa fa-calendar-o"></i>
                        <span>June 11. 2016</span>
                      </a>

                    </div><!-- / .meta -->

                    <!-- Post Title -->
                   
                    <a href="{{url('/student/secondTerminal')}}" class="post-title"><h4>2nd Terminal Exam</h4></a>


                    <!-- Blurb -->
                    <p>Lorem ipsum dolor sit amet, tempor consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Ut enim ad ...</p>

                    <!-- Link -->
                    
                    <a href="{{url('/student/secondTerminal')}}" class="btn btn-small">View Result</a>

                  </div><!-- / .bp-content -->

                </div><!-- / .blog-post -->
              </div><!-- / .col-lg-4 -->
			</div><!-- / .row -->
          </section><!-- / .container -->
 </div>

@elseif(count($exams) == 1)

<div class="gray-bg">
          <section id="blog" class="section container blog-columns blog-preview">
            <div class="row">
              
              <header class="sec-heading">
                <h2>Examinations</h2>
                <span class="subheading">Select An Examination and See The Result</span>
              </header>

              <div class="col-lg-4 col-md-4 mb-sm-100">
              </div>
              <!-- Blog Post 1 -->
              <div class="col-lg-4 col-md-4 mb-sm-100">
                <div class="blog-post wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation: fadeIn 2s; -webkit-animation: fadeIn 2s;">

                  <!-- Image -->
              

                  <div class="bp-content">
                   <!-- Meta data -->
                    <div class="post-meta">
                      <a href="#" class="post-date">
                        <i class="fa fa-calendar-o"></i>
                        <span>April 3. 2016</span>
                      </a>

                    </div><!-- / .meta -->

                    <!-- Post Title -->
                   
                    <a href="{{url('/student/firstTerminal')}}" class="post-title"><h4>1st Terminal Exam</h4></a>


                    <!-- Blurb -->
                    <p>Lorem ipsum dolor sit amet, tempor consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Ut enim ad ...</p>

                    <!-- Link -->
                    
                    <a href="{{url('/student/firstTerminal')}}" class="btn btn-small">View Result</a>

                  </div><!-- / .bp-content -->

                </div><!-- / .blog-post -->
              </div><!-- / .col-lg-4 -->
			</div><!-- / .row -->
          </section><!-- / .container -->
 </div>

@else
<div class="gray-bg">
          <section id="blog" class="section container blog-columns blog-preview">
            <div class="row">
              
              <header class="sec-heading">
                <h2>This is not a Result Season</h2>
                <span class="subheading">See You Later</span>
              </header>
              </div>
              </section>
            </div>


@endif
@endsection