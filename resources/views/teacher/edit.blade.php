@extends('layouts.teacher')


@section('content')
    @if (count($teacher) > 0)
    @foreach ($teacher as $tchr)
    <?


		$dept = DB::table('department')->where('dept_id', $tchr->dept_id)->first();
        foreach ($teacher as $std) {
        $notif = DB::table('notification')
                  ->where('username', $std->username)
                  ->where('view', '0')
                  ->get();
      }
    /*php $class = DB::table('section')
                  ->where('class_id', $tchr->class_id)
                  ->where('section_id', $tchr->section_id)
                  ->first();*/ ?>

<link rel="stylesheet" type="text/css" href="../../css/app.min.css">
<link rel="stylesheet" type="text/css" href="../../css/temp.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="../../jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/datepicker.css">
  <script src="../../js/bootstrap-datepicker.js"></script>

<div class="container bootstrap snippet">
<div class="row">
  <div class="profile-nav col-md-3">
      <div class="panel">
          <div class="user-heading round">
              <a href="#">
                  <img src="../../pro_pics/{{ $tchr->profile_pic }}" alt="../pro_pics/default_avatar.png">
              </a>
              <h1>{{ $tchr->first_name }} {{ $tchr->last_name }}</h1>
              <p>{{ $tchr->email }}</p>
          </div>

          <ul class="nav nav-pills nav-stacked">
              <li><a href="{{url('/teacher')}}"> <i class="fa fa-user"></i> Profile</a></li>
              <li><a href="{{url('teacher/notification')}}"> <i class="fa fa-calendar"></i> Recent Notification <span class="label label-warning pull-right r-activity">{{count($notif)}}</span></a></li>
              <li class="active"><a href="#"> <i class="fa fa-edit"></i> Edit profile</a></li>
          </ul>
      </div>
  </div>
  <div class="profile-info col-md-9">

      <div class="panel">
          <div class="bio-graph-heading">
              <font size="4", style="italic"><i>Welcome</i></font> <font size="6" weight=900>
               {{ $tchr->first_name }} {{ $tchr->last_name }}</font>
          </div>
          <div class="panel-body bio-graph-info">
              <h1>Edit Bio</h1>
              <form class="form-horizontal" role="form" method="POST" action="{{ url('/teacher/edit') }}">
                        {!! csrf_field() !!}
                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="first_name" value="{{ $tchr->first_name }}">

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="last_name" value="{{ $tchr->last_name }}">

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('dept_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Department Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="dept_name" value="{{ $dept->dept_name }}" readonly="">

                                @if ($errors->has('dept_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dept_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('designation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Designation</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="designation" value="{{ $tchr->designation }}" readonly="">

                                @if ($errors->has('designation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('designation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('join_date') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Join Date</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="join_date" value="{{ $tchr->join_date }}" readonly="">

                                @if ($errors->has('join_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('join_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('blood_group') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Blood Group</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="blood_group" value="{{ $tchr->blood_group }}">

                                @if ($errors->has('blood_group'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('blood_group') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-mail Address</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="email" value="{{ $tchr->email }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Address') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Address" value="<?php if(old('Address') != '') echo old('Address'); else echo $tchr->Address ?>">

                                @if ($errors->has('Address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" name="save">
                                    <i class="fa fa-btn fa-user"></i>Save
                                </button>
                            </div>
                        </div>
                    </form>
              </div>
          </div>
      </div>
@endforeach
@endif
<br><br><br><br><br>

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
