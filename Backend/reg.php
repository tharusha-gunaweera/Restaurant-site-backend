<?php
session_start();
 include_once "connection.php";

 $name = $_POST['name'];
 $email = $_POST['email'];
 $password = password_hash($_POST['pass'], PASSWORD_BCRYPT);

$req = "SELECT * FROM `login` WHERE (`Name` = '$name' OR `Email` = '$email')";

$value = mysqli_query($conn, $req);
$result_req = mysqli_fetch_assoc($value);
$req_result = mysqli_num_rows($value);

if($req_result > 0){

    if($result_req['Name'] == $name){

        $_SESSION['username_not'] = "Signup failed. Username Already exists.";
    }
    if($result_req['email'] == $email) {
        $_SESSION['email_not'] = "Signup failed. Email Already exists.";
    }


    header('Location: ../registration.php');

    exit();
}

else{
    $sql = "INSERT INTO `login` (`Name`,`Pass`,`Email`) VALUES ('$name','$password','$email')";
    $result = mysqli_query($conn,$sql);


    if($result == true){
        header("location: ../login.php");
    }

    mysqli_close($conn);
}

