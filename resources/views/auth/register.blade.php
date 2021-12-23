@extends('layouts.auth')

@section('content')
<div class="account-content">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-7 col-lg-6 login-left">
            <img src="{{ asset('img/login-banner.png') }}" class="img-fluid" alt="Doccure Register">
        </div>
        <div class="col-md-12 col-lg-6 login-right">
            <div class="login-header">
                <h3>Registration Form</h3>
            </div>
            <form action="{{ route('auth.register.create') }}" method="POST" autocomplete="off">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-focus">
                            <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" class="form-control floating @error('first_name') is-invalid @enderror">
                            <label class="focus-label">First Name</label>
                            @error('first_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-focus">
                            <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" class="form-control floating @error('last_name') is-invalid @enderror">
                            <label class="focus-label">Last Name</label>
                            @error('last_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group form-focus">
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control floating @error('email') is-invalid @enderror">
                    <label class="focus-label">E-mail</label>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <select class="form-control select @error('gender') is-invalid @enderror" name="gender" id="gender">
                                <option value="">Select your gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            @error('gender')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <select class="form-control select @error('speciality') is-invalid @enderror" name="speciality" id="speciality">
                                <option value="">Your speciality?</option>
                                <option value="dentist">Dentist</option>
                                <option value="salam">salam</option>
                            </select>
                            @error('speciality')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group form-focus">
                    <input type="password" name="password" id="password" class="form-control floating @error('password') is-invalid @enderror">
                    <label class="focus-label">Create Password</label>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group form-focus">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control floating">
                    <label class="focus-label">Confirm Password</label>
                </div>
                <div class="text-right">
                    <a class="forgot-link" href="{{ route('auth.login') }}">Already have an account?</a>
                </div>
                <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
            </form>

        </div>
    </div>
</div>   
@endsection