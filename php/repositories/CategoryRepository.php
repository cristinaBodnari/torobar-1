<?php
    class CategoryRepository{
        public static function get($id){
            global $database;

            $query = printf("SELECT * FROM categories WHERE id=%d", $id);

            $result = mysqli_query($database, $query);

            if(!$result){
                return null;
            }
            
            $assoc = mysqli_fetch_assoc($result);

            return new Category(array('id' => $assoc['id'], 'name' => $assoc['name'], 'description' => $assoc['description']));

            return new Category(array('id' => $assoc['id'], 'nameDk' => $assoc['nameDk'], 'descriptionDk' => $assoc['descriptionDk']));

        }

        public static function getAll(){
            global $database;
            
            $arr = array();

            $query = printf("SELECT * FROM categories");

            $result = mysqli_query($database, $query);

            if(!$result){
                return null;
            }

            while($assoc = mysqli_fetch_assoc($result)){
                array_push($array, array('id'=>$assoc['id'], 'name' => $assoc['name'], 'description' => $assoc['description']));
                array_push($array, array('id'=>$assoc['id'], 'nameDk' => $assoc['nameDk'], 'descriptionDk' => $assoc['descriptionDk']));
            }
            return $array;
        }
    }