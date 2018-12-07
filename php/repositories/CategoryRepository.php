<?php
    class CategoryRepository{
        public static function get($id){
            global $database;

            $query = sprintf("SELECT * FROM categories WHERE id=%d", $id);

            $result = mysqli_query($database, $query);

            if(!$result){
                return null;
            }
            
            $assoc = mysqli_fetch_assoc($result);

            return new Category(array('id' => $assoc['id'], 'name' => $assoc['name']));

            return new Category(array('id' => $assoc['id'], 'nameDk' => $assoc['nameDk']));

        }

        public static function getAll(){
            global $database;
            
            $arr = array();

            $query = sprintf("SELECT * FROM categories");

            $result = mysqli_query($database, $query);

            if(!$result){
                return null;
            }

            while($assoc = mysqli_fetch_assoc($result)){
                array_push($arr, new Category(array('id'=>$assoc['id'], 'name' => $assoc['name'], 'nameDK' => $assoc["nameDK"])));
            }
            return $arr;
        }
    }