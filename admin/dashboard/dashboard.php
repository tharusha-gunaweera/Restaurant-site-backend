<?php
session_start();
require_once("../../Backend/connection.php");

if(isset($_POST['delid'])){
    $Del=$_POST['delid'];
    $sql1="DELETE FROM `admins` WHERE id='$Del'";
    mysqli_query($conn,$sql1);
}

if(isset($_POST['tdelinp'])){
    $TDel=$_POST['tdelinp'];
    $sql7="DELETE FROM `todo` WHERE id='$TDel'";
    mysqli_query($conn,$sql7);
}

$sql3 = "SELECT COUNT(*) AS count FROM `login`";
$result3 = mysqli_query($conn,$sql3);
$row3 = mysqli_fetch_assoc($result3);

$sql4 = "SELECT COUNT(*) AS count FROM `book_table`";
$result4 = mysqli_query($conn,$sql4);
$row4 = mysqli_fetch_assoc($result4);

$sql5 = "SELECT COUNT(*) AS count FROM `contacts`";
$result5 = mysqli_query($conn,$sql5);
$row5 = mysqli_fetch_assoc($result5);

$adminID = $_SESSION['adid'];

$sql = "SELECT * FROM `admins` WHERE addedAdmin_id= '$adminID'";
$result = mysqli_query($conn, $sql);

$sql6 = "SELECT * FROM `todo` WHERE addedAdmin_id='$adminID'";
$result6 = mysqli_query($conn, $sql6);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="dashboard.css">

    <title>AdminHub</title>
</head>
<body>


<?php require_once ("../adminheader/Aheader.php");
echo '<style>';
require_once ("../adminheader/header.css");
echo '</style>';
?>



<!-- CONTENT -->
<section id="content">



    <main>
        <div class="head-title">
            <div class="left">
                <h1>Dashboard</h1>
                <ul class="breadcrumb">
                    <li><i class='bx bx-chevron-right' ></i></li>

                </ul>
            </div>

        </div>

        <ul class="box-info">
            <li>
                <i class='bx bxs-calendar-check' ></i>
                <span class="text">
						<h3><?php echo $row3['count'];?></h3>
						<p>Bookings</p>
					</span>
            </li>
            <li>
                <i class='bx bxs-group' ></i>
                <span class="text">
						<h3><?php echo $row4['count'];?></h3>
						<p>Users</p>
					</span>
            </li>
            <li>
                <i class='bx bxs-contact'></i>
                <span class="text">
						<h3><?php echo $row5['count'];?></h3>
						<p>Contacts</p>
					</span>
            </li>
        </ul>


        <div class="table-data">
            <div class="order">
                <div class="head">
                    <a href="addadmin.php"><button id="addAdmin"><i class='bx bxs-plus-circle'></i> Add new admin</button></a>
                </div>
                <table>
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while($row=mysqli_fetch_assoc($result)){?>
                    <tr>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['Email'];?></td>
                        <td><a href="#" onclick="deladmin(<?php echo $row['id'];?>)"><img src="../../img/bin.png" alt="delete" id="delete"></a></td>
                    </tr>
                    <?php }?>
                    </tbody>
                </table>
                <form action="#" id="delform" method="post">
                    <input type="text" id="delid" name="delid">
                </form>
            </div>
            <div class="todo">
                <div class="head">
                    <h3 id="todoTopic">Todos</h3>
                    <div class="addinttodo">
                        <button id="addtodo"><i class='bx bxs-plus-circle'></i> Add todo</button>
                        <div class="cont" id="cont">
                            <form action="todo.php" method="post"  id="formcont">
                                <input type="text" id="todoadding" name="todoadding">
                                <button type="submit" id="addbtn"><i class='bx bx-plus-circle'></i> Add</button></form>
                        </div>
                    </div>
                </div>
                <ul class="todo-list">
                    <?php while($row6=mysqli_fetch_assoc($result6)){?>
                    <li class="completed">
                        <p><?php echo $row6['name'];?></p>
                        <i class='bx bx-minus' onclick="tododel(<?php echo $row6['id'];?>)"></i>
                    </li>
                    <?php }?>
                </ul>
                <form action="#" method="post" id="tdelform">
                    <input type="text" id="tdelinp" name="tdelinp">
                </form>
            </div>
        </div>
    </main>

</section>
<script>
    var delform = document.getElementById("delform");
    var delid = document.getElementById("delid");
    var addtodo = document.getElementById('addtodo');
    var fromcont = document.getElementById('cont');
    var tdelform = document.getElementById('tdelform');
    var tdelinp = document.getElementById('tdelinp');

    function deladmin(eid){
        delid.value=eid;
        delform.submit();
    }

    addtodo.addEventListener('click',function (){
        fromcont.classList.toggle('active');
    });

    function tododel(todoid){
        tdelinp.value = todoid;
        tdelform.submit();
    }

</script>


</body>
</html>