<?php
    class Album{
        private $id;
        private $title;
        private $titleDK;
        private $photos = array();

        public function Album($obj = null){
            if(gettype($obj) == "array"){
                if(array_key_exists("id", $obj)){
                    $this->id = $obj["id"];
                }
                if(array_key_exists("title", $obj)){
                    $this->title = $object["title"];
                }
                if(array_key_exists("photos", $obj)){
                    if(gettype($obj["photos"]) == "array"){
                        $this->photos = $obj["photos"];
                    }
                }
                if(array_key_exists("titleDK", $obj)){
                    if(gettype($obj["titleDK"]) == "string"){
                        $this->titleDK = $obj["titleDK"];
                    }
                }
            } else if(gettype($obj) == "object"){
                if(get_class($obj) == "Photo"){
                    array_push($this->photos, $obj);
                }
            }
        }

        public function addPhoto($photo){
            if(gettype($photo) == "object"){
                if(get_class($photo) == "Photo"){
                    array_push($this->photos, $photo);
                }
            }
        }

        public function setPhotos($photos){
            if(gettype($photo) == "array"){
                $this->photos = $photos;
            }
        }

        public function getPhotos(){
            return $this->photos;
        }

        public function setId($id){
            if(gettype($id) == "integer"){
                $this->id = $id;
            }
        }

        public function getId(){
            return $this->id;
        }

        public function setTitle($title){
            if(gettype($title) == "string"){
                $this->title = $title;
            }
        }

        public function getTitle(){
            return $this->title;
        }

        public function expose(){
            // used for exposing elements to use with JSON
            return get_object_vars($this);
        }
    }