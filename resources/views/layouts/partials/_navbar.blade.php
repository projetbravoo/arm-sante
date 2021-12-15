<header class="header">
    <nav class="navbar navbar-expand-lg header-nav">
        <div class="navbar-header">
            <a id="mobile_btn" href="javascript:void(0);">
                <span class="bar-icon">
                <span></span>
                <span></span>
                <span></span>
                </span>
            </a>
            <a href="{{ route('home') }}" class="navbar-brand logo">
                <img src="{{ asset('img/logo.png') }}" class="img-fluid" alt="Logo">
            </a>
        </div>
        <div class="main-menu-wrapper">
            <div class="menu-header">
                <a href="index.html" class="menu-logo">
                    <img src="{{ asset('img/logo.png') }}" class="img-fluid" alt="Logo">
                </a>
                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                    <i class="fas fa-times"></i>
                </a>
            </div>
            <ul class="main-nav">
                <li class="has-submenu ">
                    <a href="#">Home <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li class="">
                            <a href="index.html">Home</a>
                        </li>
                        <li class=""><a href="index-1.html">Home 1</a></li>
                        <li class=""><a href="index-2.html">Home 2</a></li>
                        <li class=""><a href="index-3.html">Home 3</a></li>
                        <li class=""><a href="index-4.html">Home 4</a></li>
                        <li class=""><a href="index-5.html">Home 5</a></li>
                        <li class=""><a href="index-6.html">Home 6</a></li>
                        <li class=""><a href="index-7.html">Home 7</a></li>
                        <li class=""><a href="index-8.html">Home 8</a></li>
                    </ul>
                </li>
                <li class="has-submenu ">
                    <a href="#">Doctors <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li class=""><a href="doctor-dashboard.html">Doctor Dashboard</a></li>
                        <li class=""><a href="appointments.html">Appointments</a></li>
                        <li class=""><a href="schedule-timings.html">Schedule Timing</a></li>
                        <li class=""><a href="my-patients.html">Patients List</a></li>
                        <li class=""><a href="patient-profile.html">Patients Profile</a></li>
                        <li class=""><a href="chat-doctor.html">Chat</a></li>
                        <li class=""><a href="invoices.html">Invoices</a></li>
                        <li class=""><a href="doctor-profile-settings.html">Profile Settings</a></li>
                        <li class=""><a href="reviews.html">Reviews</a></li>
                        <li class=""><a href="doctor-register.html">Doctor Register</a></li>
                        <li class="has-submenu ">
                            <a href="doctor-blog.html">Blog</a>
                            <ul class="submenu">
                                <li class=""><a href="doctor-blog.html">Blog</a></li>
                                <li><a href="blog-details.html">Blog view</a></li>
                                <li class=""><a href="doctor-add-blog.html">Add Blog</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu ">
                    <a href="#">Patients <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li class="has-submenu ">
                            <a href="#">Doctors</a>
                            <ul class="submenu">
                                <li class=""><a href="map-grid.html">Map Grid</a></li>
                                <li class=""><a href="map-list.html">Map List</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="search.html">Search Doctor</a></li>
                        <li class=""><a href="doctor-profile.html">Doctor Profile</a></li>
                        <li class=""><a href="booking.html">Booking</a></li>
                        <li class=""><a href="checkout.html">Checkout</a></li>
                        <li class=""><a href="booking-success.html">Booking Success</a></li>
                        <li class=""><a href="patient-dashboard.html">Patient Dashboard</a></li>
                        <li class=""><a href="favourites.html">Favourites</a></li>
                        <li class=""><a href="chat.html">Chat</a></li>
                        <li class=""><a href="profile-settings.html">Profile Settings</a></li>
                        <li class=""><a href="change-password.html">Change Password</a></li>
                    </ul>
                </li>
                <li class="has-submenu ">
                    <a href="#">Pharmacy <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li class=""><a href="pharmacy-index.html">Pharmacy</a></li>
                        <li class=""><a href="pharmacy-details.html">Pharmacy Details</a></li>
                        <li class=""><a href="pharmacy-search.html">Pharmacy Search</a></li>
                        <li class=""><a href="product-all.html">Product</a></li>
                        <li class=""><a href="product-description.html">Product Description</a></li>
                        <li class=""><a href="cart.html">Cart</a></li>
                        <li class=""><a href="product-checkout.html">Product Checkout</a></li>
                        <li class=""><a href="payment-success.html">Payment Success</a></li>
                        <li class=""><a href="pharmacy-register.html">Pharmacy Register</a></li>
                    </ul>
                </li>
                <li class="has-submenu active">
                    <a href="#">Pages <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li class=""><a href="voice-call.html">Voice Call</a></li>
                        <li class=""><a href="video-call.html">Video Call</a></li>
                        <li class=""><a href="search.html">Search Doctors</a></li>
                        <li class=""><a href="calendar.html">Calendar</a></li>
                        <li class=""><a href="components.html">Components</a></li>
                        <li class="has-submenu ">
                            <a href="invoices.html">Invoices</a>
                            <ul class="submenu">
                                <li class=""><a href="invoices.html">Invoices</a></li>
                                <li class=""><a href="invoice-view.html">Invoice View</a></li>
                            </ul>
                        </li>
                        <li class="active"><a href="blank-page.html">Starter Page</a></li>
                        <li class=""><a href="login.html">Login</a></li>
                        <li class=""><a href="register.html">Register</a></li>
                        <li class=""><a href="forgot-password.html">Forgot Password</a></li>
                    </ul>
                </li>
                <li class="has-submenu ">
                    <a href="#">Blog <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li class=""><a href="blog-list.html">Blog List</a></li>
                        <li class=""><a href="blog-grid.html">Blog Grid</a></li>
                        <li class=""><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#" target="_blank">Admin <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li><a href="admin/index_admin.html" target="_blank">Admin</a></li>
                        <li><a href="pharmacy-admin/index_pharmacy_admin.html" target="_blank">Pharmacy Admin</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <ul class="nav header-navbar-rht">
            <li class="nav-item contact-item">
                <div class="header-contact-img">
                    <i class="far fa-hospital"></i>
                </div>
                <div class="header-contact-detail">
                    <p class="contact-header">Contact</p>
                    <p class="contact-info-header"> +1 315 369 5943</p>
                </div>
                <li class="nav-item">
                    <a class="nav-link header-login" href="{{ route('login') }}">login / Signup </a>
                </li>
            </li>
        </ul>
    </nav>
</header>