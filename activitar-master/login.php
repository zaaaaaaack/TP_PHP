<?php 
session_start();
    require 'ConnexionBD.php';
    $bdd = ConnexionBD::getInstance();
    if(isset($_POST['login'])){
        if(!empty($_POST['username']) && !empty($_POST['password'])){
            $username = htmlspecialchars($_POST['username']);
            $password = sha1(htmlspecialchars($_POST['password']));
            $req = $bdd->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
            $req->execute(array($username, $password));
            if(($req->rowCount())== 1){
                $user = $req->fetch(PDO::FETCH_ASSOC);
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_Session['password'] = $user['password'];
                header('Location: home.php');
            }else{
                echo "Username ou mot de passe incorrect";
            }
            
        }
    }
       


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="css/styleLogin.css" />
    <script src="https://kit.fontawesome.com/8ff7d57ae9.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="title">
                <span>Login</span>
            </div>
            <form action="login.php" method="POST">
                <div class="row">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Username" name="username" required>
                </div>
                <div class="row">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Password" name ="password" required>
                </div>
                <div class="row button">
                    <input type="submit" value="Log in" name="login">
                </div>
                <div class="signup-link">
                    Not a member? <a href="register.php">Signup now</a>
                </div>
                <div class="signup-link">
                    <a href="index.html">Acceuil</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
