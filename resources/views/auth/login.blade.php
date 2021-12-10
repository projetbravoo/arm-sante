@extends('layouts.auth')

@section('content')
<div class="account-content">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-7 col-lg-6 login-left">
            <img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Login">
        </div>
        <div class="col-md-12 col-lg-6 login-right">
            <div class="login-header">
                <h3>Login <span>Doccure</span></h3>
            </div>
            <form action="" method="POST">
                <div class="form-group form-focus">
                    <input type="email" class="form-control floating">
                    <label class="focus-label">Email</label>
                </div>
                <div class="form-group form-focus">
                    <input type="password" class="form-control floating">
                    <label class="focus-label">Password</label>
                </div>
                <div class="text-right">
                    <a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
                </div>
                <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
                <div class="text-center dont-have">Don’t have an account? <a href="{{ route('register') }}">Register</a></div>
            </form>
        </div>
    </div>
</div>    
@endsection