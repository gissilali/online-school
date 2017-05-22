@extends('layouts.app')
@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-12">
          	<div class="panel panel-default panel-success">
          		<div class="panel-heading">The Admin Dashboard</div>
          		<div class="panel-body">
          			<ul class="nav nav-tabs">
          				<li>
          					<a href="">Teachers</a>
          				</li>
          				
          				<li>
          					<a href="{{ url('student/register') }}">Students</a>
          				</li>

          				<li>
          					<a href="">Parent</a>
          				</li>
          			</ul>
					
          		</div>
          	</div>
        </div>
    </div>
</div>
@endsection