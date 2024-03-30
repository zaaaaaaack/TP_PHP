<?php

include_once '../autoload.php';

class Repository{

    protected  $bdd;
    protected $tablename;

    public function __construct($tablename){
        $this->bdd=ConnexionBD::getInstance();
        $this->tablename=$tablename;
    }

    public function getAll(){
        $sql="SELECT * from ".$this->tablename;
        $result=$this->bdd->prepare ($sql); 
        $result->execute ([]);
        return $users=$result->fetchAll(PDO :: FETCH_OBJ);
    }

}

    