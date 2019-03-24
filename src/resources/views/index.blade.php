@extends('ZLL::layout')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Logs</div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Level</th>
                            <th>date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($logs as $log)
                        <tr>
                            <td>{{ $log->level }}</td>
                            <td>{{ $log->date }}</td>
                            <td>
                                <a href="{{ route('zlogger.show', [$log->id]) }}" class="btn btn-info btn-sm">Show</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
        </div>  
    </div>
</div>
@endsection