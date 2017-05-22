@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {{--<img class="img-circle center-block" style="background-color: ghostwhite; width: 115px; height: 115px;" src="{{asset('images/logo.png')}}" alt="apps:lab logo">--}}
            <h2 class="text-center"><span style="color: #0288D1;" >Apps:</span>Lab Code Academy.</h2>
            <hr>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Dashboard</strong> - Welcome {{ucwords(Auth::user()->name)}}</div>
                <div class="panel-body">
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="text-capitalize">
                                        Academics
                                </h4>
                            </div>
                            <div class="panel-body">
                                <div class="col-sm-12 text-center" style="color: #0288D1">
                                    <span class="fa-stack fa-3x">
                                      <i class="fa fa-circle fa-stack-2x"></i>
                                      <i class="fa fa-book fa-stack-1x fa-inverse"></i>
                                    </span>
                                    <br>
                                    {{--<h4>Curriculum</h4>--}}
                                </div>
                            </div>
                            <div class="panel-footer">
                                <a href="{{route('courses.index')}}" class="btn btn-primary btn-sm">Courses</a>
                                <button class="btn btn-primary btn-sm">Timetable</button>
                                <button class="btn btn-primary btn-sm">Examination</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="text-capitalize">
                                    Human Resource
                                </h4>
                            </div>
                            <div class="panel-body">
                                <div class="col-sm-12 text-center" style="color: #0288D1">
                                    <span class="fa-stack fa-3x">
                                      <i class="fa fa-circle fa-stack-2x"></i>
                                      <i class="fa fa-users fa-stack-1x fa-inverse"></i>
                                    </span>
                                    <br>
                                    {{--<h4>Curriculum</h4>--}}
                                </div>
                            </div>
                            <div class="panel-footer">
                                <button class="btn btn-primary btn-sm">Employee</button>
                                <button class="btn btn-primary btn-sm">Attendance</button>
                                <button class="btn btn-primary btn-sm">Leave</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="text-capitalize">
                                    Finance
                                </h4>
                            </div>
                            <div class="panel-body">
                                <div class="col-sm-12 text-center" style="color: #0288D1">
                                    <span class="fa-stack fa-3x">
                                      <i class="fa fa-circle fa-stack-2x"></i>
                                      <i class="fa fa-money fa-stack-1x fa-inverse"></i>
                                    </span>
                                    <br>
                                   {{--<h4> Students</h4>--}}
                                </div>
                            </div>
                            <div class="panel-footer">
                                <button class="btn btn-primary btn-sm">Fees</button>
                                <button class="btn btn-primary btn-sm">Expenses</button>
                                <button class="btn btn-primary btn-sm">Payroll</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="text-capitalize">
                                    students
                                </h4>
                            </div>
                            <div class="panel-body">
                                <div class="col-sm-12 text-center" style="color: #0288D1">
                                    <span class="fa-stack fa-3x">
                                      <i class="fa fa-circle fa-stack-2x"></i>
                                      <i class="fa fa-graduation-cap fa-stack-1x fa-inverse"></i>
                                    </span>
                                    <br>
                                   {{--<h4> Students</h4>--}}
                                </div>
                            </div>
                            <div class="panel-footer">
                                <button class="btn btn-primary btn-sm">Admission</button>
                                <button class="btn btn-primary btn-sm">Enquiry</button>
                                <button class="btn btn-primary btn-sm">Attendance</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="text-capitalize">
                                    Documents
                                </h4>
                            </div>
                            <div class="panel-body">
                                <div class="col-sm-12 text-center" style="color: #0288D1">
                                    <span class="fa-stack fa-3x">
                                      <i class="fa fa-circle fa-stack-2x"></i>
                                      <i class="fa fa-file-archive-o fa-stack-1x fa-inverse"></i>
                                    </span>
                                    <br>
                                   {{--<h4> Students</h4>--}}
                                </div>
                            </div>
                            <div class="panel-footer">
                                <button class="btn btn-primary btn-sm">Certificate</button>
                                <button class="btn btn-primary btn-sm">Letters</button>
                                <button class="btn btn-primary btn-sm">Manage</button>
                                <button class="btn btn-primary btn-sm">Share</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="text-capitalize">
                                    Communication
                                </h4>
                            </div>
                            <div class="panel-body">
                                <div class="col-sm-12 text-center" style="color: #0288D1">
                                    <span class="fa-stack fa-3x">
                                      <i class="fa fa-circle fa-stack-2x"></i>
                                      <i class="fa fa-comments fa-stack-1x fa-inverse"></i>
                                    </span>
                                    <br>
                                   {{--<h4> Students</h4>--}}
                                </div>
                            </div>
                            <div class="panel-footer">
                                <button class="btn btn-primary btn-sm">Emails</button>
                                <button class="btn btn-primary btn-sm">SMS</button>
                                <button class="btn btn-primary btn-sm">Notice</button>
                                <button class="btn btn-primary btn-sm">Inquiry</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="text-capitalize">
                                    Reports
                                </h4>
                            </div>
                            <div class="panel-body">
                                <div class="col-sm-12 text-center" style="color: #0288D1">
                                    <span class="fa-stack fa-3x">
                                      <i class="fa fa-circle fa-stack-2x"></i>
                                      <i class="fa fa-bar-chart fa-stack-1x fa-inverse"></i>
                                    </span>
                                    <br>
                                   {{--<h4> Students</h4>--}}
                                </div>
                            </div>
                            <div class="panel-footer">
                                <button class="btn btn-primary btn-sm">Exam</button>
                                <button class="btn btn-primary btn-sm">Students</button>
                                <button class="btn btn-primary btn-sm">Employee</button>
                                <button class="btn btn-primary btn-sm">Fees</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="text-capitalize">
                                    Administration
                                </h4>
                            </div>
                            <div class="panel-body">
                                <div class="col-sm-12 text-center" style="color: #0288D1">
                                    <span class="fa-stack fa-3x">
                                      <i class="fa fa-circle fa-stack-2x"></i>
                                      <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                    </span>
                                    <br>
                                   {{--<h4> Students</h4>--}}
                                </div>
                            </div>
                            <div class="panel-footer">
                                <button class="btn btn-primary btn-sm">Fees</button>
                                <button class="btn btn-primary btn-sm">Accounts</button>
                                <button class="btn btn-primary btn-sm">Assets</button>
                                {{--<button class="btn btn-primary btn-sm">Fees</button>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="text-capitalize">
                                    Settings
                                </h4>
                            </div>
                            <div class="panel-body">
                                <div class="col-sm-12 text-center" style="color: #0288D1">
                                    <span class="fa-stack fa-3x">
                                      <i class="fa fa-circle fa-stack-2x"></i>
                                      <i class="fa fa-cogs fa-stack-1x fa-inverse"></i>
                                    </span>
                                    <br>
                                   {{--<h4> Students</h4>--}}
                                </div>
                            </div>
                            <div class="panel-footer">
                                <button class="btn btn-primary btn-sm">Configs</button>
                                <button class="btn btn-primary btn-sm">Users</button>
                                <button class="btn btn-primary btn-sm">System</button>
                                <button class="btn btn-primary btn-sm">Back-up</button>
                                {{--<button class="btn btn-primary btn-sm">Fees</button>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
