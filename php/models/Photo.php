<?php 
    class Photo{
        public $id;
        public $url;
        private $albumId;

        public function Photo($obj = null){
            if($obj != null){
                if(gettype($obj) == "array"){
                    if(array_key_exists("id", $obj)){
                        $this->id = $obj["id"];
                    }
                    if(array_key_exists("url", $obj)){
                        $this->url = $obj["url"];
                    }
                    if(array_key_exists("albumId", $obj)){
                        $this->albumId = $obj["albumId"];
                    }
                }
            }
        }

        public function setAlbumId($id){
            if(gettype($id) == "integer"){
                $this->id = $id;
            }
        }

        public function getAlbumId(){
            return $this->id;
        }
    }