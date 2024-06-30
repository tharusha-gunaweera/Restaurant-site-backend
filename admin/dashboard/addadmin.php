<?php
session_start();

if(isset($_SESSION['adminEmail_not'])){
    $email_error = $_SESSION['adminEmail_not'];
    unset($_SESSION['adminEmail_not']);
} else {
    $email_error = "";
}

if(isset($_SESSION['adminEmail'])){
    $invalidDomain = $_SESSION['admindomain'];
}

if(isset($_SESSION['adminUsername_not'])){
    $username_error = $_SESSION['adminUsername_not'];
    unset($_SESSION['adminUsername_not']);
} else {
    $username_error = "";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Moon house restaurant</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <style>
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            background-color: #080710;
        }
        .background {
            width: 430px;
            height: 520px;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
        }
        .background .shape {
            height: 200px;
            width: 200px;
            position: absolute;
            border-radius: 50%;
        }
        .shape:first-child {
            background: linear-gradient(#1845ad, #23a2f6);
            left: -80px;
            top: -80px;
        }
        .shape:last-child {
            background: linear-gradient(to right, #ff512f, #f09819);
            right: -30px;
            bottom: -80px;
        }
        form {
            height: fit-content;
            width: 450px;;
            background-color: rgba(255, 255, 255, 0.13);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 50px 60px;
        }
        form * {
            font-family: 'Poppins', sans-serif;
            color: #ffffff;
            letter-spacing: 0.5px;
            outline: none;
            border: none;
        }
        form h3 {
            font-size: 32px;
            font-weight: 500;
            line-height: 42px;
            text-align: center;
        }
        label {
            display: block;
            margin-top: 30px;
            font-size: 16px;
            font-weight: 500;
        }
        input {
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
        }
        ::placeholder {
            color: #e5e5e5;
        }
        button {
            margin: 20px 0 25px 0;
            width: 100%;
            background-color: #ffffff;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }
        #showErr {
            margin: 10px 0 0 0;
            display: none;
            color: #ff0000;
        }
    </style>
</head>
<body>
<div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
</div>
<form action="../../Backend/addadminhandler.php" method="post" onsubmit="return errorChecker()">
    <h3>Add admin</h3>

    <label for="username">Username</label>
    <input type="text" name="name" placeholder="Name" id="username">

    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Email" id="email">

    <label for="password">Password</label>
    <input type="password" name="pass" placeholder="Password" id="password">

    <label for="con-password">Confirm password</label>
    <input type="password" placeholder="Re-enter password" id="con-password">
    <div id="showErr"></div>
    <button type="submit">Add</button>
</form>
<script>
    var errormsg = document.getElementById("showErr");


    function errorChecker() {
        var inputs = document.getElementsByTagName("input");
        for (var i = 0; i < 4; i++) {
            if (inputs[i].value === "") {
                errormsg.innerHTML = "Please enter all the fields";
                errormsg.style.display = "block";
                return false;
            }
        }
        if (inputs[2].value !== inputs[3].value) {
            errormsg.innerHTML = "Passwords are not matching";
            errormsg.style.display = "block";
            return false;
        }

        let email = document.getElementById("email").value;
        let parts = email.split('@');
        if (parts.length === 2) {
            if (parts[1] !== "moon.com") {
                errormsg.innerHTML = "Invalid domain";
                errormsg.style.display = "block";
                return false;
            }
        }
        return true;
    }

    checkRed();



    function checkRed() {
        let username = "<?php echo $username_error?>";
        let email = "<?php echo $email_error?>";


        console.log(email);
        console.log(username);

        if(email !== "" && username !== "") {
            errormsg.style.display = "block";
            errormsg.innerHTML = "Email and user name already exists";
        }
        else{
            if (email !== "") {
                errormsg.style.display = "block";
                errormsg.innerHTML = "Email already exists";
            }
            if (username !== "") {
                errormsg.style.display = "block";
                errormsg.innerHTML = "Username already exists";

            }
        }
    }
</script>
</body>
</html>
