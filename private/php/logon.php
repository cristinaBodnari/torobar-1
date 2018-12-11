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

                    $_SESSION['user'] = $user->getUsername();
                    header("Location: ../index.php");
                }
                header("Location:../login.php");
            } else {
                header("Location:../login.php");
            }

            
        } else {
            echo "BAD REQUEST";
        }
    } else {
        echo "WRONG REQ METHOD";
    }