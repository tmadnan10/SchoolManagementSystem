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
                <h2>Activities</h2>
                <span class="subheading">Check out our blog to see what were up to</span>
              </header>

              
              <!-- Blog Post 1 -->
              <div class="col-lg-4 col-md-6 mb-sm-50">
                <div class="blog-post wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation: fadeIn 2s; -webkit-animation: fadeIn 2s;">

                  <!-- Image -->
                  <a href="pages/blog/blog-post.html" class="post-img"><img src="http://www.octarinethemes.com/demos/definity/assets/images/blog-post-img-1.3.jpg" alt="Blog Post 1"></a>

                  <div class="bp-content">
                    
                    <!-- Meta data -->
                    
                    <!-- Post Title -->
                    <a href="pages/blog/blog-post.html" class="post-title"><h4>Assigned Classes</h4></a>

                    <!-- Blurb -->
                    <p>Click Read More to see your Assigned Classes...</p>

                    <!-- Link -->
                    <a href="{{url('/teacher/assignedclasses')}}" class="btn btn-small">Read More</a>

                  </div><!-- / .bp-content -->

                </div><!-- / .blog-post -->
              </div><!-- / .col-lg-4 -->


              <!-- Blog Post 2 -->
              <div class="col-lg-4 col-md-6 mb-sm-50">
                <div class="blog-post wow fadeIn" data-wow-duration="2s" data-wow-delay=".3s" style="visibility: visible; animation: fadeIn 2s 0.3s; -webkit-animation: fadeIn 2s 0.3s;">

                  <!-- Image -->
                  <a href="pages/blog/blog-post.html" class="post-img"><img src="http://www.octarinethemes.com/demos/definity/assets/images/blog-post-img-1.4.jpg" alt="Blog Post 1"></a>

                  <div class="bp-content">
                    
                    <!-- Meta data -->
                    

                    <!-- Post Title -->
                    <a href="pages/blog/blog-post.html" class="post-title"><h4>Class Teacher</h4></a>

                    <!-- Blurb -->
                    @if (count($class_teacher) > 0)
                    <br><b>Class:</b> {{$class_teacher->class_id}}
                    <br><b>Section:</b> {{$class_teacher->section_id}}
                    <br><b>Room No:</b> {{$class_teacher->room_no}}
                    <br>
                    <br>
                    


                    @else
                    <p>You are currently not a Class teacher of any class...</p>
                    @endif

                    <!-- Link -->
                

                  </div><!-- / .bp-content -->

                </div><!-- / .blog-post -->
              </div><!-- / .col-lg-4 -->

              
              <!-- Blog Post 3 -->
              <div class="col-lg-4 col-md-6">
                <div class="blog-post wow fadeIn" data-wow-duration="2s" data-wow-delay=".6s" style="visibility: visible; animation: fadeIn 2s 0.6s; -webkit-animation: fadeIn 2s 0.6s;">

                  <!-- Image -->
                  <a href="pages/blog/blog-post.html" class="post-img"><img src="http://www.octarinethemes.com/demos/definity/assets/images/blog-post-img-1.6.jpg" alt="Blog Post 1"></a>

                  <div class="bp-content">
                    
                    <!-- Meta data -->
                    

                    <!-- Post Title -->
                    <a href="pages/blog/blog-post.html" class="post-title"><h4>Club Moderator</h4></a>

                    <!-- Blurb -->
                     @if (count($club) > 0)
                     @foreach($club as $as)
                                  <br><b>Club Name:</b> {{$as->club_name}}
                                  <br><b>Club ID:</b> {{$as->club_id}}
                                  <br><b>Office Room:</b> {{$as->office_room_no}}
                                  <br><b>Total Members:</b> {{$as->total_members}}
            
                                  @endforeach
                    
                    
                    <br>
                    


                    @else
                    <p>You are currently not a Cloass teacher of any class...</p>
                    @endif
                    <!-- Link -->
          

                  </div><!-- / .bp-content -->

                </div><!-- / .blog-post -->
              </div><!-- / .col-lg-4 -->


            </div><!-- / .row -->
          </section><!-- / .container -->
        </div>

{{count($assigned_subject)}}<br>{{count($class_teacher)}}<br>{{count($club)}}

@endsection
