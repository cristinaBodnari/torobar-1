<?php 

    class User{
        private $id;
        private $username;
        private $password;

        function User($obj){
            if(gettype($obj) == "array"){
                if(array_key_exists("id", $obj)){
                    $this->id = $id;
                }
                if(array_key_exists("username", $obj)){
                    $this->username = $username;
                }
                if(array_key_exists("password", $obj)){
                    $this->password = $password;
                }
            }
        }

        function getId(){
            return $this->id;
        }

        function setId($id){
            $this->id = $id;
        }

        function getUsername(){
            return $this->username;
        }

        function setUsername($username){
            $this->username = $username;
        }

        function getPassword(){
            return $this->password;
        }

        function setPassword($password){
            $this->password = $password;
        }
    }