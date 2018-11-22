<?php

    // requires Item, connection to be included
    class ItemRepository{

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

        public static function insertItem($item){
            // Returns false if connection failed and/or query was not successful
            if(get_class($item) == "Item"){
                global $database;

                $query = sprintf("INSERT INTO items (name, price, description) VALUES (%s, %d, %s)", $item->getName(), $item->getPrice(), $item->getDescription());
                
                if( mysqli_query($database, $query)){
                    return true;
                }

                return false;
            }
        }

        public static function updateItem($item){
            // Returns false if connection failed and/or query was not successful
            if(get_class($item) == "Item"){
                global $database;

                $query = sprintf("UPDATE items SET name=%s, price=%d, description=%s WHERE id=%d", $item->getName(), $item->getPrice(), $item->getDescription(), $item->getId());

                if(mysqli_query($database, $query)){
                    return true;
                }

                return false;
            }
        }
    }