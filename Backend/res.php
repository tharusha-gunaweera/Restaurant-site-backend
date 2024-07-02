<?php
session_start();
include_once "connection.php";

if(!isset($_SESSION['uname'])){
    header('location:../login.php');
}
else{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dtime = $_POST['datetime'];
    $npe = $_POST['number'];
    $ntab = $_POST['numbert'];
    $special = $_POST['message'];
    $pageName = $_POST['sendpName'];


    $sql1 = "SELECT * FROM `book_table` WHERE  Num_Table= '$ntab'";
    $result1 = mysqli_query($conn, $sql1);

    if (mysqli_num_rows($result1) > 0) {
        $_SESSION['booked'] = "Sorry! Someone has already booked this table.";
        header('location:../'.$pageName.'#bookingforcus');
    }
    else{
        $sql = "INSERT INTO `book_table` (`name`,`Email`,`Date_Time`,`Num_People`,`Num_Table`,`Request`) VALUES ('$name','$email','$dtime','$npe','$ntab','$special')";
        $result = mysqli_query($conn,$sql);


        if($result == true){
            $_SESSION['bookedComp'] = "Your booking has been successfully stored in our system.";
            header('location:../'.$pageName.'#bookingforcus');
        }
    }



}




