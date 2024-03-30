<?php
    
    attemptLogin("admin", "admin-dashboard/index.php");
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/styleAdminLogin.css">
        <script src="https://kit.fontawesome.com/8ff7d57ae9.js" crossorigin="anonymous"></script>
        <title>Admin Login</title>
    </head>
    <body>
        <div class="login-box">
            
            <h2>Login Here</h2>
            <form action="adminLogin.php" method="post">
                <div class="textbox">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Admin Username" name="username" >
                </div>
                <div class="textbox">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" >
                </div>
                <input class="btn" type="submit" name="submit" value="Login">
                <div class="login-link">
                    <a href="login.php">Login as User</a>
                </div>
                <div class="login-link">
                    <a href="index.html">Acceuil</a>
                </div>
            </form>
        </div>
    </body>
</html>