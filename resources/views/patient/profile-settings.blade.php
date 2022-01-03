@extends('layouts.dashboard')

@section('content')
<div class="col-md-7 col-lg-8 col-xl-9">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('patient.update') }}" method="POST" autocomplete="off">
                @method('PUT')
                @csrf
                <div class="row form-row">
                    <div class="col-12 col-md-12">
                        <div class="form-group">
                            <div class="change-avatar">
                                <div class="profile-img">
                                    <img src="{{ asset('img/avatar/' . $patient->avatar ) }}" alt="User Image">
                                </div>
                                <div class="upload-img">
                                    <div class="change-photo-btn">
                                        <span><i class="fa fa-upload"></i> Upload Photo</span>
                                        <input type="file" class="upload">
                                    </div>
                                    <small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control" value="{{ $patient->first_name }}">
                            @error('first_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $patient->last_name }}">
                            @error('last_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ $patient->email }}" readonly>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Gender</label>
                            <input type="text" name="gender" id="gender" class="form-control" value="{{ $patient->gender }}" readonly>
                            @error('gender')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <div class="cal-icon">
                                <input type="text" name="date_of_birth" id="date_of_birth" class="form-control datetimepicker" value="{{ $patient->userable->date_of_birth }}">
                            </div>
                            @error('date_of_birth')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Blood Group</label>
                            <select name="blood_group" id="blood_group" class="form-control select">
                                <option value="">What's your bloof group?</option>
                                <option {{ $patient->userable->blood_group == 'A-' ? 'selected' : '' }} value="A-">A-</option>
                                <option {{ $patient->userable->blood_group == 'A+' ? 'selected' : '' }} value="A+">A+</option>
                                <option {{ $patient->userable->blood_group == 'B-' ? 'selected' : '' }} value="B-">B-</option>
                                <option {{ $patient->userable->blood_group == 'B+' ? 'selected' : '' }} value="B+">B+</option>
                                <option {{ $patient->userable->blood_group == 'AB-' ? 'selected' : '' }} value="AB-">AB-</option>
                                <option {{ $patient->userable->blood_group == 'AB+' ? 'selected' : '' }} value="AB+">AB+</option>
                                <option {{ $patient->userable->blood_group == 'O-' ? 'selected' : '' }} value="O-">O-</option>
                                <option {{ $patient->userable->blood_group == 'O+' ? 'selected' : '' }} value="O+">O+</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="phone_number" id="phone_number" value="{{ $patient->phone_number }}" class="form-control">
                            @error('phone_number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" name="city" id="city" class="form-control" value="{{ $patient->city }}">
                            @error('city')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>State</label>
                            <input type="text" name="state" id="state" class="form-control" value="{{ $patient->state }}">
                            @error('state')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Country</label>
                            <input type="text" name="country" id="country" class="form-control" value="{{ $patient->country }}">
                            @error('country')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="submit-section">
                    <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection