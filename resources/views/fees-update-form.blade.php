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
						    		<form action="{{ url('fees-account/'.str_replace(' ','-',strtolower($student->name)).'/'.$student->id) }}" method="post">

						    		<div class="panel panel-primary">
						    			<div class="panel-heading clearfix">
						    				Update fees balance for: {{ $student->name }} <button type="submit" class="btn btn-success" style="float: right">Done</button>
						    			</div>
						    			<div class="panel-body">
						    				
						    					{{ csrf_field() }}
						    					<label for="fees_balance" class="label-control">Fees Balance</label>
						    					<input type="number" name="fees_balance" id="fees_balance" class="form-control">
						    					@if ($errors->has('fees_balance'))
						    						<div class="alert alert-danger">{{ $errors->first('fees_balance') }}</div>
						    					@endif
						    			</div>
						    		</div>
						    		</form>

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