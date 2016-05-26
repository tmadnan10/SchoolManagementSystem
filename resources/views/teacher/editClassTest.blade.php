@extends('layouts.teacher')

@section('content')

<link rel="stylesheet" type="text/css" href="../../../css/app.min.css">
<link rel="stylesheet" type="text/css" href="../../../css/temp.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="../../../jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" type="text/css" href="../../../css/datepicker.css">
<script src="../../../js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="../../../bootstrap-colorpicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../../bootstrap-colorpicker.min.css">
<link rel="stylesheet" type="text/css" href="../../../app.css">
<link rel="stylesheet" type="text/css" href="../../../css/app.min.css">
<link rel="stylesheet" type="text/css" href="../../../css/temp.min.css">

<div class="principal-container page-users-edit_profile" role="main">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<div class="wizard-container">
					<div class="card wizard-card ct-wizard-info" id="wizard">
						<div class="wizard-header">	
							<center><h2>Currently You Have <br><b>{{count($class_test)}}</b> Upcoming Class Test(s)</h2><br></center>
						</div>

					<ul class="nav nav-pills">
						<li class="active" style="width: 100%;">
							<a href="#st" data-toggle="tab" aria-expanded="true">Schedule a New Class Test</a>
						</li>
					
					</ul>
					<div class="tab-pane" id="ct">
                	<div class="panel-body">

                		<form class="form-horizontal" role="form" method="POST" action="{{ url('/teacher/class_test/editClassTest') }}">
                              {!! csrf_field() !!}



                              <br><br>

                        <div class="form-group{{ $errors->has('class_id') ? ' has-error' : '' }}">
                              <label class="col-md-4 control-label">Class</label>

                              <div class="col-md-6">
                                  <select class="form-control" name= "class_id" id="class_id">
                                  <option value="">Select A Class</option>
                                  @foreach($class_test_dist as $as)
                                  <option value="{{$as->class_id}}">{{$as->class_id}}</option>
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
                              <option value=""></option>
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

                        <div class="form-group{{ $errors->has('subject_id') ? ' has-error' : '' }}">
                              <label class="col-md-4 control-label">Subject</label>
                              <option value=""></option>
                              <div class="col-md-6">
                                  <select class="form-control" name= "subject_id" id="subject_id">
                                  <option value=""></option>

                                  </select>
                                  @if ($errors->has('subject_id'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('subject_id') }}</strong>
                                      </span>
                                  @endif
                              </div>
                        </div>

                        <div class="form-group{{ $errors->has('cd') ? ' has-error' : '' }}">
                              <label class="col-md-4 control-label">Current Date</label>

                              <div class="col-md-6">
                                  
                                  <select name="cd" class="form-control" id="cd">
                                  	<option value=""></option>
                                  </select>
                                  @if ($errors->has('cd'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('cd') }}</strong>
                                      </span>
                                  @endif
                              </div>
                            </div>


                        <div class="form-group{{ $errors->has('cs') ? ' has-error' : '' }}">
                              <label class="col-md-4 control-label">Current Syllabus</label>

                              <div class="col-md-6">
                                  
                                  <textarea value="" name="cs" id="cs" readonly="" class="form-control" cols="5" rows="5"> </textarea>
                                  @if ($errors->has('cs'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('cs') }}</strong>
                                      </span>
                                  @endif
                              </div>
                            </div>
                                
                        <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">New Date</label>

                            <div class="col-md-6">
                                <input type="text" id="datepicker" class="form-control" name="date" value="{{ old('date') }}">

                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('syllabus') ? ' has-error' : '' }}">
                              <label class="col-md-4 control-label">New Syllabus</label>

                              <div class="col-md-6">
                                 {{ Form::textarea('syllabus', null, ['size' => '46x5']) }}
                                  
                        
                                  @if ($errors->has('syllabus'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('syllabus') }}</strong>
                                      </span>
                                  @endif
                              </div>
                            </div>

                        <input type="hidden" value="{{Auth::user()->username}}" name="username" id="username">






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






