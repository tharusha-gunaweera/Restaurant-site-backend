<?php
session_start();
include_once "connection.php";

$addedAdmin= $_SESSION['adid'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['pass'], PASSWORD_BCRYPT);


$req = "SELECT * FROM `admins` WHERE (`name` = '$name' OR `Email` = '$email')";

$value = mysqli_query($conn, $req);
$result_req = mysqli_fetch_assoc($value);
$req_result = mysqli_num_rows($value);

if($req_result > 0){

    if($result_req['name'] == $name){

        $_SESSION['adminUsername_not'] = "Signup failed. name Already exists.";
    }
    if($result_req['Email'] == $email) {
        $_SESSION['adminEmail_not'] = "Signup failed. Email Already exists.";
    }


    header('Location: ../admin/dashboard/addadmin.php');

    exit();
}

else{
    $sql = "INSERT INTO `admins` (`addedAdmin_id`,`name`,`Pword`,`Email`) VALUES ('$addedAdmin','$name','$password','$email')";
    $result = mysqli_query($conn,$sql);


    if($result == true){
        header('Location: ../admin/dashboard/dashboard.php');
    }

    mysqli_close($conn);
}

