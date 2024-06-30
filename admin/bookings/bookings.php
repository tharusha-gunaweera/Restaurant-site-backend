<?php
session_start();
require_once("../../Backend/connection.php");

if(isset($_POST['delid'])){
    $Del=$_POST['delid'];
    $sql1="DELETE FROM `book_table` WHERE id='$Del'";
    mysqli_query($conn,$sql1);
}

if(isset($_POST['bookingsearch'])){
    $search=$_POST['bookingsearch'];
    $sql = "SELECT * FROM `book_table` WHERE Name LIKE '$search%'";
    $result = mysqli_query($conn, $sql);
}
else{
    $sql = "SELECT * FROM `book_table` ORDER BY id DESC LIMIT 10";
    $result = mysqli_query($conn, $sql);
}



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bookings.css">
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
        <h1>Bookings</h1>
        <ul class="breadcrumb">
            <li><i class='bx bx-chevron-right' ></i></li>

        </ul>
    </div>

</div>
<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Current bookings</h3>
            <form action="#" method="post">
                <input id="bookingsearch" type="text" name="bookingsearch" placeholder="Enter name">
                <button type="submit" id="adminsearchBtn"><i class='bx bx-search' ></i>	</button>
            </form>
        </div>
        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Number of people</th>
                <th>Number of table</th>
                <th>Date</th>
                <th>Request<th>

            </tr>
            </thead>
            <tbody>
            <?php while($row=mysqli_fetch_assoc($result)){?>
            <tr>
                <td><?php echo $row['Name'];?></td>
                <td><?php echo $row['Email'];?></td>
                <td><?php echo $row['Num_People'];?></td>
                <td><?php echo $row['Num_Table'];?></td>
                <td><?php echo $row['Date_Time'];?></td>
                <td><a href="#"><button id="showreq" onclick="sendreq(<?php echo $row['Id'];?>)">Show request</button></a></td>
                <td><a href="#" onclick="delbooking(<?php echo $row['Id'];?>)"><img src="../../img/bin.png" alt="delete" id="delete"></a></td>
            </tr>
            <?php }?>
            </tbody>
        </table>
        <form action="#" id="delform" method="post">
            <input type="text" id="delid" name="delid">
        </form>
        <form action="showreq.php" method="post" id="reqform">
            <input type="text" id="reqid" name="reqid">
        </form>
    </div>
</div>
<script>
    var delform = document.getElementById("delform");
    var delid = document.getElementById("delid");

    function delbooking(eid){
        delid.value=eid;
        delform.submit();
    }

    var reqform = document.getElementById('reqform');
    var reqid = document.getElementById('reqid')

    function sendreq(rid){
        reqid.value = rid;
        reqform.submit();
    }
</script>
</body>
</html>
