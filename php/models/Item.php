<?php
    class Item{
        // The constructor can accept any element or none
        // Only element type array will be read
        // Only the appropriate values will be read (id, name, price, description) ARRAY HAS TO BE INDEXED CORRECTLY

        // Items have to be public in order to work with menu
        public $id;
        public $name;
        public $price;
        public $description;

        public function Item($obj = null){
            if(isset($obj)){
                if(gettype($obj) == "array"){
                    if(array_key_exists("id", $obj)){
                        if(gettype($obj["id"]) == "integer"){
                            $this->id = $obj["id"];
                        }
                    }
                    if(array_key_exists("name", $obj)){
                        if(gettype($obj["name"]) == "string"){
                            $this->name = $obj["name"];
                        }
                    }
                    if(array_key_exists("price", $obj)){
                        if(gettype($obj["price"]) == "string"){
                            $this->price = $obj["price"];
                        }
                    }
                    if(array_key_exists("description", $obj)){
                        if(gettype($obj["description"]) == "string"){
                            $this->description = $obj["description"];
                        }
                    }
                }
            }
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function setPrice($price){
            $this->price = $price;
        }

        public function getPrice(){
            return $this->price;
        }

        public function setDescription($description){
            return $this->description = $description;
        }
        
        public function getDescription(){
            return $this->description;
        }

        public function expose(){
            // used for exposing elements to use with JSON
            return get_object_vars($this);
        }
    };