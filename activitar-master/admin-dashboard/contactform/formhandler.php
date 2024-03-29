<?php
session_start();
include_once '../autoload.php';
$formrepository=new FormRepository();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];
    try{
        $formrepository->addForm($name,$email,$message);
       
    }catch(PDOException $e){
        die("Connection failed: " . $e->getMessage());
    }
}else{
    header("Location:../../index.html");
}
