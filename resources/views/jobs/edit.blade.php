@extends('layouts.another')

@section('content')
    <h1 class="text-center" style="margin-top: 20px;"> Edit Job </h1>
    <div class="container">
    <form action="{{action('JobsController@update', $id)}}" method="POST" enctype="multipart/form-data">
    	<input type="hidden" name="_method" value="PATCH">
    {{ csrf_field() }}
    <div class="form-row">
	    <div class="form-group col-md-12">
	        <label for="title">Title</label>
	        <div class="input-group">
	            <div class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></div>
	        <input type="text" name="title" class="form-control" value="{{$jobs['job_title']}}">
	    </div>
	    </div>
	    <div class="form-group col-md-12">
	        <label for="body">Description</label>
	        <textarea id="summernote" name="description" class="form-control summernote">{{$jobs['job_description']}}</textarea>
	    </div>
	    <div class="form-group col-md-6">
	        <label for="location">Location</label>
	        <div class="input-group">
	            <div class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></div>
	        <input type="text" name="location" value="{{$jobs['job_location']}}" class="form-control">
	    </div>
	    </div>
	    <div class="form-group col-md-6">
	    	<label for="category">Category</label>
	        <div class="input-group">
	            <div class="input-group-addon"><span class="glyphicon glyphicon-tasks"></span></div>
	        <select class="form-control" name="categories">
	            <option value="3">SELECT CATEGORY</option>
	            <option value="Information Technology">I.T</option>
	           	<option value="Engineering">Engineering</option>
	           	<option value="Medical">Medical</option>
	           	<option value="Communication">Communication</option>
	           	<option value="Agriculture">Agriculture</option>
	        </select>
	    </div>
	    </div>
	    <div class="form-group col-md-6">
	        <label for="company_name">Company Name</label>
	        <div class="input-group">
	            <div class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></div>
	        <input type="text" name="company_name" value="{{$jobs['company_name']}}" class="form-control">
	    </div>
	    </div>
	    <div class="form-group col-md-6">
	        <label for="experience">Preferred Year Of Experience</label>
	        <div class="input-group">
	            <div class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></div>
	        <input type="number" name="experience" value="{{$jobs['experience']}}" class="form-control">
	    </div>
	    </div>
	    <div class="form-group col-md-6">
	        <label for="slot">Available Slots</label>
	        <div class="input-group">
	            <div class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></div>
	        <input type="number" name="slot" value="{{$jobs['slot']}}" class="form-control">
	    </div>
	    </div>
	    <div class="form-group col-md-6">
	        <label for="deadline">Deadline</label>
	        <div class="input-group">
	            <div class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></div>
	        <input type="date" name="deadline" value="{{$jobs['deadline']}}" class="form-control">
	    </div>
	    </div>
	    <br/>
	    <div class="form-group">
	    <button type="Submit" name="Submit" class="btn btn-primary"><span class="fa fa-send"> Submit</span></button>    
	    </div>
</div>
</form>
</div>
 
@endsection
   
    