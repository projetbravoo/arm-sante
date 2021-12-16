<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
    <div class="profile-sidebar">
        <div class="widget-profile pro-widget-content">
            <div class="profile-info-widget">
                <a href="#" class="booking-doc-img">
                    <img src="{{ asset('img/avatar/' . Auth::user()->avatar) }}" alt="User Image">
                </a>
                <div class="profile-det-info">
                    <h3>Dr. Darren Elder</h3>
                    <div class="patient-details">
                        <h5 class="mb-0">BDS, MDS - Oral & Maxillofacial Surgery</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard-widget">
            <nav class="dashboard-menu">
                <ul>
                    <li class="active">
                        <a href="doctor-dashboard.html">
                            <i class="fas fa-columns"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="appointments.html">
                            <i class="fas fa-calendar-check"></i>
                            <span>Appointments</span>
                        </a>
                    </li>
                    <li>
                        <a href="my-patients.html">
                            <i class="fas fa-user-injured"></i>
                            <span>My Patients</span>
                        </a>
                    </li>
                    <li>
                        <a href="schedule-timings.html">
                            <i class="fas fa-hourglass-start"></i>
                            <span>Schedule Timings</span>
                        </a>
                    </li>
                    <li>
                        <a href="available-timings.html">
                            <i class="fas fa-clock"></i>
                            <span>Available Timings</span>
                        </a>
                    </li>
                    <li>
                        <a href="invoices.html">
                            <i class="fas fa-file-invoice"></i>
                            <span>Invoices</span>
                        </a>
                    </li>
                    <li>
                        <a href="accounts.html">
                            <i class="fas fa-file-invoice-dollar"></i>
                            <span>Accounts</span>
                        </a>
                    </li>
                    <li>
                        <a href="reviews.html">
                            <i class="fas fa-star"></i>
                            <span>Reviews</span>
                        </a>
                    </li>
                    <li>
                        <a href="chat-doctor.html">
                            <i class="fas fa-comments"></i>
                            <span>Message</span>
                            <small class="unread-msg">23</small>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('doctor.settings') }}">
                            <i class="fas fa-user-cog"></i>
                            <span>Profile Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="social-media.html">
                            <i class="fas fa-share-alt"></i>
                            <span>Social Media</span>
                        </a>
                    </li>
                    <li>
                        <a href="doctor-change-password.html">
                            <i class="fas fa-lock"></i>
                            <span>Change Password</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.html">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>