<div class="row">
	<div class="col-md">
		<form class="form-inline" action="{{ route('listing.store') }}" method="POST">
		    @csrf
		  <div class="form-group mb-2">
		    Name of the list:
		  </div>
		  <div class="form-group mx-sm-3 mb-2">
		    <label for="inputListName" class="sr-only">List name</label>
		    <input type="text" name="name" class="form-control" id="inputListName" placeholder="List's name">
		    <input type="hidden" name="dashboard_id" value="{{ $dashboard->id }}">
		  </div>
		  <button type="submit" class="btn btn-primary mb-2">Create</button>
		</form>
	</div>
</div>
<hr>