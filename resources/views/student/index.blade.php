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
                    <form action="{{route('courses.store')}}" method="post">
                        {{csrf_field()}}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Create Course <i class="fa fa-pencil"></i>
                            </div>
                            <div class="panel-body">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="name">Course Name</label>
                                        <input type="text" placeholder="Course name" value="{{old('name')}}"  name="name" id="name" required class="text-capitalize form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="code">Course Code</label>
                                        <input type="text" placeholder="Course code" value="{{old('code')}}" name="code" id="code" required class="text-uppercase form-control">
                                    </div>
                                </div>
                                <input type="hidden" name="status" value="{{\App\Course::ACTIVE}}">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="alias">Course Alias</label>
                                        <input type="text" placeholder="Course alias" value="{{old('alias')}}" name="alias" id="alias" required class="text-uppercase form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">

                                <button type="reset" class="btn btn-sm btn-warning">Reset</button>
                                <button type="submit" class="btn btn-sm btn-success">Create</button>

                            </div>
                    </div>
                    </form>
                    <div class="panel panel-default">
                            <div class="panel-heading">
                                Courses List
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>NO:</th>
                                        <th>Name</th>
                                        <th>Code</th>
                                        <th>Alias</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($courses as $course)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td class="text-capitalize">{{$course->name}}</td>
                                            <td class="text-uppercase">{{$course->code}}</td>
                                            <td class="text-uppercase">{{$course->alias}}</td>
                                            <td>@if($course->status == \App\Course::ACTIVE)
                                                    <i style="color: #4CAF50" class="fa fa-check-circle-o"></i>
                                                    @else
                                                    <i style="color: #F44336" class="fa fa-ban"></i>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route('courses.show',$course->id)}}" ><i class="fa fa-eye"></i></a>
                                                <a href="{{route('courses.edit',$course->id)}}" ><i class="fa fa-pencil-square-o"></i></a>
                                                <a href=""><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection