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
<<<<<<< HEAD
                array_push($array, array('id'=>$assoc['id'], 'name' => $assoc['name']));
                array_push($array, array('id'=>$assoc['id'], 'nameDk' => $assoc['nameDk']));

=======
                array_push($array, array('id'=>$assoc['id'], 'name' => $assoc['name'], 'description' => $assoc['description']));
                array_push($array, array('id'=>$assoc['id'], 'nameDk' => $assoc['nameDk'], 'descriptionDk' => $assoc['descriptionDk']));
>>>>>>> 421fc63792ac87efb52079e10bb1299e42826a3e
            }
            return $array;
        }
    }