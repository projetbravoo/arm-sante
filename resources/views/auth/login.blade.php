@extends('layouts.auth')

@section('content')
<div class="account-content">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-7 col-lg-6 login-left">
            <img src="{{ asset('img/login-banner.png') }}" class="img-fluid" alt="Doccure Login">
        </div>
        <div class="col-md-12 col-lg-6 login-right">
            <div class="login-header">
                <h3>Login <span>Doccure</span></h3>
            </div>
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <form action="{{ route('auth.login') }}" method="POST">
                @csrf
                <div class="form-group form-focus">
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control floating @error('email') is-invalid @enderror">
                    <label class="focus-label">Email</label>
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group form-focus">
                    <input type="password" name="password" id="password" class="form-control floating @error('password') is-invalid @enderror">
                    <label class="focus-label">Password</label>
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="text-right">
                    <a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
                </div>
                <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
                <div class="text-center dont-have">Don’t have an account? <a href="{{ route('auth.patient.register') }}">Register</a></div>
            </form>
        </div>
    </div>
</div>    
@endsection