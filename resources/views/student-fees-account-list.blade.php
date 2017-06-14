@extends('layouts.app')
@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-12">
          	<div class="panel panel-default panel-success">
          		<div class="panel-heading"></div>
          		<div class="panel-body">  			
					<div class="panel panel-default" style="margin-top:20px">
						<div class="tab-content panel-body">
						  <div id="students" class="tab-pane fade in active">
						    	<div class="col-md-6">
						    		<div class="list-group">
							    		@if (count($class_level) > 0)
							    				@foreach ($class_level->students as $student)
							    					<div class="list-group-item clearfix"><p style="">{{ $student->name }}</p> 
							    					@if ($student->fees_update)
							    						<span class="label" style="
							    					position: absolute;
							    					background: red;
							    					bottom:0;
							    					right:0;">{{ $student->fees_balance }}</span> 
							    					@else
							    					<span class="label" style="
							    					position: absolute;
							    					background:orange;
							    					bottom:0;
							    					right:0;">Not Updated</span> 
							    					@endif
													<a href="{{ url('fees-account/'.str_replace(' ','-',strtolower($student->name)).'/'.$student->id) }}" class="btn btn-primary" style="float: left">update account</a>
							    					</div>
							    				@endforeach
					    				@else
					    					<div class="alert-primary">
					    						No Students in this class
					    					</div>
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