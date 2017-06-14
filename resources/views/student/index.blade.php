@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
                @if (Auth::guard('student')->user()->fees_update)
                    <div class="alert alert-warning">
                    Fee Balance: {{ Auth::guard('student')->user()->fees_balance }}
                </div>
                @else
                    <div class="alert alert-warning">
                    Fee Balance: not updated <i class="fa fa-warning"></i>
                </div>
                @endif
            <div class="panel panel-success">
                <div class="panel-heading clearfix">
                    Result for {{ Auth::guard('student')->user()->name }}
                        @if (count($results))
                            <a type="submit" class="btn btn-primary" style="float:right" href="{{ url('student/download-result/') }}" target="_blank">
                            Download Results
                        </a>
                        @else
                            <a type="submit" class="btn btn-primary" style="float:right" href="#" disabled>
                            <strong><small>results can be downloaded if available</small></strong>
                        </a>
                        @endif
                </div>
                <div class="panel-body">
                    @if (count($results))
                        <table class="table">
                          <thead class="thead-inverse">
                            <tr>
                                <td>Subject</td>
                                <td>Code</td>
                                <td>Mark</td>
                                <td>Grade</td>  
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($results as $result)
                                <tr>
                                    <td>{{ App\Subject::find($result->subject_id)->name }}</td>
                                <td>{{ App\Subject::find($result->subject_id)->code }}</td>
                                <td>{{ $result->mark }}</td>
                                <td>@if ($result->mark>70)
                                    A
                                @elseif($result->mark>=59)
                                    B
                                @elseif($result->mark>=49)
                                    C
                                @elseif($result->mark>=29)
                                    D
                                @elseif($result->mark<29)
                                    E
                                @endif</td>
                                </tr>
                            @endforeach
                          </tbody>
                        </table>
                    @else
                        <div class="alert alert-info">
                            No results available
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection