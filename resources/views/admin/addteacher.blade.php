
@extends('layouts.admin')
<?php
$dept = \DB::table('department')
        ->select('dept_id', 'dept_name')
        ->get();

?>
@section('content')
<style>
    .red-star{color:red;}
</style>


<link rel="stylesheet" type="text/css" href="../../css/app.min.css">
<link rel="stylesheet" type="text/css" href="../../css/temp.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="../../jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" type="text/css" href="../../css/datepicker.css">
  <script src="../../js/bootstrap-datepicker.js"></script>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add New Teacher</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/addnew/teacher') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('user') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                                <input type="hidden" class="form-control" name="user" value="<?php if ($userName !='') echo ($userName); else echo (old('user'));?>">

                                @if ($errors->has('user'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                                <input type="hidden" class="form-control" name="password" value="<?php if ($passWord !='') echo ($passWord); else echo (old('password'));?>">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('account_type') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                                <input type="hidden" class="form-control" name="account_type" value="<?php if ($account !='') echo ($account); else echo (old('account_type'));?>">

                                @if ($errors->has('account_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('account_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                        

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">

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
                                <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('dept_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Department Name<span class="red-star">*</span></label>
                            <div class="col-md-6">
                                <select class="form-control" name="dept_name">
                                <option value="">Select A Department</option>
                                    @foreach($dept as $class)
                                  <option value="{{$class->dept_id}}">{{$class->dept_name}}</option>
                                  @endforeach
                                </select>

                                @if ($errors->has('dept_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dept_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        


                        <div class="form-group{{ $errors->has('join_date') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Join Date<span class="red-star">*</span></label>

                            <div class="col-md-6">
                                <input type="text" id="datepicker" class="form-control" name="join_date" value="{{ old('join_date') }}">

                                @if ($errors->has('join_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('join_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group{{ $errors->has('designation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Designation<span class="red-star">*</span></label>

                            <div class="col-md-6">
                                <select class="form-control" name="designation">
                                    <option value="">Select A Designation</option>
                                    <option value="Junior Lecturer">Junior Lecturer</option>
                                    <option value="Lecturer">Lecturer</option>
                                    <option value="Senior Teacher">Senior Teacher</option>
                                    <option value="Department Head">Department Head</option>
                                </select>

                                @if ($errors->has('designation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('designation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('blood_group') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Blood Group</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="blood_group" value="{{ old('blood_group') }}">

                                @if ($errors->has('blood_group'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('blood_group') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="address" value="{{ old('address') }}">

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('profile_pic') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Profile Picture</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="profile_pic" value="{{ old('profile_pic') }}">

                                @if ($errors->has('profile_pic'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('profile_pic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <input type="hidden" name="username" value="{{ session('userName') }}">
                    <!--##################################Newly added Part##################################-->

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection