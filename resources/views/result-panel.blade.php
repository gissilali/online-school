@extends('layouts.app')
@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-12">
          	<div class="panel panel-default panel-success">
          		<div class="panel-heading">The Admin Dashboard</div>
          		<div class="panel-body">
          			<ul class="nav nav-tabs">
					  <li class="active"><a href="#students" data-toggle="tab">Students</a></li>
					  <li><a href="#results" data-toggle="tab">Add Results</a></li>
					  <li><a href="#guardians" data-toggle="tab"></a></li>
					</ul>  			

					<div class="panel panel-default" style="margin-top:20px">
						<div class="tab-content panel-body">
						  <div id="students" class="tab-pane fade in active">
						    	<div class="col-md-10">
						    		<div class="list-group">
							    		<a href="{{ url('/results') }}" class=" list-group-item btn">Add Results</a>
							    		<a href="{{ url('/subjects') }}" class=" list-group-item btn">View Subjects</a>
						    		</div>
						    	</div>
						  </div>
						  <div id="results" class="tab-pane fade">
						    <h3>Menu 1</h3>
						    <p>Some content in menu 1.</p>
						  </div>
						  <div id="guardian" class="tab-pane fade">
						    <h3>Menu 2</h3>
						    <p>Some content in menu 2.</p>
						  </div>
						</div>
					</div>

					<div class="panel panel-default" style="margin-top:20px">
						<div class="tab-content panel-body">
						  <div id="students" class="tab-pane fade in active">
						    	<div class="col-md-3">
						    		<div class="list-group">
							    		<a href="{{ url('/results') }}" class=" list-group-item btn">Add Results</a>
							    		<a href="{{ url('/subjects') }}" class=" list-group-item btn">View Subjects</a>
						    		</div>
						    	</div>
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