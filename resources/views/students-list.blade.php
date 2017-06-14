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
								<div class="panel-heading clearfix">
          							 <div class="label" style="background:crimson"> Student population: {{ $student_population }}</div>
          							 <a href="{{ url()->previous() }}" class="btn btn-primary" style="float: right;">&larr; Back</a> 			
								</div>
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
										    		<td><a href="#" class="btn btn-danger" onclick="event.preventDefault();
                                                         document.getElementById('delete-form').submit();">Delete</a>

                                            <form id="delete-form" action="{{ url('student/delete/'.$student->id) }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>

										    		</td>
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
								<div class="panel-footer">
									{{ $students->links() }}
								</div>
							</div>
						</div>
					</div>
          		</div>
          	</div>
        </div>
    </div>
</div>
@endsection