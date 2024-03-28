
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
            } else {
                echo "<script>alert('Username ou mot de passe incorrect')</script>";
            }
        } else {
            echo "<script>alert('Veuillez remplir tous les champs')</script>";
        }
    }
}
function checkLoggedIn() {
    session_start();
    if(isset($_SESSION['username'])){
        header("Location: home.php");
    }elseif(isset($_SESSION['adminUsername'])){
        header("Location: adminHome.php");
    }
}
function checkNotLoggedIn() {
    session_start();
    if(!isset($_SESSION['username']) && !isset($_SESSION['adminUsername'])){
        header("Location: login.php");
    }
}
?>
