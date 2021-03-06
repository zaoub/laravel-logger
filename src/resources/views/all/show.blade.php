@extends('ZLL::layout')
@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">Show data</div>
            <div class="card-body">
                <table class="table table-striped">
                    <p>Level: {{ $log->level }}</p>
                    <p>Date: {{ $log->date }}</p>
                    <a href="{{ route('zlogger.delete', [$log->id]) }}" class="btn btn-danger btn-sm">Delete</a>
                </table>
            </div> 
        </div>
    </div>
    <div class="col-md-8">
        <div class="card mb-3">
            <div class="card-header">Show header</div>
            <div class="card-body">
                <table class="table table-striped">
                    <pre>{{ $log->header }}</pre>
                </table>
            </div> 
        </div>
        <div class="card">
            <div class="card-header">Show stacktrace</div>
            <div class="card-body">
                <table class="table table-striped">
                    <pre>{{ $log->stack }}</pre>
                </table>
            </div> 
        </div>
        
    </div>
</div>


@endsection