<?php


if(isset($_SESSION['uname'])) {
    $validation = "true";
}
else{
    $validation = "false";
}

$currentPage=basename($_SERVER['PHP_SELF']);


?>
<html>
<head>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<style>
    .sign-in-btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        color: #FEA116;
        background-color: transparent;
        border: 2px solid #FEA116;
        border-radius: 5px;
        cursor: pointer;
        position: relative;
        overflow: hidden;
        transform: uppercase;
        transition: color 0.4s ease, border-color 0.4s ease;
    }

    #signin{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 0;
        width: 220px;
    }

    .sign-in-btn::before {
        content: '';
        position: absolute;
        top: 0;
        right: -100%;
        width: 100%;
        height: 100%;
        background-color: #FEA116;
        transform: uppercase;
        z-index: 0.1;
    }

    .sign-in-btn:hover::before {
        right: 0;
    }

    .sign-in-btn span {
        position: relative;
        z-index: 1;
    }

    .sign-in-btn:hover span {
        color: black;
    }
    .sign-in-btn:hover {
    border-color: #000000;
    }

    #logedimg{
        display: none;
        padding: 0;
        height: 100px;
        width: 100px;
    }
    #loginbtn{
        position: relative;
        top: 20px;
    }
    .image-container{
        position: relative;
        padding: 0 0 0 20px;
    }

    .image-container a{
        text-decoration: none;
    }

    #userMenu{
        display: none;
        position: absolute;
        right: 4px;
        bottom: -130px;
        background: #353535;
        height: 150px;
        width: 250px;
    }
    #userMenu.active{
        display: block;
    }


    #userMenu::before{
        position: absolute;
        content: '';
        top: -5%;
        left: 77%;
        background: #353535;
        height: 20px;
        width: 20px;
        transform: rotate(45deg);
    }

    .details{
        display: flex;
        flex-direction: row;
        padding: 15px 0 0 10px ;
    }

    .logedimg{
        height: 50px;
        width: 50px;
    }

    .userEmail{
        padding: 0 0 0 10px;
    }

    #username{
        padding: 0;
        margin: 0;
        color: #fff;
        font-size: 18px;
    }
    #useremail{
        padding: 0;
        margin: 0;
        color:  #fff;
        font-style: italic;
    }
    #logout{
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 35px 0 0 0;
        padding: 15px 0 0 0;
        background-color: #232323;
        color: #232323;
        border: none;
        outline: none;
        border-top: 2px solid #232323;
    }

    #logout a {
        color: #ff0000;
        text-decoration: none;
        margin: 0;
        padding: 0;
        display: flex;
        gap: 5px;
    }

    #logout a i{
        margin: 0;
        padding: 0;
        position: relative;
        top: 3px;
    }

</style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-3 py-3 py-lg-0">
    <img src="img/Resturent Logo1.png" weght="100" hegiht="150" alt="Logo">
    <div class="collapsenavbar-collapse" id="navbar Collapse">
        <div class="navbar-nav ms-auto py-0 pe-0">
            <a href="index.php" class="nav-item nav-link <?php if($currentPage =='index.php'){ echo 'active';}?>">Home</a>
            <a href="about.php" class="nav-item nav-link <?php if($currentPage =='about.php'){ echo 'active';}?>">About Us</a>
            <a href="menu.php" class="nav-item nav-link <?php if($currentPage =='menu.php'){ echo 'active';}?>">Menu</a>
            <a href="contact.php" class="nav-item nav-link <?php if($currentPage =='contact.php'){ echo 'active';}?>">Contact</a>
            <a href="reservation.php" class="nav-item nav-link <?php if($currentPage =='reservation.php'){ echo 'active';}?>">Reservation</a>
            <div>
              <a href="login.php" id="loginbtn"><button class="sign-in-btn nav-item nav-link" id="signin"><span class="m-5 ">Sign in</span></button></a>
                <div class="image-container" id="logedimg" alt="User Icon" style="cursor: pointer;" >

                  <img src="img/profile.png"   alt="Hover Image" class=" default-image" >
                  <img src="img/profile y.png"   alt="Hover Image" class="hover-image">

                </div>
                <div id="userMenu" >
                    <div class="details image-container" >

                        <img src="img/user1.png" class="logedimg default-image" alt="Hover Image">
                        <img src="img/user2.png"   alt="Hover Image" class="logedimg hover-image">

                        <div class="userEmail">
                            <p id="username"><?php echo $_SESSION['uname']?></p>
                            <p id="useremail"><?php echo $_SESSION['email']?></p>
                        </div>

                    </div>
                    <div id="logout">
                        <a href="logout.php"><i class='bx bx-exit'></i><p>Log out</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    var loginbtn = document.getElementById("loginbtn");
    var logedimg = document.getElementById("logedimg");
    var usermenu = document.getElementById("userMenu");

    if ("<?php echo $validation;?>" == "true") {
        loginbtn.style.display = "none";
        logedimg.style.display = "block";
    }

    logedimg.addEventListener('click',function (){
        usermenu.classList.toggle('active');
    });

</script>
</body>
</html>