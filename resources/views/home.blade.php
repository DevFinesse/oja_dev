@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-md-4">
            <div class="card card-dark">
                <div class="card-header text-center">Profile</div>

                        <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <p>Full Name: {{$profile['first_name']}} &nbsp {{$profile['last_name']}}</p>
                                <p>email: {{$profile['email']}}</p>
                                <p>Phone Number: {{$profile['phone_number']}}</p>
                                <p>Location: {{$profile['user_location']}}</p>
                                <p>Date Of Birth: {{$profile['dob']}}</p>
                                <p>Gender: {{$profile['gender']}}</p>
                                <p>State Of Origin: {{$user['state_of_origin']}} </p>
                                <p>Local Government: {{$user['local_govt']}} </p>
                                <p>Education: {{$user['education']}} </p>
                                <p>Specialization: {{$user['specialization']}} </p>
                                <p>Employment Status: {{$user['employment_status']}} </p>
                                <p>CV:  <a href="/storage/cv/{{$user['cv']}}" class="btn btn-sm btn-info">View CV</a></p>
                                <p>Summary: {{$user['summary']}} </p>
                                <a href="profiles/{{$profile['id']}}/edit" class="btn btn-success">Update Profile</a>
                        </div>
                </div>
            </div>
            
            <div class="col col-md-8">
               <div class="card card-dark">
                <div class="card-header text-center">My Applications</div>

                        <div class="card-body">
                    
                
                <div class="table-responsive-md">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Job Title</th>
                                <th>Location</th>
                                <th>Company Name</th>
                                <th>Deadline</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($application as $applications)
                            <tr>
                                <td>{{$applications['job_title']}}</td>
                                <td>{{$applications['job_location']}}</td>
                                <td>{{$applications['company_name']}}</td>
                                <td>{{$applications['deadline']}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>    
                </div>
            </div>
        </div>
            </div>

            

            <div class="col col-md-10">
            
                   <div class="card card-dark">
                <div class="card-header text-center">My Jobs</div>

                        <div class="card-body">
                    
                
                <div class="table-responsive-md">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Job ID</th>
                                <th>Job Title</th>
                                <th>Location</th>
                                <th>Company Name</th>
                                <th>Deadline</th>
                                <th>Applicants</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($jobs as $job)
                            <tr>
                                <td>{{$job['id']}}</td>
                                <td>{{$job['job_title']}}</td>
                                <td>{{$job['job_location']}}</td>
                                <td>{{$job['company_name']}}</td>
                                <td>{{$job['deadline']}}</td>
                                <td><a href="applicants/{{$job['id']}}" class="btn btn-sm btn-info">View Applicants</a></td>
                                <td><a href="jobs/{{$job['id']}}/edit" class="btn btn-sm btn-dark"><span class="fa fa-edit"></span> Edit</a></td>
                                <td>
                                  <form method="POST" action="{{action('JobsController@destroy', $job['id'])}}">
                                        @csrf
                                      <input type="hidden" name="_method" value="DELETE">
                                      <button type="submit" name="submit" class="btn btn-sm btn-danger"><span class="fa fa-trash"></span> Delete</button>
                                  </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>    
                </div>
            </div>
        </div>
    </div>
            
    </div>
    
</div>
@endsection
