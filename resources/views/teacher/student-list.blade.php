@extends('layouts.app')
@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-12">
          	<div class="panel panel-default panel-success">
          		<div class="panel-heading">The Admin Dashboard</div>
          		<div class="panel-body">  			
					<div class="panel panel-default" style="margin-top:20px">
						<div class="tab-content panel-body">
							<div class="panel panel-default">
								<div class="panel-heading"></div>
								<div class="panel-body">
									@if (count($students)>0)
										<table class="table">
										  <thead class="thead-inverse">
										    <tr>
										      <th>Admission Number</th>
										      <th>Name</th>
										      <th>Email</th>
										      <th>Class</th>
										    </tr>
										  </thead>
										  <tbody>
										    @foreach ($students as $student)
										    	<tr>
										    		<td>{{ $student->admission_number }}</td>
										    		<td>{{ $student->name}}</td>
										    		<td>{{ $student->email }}</td>
										    		<td>{{ App\Level::where('id', $student->level_id)->first()->class }}</td>
										    		<td><a href="{{ url('add-result/'.$student->id) }}" class="btn btn-success">add result</a></td>
										    	</tr>
										    @endforeach
										  </tbody>
										</table>
									@else
										<div class="alert alert-info clearfix">
											<strong>no students just yet</strong> <a href="{{ url('student/register') }}" class="btn btn-info" style="float:right;">Add Student</a>
										</div>
									@endif		
								</div>
								<div class="panel-footer"></div>
							</div>
						</div>
					</div>
          		</div>
          	</div>
        </div>
    </div>
</div>
@endsection