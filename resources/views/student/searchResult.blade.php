@extends('layouts.student')
@section('content')
<?php $x = 0;?>
<script type="text/javascript" src="../bootstrap-colorpicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="../bootstrap-colorpicker.min.css">
<link rel="stylesheet" type="text/css" href="../app.css">

<link rel="stylesheet" type="text/css" href="../css/app.min.css">
<link rel="stylesheet" type="text/css" href="../css/temp.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//www.google-analytics.com/ga.js"></script>
<style type="text/css"></style> <!--[if lt IE 9]> <script type="text/javascript" src="/min-js?f=js/lib/html5shiv.min.js,js/lib/respond.min.js"></script> <![endif]-->
<style type="text/css">.header-color{background: #ff3b31;}</style>
<script type="text/javascript" src="../new/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="../new/smoothscroll.js"></script>
<script type="text/javascript" src="../new/marker.js"></script>

<link rel="stylesheet" type="text/css" href="../new/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="../new/animate.css">
<link rel="stylesheet" type="text/css" href="../new/responsive.css">
<link rel="stylesheet" type="text/css" href="../new/slick.css">
<link rel="stylesheet" type="text/css" href="../new/style.css">
<link rel="stylesheet" type="text/css" href="../new/linea-font.css">
<link rel="stylesheet" type="text/css" href="../new/flow.css">
<link rel="stylesheet" type="text/css" href="../AdminLTE.css">

<div class="gray-bg">
<section id="blog" class="section container blog-columns blog-preview">
<div class="col-md-2">
</div>


        <div class="col-md-8">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-bullhorn"></i>

              <h3 class="box-title">Matched Results</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
		    @foreach ($result as $user)
		       @if($user->hlink != '#') 
		       <div class="callout callout-info">
                <p><a href="{{url('../')}}/{{ $user->hlink }}">{{ $user->details }}<br></a></p>
              </div>
		       @else
		       <div class="callout callout-success">
                <p>{{ $user->details }}</p>
              </div>
		       @endif
		    @endforeach
              <!--<div class="callout callout-danger">
                <h4>I am a danger callout!</h4>

                <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire soul,
                  like these sweet mornings of spring which I enjoy with my whole heart.</p>
              </div>
              <div class="callout callout-info">
                <h4>I am an info callout!</h4>

                <p>Follow the steps to continue to payment.</p>
              </div>
              <div class="callout callout-warning">
                <h4>I am a warning callout!</h4>

                <p>This is a yellow callout.</p>
              </div>
              <div class="callout callout-success">
                <h4>I am a success callout!</h4>

                <p>This is a green callout.</p>
              </div>-->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
</section>

        <!-- /.col -->
  </div>



@endsection