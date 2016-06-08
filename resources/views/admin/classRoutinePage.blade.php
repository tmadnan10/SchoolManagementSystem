@extends('layouts.admin')
<?php 
	$date = date('m');
	if ($date<7) {
		$exam = '2nd Terminal Exam';	
	}
	elseif ($date<4) {
		$exam = '1st Terminal Exam';	
	}
	elseif ($date<11) {
		$exam = 'Term Final Exam';	
	}
?>
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

<link rel="stylesheet" type="text/css" href="../../css/app.min.css">
<link rel="stylesheet" type="text/css" href="../../css/temp.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="../../jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/datepicker.css">
  <script src="../../js/bootstrap-datepicker.js"></script>

<div class="principal-container page-users-edit_profile" role="main">
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="wizard-container">
					<div class="card wizard-card ct-wizard-info" id="wizard">
						<div class="wizard-header">
							<center><h2>Class Routine<br><b></b></h2><br></center>
						</div>

					<ul class="nav nav-pills">
						<li class="active" style="width: 100%;">
							<a href="#st" data-toggle="tab" aria-expanded="true">Upload Class Routne of A Section</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="st">
              			<center></center>
  							<div class="panel-body">

  							{!! Form::open(array('class' => 'form-horizontal', 'url'=>'/admin/class_routine','method'=>'POST', 'files'=>true)) !!}

                          		<br>

                          	<div class="form-group{{ $errors->has('class_id') ? ' has-error' : '' }}">
                              <label class="col-md-4 control-label">Class</label>

                              <div class="col-md-6">
                                  <select class="form-control" name= "class_id" id="class_id" value="{{old('class_id')}}">
                                  <option value="">Select A Class</option>
                                  @foreach($classes as $class)
                                  <option value="{{$class->class_id}}">{{$class->class_id}}</option>
                                  @endforeach
                                  </select>
                                  @if ($errors->has('class_id'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('class_id') }}</strong>
                                      </span>
                                  @endif
                              </div>
                            </div>

                            <div class="form-group{{ $errors->has('section_id') ? ' has-error' : '' }}">
                              <label class="col-md-4 control-label">Section</label>

                              <div class="col-md-6">
                                  <select class="form-control" name= "section_id" id="section_id">
                                  <option value=""></option>

                                  </select>
                                  @if ($errors->has('section_id'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('section_id') }}</strong>
                                      </span>
                                  @endif
                              </div>
                            </div>
                             <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                              <label class="col-md-4 control-label">Routine File</label>

                              <div class="col-md-6">
                                  <input type="file", name="file", class="form-control">
                                  @if ($errors->has('file'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('file') }}</strong>
                                      </span>
                                  @endif
                              </div>
                            </div>

                          	<div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <button type="submit" class="btn btn-primary">
                                      <i class=""></i>Submit
                                  </button>
                              </div>
                          </div>
                          {!! Form::close() !!}




  							</div>
  						</div>

						<div class="tab-pane" id="ct">
              <center></center>
                <div class="panel-body">




                            <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <button type="submit" class="btn btn-primary">
                                      <i class=""></i>Next
                                  </button>
                              </div>
                          </div>
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
<script>
    $('#class_id').on('change', function(e){
    console.log(e);
    var class_id = e.target.value;
    console.log(class_id);

    $.get("{{ url('api/dropdown')}}=" + class_id, function(data){
      console.log(data);
      $('#section_id').empty();
      //console.log('data');

           $('#section_id').append(' Please section_id one');
           //console.log('data');
           var arr = JSON.parse(data);
           console.log(arr.length);
           for (var i = 0; i < arr.length; i++) {
              $('#section_id').append('<option value="'+arr[i]+'">'+arr[i]+'</option>');
            console.log(arr[i]);
            };
    });

});
</script>
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