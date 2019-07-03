<div class="row justify-content-md-center">
	@foreach($dashboard->listings as $listing)
		<div class="col-md-3 col-sm-12">
			<div class="card">
				<div class="card-header">
					<div class="row justify-content-between">
						<div class="col-auto mr-auto">
							<p>{{ $listing->name }}</p>
						</div>
						<div class="col-auto">
							<form class="col-md-2" action="{{ route('listing.destroy', $listing->id) }}" method="POST">
								@method('DELETE')
								@csrf
								<button type="submit" class="btn btn-sm btn-danger">Delete</button>
							</form>
						</div>
					</div>
				</div>
				<div class="card-body">
					<table class="table table-borderless">
					  	<tbody>
							@foreach($listing->links as $link)
						    	<tr>
						      		<td><a href="{{ $link->url }}" target="_blank">{{ $link->name }}</a></td>
						      		<td>
						      			<form action="{{ route('link.destroy', $link->id) }}" method="POST">
											@method('DELETE')
											@csrf
											<button type="submit" class="btn btn-sm btn-danger">Delete</button>
										</form>
									</td>
						    	</tr>
					    	@endforeach
					  	</tbody>
					</table>
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
			</div>
		</div>
	@endforeach
</div> 
