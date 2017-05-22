@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-1">
                            <a href="{{url()->previous()}}"><i style="color: white" class="fa fa-arrow-circle-left fa-3x"></i></a>
                        </div>
                        <div class="col-sm-8">
                            <h4><strong>Academics</strong>\Courses</h4>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <form action="{{route('courses.update',$course->id)}}" method="post">
                        {{csrf_field()}}
                        {{method_field('put')}}
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Edit Course <i class="fa fa-pencil"></i>
                            </div>
                            <div class="panel-body">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="name">Course Name</label>
                                        <input type="text" placeholder="Course name" value="{{$course->name}}"  name="name" id="name" required class="text-capitalize form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="code">Course Code</label>
                                        <input type="text" placeholder="Course code" value="{{$course->code}}"  name="code" id="code" required class="text-uppercase form-control">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="alias">Course Alias</label>
                                        <input type="text" placeholder="Course alias" value="{{$course->alias}}"  name="alias" id="alias" required class="text-uppercase form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="status">Course Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="{{\App\Course::ACTIVE}}">{{\App\Course::ACTIVE}}</option>
                                            <option value="{{\App\Course::INACTIVE}}">{{\App\Course::INACTIVE}}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">

                                <button type="reset" class="btn btn-sm btn-warning">Reset</button>
                                <button type="submit" class="btn btn-sm btn-success">Edit</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection