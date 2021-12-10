@extends('layouts.auth')

@section('content')
<div class="account-content">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-7 col-lg-6 login-left">
            <img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Register">
        </div>
        <div class="col-md-12 col-lg-6 login-right">
            <div class="login-header">
                <h3>Patient Register <a href="doctor-register.html">Are you a Doctor?</a></h3>
            </div>

            <form action="" method="POST">
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">Name</label>
                </div>
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">Mobile Number</label>
                </div>
                <div class="form-group form-focus">
                    <input type="password" class="form-control floating">
                    <label class="focus-label">Create Password</label>
                </div>
                <div class="text-right">
                    <a class="forgot-link" href="{{ route('login') }}">Already have an account?</a>
                </div>
                <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
            </form>

        </div>
    </div>
</div>   
@endsection