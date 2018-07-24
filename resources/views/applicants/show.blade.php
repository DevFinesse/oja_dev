@extends('layouts.app')

@section('content')

<div class="container table-responsive">
	<table class="table table-striped table-dark table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>email</th>
				<th>Phone Number</th>
				<th>Education</th>
				<th>Specialization</th>
				<th>CV</th>
				<th>Profile</th>
			</tr>
		</thead>
		<tbody>
			@foreach($applicants as $applicant)
			<tr>
				<td>{{$applicant['id']}}</td>
				<td>{{$applicant['first_name']}} &nbsp {{$applicant['last_name']}}</td>
				<td>{{$applicant['email']}}</td>
				<td>0{{$applicant['phone_number']}}</td>
				<td>{{$applicant['education']}}</td>
				<td>{{$applicant['specialization']}}</td>
				<td><a class="btn btn-sm btn-dark"  href="/storage/cv/{{$applicant['cv']}}">View CV</a></td>
				<td><a href="/views/{{$applicant['users_id']}}" class="btn btn-dark btn-sm">View Full Profile</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection