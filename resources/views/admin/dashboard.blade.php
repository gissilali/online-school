@extends('layouts.app')
@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-12">
        	<div class="row">
        		@if (Session::has('admin_created'))
          				<div class="col-md-6">
          					<div class="alert alert-success">
          						<strong><small>{{ Session::get('admin_created') }}</small></strong>
          					</div>
          				</div>  				
          			@endif
          			@if (Session::has('student_created'))
          				<div class="col-md-6">
          					<div class="alert alert-success">
          						<strong><small>{{ Session::get('student_created') }}</small></strong>
          					</div>
          				</div>  				
          			@endif
          			@if (Session::has('teacher_created'))
          				<div class="col-md-6">
          					<div class="alert alert-success">
          						<strong><small>{{ Session::get('teacher_created') }}</small></strong>
          					</div>
          				</div>  				
          			@endif
          			@if (Session::has('accountant_created'))
          				<div class="col-md-6">
          					<div class="alert alert-success">
          						<strong><small>{{ Session::get('accountant_created') }}</small></strong>
          					</div>
          				</div>  				
          			@endif
        	</div>
          	<div class="panel panel-default panel-success">
          		<div class="panel-heading">The Admin Dashboard</div>
          		<div class="panel-body">  			
					<div class="panel panel-default" style="margin-top:20px">
						<div class="tab-content panel-body">
						  <div id="students" class="tab-pane fade in active">
						    	<div class="col-md-3">
						    		<div class="list-group">
							    		<a href="{{ url('student/register') }}" class="btn list-group-item">Add Student <i class="fa fa-user"></i></a>
							    		<a href="{{ url('/subjects') }}" class=" list-group-item btn">Subjects <i class="fa fa-book"></i></a>
							    		<a href="{{ url('teacher/register') }}" class=" list-group-item btn">Add Teacher <i class="fa fa-pencil"></i></a>
							    		<a href="{{ url('accountant/register') }}" class=" list-group-item btn">Add Accountant <i class="fa fa-money"></i></a>
						    		</div>
						    	</div>
						    	@if (isset($class_levels))
						    		<div class="col-md-3">
							    		<div class="list-group">
							    			<div class="list-group-item" style="text-align: center;"><h4>Student Population</h4></div>
								    		@foreach ($class_levels as $class_level)
								    			<a href="{{ url('/students/'.str_replace(' ', '-', strToLower($class_level->class)).'/'.$class_level->id) }}" class="btn list-group-item">{{ $class_level->class }} <span class="badge badge-primary">{{ count($class_level->students) }}</span></a>
								    		@endforeach
							    		</div>
						    		</div>
						    	@endif
						  </div>
						  <div id="teachers" class="tab-pane fade">
						    <h3>Menu 1</h3>
						    <p>Some content in menu 1.</p>
						  </div>
						  <div id="guardian" class="tab-pane fade">
						    <h3>Menu 2</h3>
						    <p>Some content in menu 2.</p>
						  </div>
						</div>
					</div>
          		</div>
          	</div>
        </div>
    </div>
</div>
@endsection