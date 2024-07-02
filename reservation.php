<?php
session_start();
if(!isset($_SESSION['uname'])){
    header('location:login.php');
}
if(isset($_SESSION['booked'])){
    $error = $_SESSION['booked'];
    unset($_SESSION['booked']);
}



$currentPage1=basename($_SERVER['PHP_SELF']);

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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Reservation</h1>
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
                                    <div class="col-6P text-start">
                                        <img class="img-fluid rounded w-100R wow zoomIn" data-wow-delay="0.1s" src="img/large.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 pp wow fadeInUp" data-wow-delay="0.5s">
                                <h5 class="section-title ff-secondary text-start text-primary fw-normal">Its time to enjo</h5>
                                <h1 class="mb-4 text-primary3">Authentic MOON House Restaurant </h1>
                                <p class="mb-4">We take reservations for lunch and dinner. To make a 
                                    reservation, please call us between 10am-6pm, Monday to 
                                    Friday.</p>
                                <p class="mb-4"> We do not book the bar area - we leave this for walk-in guests 
                                    to ensure that we always offer some tables for those who have 
                                    not booked.</p>
                                <p class="mb-4">011 426 897</p>
                                <div class="rowabo g-4 mb-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About End -->

     <!-- Book a table Start -->
         <div class="container-xxl py-5 px-0 wow bg-white" data-wow-delay="0.1s" id="bookingforcus">

            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                            <h5 class="section-title ff-secondary text-center text-primary fw-normal color: #FEA116">Reservation</h5>
                            <h1 class="mb-52 text-primary3">BOOK A TABLE</h1>
                        </br></br>
                <div id="bookingerr">Booking error</div>
                <form name="reg1" action="Backend/res.php" method="POST" id="resBooking" onsubmit="return nullcheck()">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating main">
                                <input type="text"  class="form-control" id="name" name="name" placeholder="Your Name">
                            </div>
                        </br>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                            </div>
                        </br>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating date" id="date3" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" id="datetime" name="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                            </div>
                        </br>
                        </div>

                        <div class="gg">
                            <div class="form-floating">
                                <input type="number" class="form-control" id="number" name="number" style="width: 330px" placeholder="Number of peoples" min="2">
                            </div>
                            </br>
                        </div>

                        <div class="gg">
                            <div class="form-floating">
                                <input type="number" class="form-control" id="number" name="numbert" style="width: 330px" placeholder="Number of tables" min="1" max="20">
                            </div>
                            </br>
                        </div>
                        
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Special Request" id="message" name="massage" style="height: 100px"></textarea>
                            </div>
                        </br>
                        </div>

                        <div class="container3">
                            <button class="btn btn-primary py-3 w-100 " type="submit">
                                <span class=" button-content">Book Now</span>
                              </button>
                        </div>
                    </div>
                    <input type="text" name="sendpName" id="sendpName" value="<?php echo $currentPage1;?>">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Book a tabl End -->


                 <div class=" text-center gdg wow fadeInUp" data-wow-delay="0.1s">
                    <p>
                      <span class="display-55 text-white ">PRIVATE </span> 
                      <span class="display-55 text-primary ">DINING </span>
                      <span class="display-55 text-white ">& </span>
                      <span class="display-55 text-primary ">EVENTS</span></p>
                      <h3 class=" ">we are here to make your special day a truly <br> memorable one</h3>
                    </div>


        

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

    <script>



        tableExist();

        function tableExist(){
            let bookingerr = document.getElementById("bookingerr");
            if("<?php echo $error;?>" !==""){
                bookingerr.style.display="block";
                bookingerr.innerHTML = "<?php echo $error;?>";
            }
        }
    </script>
            <script src="js/main.js"></script>
</body>

</html>