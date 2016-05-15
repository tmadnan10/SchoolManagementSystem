@extends('layouts.admin')
@section('content')
<link rel="stylesheet" type="text/css" href="../css/app.min.css">
<link rel="stylesheet" type="text/css" href="../css/temp.min.css">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add New User</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/addnew') }}">
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

                        

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



					<!--##################################Newly added Part##################################-->
 						<div class="form-group{{ $errors->has('account_type') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Account Type</label>

                            <div class="col-md-6">
                                <select class="form-control"  name="account_type" id="account_type">
                                    <option value="">Select One</option>
                                    <option value="teacher">Teacher</option>
                                    <option value="student">Student</option>                               
                                </select>

                                @if ($errors->has('account_type"'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('account_type"') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <!--##################################Newly added Part##################################-->

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
@endsection

