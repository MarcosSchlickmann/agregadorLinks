<form class="form-inline" action="{{ route('dashboard.store') }}" method="POST">
    @csrf
  <div class="form-group mb-2">
    Create a new dashboard:
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputDashboardName" class="sr-only">Dashboard name</label>
    <input type="text" name="name" class="form-control" id="inputDashboardName" placeholder="Dashboard's name">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Create</button>
</form>