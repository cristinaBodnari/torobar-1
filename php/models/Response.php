<?php

    class Response{
        private $message;

        public function Response($obj){
            if(gettype($obj) == "array"){
                if(array_key_exists("message")){
                    $this->$obj["message"];
                }
            }
        }

        public function expose(){
            return get_object_vars($this);
        }
    }