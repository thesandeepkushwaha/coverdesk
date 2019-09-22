<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Cover Desk - Protect Yourself From Financial Loss</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/icon.jpg">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
    <style>
        .aboutWhat {
            background-color: #D7DFEF;
            padding: 5%;
            border-radius: 5%;
        }
        .contactBackground {
            background-color: #2E39BF;
            min-height: 90px;
        }
        .map-item {
            width: 100%;
            height: 400px;
            background-color: grey;
        }
    </style>
</head>

<body class="light-version">
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="dream-load"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area fadeInDown" data-wow-delay="0.2s">
        <div class="classy-nav-container light breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar light justify-content-between" id="dreamNav">

                    <!-- Logo -->
                    <a class="nav-brand light" href="#"><img src="img/core-img/icon.jpg" alt="logo"> COVER DESK</a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler demo">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                             <li><a href="index.html#home">Home</a></li>
                                <li><a href="index.html#about">About</a></li>
                                <li><a href="index.html#services">Services</a></li>
                                <li><a href="index.html#insuranceProducts">Insurance Products</a></li>
                                <li><a href="index.html#claimServices">Claim Services</a></li>
                                <li><a href="https://www.coverdesk.in/blog">Blog</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <section>
        <div class="contactBackground">
        </div>
        <!-- ##### Contact Area Start ##### -->
        <div class="faq-timeline-area section-padding-100-85" id="faq">
            <div class="container">
                <div class="section-heading text-center">
                    <!-- Dream Dots -->
                    <h2 class="fadeInUp" data-wow-delay="0.3s"> Contact Us</h2>
                    <p class="fadeInUp" data-wow-delay="0.4s">

                    </p>
                </div>
                <div class="row align-items-center">
                    <!-- Banglore Area -->
                    <div class="col-12 col-md-6 col-lg-6">
                        <!-- Content -->
                        <div class="service_single_content text-left mb-100 fadeInUp" data-wow-delay="0.2s">

                            <h4 class="pt-3">Bangalore</h4>
                            <p>#432, 2nd Floor, CMR Road, HRBR Layout, Kalyan Nagar, Bangalore -560043</p>
                            <p>Contact Number :- 9632911102 /9148921777</p>
                            <br />
                            <div id="mapCanvas1" class="map-item"> </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <!-- Content -->
                        <div class="service_single_content text-left mb-100 fadeInUp" data-wow-delay="0.2s">
                            <h4 class="pt-3">Jaipur</h4>
                            <p>#63 Patel Colony, Sardar Patel Marg C
                                Scheme, Jaipur -302001</p>
                            <p>Contact Number :- 9928077514</p>
                            <br /><br />
                            <div id="mapCanvas2" class="map-item"> </div>

                        </div>
                    </div>

                </div>
            
<br /><br />
        <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="text-center text-primary">Connect With Us!</h1>
                        <?php if (!empty($msg)) {
                        echo "<h4 class='text-center'>$msg</h4>";
                        } ?>
                        <form method="post" id="contact">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                                <div class="form-group">
                                <label for="phone">Phone No</label>
                                <input type="tel" name="phone" id="phone" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" class="form-control" rows="8" cols="20" required></textarea>
                            </div>
                            <button type="submit" value="Send" class="btn btn-primary btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </section>







    <footer>
        <div class="footer-content-area mt-0">
            <div class="container" id="contact_us">
                <div class="row ">
                    <div class="col-12 col-lg-4 col-md-6">
                        <div class="footer-copywrite-info">
                            <!-- Copywrite -->
                            <div class="copywrite_text fadeInUp" data-wow-delay="0.2s">
                                <div>
                                    <a href="#">
                                        <h3 class="text-white">Contact Us</h3>
                                    </a>
                                </div>
                                <h6 class="text-white">Email: info@coverdesk.com</h6>
                                <h5></h5>
                            </div>
                            <!-- Social Icon -->
                            <div class="footer-social-info fadeInUp" data-wow-delay="0.4s">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 col-md-6 ">
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <!-- Content Info -->
                            <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">
                                <h5>Bangalore</h5>
                                <p>#432, 2nd Floor, CMR Road, HRBR Layout, Kalyan Nagar, Bangalore -560043</p>
                                <p>Contact Number :- 9632911102 /9148921777</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 ">
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <!-- Content Info -->
                            <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">
                                <h5>Jaipur</h5>
                                <p>#63 Patel Colony, Sardar Patel Marg C
                                    Scheme, Jaipur -302001</p>
                                <p>Contact Number :- 9928077514</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 col-md-6 ">
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <!-- Content Info -->
                            <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">
                                <h5>Opening Time</h5>
                                <p>Mon-Fri- 9am to 7pm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="main.js"></script>
    <!-- ##### Footer Area End ##### -->

    <!-- ########## All JS ########## -->
    <!-- jQuery js -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Parallax js -->
    <script src="js/dzsparallaxer.js"></script>

    <script src="js/jquery.syotimer.min.js"></script>

    <!-- script js -->
    <script src="js/script.js"></script>

    <script type="text/javascript">
        var map1, map2;
        function drawMap() {

            var mapOptions = {
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                mapTypeControl: true,
                fullscreenControl: false
            }
            mapOptions.center = new google.maps.LatLng(13.0221, 77.63924); // Bangalore
            map1 = new google.maps.Map(document.getElementById("mapCanvas1"), mapOptions);

            mapOptions.center = new google.maps.LatLng(26.9143, 75.7994); // Jaipur
            map2 = new google.maps.Map(document.getElementById("mapCanvas2"), mapOptions);
        }
    </script>
    <script async defer
        src="http://maps.google.com/maps/api/js?key=AIzaSyCvDN-LuS_9_VFkR71Sc56P6y4cwWKvEpU&callback=drawMap"></script>
</body>

</html>