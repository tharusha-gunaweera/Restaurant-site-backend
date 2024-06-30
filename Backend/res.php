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

    $sql = "INSERT INTO `book_table` (`name`,`Email`,`Date_Time`,`Num_People`,`Num_Table`,`Request`) VALUES ('$name','$email','$dtime','$npe','$ntab','$special')";
    $result = mysqli_query($conn,$sql);


    if($result == true){
        header("location: ../index.php");
    }
}




