<?php
function attemptLogin($tableName, $redirectPage) {

    if(session_status() !== PHP_SESSION_ACTIVE) session_start();
    require 'ConnexionBD.php';

    if(isset($_POST['submit']) || isset($_POST['login'])) {
        if(!empty($_POST['username']) && !empty($_POST['password'])) {
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);

            // Applying SHA1 only if it's a regular user login
            if ($tableName === "users") {
                $password = sha1($password);
            }

            $bdd = ConnexionBD::getInstance();
            $req = $bdd->prepare("SELECT * FROM $tableName WHERE username = ? AND password = ?");
            $req->execute(array($username, $password));

            if($req->rowCount() == 1) {
                $user = $req->fetch(PDO::FETCH_ASSOC);
                $_SESSION['id'] = $user['id'];
                // Store username in a generic session variable since it's shared between admin and users
                if ($tableName === "users") {
                    $_SESSION['username'] = $user['username'];
                } else {
                    $_SESSION['adminUsername'] = $user['username'];
                }
                header("Location: $redirectPage");
                exit;
            } else {
                echo "<script>alert('Username ou mot de passe incorrect')</script>";
            }
        } else {
            echo "<script>alert('Veuillez remplir tous les champs')</script>";
        }
    }
}
function checkLoggedInAsAdmin() {
    if(session_status() !== PHP_SESSION_ACTIVE) {session_start();}
    if(isset($_SESSION['adminUsername'])){
        header("Location: admin-dashboard/index.php");
        exit;
    }
}
function checkLoggedInAsUser() {
    if(session_status() !== PHP_SESSION_ACTIVE) {session_start();}
    if(isset($_SESSION['username'])){
        $page =getcwd();
        if(str_ends_with($page, "admin-dashboard")){
            header("Location: ../home.php");
            exit;
        }
        elseif(str_ends_with($page,"clients")||str_ends_with($page,"contactform")){
            header("Location: ../../home.php");
            exit;
        }else{
            header("Location: home.php");
            exit;
        }
    }
}
function checkNotLoggedIn() {
    if(session_status() !== PHP_SESSION_ACTIVE) {session_start();}

    if(!isset($_SESSION['username']) && !isset($_SESSION['adminUsername'])){
        $page =getcwd();
        if(str_ends_with($page, "admin-dashboard")){
            header("Location: ../login.php");
            exit;
        }elseif(str_ends_with($page,"clients")||str_ends_with($page,"contactform")){
            header("Location: ../../login.php");
            exit;
        }
        else{
            header("Location: login.php");
            exit;
        }
        
    }
}
?>
