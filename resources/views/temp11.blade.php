<!DOCTYPE html>
<html lang="en">
<head>

</head>


<body>
{{Auth::user()->username}}
<form class="form-horizontal" role="form" method="POST" action="{{ url('/pa') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if (session()->has('error'))
                                    <span class="help-block">
                                        <strong>{{ session('error') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>

</body>