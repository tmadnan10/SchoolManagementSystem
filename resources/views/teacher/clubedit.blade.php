@extends('layouts.teacher')
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
<link rel="stylesheet" type="text/css" href="../../new/flow1.css">
<div class="gray-bg">
          <section id="blog" class="section container blog-columns blog-preview">
            <div class="row">
              
              <header class="sec-heading">
                <h2></h2>
                <span class="subheading">Select Any Member to Change or Delete</span>
              </header>
        

              <form class="form-horizontal" action="{{url('edit/')}}" method="POST">
                <div class="form-group{{ $errors->has('class_id') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Current Membership</label>

                    <div class="col-md-6">
                        <input class="form-control" name= "class_id" id="class_id" value="{{$member->membership_status}}" readonly="">
                          {!! csrf_field() !!}
                        @if ($errors->has('class_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('class_id') }}</strong>
                            </span>
                        @endif
                    </div>
                  </div>

                  
                          <div class="form-group{{ $errors->has('new') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">New Membership Status</label>

                            <div class="col-md-6">
                                <select class="form-control" name= "new" id="new">
                                <option value="">Select One</option>
                                <option value="Member">Member</option>
                                <option value="Vice-President">Vice-President</option>
                                <option value="President">President</option>
                                <option value="Honorable Mention">Honorable Mention</option>

                                </select>
                                @if ($errors->has('new'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new') }}</strong>
                                    </span>
                                @endif
                            </div>
                          </div>
                          <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <button type="submit" class="btn btn-primary">
                                      <i class=""></i>Upload
                                  </button>
                              </div>
                          </div>

                  <input type="hidden" class="form-control" name= "member_username" id="a" value="{{$member->member_username}}">
                  <input type="hidden" class="form-control" name= "a" id="a" value="{{$member->id}}">
                  <input type="hidden" class="form-control" name= "club_id" id="a" value="{{$member->club_id}}">
              </form> 
</div>
</section>
</div>

<br>
 
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