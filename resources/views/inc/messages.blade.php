@if(count($errors)>0)
<div class="alert alert-danger alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><small>X</small></span></button>
    @foreach($errors->all() as $error)
        {{$error}}
    @endforeach
</div>
@endif

@if(session('success'))
<div class="alert alert-success alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><small>X</small></span></button>
    {{session('success')}}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><small>X</small></span></button>
    {{session('error')}}
</div>
@endif