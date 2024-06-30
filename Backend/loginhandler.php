<?php
session_start();
require_once("connection.php");

$email = $_POST["email"];
$password = $_POST["pass"];

$Sql = "SELECT * FROM login WHERE Email = '$email' OR Name = '$email'";
$result = mysqli_query($conn, $Sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if ($row['Email'] == $email || password_verify($password, $row['Pass'])) {
        $_SESSION['uname'] = $row['Name'];
        $_SESSION['email'] = $row['Email'];
        header("Location: ../index.php");
        exit();
    } else {
        $_SESSION['email'] = "Invalid email or password.";
        header("Location: ../admin/dashboard/dashboard.php");
    }
} else {
    // Check if the email is valid
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Check if the email contains 'gallery.com'
        if (strpos($email, "moon.com") !== false) {
            $sql3 = "SELECT * FROM admins WHERE Email = '$email'";
            $result3 = mysqli_query($conn, $sql3);
            if (mysqli_num_rows($result3) == 1) {
                $row3 = mysqli_fetch_assoc($result3);
                if (password_verify($password, $row3['Pword'])||$password==$row3['Pword']) {
                    $_SESSION['aduname'] = $row3['name'];
                    $_SESSION['ademail'] = $row3['Email'];
                    $_SESSION['adid'] = $row3['id'];
                    header("Location: ../admin/dashboard/dashboard.php");
                    exit();
                } else {
                    $_SESSION['verified'] = "Invalid admin password.";
                    header("Location: ../login.php");
                }
            } else {
                $_SESSION['verified'] = "Admin account not found.";
                header("Location: ../login.php");
            }
        } else {
            echo "The email is valid but does not contain the specified part.";
            $_SESSION['verified'] = "Email or Password is not verified.";
            header("Location: ../login.php");
        }
    } else {
        $_SESSION['verified'] = "The user is not valid.";
        header("Location: ../login.php");
    }
}
?>