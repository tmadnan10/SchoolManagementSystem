@extends('layouts.teacher')

<?php
$classes = DB::table('section')
			->select('class_id')
			->distinct()
			->get();
?>
@section('content')
@if(count($club))
@foreach($club as $clb)

<script type="text/javascript" src="../../../bootstrap-colorpicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../../bootstrap-colorpicker.min.css">
<link rel="stylesheet" type="text/css" href="../../../app.css">

<link rel="stylesheet" type="text/css" href="../../../css/app.min.css">
<link rel="stylesheet" type="text/css" href="../../../css/temp.min.css">
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
							<center><h2>You are Currently Moderating <br><font color="black">{{$clb->club_name}}</font><b></b></h2><br></center>
						</div>

					<ul class="nav nav-pills">
						<li class="active" style="width: 100%;">
							<a href="#add" data-toggle="tab" aria-expanded="true">Add A Member</a>
						</li>
			
					</ul>
					<div class="tab-content">

            <div class="tab-pane active" id="add">
            <center></center>
							<div class="panel-body">

							<form class="form-horizontal" role="form" method="POST" action="{{ url('/teacher/club') }}">
                        		{!! csrf_field() !!}





                          <div class="form-group{{ $errors->has('class_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Class</label>

                            <div class="col-md-6">
                                <select class="form-control" name= "class_id" id="class_id">
                                <option value="">Select A Class</option>
                                @foreach($classes as $class)
                                <option value="{{ $class->class_id }}">{{ $class->class_id }}</option>
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

                          <div class="form-group{{ $errors->has('student_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Roll</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="student_id" value="{{old('student_id')}}">
                                @if ($errors->has('student_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('student_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                          </div>

                          <div class="form-group{{ $errors->has('membership_status') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Membership Status</label>

                            <div class="col-md-6">
                                <select class="form-control" name= "membership_status" id="membership_status">
                                <option value="">Select One</option>
                                <option value="Member">Member</option>
                                <option value="Member">Member</option>
                                <option value="Vice-President">Vice-President</option>
                                <option value="President">President</option>
                                <option value="Honorable Mention">Honorable Mention</option>

                                </select>
                                @if ($errors->has('membership_status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('membership_status') }}</strong>
                                    </span>
                                @endif
                            </div>
                          </div>

                          <input type="hidden" name="club_id" value="{{$clb->club_id}}">
                          <input type="hidden" name="club_name" value="{{$clb->club_name}}">

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





						<div class="tab-pane" id="del">
						Hello2
						</div>
						



            <div class="tab-pane" id="edit">
            <br>
						  <form class="form-horizontal" role="form" method="POST" action="{{ url('/teacher/club') }}">
                            {!! csrf_field() !!}
                          <div class="form-group{{ $errors->has('member_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Member</label>

                            <div class="col-md-6">
                                <select class="form-control" name= "member_id" id="member_id">
                                <option value="">Select One</option>

                                </select>
                                @if ($errors->has('membership_status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('membership_status') }}</strong>
                                    </span>
                                @endif
                            </div>
                          </div>
                          </form>


						</div>
						


            <div class="tab-pane" id="event">
						<center></center>
                <div class="panel-body">

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/addclubnotice') }}">
                              {!! csrf_field() !!}
                              <div class="form-group{{ $errors->has('class_id1') ? ' has-error' : '' }}">
                              <label class="col-md-4 control-label">Class</label>

                              <div class="col-md-6">
                                  <textarea rows="7" cols="45" placeholder = "comment" form="usrform" name="comment"></textarea>
                                  
                                  </select>
                                  @if ($errors->has('class_id1'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('class_id1') }}</strong>
                                      </span>
                                  @endif
                              </div>
                            </div>





                            <div class="form-group{{ $errors->has('class_id1') ? ' has-error' : '' }}">
                              <label class="col-md-4 control-label">Class</label>

                              <div class="col-md-6">
                                  <select class="form-control" name= "class_id1" id="class_id1">
                                  <option value="">Select A Class</option>
                                  
                                  <option value="class->class_id}}">class->class_id}}</option>
                                  
                                  </select>
                                  @if ($errors->has('class_id1'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('class_id1') }}</strong>
                                      </span>
                                  @endif
                              </div>
                            </div>

                            <div class="form-group{{ $errors->has('section_id1') ? ' has-error' : '' }}">
                              <label class="col-md-4 control-label">Section</label>

                              <div class="col-md-6">
                                  <select class="form-control" name= "section_id1" id="section_id1">
                                  <option value=""></option>

                                  </select>
                                  @if ($errors->has('section_id1'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('section_id1') }}</strong>
                                      </span>
                                  @endif
                              </div>
                            </div>


                            <div class="form-group{{ $errors->has('username1') ? ' has-error' : '' }}">
                              <label class="col-md-4 control-label">Teacher</label>

                              <div class="col-md-6">
                                  <select class="form-control" name= "username1" id="username1">
                                  <option value=""></option>

                                  </select>
                                  @if ($errors->has('username1'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('username1') }}</strong>
                                      </span>
                                  @endif
                              </div>
                            </div>








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

      @endforeach
      @else
<script type="text/javascript" src="../../bootstrap-colorpicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../bootstrap-colorpicker.min.css">
<link rel="stylesheet" type="text/css" href="../../app.css">

<link rel="stylesheet" type="text/css" href="../../css/app.min.css">
<link rel="stylesheet" type="text/css" href="../../css/temp.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//www.google-analytics.com/ga.js"></script>
<style type="text/css"></style> <!--[if lt IE 9]> <script type="text/javascript" src="/min-js?f=js/lib/html5shiv.min.js,js/lib/respond.min.js"></script> <![endif]-->
<style type="text/css">.header-color{background: #ff3b31;}</style>


<style>
  .title{
    font-size: 36px;
  }

  .subtitle{
    font-size: 20px;
  }


</style>
<br><br><br><br>
<div class="title">
  <center>Currently You Are Not Assigned to Moderate any Club</center>
</div>

<div class="subtitle">
  <center>Please Contact the Authority if You Are Highly Interested</center>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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

      @endif


@endsection
