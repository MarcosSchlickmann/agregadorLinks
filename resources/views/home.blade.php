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
                            <a class="nav-link {{ $dashboard->id == $dashboards[0]->id ? 'active' : '' }}" id="v-pills-home-tab{{ $dashboard->id }}" data-toggle="pill" href="#v-pills-home{{ $dashboard->id }}" role="tab" aria-controls="v-pills-home{{ $dashboard->id }}" aria-selected="true">{{ $dashboard->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Create list</div>
                <div class="card-body">
                    <form action="{{ route('listing.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="inputListName">List name</label>
                            <input type="text" name="name" class="form-control" id="inputListName" placeholder="Enter the list name">
                        </div>
                        <div class="form-group">
                            <label for="inputDashboards">Select the dashboards</label>
                                <select multiple name="associate_dashboards[]" class="form-control" id="inputDashboards">
                                    @foreach($dashboards as $dashboard)
                                        <option value="{{ $dashboard->id }}">{{ $dashboard->name }}</option>
                                    @endforeach
                                </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>


        <div class="col-md-9 tab-content" id="myTabContent">
            <div class="tab-content" id="v-pills-tabContent">
                @foreach($dashboards as $dashboard)
                    <div class="tab-pane fade {{ $dashboard->id == $dashboards[0]->id ? 'show active' : '' }}" id="v-pills-home{{ $dashboard->id }}" role="tabpanel" aria-labelledby="v-pills-home-tab{{ $dashboard->id }}">
                        <div class="card">
                            <div class="card-header">
                                <div class="row"> 
                                <div class="col-md-11"> {{ $dashboard ? $dashboard->name : "Dashboard" }} </div>
                                <div class="col-md">
                                    <form action="{{ route('dashboard.destroy', $dashboard->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                            </div>

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
