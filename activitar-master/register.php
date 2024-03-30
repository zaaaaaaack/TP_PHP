<?php 
session_start();
    require 'ConnexionBD.php';
    require 'loginFunctions.php';
    $bdd = ConnexionBD::getInstance();
    checkLoggedIn();

    if(isset($_POST['signup'])){
        if(!empty($_POST['fullname']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['password']) && !empty($_POST['password2'])){
            $fullname = htmlspecialchars($_POST['fullname']);
            $username = htmlspecialchars($_POST['username']);
            $email = htmlspecialchars($_POST['email']);
            $phone = htmlspecialchars($_POST['phone']);
            $password = sha1(htmlspecialchars($_POST['password']));
            $password2 = sha1(htmlspecialchars($_POST['password2']));
            if($password == $password2){
                $req = $bdd->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
                $req->execute(array($username, $email));
                if(($req->rowCount()) == 0){
                    $req = $bdd->prepare("INSERT INTO users(fullname, username, email, phone, password) VALUES(?, ?, ?, ?, ?)");
                    $req->execute(array($fullname, $username, $email, $phone, $password));
                    
                    header('Location: login.php');
                }else{
                    echo "<script>alert('Username ou email déjà utilisé'</script>)";
                }
            }else{
                echo "<script>alert('Les mots de passe ne correspondent pas')</script>";
            }
        }
    
    }
       


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/styleSignUp.css" />
    <script src="https://kit.fontawesome.com/8ff7d57ae9.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="title">
                <span>Sign up</span>
            </div>
            <form action="register.php" method="POST">
                <div class="row">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Full Name" name="fullname" required>
                </div>
                <div class="row">
                    <i class="fa-regular fa-user"></i>
                    <input type="text" placeholder="Username" name="username" required>
                </div>
                <div class="row">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" placeholder="Email" name="email" required>
                </div>
                <div class="row">
                    <i class="fa-solid fa-phone"></i>
                    <input type="text" placeholder="Phone" name="phone" required>
                </div>
                <div class="row">
                    <i class="fa-solid fa-lock"></i>
                    <input id ="password" type="password" placeholder="Password" name ="password" required onkeyup="check();">
                </div>
                <div class="row">
                    <i class="fa-solid fa-lock"></i>
                    <input id ="confirm_password" type="password" placeholder="Confirm Password" name ="password2" required onkeyup="check();">
                    <span id="message"></span>
                </div>
                <div class="row button">
                    <input type="submit" value="Sign up" name="signup">
                </div>
                <div class="login-link">
                    Already have an account? <a href="login.php">Login now</a>
                </div>
                <div class="login-link">
                    <a href="index.html">Acceuil</a>
                </div>
            </form>
        </div>
    </div>
    <script src="js/chechMatching.js"></script>
</body>
</html>
