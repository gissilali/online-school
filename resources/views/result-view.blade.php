<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result View</title>
    <style>
        body{
            font-family: Ubuntu , sans-serif !important;
        }
        .panel{
            padding:10px;
        }
        .panel-success{
            
        }
        table{
            border:1px solid black;
            width:100%;
        }
        thead{
            font-weight: bold;
            border-bottom: 1px solid black;
        }
        tr{
            padding:10px;
            border-bottom: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading clearfix">
                    <p>Result for {{ Auth::guard('student')->user()->name }}</p>
                    <p>Adm Number: {{ Auth::guard('student')->user()->admission_number }}</p>
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
    </div>
</body>
</html>