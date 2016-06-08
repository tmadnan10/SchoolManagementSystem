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

<div class="principal-container page-users-edit_profile" role="main">
<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <div class="wizard-container">
          <div class="card wizard-card ct-wizard-info" id="wizard">
            <div class="wizard-header">
              <center><h2>Upload Result<br><b></b></h2><br></center>
            </div>

          <ul class="nav nav-pills">
            <!--<li class="active" style="width: 100%;">
              <a href="#st" data-toggle="tab" aria-expanded="true">Assign A Club Moderator</a>
            </li>-->
            <li class="active" style="width: 100%;">
              <a href="#ct" data-toggle="tab">Select Subject to Upload Result</a>
            </li>
          </ul>
          

            <div class="tab-pane" id="ct">
              <center></center>
                <div class="panel-body">

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/teacher/uploadResult/results') }}">
                              {!! csrf_field() !!}

                              <h4><center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYou are Assigned to take {{count($subjects)}} Classes</center></h4>
                              <br>
                  <div class="form-group{{ $errors->has('subject_id') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Subject</label>

                        <div class="col-md-6">
                            <select class="form-control" name= "subject_id" id="subject_id">
                            <option value="">Select A Subject</option>
                           @foreach($subjects as $club)
                            <option value="{{$club->id}}">{{$club->subject_name}}</option>
                           @endforeach
                            </select>
                            @if ($errors->has('subject_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('subject_id') }}</strong>
                                </span>
                            @endif
                        </div>
                      </div>
                            <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <button type="submit" class="btn btn-primary" name="submit">
                                      <i class=""></i>Next
                                  </button>
                              </div>
                          </div>
                          <input name="id" type="hidden" value="{{$exam->exam_id}}">
                          </form>

                </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

@endsection