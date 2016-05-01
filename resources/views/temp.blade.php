@extends('layouts.admin')
@section('content')
<link rel="stylesheet" type="text/css" href="../../css/app.min.css">
<link rel="stylesheet" type="text/css" href="../../css/temp.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="../jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" type="text/css" href="../css/datepicker.css">
  <script src="../js/bootstrap-datepicker.js"></script>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/temp') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="username" value="{{ old('username') }}">

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Date of Birth</label>

                            <div class="col-md-6">
                                <input type="text" id="datepicker" class="form-control" name="date_of_birth" value="{{ old('date_of_birth') }}">

                                @if ($errors->has('date_of_birth'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date_of_birth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('username1') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Username1</label>

                            <div class="col-md-6">
                                <select class="form-control"  name="username1" id="username1">
                                	<option value="">Select One</option>
                                	<option value="student">Student</option>
                					<option value="teacher">Teacher</option>

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
                                    <i class="fa fa-btn fa-user"></i>Next
                                </button>
                            </div>
                        </div>
                        </form>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>

                        <script type="text/javascript" src="../../bootstrap-colorpicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../bootstrap-colorpicker.min.css">
<link rel="stylesheet" type="text/css" href="../../app.css">
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
  });/*]]>*/</script> </div> <footer class="footer row" role="contentinfo"><div class="bs-docs-social"><ul class="bs-docs-social-buttons"><li class="follow-btn"> <a itemprop="sameAs" rel="nofollow" href="https://www.facebook.com/bootdey" class="btn btn-primary btn-xs"> <i class="fa fa-facebook"></i> Like Bootdey </a></li><li class="tweet-btn"> <a itemprop="sameAs" rel="nofollow" href="https://twitter.com/bootdey" class="btn btn-info btn-xs"> <i class="fa fa-twitter"></i> Follow @bootdey </a></li></ul></div><ul class="footer-links text-muted"><li><span class="glyphicon glyphicon-globe"></span> Bootdey © 2016</li><li>.</li><li>Created by&nbsp;&nbsp;&nbsp;<a href="#" class="label label-info">Deyson</a></li><li>.</li><li> <span class="glyphicon glyphicon-list-alt"></span> <a href="http://bootdey.com/privacy"> Site Privacy policy </a></li><li>.</li><li> <span class="glyphicon glyphicon-info-sign"></span> <a href="http://bootdey.com/about"> About </a></li><li>.</li><li> <span class="fa fa-facebook"></span> <a class="isTooltip" title="" href="https://www.facebook.com/bootdey/" data-original-title="send us a message using facebook">Contact us</a></li><li>.</li><li> <i class="fa fa-google-plug"></i> <a itemprop="sameAs" rel="nofollow" href="https://plus.google.com/+Bootdey-bootstrap/posts">Google +</a></li></ul> </footer> <script type="text/javascript">/*<![CDATA[*/APPBASE = '';
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
        height: 350px;
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
    .page-pages-home {min-height: 430px;}</style><div class="colorpicker dropdown-menu colorpicker-hidden"><div class="colorpicker-saturation" style="background-color: rgb(255, 14, 0);"><i style="top: 0px; left: 81.17647058823529px;"><b></b></i></div><div class="colorpicker-hue"><i style="top: 99.11433172302773px;"></i></div><div class="colorpicker-alpha" style="background-color: rgb(255, 59, 48);"><i style="top: 0px;"></i></div><div class="colorpicker-color" style="background-color: rgb(255, 59, 48);"><div style="background-color: rgb(255, 59, 48);"></div></div></div>


@endsection