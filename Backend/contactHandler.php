<?php
require_once("connection.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql="INSERT INTO `contacts`(`Name`, `Email`, `Phone`, `subject`, `message`) 
          VALUES ('$name','$email','$phone','$subject','$message')";

    $result=mysqli_query($conn,$sql);
    header('location:../contact.php');
?>