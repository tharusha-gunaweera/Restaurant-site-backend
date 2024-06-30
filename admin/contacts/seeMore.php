<?php
session_start();
require_once("../../Backend/connection.php");

$msgId = $_POST['seemoreinp'];

$sql="SELECT * FROM `contacts` WHERE `id` = '$msgId'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <Style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        a {
            text-decoration: none;
        }
        .order::-webkit-scrollbar {
            display: none;
        }

        body {
            background: #141a28;
            overflow-x: hidden;
        }
        .head-title {
            margin-left: 300px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            grid-gap: 16px;
            flex-wrap: wrap;
        }
        .head-title .left h1 {
            font-size: 36px;
            font-weight: 600;
            margin: 40px 0 10px 0;
            color: #fff;
        }

        .table-data {
            display: flex;
            flex-wrap: wrap;
            grid-gap: 24px;
            margin-top: 24px;
            width: 100%;
            color: var(--dark);
        }
        .table-data > div {
            border-radius: 20px;
            background: var(--light);
            padding: 24px;
            margin:0 20px 0 300px;
            overflow-x: auto;
            height: 650px;
        }
        .table-data .head {
            display: flex;
            align-items: center;
            grid-gap: 16px;
            margin-bottom: 24px;
        }
        .table-data .head h3 {
            margin-right: auto;
            font-size: 24px;
            font-weight: 600;
        }
        .body{
            padding: 30px;
        }

        .table-data .order {
            color: #fff;
            background: #1f2940;
            flex-grow: 1;
            flex-basis: 500px;
        }
        .table-data .order table {
            width: 100%;
            border-collapse: collapse;
        }
        .table-data .order table th {
            padding-bottom: 12px;
            font-size: 13px;
            text-align: left;
            border-bottom: 1px solid var(--grey);
        }
        .table-data .order table td {
            padding: 16px 0;
        }
        .table-data .order table tr td:first-child {
            display: flex;
            align-items: center;
            grid-gap: 12px;
            padding-left: 6px;
        }
        .table-data .order table td img {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            object-fit: cover;
        }


    </Style>
    <title>Moon house restaurant</title>
</head>
<body>
<?php require_once ("../adminheader/Aheader.php");
echo '<style>';
require_once ("../adminheader/header.css");
echo '</style>';
?>
<div class="head-title">
    <div class="left">
        <h1>Contacts</h1>
        <ul class="breadcrumb">
            <li><i class='bx bx-chevron-right' ></i></li>

        </ul>
    </div>

</div>
<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>See more</h3>
        </div>
        <div class="body">
            <p>
                <?php echo $row['message'];?>
            </p>
        </div>
    </div>
</div>

</body>
</html>
