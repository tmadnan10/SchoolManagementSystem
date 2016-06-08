@extends('layouts.teacher')
@section('content')
<script type="text/javascript" src="../../../bootstrap-colorpicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../../bootstrap-colorpicker.min.css">
<link rel="stylesheet" type="text/css" href="../../../app.css">

<link rel="stylesheet" type="text/css" href="../../../css/app.min.css">
<link rel="stylesheet" type="text/css" href="../../../css/temp.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//www.google-analytics.com/ga.js"></script>
<style type="text/css"></style> <!--[if lt IE 9]> <script type="text/javascript" src="/min-js?f=js/lib/html5shiv.min.js,js/lib/respond.min.js"></script> <![endif]-->
<style type="text/css">.header-color{background: #ff3b31;}</style>
<script type="text/javascript" src="../../../new/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="../../../new/smoothscroll.js"></script>
<script type="text/javascript" src="../../../new/marker.js"></script>

<link rel="stylesheet" type="text/css" href="../../../new/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="../../../new/animate.css">
<link rel="stylesheet" type="text/css" href="../../../new/responsive.css">
<link rel="stylesheet" type="text/css" href="../../../new/slick.css">
<link rel="stylesheet" type="text/css" href="../../../new/style.css">
<link rel="stylesheet" type="text/css" href="../../../new/linea-font.css">
<link rel="stylesheet" type="text/css" href="../../../new/flow.css">
<div class="container">
<center><h1>{{$exam->exam_name}}</h1><h2>{{$subjects->subject_name}}</h2><h3>Class {{$class_id}}</h3<h3> Section {{$section_id}}</h3></center>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Marks</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/teacher/addResults') }}">
                        {!! csrf_field() !!}
@foreach($students as $std)
<?php $name = "roll"; $name=$name.$std->student_id; ?>
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
<label class="col-md-4 control-label">Roll: {{$std->student_id}}</label>

<div class="col-md-4">
    	<input type="number" min="33" max="100" step="any" oninput="maxLengthCheck(this)" class="form-control" name= "{{$name}}" id="{{$name}}" value="0">
    	<input type="hidden" name="username{{$std->student_id}}" value="{{$std->username}}">
    	@if ($errors->has($name))
        	<span class="help-block">
            	<strong>{{ $errors->first($name) }}</strong>
        	</span>
    	@endif
	</div>
</div>

	

@endforeach
<div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <button type="submit" class="btn btn-primary" name="submit">
                                      <i class=""></i>Next
                                  </button>
                              </div>
                          </div>
<input type="hidden" name="total" value="{{count($students)}}">
<input type="hidden" name="exam_id" value="{{$exam->exam_id}}">
<input type="hidden" name="subject_id" value="{{$subject_id}}">

</form>
</div>
</div>
</div>
</div>
</div>


@endsection