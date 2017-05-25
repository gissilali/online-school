@extends('layouts.app')
@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-12">
          	<div class="panel panel-default panel-success">
          		<div class="panel-heading">The Guardian Dashboard</div>
          		<div class="panel-body">  			
					<div class="panel panel-default" style="margin-top:20px">
						<div class="tab-content panel-body">
						  <div id="students" class="tab-pane fade in active">
						    	<div class="col-md-3">
						    		<div class="list-group">
							    		<a href="{{ url('student/register') }}" class="btn list-group-item">Student Progress</a>
							    		<a href="{{ url('student/subjects') }}" class=" list-group-item btn">Subjects</a>
							    		<a href="{{ url('teacher/register') }}" class=" list-group-item btn">See Teacher</a>
						    		</div>
						    	</div>
						    	@if (isset($class_levels))
						    		<div class="col-md-3">
							    		<div class="list-group">
								    		@foreach ($class_levels as $class_level)
								    			<a href="{{ url('/students/'.str_replace(' ', '-', strToLower($class_level->class)).'/'.$class_level->id) }}" class="btn list-group-item">{{ $class_level->class }}</a>
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