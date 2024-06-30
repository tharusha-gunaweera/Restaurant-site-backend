<?php
session_start();
require_once("../../Backend/connection.php");

if(isset($_POST['delid'])){
    $Del=$_POST['delid'];
    $sql1="DELETE FROM `contacts` WHERE id='$Del'";
    mysqli_query($conn,$sql1);
}
if(isset($_POST['date'])){
    $search=$_POST['date'];
    $sql = "SELECT * FROM `contacts` WHERE Name LIKE '$search%'";
    $result = mysqli_query($conn, $sql);
}
else{
    $sql='SELECT * FROM `contacts`';
    $result=mysqli_query($conn,$sql);
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="contacts.css">
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
            <h3>Recent contacts</h3>
        </div>
        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>subject</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody>
            <?php while($row=mysqli_fetch_assoc($result)){?>
            <tr>
                <td><?php echo $row['Name'];?></td>
                <td><?php echo $row['Email'];?></td>
                <td><?php echo $row['Phone'];?></td>
                <td class="topic"><?php echo $row['subject'];?> <button class="seemore" onclick="seecont(<?php echo $row['Id'];?>)">See more</button></td>
                <td><?php echo $row['Time'];?></td>
                <td><a href="#" onclick="delcontact(<?php echo $row['Id'];?>)"><img src="../../img/bin.png" alt="delete" id="delete"></a></td>
            </tr>
            <?php }?>
            </tbody>
        </table>
        <form action="seeMore.php" method="post" id="seemorefrom">
            <input type="text" id="semoreinp" name="seemoreinp">
        </form>
        <form action="#" id="delform" method="post">
            <input type="text" id="delid" name="delid">
        </form>
    </div>
</div>
<script>
    var delform = document.getElementById("delform");
    var delid = document.getElementById("delid");

    function delcontact(eid){
        delid.value=eid;
        delform.submit();
    }

    var seemoreform = document.getElementById('seemorefrom');
    var seemoreinp = document.getElementById('semoreinp');

    function seecont(sid){
        console.log(sid);
        seemoreinp.value=sid;
        seemoreform.submit();
    }

</script>
</body>
</html>
