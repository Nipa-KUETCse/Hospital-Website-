<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ROYAL HOTEL | Responsive Travel & Tourism Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicons -->
        <link href="{{ asset('frontend/assets/img/favicon.ico') }}" rel="icon">
        <link href="{{ asset('frontend/assets/img/apple-favicon.png') }}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet"> 

        <!-- Vendor CSS File -->
        <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/vendor/slick/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/vendor/slick/slick-theme.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/vendor/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

        <!-- Main Stylesheet File -->
        <link href="{{ asset('frontend/assets/css/hover-style.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
    </head>

    <body>
        <!-- Header Section Start -->
        <header id="header">
            <a href="index.html" class="logo"><img src="{{ asset('frontend/assets/img/logo.jpg') }}" alt="logo"></a>
            <div class="phone"><i class="fa fa-phone"></i>+1 234 567 8900</div>
            <div class="mobile-menu-btn"><i class="fa fa-bars"></i></div>
            <nav class="main-menu top-menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><a href="about.html">About Us</a></li>
                    <li><a href="room.html">Rooms</a></li>
                    <li><a href="amenities.html">Amenities</a></li>
                    <li><a href="booking.html">Booking</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </nav>
        </header>
        <!-- Header Section End -->
        
        <!-- About Section Start -->
        <div id="about">
            <div class="container">
                <div class="section-header">
                    <h2>About Royal Hotel</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in mi libero. Quisque convallis, enim at venenatis tincidunt.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-6 img-cols">
                        <div class="img-col">
                            <img class="img-fluid" src="{{ route('frontend/assets/img/about/about-1.jpg') }}">
                        </div>
                    </div>
                    <div class="col-md-6 content-cols">
                        <div class="content-col">
                            <h3>Lorem ipsum dolor</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla justo justo. Proin sodales bibendum pharetra. Aliquam blandit sapien eu nisl dictum pretium.
                            </p>
                            <p>
                                Nam fringilla justo justo. Proin sodales bibendum pharetra. Aliquam blandit sapien eu nisl dictum pretium.
                            </p>
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                
                <hr>
                
                <div class="row">
                    <div class="col-md-6 img-cols d-block d-md-none">
                        <div class="img-col">
                            <img class="img-fluid" src="{{ asset('frontend/assets/img/about/about-2.jpg') }}">
                        </div>
                    </div>
                    <div class="col-md-6 content-cols">
                        <div class="content-col">
                            <h3>Lorem ipsum dolor</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla justo justo. Proin sodales bibendum pharetra. Aliquam blandit sapien eu nisl dictum pretium.
                            </p>
                            <p>
                                Nam fringilla justo justo. Proin sodales bibendum pharetra. Aliquam blandit sapien eu nisl dictum pretium.
                            </p>
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 img-cols d-none d-md-block">
                        <div class="img-col">
                            <img class="img-fluid" src="{{ asset('frontend/assets/img/about/about-2.jpg') }}">
                        </div>
                    </div>
                </div>
                
                <hr>
                
                <div class="row">
                    <div class="col-md-6 img-cols">
                        <div class="img-col">
                            <img class="img-fluid" src="{{ asset('frontend/assets/img/about/about-3.jpg') }}">
                        </div>
                    </div>
                    <div class="col-md-6 content-cols">
                        <div class="content-col">
                            <h3>Lorem ipsum dolor</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla justo justo. Proin sodales bibendum pharetra. Aliquam blandit sapien eu nisl dictum pretium.
                            </p>
                            <p>
                                Nam fringilla justo justo. Proin sodales bibendum pharetra. Aliquam blandit sapien eu nisl dictum pretium.
                            </p>
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->
        
        <!-- Footer Section Start -->
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="social">
                            <a href="https://www.freewebsitecode.com/"><li class="fa fa-instagram"></li></a>
                            <a href="https://www.youtube.com/channel/UC9HlQRmKgG3jeVD_fBxj1Pw/videos"><li class="fa fa-youtube"></li></a>
                            <a href="https://www.freewebsitecode.com/"><li class="fa fa-twitter"></li></a>
                            <a href="https://www.facebook.com/freewebsitecode/"><li class="fa fa-facebook-f"></li></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <p>Copyright &#169; 2045 <a href="https://www.freewebsitecode.com/">Your Site Name</a> All Rights Reserved.</p>
						
						<p>Designed By <a href="https://www.freewebsitecode.com/">Free Website Code</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Section End -->
        
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- Vendor JavaScript File -->
        <script src="{{ asset('frontend/assets/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/jquery/jquery-migrate.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/easing/easing.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/stickyjs/sticky.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/superfish/hoverIntent.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/superfish/superfish.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/wow/wow.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/slick/slick.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/tempusdominus/js/moment.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/tempusdominus/js/moment-timezone.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
        
        <!-- Booking Javascript File -->
        <script src="{{ asset('frontend/assets/js/booking.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jqBootstrapValidation.min.js') }}"></script>
  
        <!-- Main Javascript File -->
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    </body>
</html>
