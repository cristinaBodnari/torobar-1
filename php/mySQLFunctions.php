<?php

    // requires Item, connection to be included
    class mySQLFunctions{

        public static function getItem($id){
            //returns an object of type Item
            if(gettype($id) == "integer"){
                // get the global item
                global $database;
                
                $query = sprintf("SELECT * FROM items WHERE id='%d'", $id);
    
                $result = mysqli_query($database, $query);

                if(!$result){
                    exit("Cannot connect to the database.");
                }
                
                $assoc = mysqli_fetch_assoc($result);

                return new Item(array('id' => $assoc['id'], 'name' => $assoc['name'],'price' => $assoc['price']));
            }
        }

        public static function getAllItems(){
            // returns an array of items, empty if error or none are existent
            global $database;

            // empty array to be returned at the end
            $items = array();

            $query = sprintf("SELECT * FROM items");

            $result = mysqli_query($database, $query);

            if(!$result){
                exit("Cannot connect to the database.");
            }

            while($item = mysqli_fetch_assoc($result)){
                array_push($items, new Item(array('id' => $assoc['id'], 'name' => $assoc['name'],'price' => $assoc['price'])));
            }

            return $items;
        }
    }