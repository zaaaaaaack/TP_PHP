<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/fork1/TP_PHP/activitar-master/loginFunctions.php';

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

