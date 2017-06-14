@extends('layouts.app')
@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-12">
          	<div class="panel panel-default panel-success">
          		<div class="panel-heading clearfix">The Teacher Dashboard
					<a href="{{ url('teacher/results') }}" class="btn btn-primary" style="float:right;">Done</a>
          		</div>
          			<div class="panel-body">  			
					<div class="col-md-12">
						<form action="{{ url('add-result/'.$student_id) }}" method="post">
						{{ csrf_field() }}
						<div class="panel panel-default" style="margin-top:20px">
							<div class="panel-heading clearfix">
								Results for : {{ App\Student::find($student_id)->name }}
								<select name="term" id="term" style="margin-left:20px">
									<option value="">--Select School Term--</option>
									@foreach (App\Term::all() as $term)
										<option value="{{ $term->id }}">Term {{ $term->term }}</option>
									@endforeach
								</select>
								<button type="submit" class="btn btn-primary" style="float:right;">Save changes</button>
							</div>
							<div class="panel-body">
								@foreach (array_chunk($subjects->all(), 3) as $row)
									<div class="form-group">
										@foreach ($row as $subject)
											<div class="col-md-4">
												<div class="panel">
													<label for="{{ strtolower($subject->name) }}">{{ $subject->name }}</label>
													<input type="number" name="{{ strtolower($subject->id) }}" id="{{ strtolower($subject->name) }}" class="form-control" max="100"
													@if (App\Result::whereStudentId($student_id)->whereSubjectId($subject->id)->count()>0)
														value="{{ App\Result::whereStudentId($student_id)->whereSubjectId($subject->id)->first()->mark }}" 
													@endif
													>
													
												</div>
											</div>
										@endforeach
									</div>
								@endforeach
							</div>
						</div>
						</form>
					</div>
          		</div>

          	</div>
        </div>
    </div>
</div>
@endsection