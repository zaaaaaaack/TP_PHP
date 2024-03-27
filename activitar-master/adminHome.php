<?php 
    require 'loginFunctions.php';
    checkNotLoggedIn();
    checkLoggedIn();
    echo "Welcome Admin, {$_SESSION['adminUsername']} ";
   /*
   This is the admin home page 
   where the admin dashboard would be displayed
   the logout interface will be modified later 
   after integration of the admin dashboard
   
   */ 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="css/styleHome.css" />
    <script src="https://kit.fontawesome.com/8ff7d57ae9.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="title">
                <span>Home</span>
            </div>
            <div class="row button">
                <a href="deconnexion.php">Log out</a>
            </div>
        </div>
    </div>
</body>
</html>