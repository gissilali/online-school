@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Teacher Registration</div>
                <div class="panel-body">
                    <teacher-registration-form inline-template>
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('teacher.register') }}">
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

                        <div class="form-group{{ $errors->has('employee_number') ? ' has-error' : '' }}">
                            <label for="employee_number" class="col-md-4 control-label">Employee Number</label>

                            <div class="col-md-6">
                                <input id="employee_number" type="text" class="form-control" name="employee_number" value="{{ old('employee_number') }}" required v-model="employeeNumber">

                                @if ($errors->has('employee_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('employee_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('subjects') ? ' has-error' : '' }}">
                            <label for="subjects" class="col-md-4 control-label">Subjects</label>

                            <div class="col-md-6">
                                <select name="subjects[]" id="subjects" multiple class="form-control" placeholder="select subjects">
                                    @foreach (App\Subject::orderBy('name')->get() as $subject)
                                        <option value="{{ $subject->id }}">{{ $subject->name }}-{{ $subject->code }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('subjects'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subjects') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <input id="password" type="hidden" class="form-control" name="password" required v-model="employeeNumber">

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                    </teacher-registration-form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('select2JS')
    <script src="{{ asset('assets/select2/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#subjects').select2({
                placeholder: 'start typing and select from list..'
            });
        });
    </script>
@endsection
@section('select2CSS')
    <link rel="stylesheet" href="{{ asset('assets/select2/css/select2.min.css') }}">
@endsection