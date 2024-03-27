<?php
    session_start();
    require 'ConnexionBD.php';
    if(isset($_POST['submit'])){
        if(!empty($_POST['username']) && !empty($_POST['password'])){
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);
            $bdd = ConnexionBD::getInstance();
            $req = $bdd->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
            $req->execute(array($username, $password));
            if(($req->rowCount())== 1){
                $user = $req->fetch(PDO::FETCH_ASSOC);
                $_SESSION['id'] = $user['id'];
                $_SESSION['adminUsername'] = $user['username'];
                $_Session['password'] = $user['password'];
                header('Location: adminHome.php');
            }else{
                echo "<script>alert('Username ou mot de passe incorrect')</script>";
            }
        }else{
            echo "<script>alert('Veuillez remplir tous les champs')</script>";
        }
    }
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