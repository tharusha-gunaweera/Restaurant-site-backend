<?php
session_start();
require_once("../../Backend/connection.php");

if(isset($_POST['delid'])){
    $Del=$_POST['delid'];
    $sql1="DELETE FROM `populer_items` WHERE Id='$Del'";
    mysqli_query($conn,$sql1);
}

if(isset($_POST['accsearch'])){
    $search=$_POST['accsearch'];
    $sql = "SELECT * FROM `populer_items` WHERE item_name LIKE '$search%'";
    $result = mysqli_query($conn, $sql);
}
else{
    $sql = "SELECT * FROM `populer_items` ORDER BY id DESC LIMIT 10";
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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="menu.css">
    <title>Moon house restaurant</title>
</head>
<body>
<?php
require_once ("../adminheader/Aheader.php");
echo '<style>';
require_once ("../adminheader/header.css");
echo '</style>';
?>
<div class="head-title">
    <div class="left">
        <h1>Menu</h1>
        <ul class="breadcrumb">
            <li><i class='bx bx-chevron-right' ></i></li>

        </ul>
    </div>

</div>
<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Recent Orders</h3>
            <form action="#" method="post">
                <input id="menusearch" type="text" placeholder="Enter name" name="accsearch">
                <button type="submit" id="adminsearchBtn"><i class='bx bx-search' ></i>	</button>
            </form>
            <a href="addmenu.php"><button id="addMenu"><i class='bx bxs-plus-circle'></i> Add new menu</button></a>
        </div>
        <table>
            <thead>
            <tr>
                <th>Item</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while ($row=mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td>
                    <?php echo $row['item_name'];?>
                </td>
                <td><?php echo $row['price'];?></td>
                <td><a href="#" onclick="delmenu(<?php echo $row['Id'];?>)"><img src="../../img/bin.png" alt="delete" id="delete"></a></td>
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

    function delmenu(eid){
        delid.value=eid;
        delform.submit();
    }
</script>
</body>
</html>
