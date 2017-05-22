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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Course Details <i class="fa fa-bookmark"></i>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered table-hover">
                                <tbody>
                                <tr>
                                    <td>
                                        <strong>Name : </strong> {{ucwords($course->name)}}
                                    </td>
                                    <td>
                                        <strong>Code : </strong> {{ucwords($course->code)}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Alias : </strong> {{ucwords($course->alias)}}
                                    </td>
                                    <td>
                                        <strong>Created By : </strong> {{ucwords($course->user->name)}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Create Date : </strong> {{ucwords($course->created_at)}}
                                    </td>
                                    <td>
                                        <strong>Status : </strong> {{ucwords($course->status)}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Update Date : </strong> {{ucwords($course->updated_at)}}
                                    </td>
                                    <td>
                                        @if($course->updateby != null)
                                            <strong>Update By : </strong> {{ucwords($course->updateby->name)}}
                                        @endif
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection