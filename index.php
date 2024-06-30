<?php
session_start();
require_once("Backend/connection.php");
$sql = "SELECT * FROM `populer_items`ORDER BY Id DESC LIMIT 8";
$result=mysqli_query($conn,$sql);
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

    <!-- Stylesheet -->
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
            <?php require_once ("header.php");
            ?>

            <div class="container-xxl py-5 bg-dark hero-header mb-5 bg-white">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-lg-start ">
                            <h1 class="display-3 text-white animated slideInLeft">A Premium<br>And Authentic<br>Steakhouse</h1>
                        </br>
                        </br>
                            <a href="reservation.html" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden container animated slideInRight">
                            <img class="img-fluid rotating-image " src="img/hero.png" alt="">
                            <img class="img-fluid rotating-image1 image2 " src="img/bbb1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class="container-xxl py-5 bg-white">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6-copy">
                        <div class=" col-lg3 col-sm6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="serviceitem rounded pt-3 ">
                                <div class="p-4 text-primary3">
                                   <div class="g"> <h5 class=" text-cente text-primary ff-secondary section-title">Two simple reasons. One simple Answer</h5></div>
                                    <h1 class=" text-cente">Why MOON House Restaurant?</h1>
                                    <p class="text-cente">Designed to be the Culinary epicenter, We try to uphold the traditions of the Local </br>
                                        Household while bringing out the avours of Sri Lanka with a bounty of fresh seasonal </br>
                                        ingredients. We take extra care to deliver fresh farm produce to a local classy table cuisine </br>
                                        with an emphasis on seasonal & locally sourced ingredients and with the freshest Seafood.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6-copy2 wow fadeInUp p-44" data-wow-delay="0.2s">
                        <img src="img/thachchiya.png" alt="" style="width: 445px">
                        </div>
                        
                    </div>
                    <a href="about.html" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Learn More</a>
                </div>
            </div>
        </div>
        <!-- Service End -->


       
        <!-- Menu Start -->
        <div class="container-xxl py-5 bg-white">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal ">Food Menu</h5>
                    <h1 class="mb-52 text-primary3">Most Popular Items</h1>
                </br>
            </br>
        </br>
                </div>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-6-copy-new ">
                                    <div class="d-flex align-items-center wow fadeInUp text-primary3" data-wow-delay="0.1s">
                                        <div class="w-100 d-flex flex-column text-start ps-4" >
                                            <?php while($row=mysqli_fetch_assoc($result)){?>
                                            <h5 class="d-flex justify-content-between border-bottom pb-2"> 
                                                <span class="space-right"><?php echo $row['item_name'];?></span>
                                                <span class="text-primary"><?php echo $row['price'];?>  </span>
                                            </h5>
                                        </br>
                                        <?php }?>
                                            <a href="menu.html" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6-copy2-new p-44">
                                    <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="0.2s">
                                        <img src="img/achchiya.png" alt="" style="width: 550px">
                                        
                                    </div>
                                    
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Menu End -->


        <!-- Book a table Start -->
        <div class="container-xxl py-5 px-0 wow bg-white" data-wow-delay="0.1s">

                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="container-xxl py-5">
                            <div class="container">
                                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                    <h5 class="section-title ff-secondary text-center text-primary fw-normal color: #FEA116">Reservation</h5>
                                    <h1 class="mb-52 text-primary3">BOOK A TABLE</h1>
                                </br>
                            <br>
                        <form name="reg1" action="Backend/res.php" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
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
                                        <input type="number" class="form-control" id="numbert" name="numbert" style="width: 330px" placeholder="Number of tables" min="1" max="20">
                                    </div>
                                    </br>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Special Request" id="message" name="message" style="height: 100px"></textarea>
                                    </div>
                                </br>
                                </div>

                                <div class="container3">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Book a tabl End -->


        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3 bg-white">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal ">Team Members</h5>
                    <h1 class="mb-5 text-white" >Our Master Chefs</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-1.jpg" alt="">
                            </div>
                            <h5 class="mb-0 text-white">Chathurika Anuradha</h5>
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


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp bg-white" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                    <h1 class="mb-5">Our Clients Say!!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Excellent ambiance and delicious food, I highly recommend!</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3 clientt">
                                <h5 class="mb-1">Sunil Perera</h5>
                                <small>Marketing Manager</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Creative menu and friendly staff. My new favorite spot in town!</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3 clientt">
                                <h5 class="mb-1">Pasan Awishka</h5>
                                <small>Graphic Designer</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Impeccable service and amazing food. A true gem in the city!</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3 clientt">
                                <h5 class="mb-1">Randhunu Wirasinhe</h5>
                                <small> Lawyer</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Wonderful dining experience with beautifully presented dishes. I'll be back!</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3 clientt">
                                <h5 class="mb-1">Supun Pranandhu</h5>
                                <small>Software Engineer</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        

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