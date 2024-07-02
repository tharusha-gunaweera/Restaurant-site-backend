<?php
session_start();
include_once "connection.php";


$itemname = $_POST['itemname'];
$price = $_POST['price'];


$sql = "INSERT INTO `populer_items`( `item_name`, `price`) VALUES ('$itemname','$price')";
$result = mysqli_query($conn,$sql);


if($result == true){
    header('Location: ../admin/menu/menu.php');
}

mysqli_close($conn);


