@extends('layouts.admin')

@section('content')
	<div class="container">
		<table class="table table-striped">
			<thead>
				<tr>
				  	<th scope="col">#</th>
				  	<th scope="col">Name</th>
				  	<th scope="col">Email</th>
				  	<th scope="col">Role</th>
				  	<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
				<tr>
				  	<th scope="row">{{ $user->id }}</th>
				  	<td><a href="{{ route('user.show', $user->id) }}">{{ $user->name }}</a></td>
				  	<td>{{ $user->email }}</td>
				  	<td>{{ $user->is_admin ? 'Admin' : 'User' }}</td>
				  	<td>
				  		<div class="btn-group btn-group-sm" role="group" aria-label="User Functions">
				  			<button type="button" class="btn btn-warning">Edit</button>
				  			<form action="{{ route('user.destroy', $user->id) }}" method="POST">
				  				@method('DELETE')
				  				@csrf
				  			<button type="submit" class="btn btn-sm btn-danger">Delete</button>
				  			</form>
				  		</div>
				  	</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection