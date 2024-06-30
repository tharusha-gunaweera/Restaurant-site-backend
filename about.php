<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MOON - House Restaurant</title>
    <meta content="width=device-width, initial-scale=2.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/new boost.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <div class="container-xxl position-relative p-0">
                <?php require_once ("header.php");
                ?>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
                    <nav aria-label="breadcrumb">
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- About Start -->
        <div class="container-xxl py-55 py-555">
            <div class="container">
                <div class="rowabo g-5 align-items-center ">
                    <div class="col-lg-6">
                        <div class="rowabo g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/large.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/large (1).jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end imgg">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                            </div>
                            <div class="col-6 text-end imgg">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pp">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                        <h1 class="mb-4 text-primary3">Welcome to MOON House Restaurant</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <div class="rowabo g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-centerabo  px-3 imgg">
                                    <div class="border-start border-5 border-primary">
                                      <h1 class="flex-shrink-0 display-5 text-primary mb-0 imgg1" data-toggle="counter-up">15</h1>
                                    </div>
                                    <div class="ps-4 text-primary3">
                                        <p class="mb-0">Years of</p>
                                        <h6 class="text-uppercase mb-0">Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-centerabo px-3 imgg">
                                    <div class="border-start border-5 border-primary">
                                      <h1 class="flex-shrink-0 display-5 text-primary mb-0 imgg1" data-toggle="counter-up">50</h1>
                                    </div>
                                    <div class="ps-4 text-primary3">
                                        <p class="mb-0">Popular</p>
                                        <h6 class="text-uppercase mb-0">Master Chefs</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


       <!-- Our Values Start -->
        <div class="container-xxl py-55 py-555 pb-3 bg-white">
        <div class="container-xxl py-5 wow fadeInUp bg-white" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Some of</h5>
                    <h1 class="mb-5 text-primary3">Our Values</h1>
                </div>
         <div class="cards cm cardpp1 wow fadeInUp bg-white"data-wow-delay="0.2s">
            <div class="card red image-container cardpp1 ">
                    <img src="img\Authentically1.png" alt="Default Image" class="default-image">
                    <img src="img\Authentically1wh.png"  alt="Hover Image" class="hover-image">
                <p class="tip cardpp">Authentically Sri Lankan</p>
            </div>

            <div class="card red image-container">
                <img src="img\menu.png" alt="Default Image" class="default-image">
                <img src="img\menuwh.png"  alt="Hover Image" class="hover-image">
                <p class="tip cardpp">MENU VARIETY</p>
            </div>

            <div class="card red image-container">
                <img src="img\Fresh.png" alt="Default Image" class="default-image">
                <img src="img\Freshwh.png"  alt="Hover Image" class="hover-image">
                <p class="tip cardpp">100% Fresh Ingredients</p>
            </div>

            <div class="card red image-container">
                <img src="img\abia.png" alt="Default Image" class="default-image">
                <img src="img\abiawh.png"  alt="Hover Image" class="hover-image">
                <p class="tip cardpp">Ambiance</p>
            </div>

            </div>
           </div>
        </div>
        <!-- Our Values End -->

              <!-- Service Start -->
              <div class="container-xxl py-5 bg-white">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6-copy">
                            <div class=" col-lg3 col-sm6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="serviceitem rounded pt-3 ">
                                    <div class="p-4 text-primary3">
                                       <div class="g"> <h5 class="  text-primary ff-secondary section-title">Two simple reasons. One simple Answer</h5></div>
                                        <h1 class=" ">Why MOON House Restaurant?</h1>
                                        <p class="">Designed to be the Culinary epicenter, We try to uphold the traditions of the Local Household 
                                            while bringing out the flavours of Sri Lanka with a bounty of fresh seasonal ingredients. We take 
                                            extra care to deliver fresh farm produce to a local classy table cuisine with an emphasis on 
                                            seasonal & locally sourced ingredients and with the freshest Seafood. May it be the ery hot 
                                            curries or the soothing buffalo curd, We enjoy bringing the most sought after dishes with a little 
                                            twist of our own. Just as we take pride in supporting local farm communities in Sri Lanka, We 
                                            take pride & joy in bringing you the homely ambiance along with your food. Our interior is 
                                            designed to bring you the olden day Walawwa Experience while you’re dining with us. The 
                                            Colonial space that we have opened for you has its modern & vintage touch, inviting you to a 
                                            feel at home experience while you dine . Our mural wall has harmoniously incorporated the 
                                            colonial architecture style to show you a cultural infusion. We want you to sit down and enjoy 
                                            your meal just like the way you enjoy your homemade dishes! We have embarked on this journey 
                                            and e are glad that you have taken the time off of your schedule to know our story to experience 
                                            our experience. We couldn’t have done it without you</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service End -->
    


        <!-- Team Start -->
        <div class="container-xxl py-55 py-555 pb-3 bg-white">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal ">Team Members</h5>
                    <h1 class="mb-5 text-primary3" >Our Master Chefs</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-1.jpg" alt="">
                            </div>
                            <h5 class="mb-0 text-primary3">Chathurika Anuradha</h5>
                            <small>Executive Chef</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                            </div>
                            <h5 class="mb-0 text-primary3">Saman Wijeratne</h5>
                            <small>Sous Chef</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-3.jpg" alt="">
                            </div>
                            <h5 class="mb-0 text-primary3">Kapila Jayanetti</h5>
                            <small>Pastry Chef</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-4.jpg" alt="">
                            </div>
                            <h5 class="mb-0 text-primary3">Jatin Sethi</h5>
                            <small>Chef de Partie (Hot Kitchen)</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="rowf g-5">
                    <div class="col-lg-3 col-md-6">
                        <h3 class="section-title">Quick Links</h3>
                        <a class="btn btn-link" href="index.html">Home</a>
                        <a class="btn btn-link" href="about.html">About Us</a>
                        <a class="btn btn-link" href="menu.html">Menu</a>
                        <a class="btn btn-link" href="contact.html">Contact</a>
                        <a class="btn btn-link" href="reservation.html">Reservation</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="section-title">Contact</h3>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3 icon"></i>123 Street, Kaduwela, SL</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3 icon"></i>+94 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3 icon"></i> moonhouserestaurent@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="section-title">Opening</h3>
                        <h5 class="text-light fw-normal">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="section-title">Sing Up</h3>
                        <p>Join us to our newsletter to receive upcoming promotions and events at Moon House.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="index.html">MOON HOUSE RESTAURENT</a>, All Right Reserved. 
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="index.html">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!--Javascript -->
    <script src="js/main.js"></script>
</body>

</html>