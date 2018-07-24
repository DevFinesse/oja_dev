@extends('layouts.app')

@section('content')
    <div class="jumbotron">
    	<div class="col-md-12">
    		<div class="row">
    			<div class="col-md-4">
    				
    			</div>
    			<div class="col-md-4">
		    		<form class="form-group" action="{{url('search')}}" method="GET">
                        @csrf
			        	<label>Job Name</label>
			            <input type="text" class="form-control" name="search" id="search"><br/>
			            <label>Category</label>
			            <select class="form-control" name="category" id="category" required="" >
			            <option value="">SELECT CATEGORY</option>
                        <option value="Information Technology">I.T</option>
                        <option value="Engineering">Engineering</option>
                        <option value="Medical">Medical</option>
                        <option value="Communication">Communication</option>
                        <option value="Agriculture">Agriculture</option>
			            </select>
			            <br/>
			            <input type="submit" class="btn btn-block btn-dark" name="submit">
		            </form>
    			</div>
    			<div class="col-md-4">
    				
    			</div>
    		</div>
    	</div>
    </div>
    <div class="container">
    	<h3 class="text-center">Top Jobs In Nigeria</h3>
    	@if(count($show) > 0)
        @foreach($show as $job)
    	<div class="card">
    		<div class="card-body">
	    		<p><h5><a class="text-capitalize" href="/jobs/{{$job['id']}}">{{$job['job_title']}}</a></h5></p>
	    		<p class="text-capitalize"><span class="fa fa-industry"> {{$job['company_name']}}</span> &nbsp <span class="fa fa-map-marker"> {{$job['job_location']}}</span>  </p>
	    		<hr>
	    		<p>{!!$job['job_description']!!}</p>
    		</div>
    	</div>
        @endforeach
        @else
        <h2 class="text-center">No Jobs Matches Your Search!</h2>
        @endif
    </div>
@endsection