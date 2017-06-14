@extends('layouts.app')
@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-12">
          	<div class="panel panel-default panel-success">
          		<div class="panel-heading">The Teacher Dashboard</div>
          		<div class="panel-body">  			
					<div class="panel panel-default" style="margin-top:20px">
						<div class="tab-content panel-body">
						  <div id="students" class="tab-pane fade in active">
						    	<div class="col-md-3">
						    		<div class="list-group">
							    		@if (isset($classes))
							    			@foreach ($classes as $class)
							    				<a href="{{ url('result/'.str_replace(' ','-',strtolower($class->class)).'/'.$class->id) }}" class="list-group-item">{{ $class->class }}</a>
							    			@endforeach
							    		@endif
						    		</div>
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