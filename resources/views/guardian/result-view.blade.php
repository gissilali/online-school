@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading clearfix">
                    Result for {{ $student->name }}
                        <a type="submit" class="btn btn-primary" style="float:right" href="{{ url('guardian/download-result/'.$student->id) }}" target="_blank">
                            Download Results
                        </a>
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