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
<div class="row justify-content-md-center">
	@foreach($dashboard->listings as $listing)
		<div class="col-md-3 listing">
			<p class="title">{{ $listing->name }}</p>
			<ul class="links">
				@foreach($listing->links as $link)
					<li><a href="{{ $link->url }}" target="_blank">{{ $link->name }}</a></li>
				@endforeach
			</ul>
			<form class="form-inline add" action="{{ route('link.store') }}" method="POST">
			    @csrf
			  <div class="input-group mb-3">
			    <input type="text" name="url" class="form-control" placeholder="Site link" aria-label="Site link" aria-describedby="button-addon2">
			    <input type="hidden" name="listing_id" value="{{ $listing->id }}">
			    <div class="input-group-append">
			      <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Add</button>
			    </div>
			  </div>
			</form>
		</div>
	@endforeach
</div> 
