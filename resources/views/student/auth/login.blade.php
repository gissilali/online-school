@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default panel-success">
                <div class="panel-heading">Student Login</div>
                <div class="panel-body">
                    {{-- <student-login-form inline-template> --}}
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('student.login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('admission_number') ? ' has-error' : '' }}">
                            <label for="admission_number" class="col-md-4 control-label">Adm Number</label>

                            <div class="col-md-6">
                                <input id="admission_number" type="text" class="form-control" name="admission_number" value="{{ old('admission_number') }}" required autofocus>

                                @if ($errors->has('admission_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('admission_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                    {{-- </student-login-form> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
