<?php
$currentPage=basename($_SERVER['PHP_SELF']);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="header.css">
    <title>Document</title>
</head>
<body>

<section id="sidebar">
    <div class="brand">
        <i class='bx bxs-user-circle'></i></i>
        <div>
            <p class="username"><?php echo $_SESSION['aduname'];?></p>
            <p class="email"><?php echo $_SESSION['ademail'];?></p>
        </div>
    </div>
    <ul class="side-menu top">
        <li class="<?php if($currentPage =='dashboard.php'){ echo 'active';}?>">
            <a href="../dashboard/dashboard.php">
                <i class='bx bxs-dashboard' ></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li class="<?php if($currentPage =='bookings.php'){ echo 'active';}?>">
            <a href="../bookings/bookings.php">
                <i class='bx bxs-book'></i>
                <span class="text">Bookings</span>
            </a>
        </li>
        <li class="<?php if($currentPage =='menu.php'){ echo 'active';}?>">
            <a href="../menu/menu.php">
                <i class='bx bx-menu' ></i></i>
                <span class="text">Menu</span>
            </a>
        </li>
        <li class="<?php if($currentPage =='contacts.php'){ echo 'active';}?>">
            <a href="../contacts/contacts.php">
                <i class='bx bxs-message-dots' ></i>
                <span class="text">Contacts</span>
            </a>
        </li>
        <li class="<?php if($currentPage =='acc.php'){ echo 'active';}?>">
            <a href="../accounts/acc.php">
                <i class='bx bxs-group' ></i>
                <span class="text">Accounts</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="../../logout.php" class="logout">
                <i class='bx bxs-log-out-circle' ></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>

<script>
    const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

    allSideMenu.forEach(item=> {
        const li = item.parentElement;

        item.addEventListener('click', function () {
            allSideMenu.forEach(i=> {
                i.parentElement.classList.remove('active');
            })
            li.classList.add('active');
        })
    });





    const menuBar = document.querySelector('#content nav .bx.bx-menu');
    const sidebar = document.getElementById('sidebar');

    menuBar.addEventListener('click', function () {
        sidebar.classList.toggle('hide');
    })

</script>

</body>
</html>