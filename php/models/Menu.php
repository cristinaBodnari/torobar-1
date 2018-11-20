<?php
    // !!! requires Item object to be imported !!!
    // Takes optional $obj as an array
    class Menu{
        private $items = array();

        public function Menu($obj = null){
            if(isset($obj)){
                if(gettype($obj) == "array"){
                    $this->items = $obj;
                }
            }    
        }

        public function addItem($item){
            if(get_class($item) == "Item"){
                array_push($items, $item);
            }
        }

        public function getItems(){
            return $this->items;
        }

        public function expose(){
            return get_object_vars($this);
        }

    };