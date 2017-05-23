@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Student Registration</div>
                <div class="panel-body">
                    <student-registration-form inline-template>
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('student.register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address <small><i>(optional)</i></small></label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                                
                            <div class="form-group{{ $errors->has('admission_number') ? ' has-error' : '' }}">
                                <label for="admission_number" class="col-md-4 control-label">Admission Number</label>

                                <div class="col-md-6">
                                    <input id="admission_number" type="text" class="form-control" name="admission_number" value="{{ old('admission_number') }}" required @blur="checkAdmission" @keyup="checkAdmission" @keyup="clearErrors" v-model="admissionNumber">

                                    @if ($errors->has('admission_number'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('admission_number') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('level') ? ' has-error' : '' }}">
                                <label for="level" class="col-md-4 control-label">Class</label>

                                <div class="col-md-6">
                                    <select name="level" id="level" class="form-control">
                                        <option value="">--SELECT CLASS--</option>
                                        @foreach (App\Level::all() as $level)
                                            <option value="{{ $level->id }}">{{ $level->class }}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('level'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('level') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('dorm') ? ' has-error' : '' }}">
                                <label for="level" class="col-md-4 control-label">Dorm</label>

                                <div class="col-md-6">
                                    <select name="dorm" id="dorm" class="form-control">
                                        <option value="">--SELECT DORM--</option>
                                        @foreach (App\Dorm::all() as $dorm)
                                            <option value="{{ $dorm->id }}">{{ $dorm->name }}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('dorm'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('dorm') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <input id="password" type="hidden" class="form-control" name="password" required v-model="admissionNumber">
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </student-registration-form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
