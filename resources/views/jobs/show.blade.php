@extends('layouts.app')

@section('content')
    <div class="container">
        	<div class="card">
        		<div class="card-body">
    	    		<p><h5>{{$jobs['job_title']}}</h5></p>
    	    		<p class="text-capitalize"><span class="fa fa-industry"> {{$jobs['company_name']}}</span> &nbsp <span class="fa fa-map-marker"> {{$jobs['job_location']}}</span> &nbsp <span class="fa fa-tags"> {{$jobs['category']}}</span>  </p>
                    <p class="text-capitalize"><span class="fa fa-industry"> {{$jobs['slot']}} Slots Available</span> &nbsp <span class="fa fa-calendar"> {{$jobs['experience']}} Years Experience</span> &nbsp <span class="fa fa-calendar"> Deadline: {{$jobs['deadline']}}</span></p>
    	    		<hr>
    	    		<p>{!!$jobs['job_description']!!}</p>
        		</div>
        	</div>
            <div style="margin-top: 20px;">
                @if(Auth::guest())
                <a href="/applications/{{$jobs['id']}}" class="btn btn-danger btn-sm">To Apply, PLease Login Or Sign Up</a>
                @endif    
            </div>
            
            @if(!Auth::guest())
            
                @if(Auth::user()->id == $jobs['users_id'])
            <div style="margin-top: 20px;">
                <div class="pull-right">
                <a href="/jobs/{{$jobs['id']}}/edit" class="btn btn-info"><span class="fa fa-edit"></span> Edit  </a>    
                </div>

                <div class="pull-right" style="margin-right: 5px;">
                <form action="{{action('JobsController@destroy', $jobs['id'])}}" method="POST" class="pull-right">
                    @csrf
                 <input type="hidden"  name="_method" value="DELETE">   
                <button type="submit" name="submit" class="btn btn-danger"><span class="fa fa-trash"></span> Delete</button>
                </form>    
                </div>
                @endif
                @if(Auth::user()->id !== $jobs['users_id'])
        
            <div style="margin-top: 20px;">
                <a href="/applications/{{$jobs['id']}}" class="btn btn-success"><span class="fa fa-check"></span> Apply</a>
            </div>
                   
            </div>
                @endif

            @endif
        	  
    </div>	
@endsection