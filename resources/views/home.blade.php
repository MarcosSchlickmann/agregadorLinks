@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $dashboard ? $dashboard->name : "Dashboard" }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (!$dashboard)
                        @include('dashboard.create')
                    @else
                        @include('dashboard.index')
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
