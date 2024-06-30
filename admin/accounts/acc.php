<?php
session_start();
require_once("../../Backend/connection.php");

if(isset($_POST['delid'])){
    $Del=$_POST['delid'];
    $sql1="DELETE FROM `login` WHERE Id='$Del'";
    mysqli_query($conn,$sql1);
}
if(isset($_POST['accsearch'])){
    $search=$_POST['accsearch'];
    $sql = "SELECT * FROM `login` WHERE Name LIKE '$search%'";
    $result = mysqli_query($conn, $sql);
}
else{
    $sql = "SELECT * FROM `login` ORDER BY Id ASC LIMIT 10";
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
    <link rel="stylesheet" href="acc.css">
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
        <h1>Accounts</h1>
        <ul class="breadcrumb">
            <li><i class='bx bx-chevron-right' ></i></li>

        </ul>
    </div>

</div>
<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Current users</h3>
            <form action="#" method="post">
                <input type="text" id="accsearch" name="accsearch" placeholder="Enter name">
                <button type="submit" id="adminsearchBtn"><i class='bx bx-search' ></i>	</button>
            </form>
        </div>
        <table>
            <thead>
            <tr>
                <th>User</th>
                <th>Email</th>
                <th>Date</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php while($row=mysqli_fetch_assoc($result)){?>
            <tr>
                <td><?php echo $row['Name'];?></td>
                <td><?php echo $row['Email'];?></td>
                <td><?php echo $row['Time'];?></td>
                <td><a href="#" onclick="deluser(<?php echo $row['Id'];?>)"><img src="../../img/bin.png" alt="delete" id="delete"></a></td>
            </tr>
            <?php }?>
            </tbody>
        </table>
        <form action="#" id="delform" method="post">
            <input type="text" id="delid" name="delid">
        </form>
    </div>
</div>

<script>
    var delform = document.getElementById("delform");
    var delid = document.getElementById("delid");

    function deluser(eid){
        delid.value=eid;
        delform.submit();
    }
</script>

</body>
</html>
