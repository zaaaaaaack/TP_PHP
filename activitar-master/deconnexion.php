<?php
session_start();
require 'loginFunctions.php';
checkNotLoggedIn();

$_SESSION = array();
session_destroy();
header('Location: index.php');
?>