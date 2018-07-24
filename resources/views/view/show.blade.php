@extends('layouts.app')

@section('content')

<div class="container">
	<div class="card">
		<div class="card-header text-center"><b><h4>Profile</h4></b></div>
		<div class="card-body">
				<h4 class="text-center">PERSONAL INFORMATION</h4>
			<p><b>Full Name:</b> {{$user['first_name']}} &nbsp {{$user['last_name']}}</p>
			<p><b>email:</b> {{$user['email']}}</p>
			<p><b>Phone Number:</b> 0{{$user['phone_number']}}</p>	
			<p><b>Gender:</b> {{$user['gender']}}</p>
			<p><b>Date Of Birth:</b> {{$user['dob']}}</p>
			<p><b>State Of Origin:</b> {{$profile['state_of_origin']}}</p>	
			<p><b>Local Government:</b> {{$profile['local_govt']}}</p>
			<p><b>Current Location:</b> {{$user['user_location']}}</p>

				<h4 class="text-center">EDUCATION</h4>
			<p><b>Highest Education:</b> {{$profile['education']}}</p>
			<p><b>Specialization:</b> {{$profile['specialization']}}</p>

				<h4 class="text-center">EMPLOYMENT</h4>
			<p><b>Employment Status:</b> {{$profile['employment_status']}}</p>
			<p><b>CV:</b> <a href="/storage/cv/{{$profile['cv']}}" class="btn btn-dark btn-sm">Download CV</a> </p>
		</div>
	</div>
	
</div>







@endsection