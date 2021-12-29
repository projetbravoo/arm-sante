<footer class="footer">
    <div class="footer-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6">

                    <div class="footer-widget footer-about">
                        <div class="footer-logo">
                            <img src="{{ asset('img/footer-logo.png') }}" alt="logo">
                        </div>
                        <div class="footer-about-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <div class="social-icon">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6">

                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">For Patients</h2>
                        <ul>
                            <li><a href="search.html">Search for Doctors</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="booking.html">Booking</a></li>
                            <li><a href="patient-dashboard.html">Patient Dashboard</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6">

                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">For Doctors</h2>
                        <ul>
                            <li><a href="appointments.html">Appointments</a></li>
                            <li><a href="chat.html">Chat</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="doctor-register.html">Register</a></li>
                            <li><a href="doctor-dashboard.html">Doctor Dashboard</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6">

                    <div class="footer-widget footer-contact">
                        <h2 class="footer-title">Contact Us</h2>
                        <div class="footer-contact-info">
                            <div class="footer-address">
                                <span><i class="fas fa-map-marker-alt"></i></span>
                                <p> 3556 Beech Street, San Francisco,<br> California, CA 94108 </p>
                            </div>
                            <p>
                                <i class="fas fa-phone-alt"></i> +1 315 369 5943
                            </p>
                            <p class="mb-0">
                                <i class="fas fa-envelope"></i>
                                <a href="https://doccure-laravel.dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b9ddd6dadacccbdcf9dcc1d8d4c9d5dc97dad6d4">[email&#160;protected]</a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="footer-bottom">
        <div class="container-fluid">

            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="copyright-text">
                            <p class="mb-0">&copy; 2020 Doccure. All rights reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">

                        <div class="copyright-menu">
                            <ul class="policy-menu">
                                <li><a href="term-condition.html">Terms and Conditions</a></li>
                                <li><a href="privacy-policy.html">Policy</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

</footer>
{{-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
<script src="{{ asset('js/jquery.min.js') }}"></script>

<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<script src="{{ asset('plugins/swiper/js/swiper.min.js') }}"></script>

<script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>

<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('plugins/fullcalendar/fullcalendar.min.js') }}"></script>
<script src="{{ asset('plugins/fullcalendar/jquery.fullcalendar.js') }}"></script>

<script src="{{ asset('plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
<script src="{{ asset('plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.all.min.js"></script>

<script src="{{ asset('plugins/apex/apexcharts.min.js') }}"></script>

<script src="{{ asset('plugins/select2/js/select2.min.js') }}"></script>

<script src="{{ asset('plugins/fancybox/jquery.fancybox.min.js') }}"></script>

<script src="{{ asset('plugins/dropzone/dropzone.min.js') }}"></script>

<script src="{{ asset('plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>

<script src="{{ asset('plugins/qcTimepicker/dist/qcTimepicker.min.js') }}"></script>

<script src="{{ asset('js/profile-settings.js') }}"></script>

<script src="{{ asset('js/circle-progress.min.js') }}"></script>

<script src="{{ asset('js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('js/slick.js') }}"></script>

<script src="{{ asset('js/script.js') }}"></script>

<script>
    @if (session('notify'))
        @php echo notify(session('notify')) @endphp
    @endif  
</script>

</body>
</html>
<script>
    $(document).ready(function() {
        // alert(1);
        /*$('.submenu li a').click(function(){
          $(.submenu li a).removeClass("active");
          $(this).addClass("active");
          $('.has-submenu a').removeClass("active");
          $('.has-submenu a').addClass("active");
          
          //$(this).toggleClass("active");
        });*/
    });
</script>
