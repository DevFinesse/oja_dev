@extends('layouts.app')

@section('content')
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 font-weight-normal">We're Hiring</h1>
      <p class="lead font-weight-normal">Find Your Dream Job</p>
      @guest
      <p><a class="btn btn-outline-secondary" href="{{ route('register') }}">Sign Up</a> <a class="btn btn-outline-secondary" href="{{ route('login') }}">Sign In</a></p>
      @else
      <a class="btn btn-outline-secondary" href="/jobs">Latest Jobs</a>
      @endguest
    </div>
    <div class="product-device box-shadow d-none d-md-block"></div>
    <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
</div>    
@endsection