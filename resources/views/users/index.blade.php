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
				  	<td>{{ $user->name }}</td>
				  	<td>{{ $user->email }}</td>
				  	<td>{{ $user->is_admin ? 'Admin' : 'User' }}</td>
				  	<td>@mdo</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection