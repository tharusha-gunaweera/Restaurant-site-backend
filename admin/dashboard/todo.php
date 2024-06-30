<?php
session_start();
require_once("../../Backend/connection.php");

$added = $_SESSION['adid'];
$name = $_POST["todoadding"];

$sql = "INSERT INTO `todo`( `addedAdmin_id`, `name`) VALUES ('$added','$name')";
$result = mysqli_query($conn, $sql);
header("Location: dashboard.php");
?>