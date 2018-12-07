<?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(array_key_exists("username", $_POST) && array_key_exists("password", $_POST)){
            require_once("../../php/database/connect.php");
            require_once("models/User.php");
            require_once("repositories/UserRepository.php");
            
            $username = mysqli_real_escape_string($database, $_POST["username"]);
            $password = mysqli_real_escape_string($database, $_POST["password"]);

            $user = UserRepository::getUser($username);

            if($user != null){
                if(password_verify($password, $user->getPassword())){
                    session_start();

                    $_SESSION['user'] = $user;
                    echo "verified";
                }
            } else {
                // echo "Cant authorize";
                // add redirect
            }

            
        } else {
            echo "  BAD REQUEST";
        }
    } else {
        echo password_hash("password", PASSWORD_BCRYPT, ["cost" => 12]);
        echo "WRONG REQ METHOD";
    }