<script>
  $('#class_id').on('change', function(e){
    console.log(e);
    var class_id = e.target.value;
    console.log(class_id);
    var arr;
    var username = $('#username').val();
    console.log(username);
    $.get("{{ url('/ct/ct')}}=" + class_id + "=" + username, function(data){
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


  $('#section_id').on('change', function(e){
    console.log(e);
    var section_id = e.target.value;
    console.log(section_id);
    var username = $('#username').val();
    var class_id = $('#class_id').val();
    console.log(username);
    $.get("{{ url('/ct/ct/sub')}}=" + class_id + "=" + section_id + "=" + username, function(data){
      console.log(data);
      $('#subject_id').empty();
      //console.log('data');

           //$('#subject_id').append(' Please section_id one');
           //console.log('data');
           $('#subject_id').append('<option value=" ">Please Select A Subject</option>');
           var arr = JSON.parse(data);
           console.log(arr.length);
           for (var i = 0; i < arr.length; i+=2) {
              $('#subject_id').append('<option value="'+arr[i]+'">'+arr[i+1]+'</option>');
            console.log(arr[i]);
            };
    });

});

$('#subject_id').on('change', function(e){
    console.log(e);
    var subject_id = e.target.value;
    console.log(section_id);
    var class_id = $('#class_id').val();
    var section_id = $('#section_id').val();
    console.log(username);
    $.get("{{ url('/ctedit')}}=" + class_id + "=" + section_id + "=" + subject_id, function(data){
      console.log(data);
      $('#cd').empty();$('#cs').empty();
      //console.log('data');

           //$('#subject_id').append(' Please section_id one');
           //console.log('data');
           
           var arr = JSON.parse(data);
           console.log(arr.length);
           if (arr[0] != '') {$('#cd').append('<option value=" ">Please Select A Date</option>');};
           for (var i = 0; i < arr.length; i+=2) {
              $('#cd').append('<option value="'+arr[i]+'">'+arr[i]+'</option>');
            console.log(arr[i]);
            };
    });

});

$('#cd').on('change', function(e){
    console.log(e);
    var date = e.target.value;
    console.log(section_id);
    var class_id = $('#class_id').val();
    var section_id = $('#section_id').val();
    var subject_id = $('#subject_id').val();
    var values=date.split('-');
	var year=values[0];
	var mn=values[1];
	var day = values[2];
	date = year+mn+day;
    $.get("{{ url('/ctedit1')}}=" + class_id + "=" + section_id + "=" + subject_id + "=" +date, function(data){

      //$('#subject_id').empty();

           //$('#subject_id').append(' Please section_id one');
           //console.log('data');
           //$('#subject_id').append('<option value=" ">Please Select A Date</option>');
           var arr = JSON.parse(data);
           console.log(arr.length);
           console.log(arr);
           $('#cs').val(arr[0]);
           /*for (var i = 0; i < arr.length; i+=2) {
              $('#cd').append('<option value="'+arr[i]+'">'+arr[i]+'</option>');
            console.log(arr[i]);
            };*/
    });

});

</script>


<script type="text/javascript">/*<![CDATA[*/$('#wizard-picture').bind('change', function() {
      var size = this.files[0].size/1024/1024;
      size = Math.floor(size);
      if(size>1) {
        bootbox.alert('<div class="alert alert-info">The selected image is too large</div>');
        $('#wizard-picture').val('');
        return false;
      }
  });
  $(function(){
    $('.modal').on('hidden.bs.modal', function (e) {
      if($('#wizardPicturePreview').attr('src').indexOf('default-avatar.png')!=-1) {
        $('.popImg').popover('show');
      }
    });
    $('.btn-next').click(function(){
      $('.popImg').popover('hide');
    })
    $('.color-input').colorpicker();
    $("#UserColor").click(function(){
      $(this).closest('.color-input').find('span').click();
    });
    $('input[value="Develop"]').attr('checked','checked');
    $('input[value="Develop"]').closest('.choice').addClass('active');
    $('.btn-save-form').click(function(){
      if($("#UserFirstName").val().trim()=="") {
        $("#UserFirstName").val('');
      }
      if($("#UserLastName").val().trim()=="") {
        $("#UserLastName").val('');
      }
      if($("#UserSkills").val().trim()=="") {
        $("#UserSkills").val('');
      }
      if($("#UserDescription").val().trim()=="") {
        $("#UserDescription").val('');
      }
      if($("#UserFirstName").val()=="") {
        return bootbox.alert("<div class='alert alert-danger'>Please enter a first name in the NAME tab</div>");
      }
      if($("#UserLastName").val()=="") {
        return bootbox.alert("<div class='alert alert-danger'>Please enter a last name in the NAME tab</div>");
      }
      if($("#UserEmail").val()=="") {
        return bootbox.alert("<div class='alert alert-danger'>Please enter an email in the NAME tab</div>");
      }
      if($("#UserSkills").val()=="") {
        return bootbox.alert("<div class='alert alert-danger'>Please enter a Skills</div>");
      }
      if($("#UserColor").val()=="") {
        return bootbox.alert("<div class='alert alert-danger'>Please select a cover color</div>");
      }
      if($("#UserDescription").val()=="") {
        return bootbox.alert("<div class='alert alert-danger'>Please write something about you</div>");
      }
    });
  });/*]]>*/</script> </div>
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
<script type="text/javascript">/*<![CDATA[*/APPBASE = '';
      ISLOGIN = '1';
      $('.users-edit_profile').addClass('active');
                   /*-- google an ---*/
          var _gaq = [
            ['_setAccount', 'UA-49755460-1'],
            ['_trackPageview']
          ];
          (function (d, t) {
            var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
            g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g, s)
          }(document, 'script'));/*]]>*/</script> <style type="text/css">/*Css style generated dynamically using the app configuracion*/
	.image-graphic {
		width: 340px;
		height: 650px;
    	background: url("/img/hero-graphic.png") no-repeat scroll 0 0 / 100% auto rgba(0, 0, 0, 0);
    }
    .page-users-login,
    .page-users-add,
    .home-masthead {
		background-color: #39bbdb;
		background-image: -webkit-gradient(linear,left top,left bottom,from(#39bbdb),to(#39bbdb));
		background-image: -webkit-linear-gradient(top,#39bbdb 0,#39bbdb 100%);
		background-image: -o-linear-gradient(top,#39bbdb 0,#39bbdb 100%);
		background-image: linear-gradient(to bottom,#39bbdb 0,#39bbdb 100%);
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#39bbdb', endColorstr='#39bbdb', GradientType=0);
	}
	.page-pages-display,
	.page-pages-home,
	.page-users-login,
    .page-users-add {margin-top: 0px !important;}
	.navbar-app {border-bottom: 1px solid #eee;}
	.booticon{background: transparent;}
	.navbar-default .navbar-nav>li>a {color: #39bbdb;}
	.page-pages-display p {line-height: 0.928571;}
	.page-pages-home {min-height: 600px;}
	</style>
			<div class="colorpicker dropdown-menu colorpicker-hidden">
			<div class="colorpicker-saturation" style="background-color: rgb(255, 14, 0);">
			<i style="top: 0px; left: 81.17647058823529px;"><b></b></i></div>
			<div class="colorpicker-hue"><i style="top: 99.11433172302773px;"></i></div>
			<div class="colorpicker-alpha" style="background-color: rgb(255, 59, 48);"><i style="top: 0px;"></i></div>
			<div class="colorpicker-color" style="background-color: rgb(255, 59, 48);"><div style="background-color: rgb(255, 59, 48);"></div></div>






{{count($class_test)}}
@endsection