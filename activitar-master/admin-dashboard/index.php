<?php
require_once "../loginFunctions.php";
checkNotLoggedIn();
checkLoggedInAsUser();

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <!-- Sidebar Begins -->
        <?php 
        $firstlink = "contactform/findex.php";
        $secondlink= "clients/cindex.php";
<<<<<<< HEAD
        $thirdtlink= "stock/sindex.php";
        $lasttlink= "logout.php";
=======
        $thirdtlink= "#";
        $lasttlink = '../deconnexion.php';
>>>>>>> 95726826ec631e9e00dd6e61aa0c405e37cfb4d4
        include 'sidebar.php'; ?>
        <!-- Sidebar Ends -->
        <div class="main">
            <h2>Admin Dashboard</h2>
            <img src="assets/administrator.png" alt="">
        </div>
    </div>
</body>

</html>