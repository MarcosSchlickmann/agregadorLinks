@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Dashboards</div>
                <div class="card-body">
                    @include('dashboard.create')
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        @foreach($dashboards as $dashboard)
                            <a class="nav-link {{ $dashboard->id == 1 ? 'active' : '' }}" id="v-pills-home-tab{{ $dashboard->id }}" data-toggle="pill" href="#v-pills-home{{ $dashboard->id }}" role="tab" aria-controls="v-pills-home{{ $dashboard->id }}" aria-selected="true">{{ $dashboard->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-9 tab-content" id="myTabContent">
            <div class="tab-content" id="v-pills-tabContent">
                @foreach($dashboards as $dashboard)
                    <div class="tab-pane fade {{ $dashboard->id == 1 ? 'show active' : '' }}" id="v-pills-home{{ $dashboard->id }}" role="tabpanel" aria-labelledby="v-pills-home-tab{{ $dashboard->id }}">
                        <div class="card">
                            <div class="card-header">{{ $dashboard ? $dashboard->name : "Dashboard" }}</div>

                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    @include('dashboard.index')
                                </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
