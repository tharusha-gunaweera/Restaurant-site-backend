<?php
session_start();
if(!isset($_SESSION['uname'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Restoran - Bootstrap Restaurant Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
                    <nav aria-label="breadcrumb">
                    </nav>
                </div>
            </div>
        </div>

        <!-- Navbar & Hero End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center g1 wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Contact Us</h5>
                    <h1 class="mb-5 text-white">Contact For Any Query</h1>
                </div>
                <div class="row g-4 ">
                    <div class="col-12 g1 ">
                        <div class="roww gy-4 ">
                            <div class="text-center g1 wow fadeInUp imgg11" data-wow-delay="0.2s">
                                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Phone No</h5>
                                <p class="mb-2 text-white"><i class="fa fa-phone-alt me-3 icon"></i>+94 345 67890</p>
                            </div>
                            <div class="text-center g1 wow fadeInUp imgg11" data-wow-delay="0.4s">
                                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Email</h5>
                                <p class="mb-2 text-white"><i class="fa fa-envelope me-3 icon"></i> moonhouserestaurent@gmail.com</p>
                            </div>
                            <div class="text-center g1 wow fadeInUp imgg11" data-wow-delay="0.6s">
                                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Address</h5>
                                <p class="mb-2 text-white"><i class="fa fa-map-marker-alt me-3 icon"></i>123 Street, Kaduwela, SL</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb= @6.9060401,79.9474248,21z?entry=ttu"
                            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <form action="Backend/contactHandler.php" method="post">
                                <div class="rowll g-3">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                        </div> <br>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                        </div> <br>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="" class="form-control" id="number" name="number" placeholder="Phone No">
                                        </div> <br>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                        </div> <br>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 150px"></textarea>
                                        </div> <br>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                    </div> <br>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="rowf g-5">
                    <div class="col-lg-3 col-md-6">
                        <h3 class="section-title">Quick Links</h3>
                        <a class="btn btn-link" href="index.php">Home</a>
                        <a class="btn btn-link" href="about.php">About Us</a>
                        <a class="btn btn-link" href="menu.php">Menu</a>
                        <a class="btn btn-link" href="contact.php">Contact</a>
                        <a class="btn btn-link" href="reservation.php">Reservation</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="section-title">Contact</h3>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3 icon"></i>123 Street, Kaduwela, SL</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3 icon"></i>+94 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3 icon"></i> moonhouserestaurent@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a href="https://x.com/i/flow/login" class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a href="https://web.facebook.com/?_rdc=1&_rdr" class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.youtube.com/" class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a href="https://www.linkedin.com/home?originalSubdomain=lk" class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
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
                        <a href="login.php" id="loginbtn"> <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button></a>
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

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>