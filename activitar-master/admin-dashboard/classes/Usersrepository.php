<?php

include_once '../autoload.php';

class Usersrepository extends Repository{
    

    public function __construct(){
        parent::__construct('users');
    }


    public function adduser($fullname, $username, $email, $phone, $password) {
        $errorMessage = "";
        $successMessage = "";

        do {
            if (empty($fullname) || empty($username) || empty($email) || empty($phone) || empty($password)) {
                $errorMessage = "All the fields are required";
                break;
            }

            // Add to database
            $sql = "INSERT INTO users(fullname, username, email, phone, password)" .
                " VALUES(?, ?, ?, ?, ?)";
            $result = $this->bdd->prepare($sql);
            $result->execute([$fullname, $username, $email, $phone, $password]);
            if (!$result) {
                $errorMessage = "Error while saving the user";
                break;
            }

            $successMessage = "user added successfully!";
            header("location: cindex.php");
            exit;
        } while (false);

        return [$errorMessage, $successMessage];
    }

}

    