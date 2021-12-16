@extends('layouts.dashboard')

@section('content')
<div class="col-md-7 col-lg-8 col-xl-9">
    <form action="{{ route('doctor.update') }}" method="POST" autocomplete="off">
        @csrf
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Information</h4>
                <div class="row form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="change-avatar">
                                <div class="profile-img">
                                    <img src="{{ asset('img/avatar/' . $user->avatar ) }}" alt="User Image">
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>First Name <span class="text-danger">*</span></label>
                            <input type="text" name="first_name" id="first_name" value="{{ $user->first_name }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Last Name <span class="text-danger">*</span></label>
                            <input type="text" name="last_name" id="last_name" value="{{ $user->last_name }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Gender <span class="text-danger">*</span></label>
                            <input type="text" name="gender" id="gender" value="{{ $user->gender }}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="phone_number" id="phone_number" value="{{ $user->phone_number }}" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="card contact-card">
            <div class="card-body">
                <h4 class="card-title">Contact Details</h4>
                <div class="row form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Country</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">State / Province</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">City</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">About Me</h4>
                <div class="form-group mb-0">
                    <label>Biography</label>
                    <textarea class="form-control" rows="5"></textarea>
                </div>
            </div>
        </div>
    
    
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Clinic Info</h4>
                <div class="row form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Clinic Name</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Clinic Address</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pricing</h4>
                <div class="form-group mb-0">
                    <div id="pricing_select">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="price_free" name="rating_option" class="custom-control-input" value="price_free" checked>
                            <label class="custom-control-label" for="price_free">Free</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="price_custom" name="rating_option" value="custom_price" class="custom-control-input">
                            <label class="custom-control-label" for="price_custom">Custom Price (per hour)</label>
                        </div>
                    </div>
                </div>
                <div class="row custom_price_cont" id="custom_price_cont" style="display: none;">
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="custom_rating_input" name="custom_rating_count" value="" placeholder="20">
                        <small class="form-text text-muted">Custom price you can add</small>
                    </div>
                </div>
            </div>
        </div>
    
    
        <div class="card services-card">
            <div class="card-body">
                <h4 class="card-title">Services and Specialization</h4>
                <div class="form-group">
                    <label>Services</label>
                    <input type="text" data-role="tagsinput" class="input-tags form-control" placeholder="Enter Services" name="services" value="Tooth cleaning " id="services">
                    <small class="form-text text-muted">Note : Type & Press enter to add new services</small>
                </div>
                <div class="form-group mb-0">
                    <label>Specialization </label>
                    <input class="input-tags form-control" type="text" data-role="tagsinput" placeholder="Enter Specialization" name="specialist" value="Children Care,Dental Care" id="specialist">
                    <small class="form-text text-muted">Note : Type & Press enter to add new specialization</small>
                </div>
            </div>
        </div>
    
    
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Education</h4>
                <div class="education-info">
                    <div class="row form-row education-cont">
                        <div class="col-12 col-md-10 col-lg-11">
                            <div class="row form-row">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label>Degree</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label>College/Institute</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label>Year of Completion</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="add-more">
                    <a href="javascript:void(0);" class="add-education"><i class="fa fa-plus-circle"></i> Add More</a>
                </div>
            </div>
        </div>
    
    
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Experience</h4>
                <div class="experience-info">
                    <div class="row form-row experience-cont">
                        <div class="col-12 col-md-10 col-lg-11">
                            <div class="row form-row">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label>Hospital Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label>From</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label>To</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label>Designation</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="add-more">
                    <a href="javascript:void(0);" class="add-experience"><i class="fa fa-plus-circle"></i> Add More</a>
                </div>
            </div>
        </div>
    
        <div class="submit-section submit-btn-bottom">
            <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
        </div>
    </form>
</div>    
@endsection