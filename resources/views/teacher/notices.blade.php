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
          <section id="blog" class="section container blog-columns blog-preview">
            <div class="row">
              
              <header class="sec-heading">
                <h2>Manage The Club Events</h2>
                <span class="subheading">Currently you are moderating <b> @foreach($clubs as $cl) {{$cl->club_name}} @endforeach </b></span>
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
                    <a href="{{url('/teacher/club_management/show')}}" class="post-title"><h4>View Upcoming Club Events</h4></a>

                    <!-- Blurb -->
                    <p>Here can select one of ypur clubs and add a new member. The corresponding student will get a confirmation
                    as soon as you add him to your club.</p>

                    <!-- Link -->
                    <a href="{{url('/teacher/club_management/show')}}" class="btn btn-small">Enter</a>

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
                    <a href="{{url('/teacher/club_management/notices')}}" class="post-title"><h4>Add New Club Event</h4></a>

                    <!-- Blurb -->
                    <p>Here you can add any club event.
                    You also can change an upcoming club event. The members of the corresponding club 
                    will be notified
                    as soon as you add a new event</p>

                    <!-- Link -->
                    <a href="{{url('/teacher/club_management/notices')}}" class="btn btn-small">Enter</a>

                  </div><!-- / .bp-content -->

                </div><!-- / .blog-post -->
              </div><!-- / .col-lg-4 -->

            </div><!-- / .row -->
          </section><!-- / .container -->
        </div>
@endsection