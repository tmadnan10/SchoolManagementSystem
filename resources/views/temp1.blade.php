@extends('layouts.admin')
@section('content')

<?php echo ($info);?>

hello
<form class="form-horizontal" role="form" method="POST" action="{{ url('/temp1') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('user') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="user" value="<?php if ($info !='') echo ($info); else echo (old('user'));?>">

                                @if ($errors->has('user'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="username" value="{{ $info }}">

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>


                            <div class="form-group{{ $errors->has('username1') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="username1" value="{{ old('user') }}">

                                @if ($errors->has('username1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username1') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
<button type="submit" class="btn btn-primary">
<i class="fa fa-btn fa-user"></i>Next
</button>
</form>
@endsection