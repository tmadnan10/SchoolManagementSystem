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

<link rel="stylesheet" type="text/css" href="../../../css/app.min.css">
<link rel="stylesheet" type="text/css" href="../../../css/temp.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="../../../jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" type="text/css" href="../../../css/datepicker.css">
  <script src="../../../js/bootstrap-datepicker.js"></script>





<div class="principal-container page-users-edit_profile" role="main">
<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <div class="wizard-container">
          <div class="card wizard-card ct-wizard-info" id="wizard">
            <div class="wizard-header">
              <center><h2>Manage Clubs<br><b></b></h2><br></center>
            </div>

          <ul class="nav nav-pills">
            <!--<li class="active" style="width: 100%;">
              <a href="#st" data-toggle="tab" aria-expanded="true">Assign A Club Moderator</a>
            </li>-->
            <li class="active" style="width: 100%;">
              <a href="#ct" data-toggle="tab">Add New Club Event</a>
            </li>
          </ul>
          

            <div class="tab-pane" id="ct">
              <center></center>
                <div class="panel-body">

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/teacher/club_management/notices') }}">
                              {!! csrf_field() !!}

                              <h4><center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPlease Select A Club To Add A New Event</center></h4>
                              <br>
                  <div class="form-group{{ $errors->has('club_id') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Club</label>

                        <div class="col-md-6">
                            <select class="form-control" name= "club_id" id="club_id">
                            <option value="">Select A Club</option>
                           @foreach($clubs as $club)
                            <option value="{{$club->club_id}}">{{$club->club_name}}</option>
                           @endforeach
                            </select>
                            @if ($errors->has('club_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('club_id') }}</strong>
                                </span>
                            @endif
                        </div>
                      </div>
                      

                      <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Event Type</label>

                        <div class="col-md-6">
                            <select class="form-control" name= "type" id="type">
                            <option value="">Select An Event Type</option>                     
                            <option value="Fair">Fair</option>
                            <option value="Project Show">Project Show</option>
                            <option value="Olympiad">Olympiad</option>
                            <option value="Reunion">Reunion</option>
                            </select>
                            @if ($errors->has('type'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('type') }}</strong>
                                </span>
                            @endif
                        </div>
                      </div>
                                         

                       <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Event Date</label>

                            <div class="col-md-6">
                                <input type="text" id="datepicker" class="form-control" name="date" value="{{ old('date_of_birth') }}">

                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                          <div class="form-group{{ $errors->has('notes') ? ' has-error' : '' }}">
                              <label class="col-md-4 control-label">Event Details</label>

                              <div class="col-md-6">
                                 {{ Form::textarea('notes', null, ['size' => '46x5']) }}
                                  
                        
                                  @if ($errors->has('notes'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('notes') }}</strong>
                                      </span>
                                  @endif
                              </div>
                            </div>





                            








                            <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <button type="submit" class="btn btn-primary" name="submit">
                                      <i class=""></i>Submit
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

  $('#club_id').on('change', function(e){
    console.log(e);
   
    var club_id = e.target.value;
    console.log(club_id);

    $.get("{{ url('admin/club_id')}}=" + club_id, function(data){
      console.log(data);
      //$('#section_id').empty();
      //console.log('data');

        //   $('#section_id').append(' Please section_id one');
           //console.log('data');
          var arr = JSON.parse(data);
           $('#moderator').val(arr[0]);
          //console.log(arr.length);
          //for (var i = 0; i < arr.length; i++) {
             // $('#section_id').append('<option value="'+arr[i]+'">'+arr[i]+'</option>');
            //console.log(arr[i]);
      //      };
    });

});

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

   $('#class_id').on('change', function(e){
     console.log(e);
     var class_id = e.target.value;
     console.log(class_id);

     $.get("{{ url('api/dropdown/steacher')}}=" + class_id, function(data){
       console.log(data);
       $('#subject_id').empty();
       //console.log('data');

            $('#subject_id').append(' Please section_id one');
            //console.log('data');
            var arr = JSON.parse(data);
            console.log(arr.length);
            for (var i = 0; i < arr.length; i++) {
               $('#subject_id').append('<option value="'+arr[i]+'">'+arr[i]+'</option>');
             console.log(arr[i]);
             };
      });
});



$('#dept_id').on('change', function(e){
  console.log(e);
  var dept_id = e.target.value;
  console.log(dept_id);

  $.get("{{ url('api/dept')}}=" + dept_id, function(data){
    console.log(data);
    $('#username').empty();
    //console.log('data');

         
         //console.log('data');
         var arr = JSON.parse(data);
         console.log(arr.length);
         if (arr.length > 1) {
          $('#username').append('<option value="">Select A Teacher</option>');
         };
         
         for (var i = 1; i < arr.length; i +=2) {
            $('#username').append('<option value="'+arr[i]+'">'+arr[i+1]+'</option>');
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
@endsection