<?php
session_start();
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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Savor Our Dishes</h1>
                    <nav aria-label="breadcrumb">
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Menu Start -->
<div class="container-xxl py-5 bg-white">
    <div class="container">

                <!-- Drinks -->

                <div class="text-center wow fadeInUp" data-wow-delay="0.1s" >
                    <h1 class="mb-52 section-title text-primary3 ">Drinks</h1>
                      </br></br></br>
                </div>

                    <div class="tab-content" style="margin: 0 auto; width: 75%;">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4 pb-8">
                                <div class="col-lg-6-copy-new">
                                    <div class="d-flex align-items-center wow fadeInUp text-primary3 " data-wow-delay="0.1s" >
                                        <div class="w-100 d-flex flex-column text-start ps-4 " >

                                                <h1 class="  text-center py-xl-5 text-primary">Fresh Juice</h1>

                                            <h5 class="d-flex justify-content-between border-bottom pb-2"> 
                                                <span class="space-right">Orange Juice</span>
                                                <span class="text-primary">1500</span>
                                            </h5>
                                        </br>
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Passion Fruit Juice</span>
                                                <span class="text-primary">890</span>
                                            </h5>
                                        </br>
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Mixed Fruit Juice</span>
                                                <span class="text-primary">825</span>
                                            </h5>
                                        </br>
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Mango Juice</span>
                                                <span class="text-primary">875</span>
                                            </h5>
                                        </br>
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Pineapple Juice</span>
                                                <span class="text-primary">875</span>
                                            </h5>
                                        </br>
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Melon Juice</span>
                                                <span class="text-primary">825</span>
                                            </h5>
                                        </br>
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Lime Soda</span>
                                                <span class="text-primary">875</span>
                                            </h5>
                                        </br>
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                                <span>Lime and Mint</span>
                                                <span class="text-primary">875</span>
                                            </h5>
                                        </br>
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                                <span>Lime Juice</span>
                                                <span class="text-primary">750</span>
                                            </h5>
                                        </br>
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                               <span>King Coconut Lime</span>
                                               <span class="text-primary">775</span>
                                            </h5>
                                        </br>
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                              <span>Passion Mint</span>
                                              <span class="text-primary">795</span>
                                            </h5>
                                        </br>
                                        
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6-copy2-new client11 cardpp22">
                                    <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="0.2s">
                                        <img src="img/pngwing.com (39).png" alt="" style="width: 350px">
                                        
                                    </div>
                                </div>
 
                                <div class="col-lg-6-copy-new client1 ">
                                    <div class="d-flex align-items-center wow fadeInUp text-primary3 " data-wow-delay="0.1s">
                                        <div class="w-100 d-flex flex-column text-start ps-4 " >
                                                <h1 class="  text-center py-xl-5 text-primary">Soft Drinks</h1>
                                                
                                            <h5 class="d-flex justify-content-between border-bottom pb-2"> 
                                                <span class="space-right">Coca Cola</span>
                                                <span class="text-primary">550</span>
                                            </h5>
                                        </br>
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Sprite</span>
                                                <span class="text-primary">550</span>
                                            </h5>
                                        </br>
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Mixed Fruit Juice</span>
                                                <span class="text-primary">825</span>
                                            </h5>
                                        </br>
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Portello</span>
                                                <span class="text-primary">550</span>
                                            </h5>
                                        </br>
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Coke Zeroe</span>
                                                <span class="text-primary">625</span>
                                            </h5>
                                        </br>
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Melon Juice</span>
                                                <span class="text-primary">825</span>
                                            </h5>
                                        </br>
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Sprite Zero</span>
                                                <span class="text-primary">625</span>
                                            </h5>
                                        </br>
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                                <span>Soda</span>
                                                <span class="text-primary">550</span>
                                            </h5>
                                        </br>
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                                <span>Lime Juice</span>
                                                <span class="text-primary">750</span>
                                            </h5>
                                        </br>
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                               <span>Fanta</span>
                                               <span class="text-primary">550</span>
                                            </h5>
                                        </br>
                                        
                                        </div>
                                    </div>
                                </div>


                        </div>
                    </div>
                </div>

            <!-- Soup -->

                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4 pb-88" >
                            <div class="col-lg-6-copy-new">
                                <div class="d-flex align-items-center wow fadeInUp text-primary3 " data-wow-delay="0.1s" >
                                    <div class="w-100 d-flex flex-column text-start ps-4 " >

                                        <h1 class="text-center py-xl-5 text-primary">Soup</h1>

                                        <h5 class="justify-content-between pb-2"> 
                                            <span style="margin-right: 265px">Vegetable Soup</span>
                                            <span class="text-primary">850</span> 
                                        </h5>
                                         <p class=" border-bottom pdd"> ( Farm Fresh Vegetable soup with a pinch of salt for your liking. )</p>
                                    </br>

                                        <h5 class="justify-content-between pb-2"> 
                                          <span style="margin-right: 165px">Sweet Corn Chicken Soup</span>
                                          <span class="text-primary">1050</span> 
                                        </h5>
                                          <p class=" border-bottom pdd"> ( Sweet corn kernels in a flavourful chicken soup with egg drop. )</p>
                                    </br>

                                        <h5 class="justify-content-between pb-2"> 
                                            <span style="margin-right: 225px">Roasted Fish Soup</span>
                                            <span class="text-primary">1050</span> 
                                        </h5>
                                         <p class=" border-bottom pdd"> ( Roasted fish soup along with roasted cumin seeds and red onions. )</p>
                                    </br>

                                        <h5 class="justify-content-between pb-2"> 
                                          <span style="margin-right: 220px">Mullaguthanni Soup</span>
                                          <span class="text-primary">850</span> 
                                        </h5>
                                          <p class=" border-bottom pdd"> ( Coconut milk based soup made with a combination of <br> accompaniments to create an authentic Sri Lankan curry flavor. )</p>
                                    </br>
                                    
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6-copy2-new client1 cardpp22">
                                <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="0.2s">
                                    <img src="img/pngwing.com (42).png" alt="" style="width: 450px">
                                    
                                </div>
                            </div>

                            <div class="col-lg-6-copy-new client1 ">
                                <div class="d-flex align-items-center wow fadeInUp text-primary3 " data-wow-delay="0.1s">
                                    <div class="w-100 d-flex flex-column text-start ps-4 " >
                                            <h1 class="  text-center py-xl-5 text-primary">Sambola</h1>
                                            
                                            <h5 class="justify-content-between pb-2"> 
                                                <span style="margin-right: 195px">Gotukola Sambolaya</span>
                                                <span class="text-primary">835</span> 
                                            </h5>
                                             <p class=" border-bottom pdd"> ( Chopped Gotu Kola, Coconut, Onion, Tomato, Green Chilli, Lime. )</p>
                                        </br>
    
                                            <h5 class="justify-content-between pb-2"> 
                                              <span style="margin-right: 200px">Karawila Sambolaya</span>
                                              <span class="text-primary">775</span> 
                                            </h5>
                                              <p class=" border-bottom pdd"> ( Bitter Gourd, Onion, Tomato, Green Chilli, Lime, Capsicum. )</p>
                                        </br>
    
                                            <h5 class="justify-content-between pb-2"> 
                                                <span style="margin-right: 225px">Carrot Sambolaya</span>
                                                <span class="text-primary">775</span> 
                                            </h5>
                                             <p class=" border-bottom pdd"> ( Grated Carrot, Coconut, Onion, Green Chilli, Lime. )</p>
                                        </br>
    
                                            <h5 class="justify-content-between pb-2"> 
                                              <span style="margin-right: 275px">Mixed Salad</span>
                                              <span class="text-primary">775</span> 
                                            </h5>
                                              <p class=" border-bottom pdd"> ( Mixture of Cucumber, Tomato, Carrot, Onion, Green Chilli, Lime. )</p>
                                        </br>

                                        <h5 class="justify-content-between pb-2"> 
                                            <span style="margin-right: 260px">Seeni Sambol</span>
                                            <span class="text-primary">690</span> 
                                        </h5>
                                         <p class=" border-bottom pdd"> ( Caramelized Onion, Chilli Flakes, Tamarind Paste. )</p>
                                    </br>

                                        <h5 class="justify-content-between pb-2"> 
                                          <span style="margin-right: 280px">Pol Sambol</span>
                                          <span class="text-primary">625</span> 
                                        </h5>
                                          <p class=" border-bottom pdd"> ( Grated Coconut, Dry Chilli, Onion, Tomato, Green Chilli, Lime. )</p>
                                    </br>
                                    
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <!-- Chicken -->


                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4 pb-88" >


                            
                            <div class="col-lg-6-copy-new">
                                <div class="d-flex align-items-center wow fadeInUp text-primary3 " data-wow-delay="0.1s" >
                                    <div class="w-100 d-flex flex-column text-start ps-4 " >

                                        <h1 class="text-center py-xl-5 text-primary">Chicken</h1>

                                        <h5 class="justify-content-between pb-2"> 
                                            <span style="margin-right: 65px">Kukulmas Yapanaya Kramayata</span>
                                            <span class="text-primary">1650</span> 
                                        </h5>
                                         <p class=" border-bottom pdd"> ( Chicken marinated and slow cooked using a recipe unique to <br> the Northern province of Sri Lanka. )</p>
                                    </br>

                                        <h5 class="justify-content-between pb-2"> 
                                          <span style="margin-right: 120px">Kukulmas Kaluwata Uyala</span>
                                          <span class="text-primary">1650</span> 
                                        </h5>
                                          <p class=" border-bottom pdd"> ( Corn fava bean mustard tigernut jícama green bean celtuce <br> collard greens Pea horseradish azuki. )</p>
                                    </br>

                                        <h5 class="justify-content-between pb-2"> 
                                            <span style="margin-right: 155px">Kukulmas Themparad</span>
                                            <span class="text-primary">1850</span> 
                                        </h5>
                                         <p class=" border-bottom pdd"> ( Marinated Fried Chicken sautéed with onions and capsicum. )</p>
                                    </br>

                                        <h5 class="justify-content-between pb-2"> 
                                          <span style="margin-right: 110px">Meat Balls Kirata / Devilled</span>
                                          <span class="text-primary">1550</span> 
                                        </h5>
                                          <p class=" border-bottom pdd"> ( A favorite in the local household. Chicken meatballs cooked<br> in coconut based brown curry. )</p>
                                    </br>

                                    <h5 class="justify-content-between pb-2"> 
                                        <span style="margin-right: 185px">Hot Butter Chicken</span>
                                        <span class="text-primary">2150</span> 
                                    </h5>
                                     <p class=" border-bottom pdd"> ( Avocado quandong fennel gumbo black-eyed pea bean corn<br> fava bean mustard tigernut. )</p>
                                </br>
                                    
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6-copy2-new  cardpp22">
                                <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="0.2s">
                                    <img src="img/pngwing.com (44).png" alt="" style="width: 500px">
                                    
                                </div>
                            </div>

                            <div class="col-lg-6-copy-new client1 ">
                                <div class="d-flex align-items-center wow fadeInUp text-primary3 " data-wow-delay="0.1s">
                                    <div class="w-100 d-flex flex-column text-start ps-4 " >
                                            <h1 class="  text-center py-xl-5 text-primary">Mutton</h1>
                                            
                                            <h5 class="justify-content-between pb-2"> 
                                                <span style="margin-right: 245px">Elu Mas Masala</span>
                                                <span class="text-primary">2990</span> 
                                            </h5>
                                             <p class=" border-bottom pdd"> ( Mutton cooked in Masala herbs (Indian Spices) with<br> Coriander and lime. )</p>
                                        </br>
    
                                            <h5 class="justify-content-between pb-2"> 
                                              <span style="margin-right: 130px">Elu Mas Yapanaya kramayata</span>
                                              <span class="text-primary">2990</span> 
                                            </h5>
                                              <p class=" border-bottom pdd"> ( Mutton marinated and slow cooked using a recipe unique to<br> the northern Province. )</p>
                                        </br>
    
                                            <h5 class="justify-content-between pb-2"> 
                                                <span style="margin-right: 270px">Elu Mas Stew</span>
                                                <span class="text-primary">3250</span> 
                                            </h5>
                                             <p class=" border-bottom pdd"> ( Mutton cooked in Mustard flavoured sauce with a hint of Ceylon <br> Spices & Farm Fresh Vegetables. )</p>
                                        </br>
    
                                            <h5 class="justify-content-between pb-2"> 
                                              <span style="margin-right: 145px">Elu Mas Devilled (Boneless)</span>
                                              <span class="text-primary">3250</span> 
                                            </h5>
                                              <p class=" border-bottom pdd"> ( Boneless Mutton Sauted in Chefs special micture of Sauces. )</p>
                                        </br>

                                        <h5 class="justify-content-between pb-2"> 
                                            <span style="margin-right: 100px">Elu Mas Themparadu (Boneless)</span>
                                            <span class="text-primary">2990</span> 
                                        </h5>
                                         <p class=" border-bottom pdd"> ( Marinated Mutton Sauteed to perfection with onions & capsicum. )</p>
                                    </br>
                                    
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>


            <!-- Mati Walande -->
             </br></br></br></br></br></br>
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s" >
                <h1 class="mb-52 section-title text-primary3 ">The Mati Walande Dry Curry</h1>
                <h5 class="text-center  text-primary">Served Tangy or Spicy on a Banana Leaf</h5> <br><br><br>
            </div>

            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4 " >
                        <div class="col-lg-6-copy-new">
                            <div class="d-flex align-items-center wow fadeInUp text-primary3 " data-wow-delay="0.1s" >
                                <div class="w-100 d-flex flex-column text-start ps-4 " >

                                    <h5 class="justify-content-between pb-2 pb-8 "> 
                                        <span style="margin-right: 400px">Crab Dry Curry Bowl</span>
                                        <span class="text-primary">Full (4 Person) 7850 | Half (2 Person) 4200</span> 
                                    </h5>
                                     <p class=" border-bottom pdd"> ( Our Crabs are known to be the best in the world. Don't miss out on this spicy dry crab curry served with Rice or Roast Paan along with Onion Sambol. )</p>
                                </br>

                                    <h5 class="justify-content-between pb-2"> 
                                      <span style="margin-right: 390px">Prawn Dry Curry Bowl</span>
                                      <span class="text-primary">Full (4 Person) 7850 | Half (2 Person) 4200</span> 
                                    </h5>
                                      <p class=" border-bottom pdd"> ( Do you know what you should not be missing out on? Culture Colombo's Prawn Dry Curry Bowl. Our Chef's culinary skills are excellent when it comes to <br>
                                         creative dishes. This Prawn delicacy is accompanied with your choice of carbs (Rice/ Roast Paan) along with Onion Sambol. )</p>
                                </br>

                                    <h5 class="justify-content-between pb-2"> 
                                        <span style="margin-right: 320px">Roast Chicken Dry Curry Bowl</span>
                                        <span class="text-primary">Full (4 Person) 7850 | Half (2 Person) 4200</span> 
                                    </h5>
                                     <p class=" border-bottom pdd"> ( Includes oven Roasted Chicken accompanied by your choice of carbs (Rice/Roast Paan) along with Onion Sambol. )</p>
                                </br>

                                    <h5 class="justify-content-between pb-2"> 
                                      <span style="margin-right: 160px">Mixed Seafood Dry Curry Bowl (W/Roast Bread)</span>
                                      <span class="text-primary">Full (4 Person) 8750 | Half (2 Person) 4550</span> 
                                    </h5>
                                      <p class=" border-bottom pdd"> ( Mixed Seafood ranging from Fish, Cuttlefish, Crab to Prawns arrive in a "Mati Walada" which is a must have dish in the Sri Lankan Household. This <br>
                                         Mixed Seafood Dry Curry Bowl is accompanied by your choice of carbs ( Rice/ Roast Paan) along with Onion Sambol. )</p>
                                </br>
                                
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6-copy2-new  cardpp222">
                            <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="0.2s">
                                <img src="img/pngwing.com (444).png" alt="" style="width: 450px">
                                
                            </div>
                        </div>
                     </div>
                </div>
             </div>      
             
             
             <!-- KOTTU -->

                    </br></br></br></br></br></br>
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s" >
                    <h1 class="mb-52 section-title text-primary3 ">KOTTU</h1>
                      </br></br> </br>
                </div>

                    <div class="tab-content" style="margin: 0 auto; width: 75%;">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4 pb-8">

                                <div class="col-lg-6-copy2-new client111">
                                    <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="0.2s">
                                        <img src="img/kottu.png" alt="" style="width: 680px">
                                    </div>
                                </div>
 
                                <div class="col-lg-6-copy-new client1 ">
                                    <div class="d-flex align-items-center wow fadeInUp text-primary3 " data-wow-delay="0.1s">
                                        <div class="w-100 d-flex flex-column text-start ps-4 " >
                                                
                                            <h5 class="d-flex justify-content-between border-bottom pb-2"> 
                                                <span style="margin-right: 120px">Vegetable Kottu</span>
                                                <span class="text-primary">1400</span>
                                            </h5>
                                        </br>

                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Fish Kottu</span>
                                                <span class="text-primary">1850</span>
                                            </h5>
                                        </br>

                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Kottu</span>
                                                <span class="text-primary">1850</span>
                                            </h5>
                                        </br>

                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Mutton Kottu</span>
                                                <span class="text-primary">2750</span>
                                            </h5>
                                        </br>

                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Cheesy Veg Kottu</span>
                                                <span class="text-primary">1700</span>
                                            </h5>
                                        </br>

                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Cheesy Chicken Kottu</span>
                                                <span class="text-primary">2250</span>
                                            </h5>
                                        </br>

                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Cheesy Fish Kottu</span>
                                                <span class="text-primary">2350</span>
                                            </h5>
                                        </br>

                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                                <span>Cheesy Mutton Kottu</span>
                                                <span class="text-primary">2750</span>
                                            </h5>
                                        </br>

                                            <h5 class="d-flex justify-content-between ">
                                                <span>Culture Special Chicken Kottu</span>
                                                <span class="text-primary">2750</span>
                                            </h5>
                                            <p class=" border-bottom pdd"> ( Kottu Rotti softend and Soaked in a thick curry, topped with 2 type <br> of cheese sauce to bring the cheesiest kottu in town. )</p>
                                        </br>

                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                               <span>Extra Cheese</span>
                                               <span class="text-primary">580</span>
                                            </h5>
                                        </br>
                                        
                                        </div>
                                    </div>
                                </div>
                             </div>
                          </div>
                       </div>

             <!-- DESSERTS -->

            </br></br></br></br></br></br>
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s" >
            <h1 class="mb-52 section-title text-primary3 ">Desserts</h1>
              </br></br> </br>
        </div>

            <div class="tab-content" style="margin: 0 auto; width: 75%;">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4 pb-8">

                        <div class="col-lg-6-copy-new client1 ">
                            <div class="d-flex align-items-center wow fadeInUp text-primary3 " data-wow-delay="0.1s">
                                <div class="w-100 d-flex flex-column text-start ps-4 " >
                                        
                                    <h5 class="d-flex justify-content-between border-bottom pb-2"> 
                                        <span style="margin-right: 120px">Ice Cream</span>
                                        <span class="text-primary">975</span>
                                    </h5>
                                </br>

                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Fruit Salad</span>
                                        <span class="text-primary">975</span>
                                    </h5>
                                </br>

                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Fruit Salad with Ice Cream</span>
                                        <span class="text-primary">1350</span>
                                    </h5>
                                </br>

                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Watalappam</span>
                                        <span class="text-primary">925</span>
                                    </h5>
                                </br>

                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Fruit Platter</span>
                                        <span class="text-primary">1550</span>
                                    </h5>
                                </br>

                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Honey Hopper</span>
                                        <span class="text-primary">650</span>
                                    </h5>
                                </br>

                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Biscuit Pudding</span>
                                        <span class="text-primary">975</span>
                                    </h5>
                                </br>

                                    <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                        <span>Curd and Treacle</span>
                                        <span class="text-primary">975</span>
                                    </h5>
                                </br>

                                    <h5 class="d-flex justify-content-between ">
                                        <span>Sundae Fantasy</span>
                                        <span class="text-primary">1550</span>
                                    </h5>
                                    <p class=" border-bottom pdd"> ( 3 Scoops of ice cream topped with strawberry Comport Mango <br> syrup & chocolate chip. )</p>
                                </br>

                                    <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                       <span>Kithul Curd Cake</span>
                                       <span class="text-primary">1550</span>
                                    </h5>
                                    <p class=" border-bottom pdd"> ( So Curd cake as sembled on top of Ginger biscuit bace & is <br> topped with Pani Kaju & kithul Treacle. )</p>
                                </br>
                                
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6-copy2-new client112">
                            <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="0.2s">
                                <img src="img/desert.png" alt="" style="width: 700px">
                            </div>
                        </div>

                     </div>
                  </div>
               </div>


    </div>
</div>
        <!-- Menu End -->
        

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

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>