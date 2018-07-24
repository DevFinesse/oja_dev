@extends('layouts.app')

@section('content')

<div class="row">
<div class="col-md"></div>

<div class="col-md-6">
<form class="form-group"  action="{{url('applications')}}"  method="POST">
	@csrf
	<input type="hidden" name="job_id" value="{{$jobs['id']}}">
	<input type="hidden" name="company_name" value="{{$jobs['company_name']}}">
	<input type="hidden" name="job_location" value="{{$jobs['job_location']}}">
	<input type="hidden" name="job_title" value="{{$jobs['job_title']}}">
	<input type="hidden" name="deadline" value="{{$jobs['deadline']}}">
	<label for="full_name">Full Name:</label>
	<input type="text" disabled="" class="form-control" name="full_name" value="{{auth()->user()->first_name}} &nbsp {{auth()->user()->last_name}}"><br/>
	<label for="email">email:</label>
	<input type="text" disabled="" name="email" class="form-control" value="{{auth()->user()->email}}"><br/>
	<label for="phone_number">Phone Number:</label>
	<input type="text" disabled="" name="phone_number" class="form-control" value="{{auth()->user()->phone_number}}"><br/>
	<label for="user_location">Location:</label>
	<input type="text" disabled="" name="user_location" class="form-control" value="{{auth()->user()->user_location}}"><br/>
	<label for="dob">Date Of Birth:</label>
	<input type="text" disabled="" name="dob" class="form-control" value="{{auth()->user()->dob}}"><br/>
	<label for="state">State Of Origin</label>
	<input type="text"  name="state" class="form-control" value="{{$user['state_of_origin']}}"><br/>
	<label for="local_govt">Local Government</label>
	<input type="text" name="local_govt" class="form-control" value="{{$user['local_govt']}}"><br/>
	<label for="education">Education:</label>
	<input type="text" name="education" class="form-control" value="{{$user['education']}}"><br/>
	<label for="specialization">Specialization</label>
	<input type="text" class="form-control" name="specialization" value="{{$user['specialization']}}"><br/>
	<label for="employment">Employment Status:</label>
	<input type="text" class="form-control" name="employment" value="{{$user['employment_status']}}"><br/>
	<label for="summary">Summary:</label>
	<input type="text" class="form-control" name="summary" value="{{$user['summary']}}"><br/>
	<label for="cv">CV:</label>
	<input readonly="" type="text" class="form-control" name="cv" id="cv" value="{{$user['cv']}}"><br/>
	<input type="submit" class="btn btn-dark btn-block" name="submit" value="Submit Application">
</form> 
</div>

<div class="col-md"></div>
</div>
@endsection