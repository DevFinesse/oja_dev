@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{action('ProfilesController@update', $id)}}" enctype="multipart/form-data">
                    	<input type="hidden" name="_method" value="PATCH">
                        @csrf

                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ $profile['first_name'] }}" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ $profile['last_name'] }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $profile['email'] }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="text" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ $profile['phone_number'] }}" required autofocus>

                                @if ($errors->has('phone_number'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_location" class="col-md-4 col-form-label text-md-right">{{ __('Residence State') }}</label>

                            <div class="col-md-6">
                                <input id="user_location" type="text" class="form-control{{ $errors->has('user_location') ? ' is-invalid' : '' }}" name="user_location" value="{{ $profile['user_location'] }}" required autofocus>

                                @if ($errors->has('user_location'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('user_location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" value="{{ $profile['dob'] }}" required autofocus>

                                @if ($errors->has('dob'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <!--<input id="phone_number" type="text" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number') }}" required autofocus> -->

                                <select name="gender" id="gender" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}">
                                    <option>Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>

                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State Of Origin') }}</label>

                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control" name="state" value="{{$user['state_of_origin']}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="local_govt" class="col-md-4 col-form-label text-md-right">{{ __('Local Government') }}</label>

                            <div class="col-md-6">
                                <input id="local_govt" type="text" class="form-control" name="local_govt" value="{{$user['local_govt']}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="education" class="col-md-4 col-form-label text-md-right">{{ __('Education') }}</label>

                            <div class="col-md-6">
                                <input id="education" type="text" class="form-control" name="education" value="{{$user['education']}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="specialization" class="col-md-4 col-form-label text-md-right">{{ __('Specialization') }}</label>

                            <div class="col-md-6">
                                <input id="specialization" type="text" class="form-control" name="specialization" value="{{$user['specialization']}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="employment_status" class="col-md-4 col-form-label text-md-right">{{ __('Employment Status') }}</label>

                            <div class="col-md-6">
                                <input id="employment_status" type="text" class="form-control" name="employment_status" value="{{$user['employment_status']}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cv" class="col-md-4 col-form-label text-md-right">{{ __('Upload CV') }}</label>

                            <div class="col-md-6">
                                <input id="cv" type="file" class="form-control" name="cv">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="summary" class="col-md-4 col-form-label text-md-right">{{ __('Summary') }}</label>

                            <div class="col-md-6">
                                <textarea class="form-control" name="summary" placeholder="Tell Us About Yourself" id="summary"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
