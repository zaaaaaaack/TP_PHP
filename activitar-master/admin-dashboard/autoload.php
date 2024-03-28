<?php

function load ($classname){
    include_once "classes/$classname.php";
}

spl_autoload_register('load');