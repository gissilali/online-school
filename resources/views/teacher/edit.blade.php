@extends('layouts.app')

@section('content')

    <div class="row">
            @if (Session::has('update succesful'))
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="alert alert-success">
                        Account Updated <i class="fa fa-thumbs-up"></i> 
                    </div>
                </div>
            @endif
        <div class="col-sm-10 col-sm-offset-1">
            
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-1">
                            <a href="{{url()->previous()}}"><i style="color: white" class="fa fa-arrow-circle-left fa-3x"></i></a>
                        </div>
                        <div class="col-sm-8">
                            <h4><strong>Update Account</strong></h4>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <form action="{{route('teacher.update',$teacher->id)}}" method="post">
                        {{csrf_field()}}
                        {{method_field('put')}}
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-edit"></i>  Edit Account Details
                            </div>
                            <div class="panel-body">
                                <div class="row">

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" placeholder="Email" value="{{ $teacher->email }}"  name="email" id="email" required class="text-capitalize form-control">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" placeholder="Phone Number" value="{{ $teacher->phone }}"  name="phone" id="name" required class="text-capitalize form-control">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="home_address">Home Address</label>
                                        <input type="text" placeholder="e.g P.O.Box 2345-30300" value="{{ $teacher->home_address }}"  name="home_address" id="home_address" required class="text-capitalize form-control">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="county">County</label>
                                        <input type="text" placeholder="e.g Turkana" value="{{ $teacher->county }}"  name="county" id="county" required class="text-capitalize form-control">
                                    </div>
                                </div>

                                </div>

                                </div>
                            </div>
                            <div class="panel-footer">

                                <button type="reset" class="btn btn-sm btn-warning">Reset</button>
                                <button type="submit" class="btn btn-sm btn-success">Save Changes</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection