<?php
session_start();
if (isset($_SESSION['verified'])) {
    $verify_error = $_SESSION['verified'];
    unset($_SESSION['verified']);
} else {
    $verify_error = "";
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
            background: linear-gradient(#FEA116, #fe8d16);
            left: -80px;
            top: -80px;
        }
        .shape:last-child {
            background: linear-gradient(to right, #FEA116, #fe8d16);
            right: -30px;
            bottom: -80px;
        }
        form {
            height: 520px;
            width: 400px;
            background-color: rgba(255, 255, 255, 0.13);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 50px 35px;
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
            margin: 40px 0 25px 0;
            width: 100%;
            background-color: #ffffff;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }
        .hover-button {
            transition: background-color 0.3s;
        }

        #showErr {
            display: none;
            color: #e30101;
        }
    </style>
</head>
<body>
<div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
</div>
<form action="Backend/loginhandler.php" method="post" id="signform">
    <h3>Login Here</h3>
    <label for="username">Username</label>
    <input type="text" placeholder="Email or Name" name="email" id="username">
    <label for="password">Password</label>
    <input type="password" placeholder="Password" name="pass" id="password">
    <div id="showErr"></div>
    <button onmouseover="this.style.backgroundColor='#FEA116'" onmouseout="this.style.backgroundColor='white'" type="submit" id="login">Log In</button>
    <a href="registration.php" id="ihda">I don't have an account</a>
</form>
<script src="https://kit.fontawesome.com/54047f67ad.js" crossorigin="anonymous"></script>
<script>
        var err = document.getElementById("showErr");
        var login = document.getElementById("login");
        var form = document.getElementById("signform")

        showVerify();

        function showVerify() {
            var verifyError = "<?php echo $verify_error ;?>";
            if (verifyError !== "") {
                err.style.display = "block";
                err.innerHTML = "<?php echo $verify_error;?>";
            }
        }


</script>
</body>
</html>
