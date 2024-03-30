<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/fork1/TP_PHP/activitar-master/loginFunctions.php';


    checkNotLoggedIn();


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
        $secondlink= "users/cindex.php";
        $thirdtlink= "#";
        $lasttlink = '../deconnexion.php';
        include 'sidebar.php'; ?>
        <!-- Sidebar Ends -->
        <div class="main">
            <h2>idk what to put heree </h2>
        </div>
    </div>
</body>

</html>