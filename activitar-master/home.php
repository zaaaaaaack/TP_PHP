<?php 
    session_start();
    require 'loginFunctions.php';
    checkNotLoggedIn();
    checkLoggedInAsAdmin();


    echo "Hello {$_SESSION['username']} vous êtes connecté";
    /**This is the user's home page where the user
     * interface would be displayed
     * i.e the user dashboard , shopping cart ,timetable etc
     * the logout interface will be modified later
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