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
								<div class="panel-heading">
									<a href="{{ url('admin') }}" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Go back">&larr;</a>
									<form action="{{ url('') }}" class="form-inline"></form>
								</div>
								<div class="panel-body">
									@if (count($subjects)>0)
										<table class="table">
										  <thead class="thead-inverse">
										    <tr>
										      <th>Name</th>
										      <th>Code</th>
										      <th>Number of teachers</th>
										    </tr>
										  </thead>
										  <tbody>
										    @foreach ($subjects as $subject)
										    	<tr>
										    		<td>{{ $subject->name }}</td>
										    		<td>{{ $subject->code}}</td>
										    		<td>{{ count(App\SubjectTeacher::where('subject_id', $subject->id)->get()) }}</td>
										    	</tr>
										    @endforeach
										  </tbody>
										</table>
									@else
										<div class="alert alert-info clearfix">
											<strong>no subjects just yet</strong> <a href="{{ url('add-subject') }}" class="btn btn-info" style="float:right;">Add Subject</a>
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