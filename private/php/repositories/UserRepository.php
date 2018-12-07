<?php 

    class UserRepository{
        public static function getUser($username){
            if(gettype($username) == "string"){
                global $database;

                $query = "SELECT * FROM users WHERE username='" . $username . "' LIMIT 1";

                $result = mysqli_query($database, $query);

                if(!$result || $result->num_rows == 0){
                    return null;
                }

                $assoc = mysqli_fetch_assoc($result);

                return new User(array("id" => $assoc["id"], "username" => $assoc["username"], "password" => $assoc["password"]));
            }
        }

        public static function createUser($user){
            if(gettype($user) == "object"){
                if(get_class($user) == "User"){
                    $password = password_hash($user->getPassword(), PASSWORD_BCRYPT);

                    global $database;

                    $query = sprintf("INSERT INTO users(username, password) VALUES (%s, %s)", $user->getUsername(), $password);

                    if(mysqli_query($database, $query)){
                        return true;
                    } else {
                        return false;
                    }
                }
            }
        }
    }