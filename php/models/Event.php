<?php

    class Event{
        public $id;
        public $title;
        public $titleDK;
        public $date;
        public $time;
        public $description;
        public $descriptionDK;
        public $imageURL;

        public function Event($obj){
            if(isset($obj)){
                if(gettype($obj) == "array"){
                    if(array_key_exists("id", $obj)){
                        if(gettype($obj["id"]) == "integer"){
                            $this->id = $obj["id"];
                        }
                    }
                    if(array_key_exists("title", $obj)){
                        if(gettype($obj["title"]) == "string"){
                            $this->title = $obj["title"];
                        }
                    }
                    if(array_key_exists("titleDK", $obj)){
                        if(gettype($obj["titleDK"]) == "string"){
                            $this->titleDK = $obj["titleDK"];
                        }
                    }
                    if(array_key_exists("date", $obj)){
                        if(gettype($obj["date"]) == "string"){
                            $this->date = $obj["date"];
                        }
                    }
                    if(array_key_exists("time", $obj)){
                        if(gettype($obj["time"]) == "string"){
                            $this->time = $obj["time"];
                        }
                    }
                    if(array_key_exists("description", $obj)){
                        if(gettype($obj["description"]) == "string"){
                            $this->description = $obj["description"];
                        }
                    }
                    if(array_key_exists("descriptionDK", $obj)){
                        if(gettype($obj["descriptionDK"]) == "string"){
                            $this->descriptionDK = $obj["descriptionDK"];
                        }
                    }
                    if(array_key_exists("imageURL", $obj)){
                        if(gettype($obj["imageURL"]) == "string"){
                            $this->imageURL = $obj["imageURL"];
                        }
                    }

                }
            }
        }
    }