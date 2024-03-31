<?php
require_once "../../loginFunctions.php";
checkLoggedInAsUser();
checkNotLoggedIn();

    include_once '../autoload.php';
    $bdd=ConnexionBD::getInstance();

    if(isset($_GET["id"])){
        $id=$_GET["id"];
        $sql="DELETE from form where id=$id";
        $bdd->query($sql);
    }

    header("location: findex.php");
    exit;

    ?>

