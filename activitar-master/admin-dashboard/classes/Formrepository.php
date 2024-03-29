<?php

class Formrepository extends Repository {
    public function __construct() {
        parent::__construct("form");
    }

    public function addForm($name, $email, $message) {
        // Add to database
        $sql = "INSERT INTO form(name, email, message)" .
            " VALUES(?, ?, ?)";
        $result = $this->bdd->prepare($sql);
        $result->execute([$name, $email, $message]);
        header("location: ../../index.php");
        exit;

}

}