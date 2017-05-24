@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default panel-success">
                <div class="panel-heading">Guardian Registration</div>
                <div class="panel-body">
                    <guardian-registration-form inline-template>
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('guardian.register') }}">
                        {{ csrf_field() }}
                        <div class="alert alert-danger" v-if="studentNotAvailable">
                            No such admission number in our records
                        </div>
                        <div class="alert alert-info" v-if="studentNotConfirmed">
                            Confirm student's admission to proceed
                        </div>
                        <div class="form-group{{ $errors->has('admission_number') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Admission Number</label>
                            <div class="col-md-6" style="padding:0">
                                <div class="col-md-8">
                                    <input type="text" name="admission_number" id="admission_number" class="form-control" v-model="admissionNumber">
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-info" @click.prevent="confirmStudent(admissionNumber)">confirm</button>
                                </div>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}"  v-if="studentConfirmed">
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

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"  v-if="studentConfirmed">
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
                        
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}"  v-if="studentConfirmed">
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

                        <div class="form-group{{ $errors->has('physical_address') ? ' has-error' : '' }}"  v-if="studentConfirmed">
                            <label for="physical_address" class="col-md-4 control-label">Physical Address</label>

                            <div class="col-md-6">
                                <input id="physical_address" type="text" class="form-control" name="physical_address" value="{{ old('physical_address') }}" required>

                                @if ($errors->has('physical_address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('physical_address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('post_office') ? ' has-error' : '' }}"  v-if="studentConfirmed">
                            <label for="post_office" class="col-md-4 control-label">P.O.Box Address</label>

                            <div class="col-md-6">
                                <input id="post_office" type="text" class="form-control" name="post_office" value="{{ old('post_office') }}" required>

                                @if ($errors->has('post_office'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_office') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}"  v-if="studentConfirmed">
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

                        <div class="form-group"  v-if="studentConfirmed">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group" v-if="studentConfirmed">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                    </guardian-registration-form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
