<?php
    class PhotoRepository{
        public static function get($id){
            if(gettype($id) == "integer"){
                global $database;

                $query = sprintf("SELECT * FROM photos WHERE id=%d", $id);

                $result = mysqli_query($database, $query);

                if(!result){
                    return null;
                }

                $assoc = mysqli_fetch_assoc($result);

                return new Photo(array('id' => $assoc['id'], 'url' => $assoc['url'], 'album' => $assoc['album']));
            }
        }

        public static function getAll(){
            global $database;

            $photos = array();

            $query = sprintf("SELECT * FROM photos");

            $result = mysqli_query($database, $query);

            if(!$result){
                return null;
            }

            while($item = mysqli_fetch_assoc($result)){
                array_push($photos, new Photo(array('id' => $assoc['id'], 'url' => $assoc['url'], 'album' => $assoc['album'])));
            }
            return $photos;
        }

        public static function update($obj){
            if(gettype($obj) == "object"){
                if(get_class($obj) == "Photo"){
                    global $database;

                    $query = sprintf("UPDATE photos SET url=%s, album=%d WHERE id=%d", $obj->url, $obj->getAlbumId(), $obj->id);

                    if(mysqli_query($database, $query)){
                        return true;
                    }
                }
            }
            return false;
        }

        public static function insert($obj){
            if(gettype($obj) == "object"){
                if(get_class($obj) == "Photo"){
                    global $database;

                    $query = sprintf("INSERT INTO photos (url, albumId) VALUES (%s, %d)", $obj->url, $obj->getAlbumId());

                    if(mysqli_query($database, $query)){
                        return true;
                    }
                }
            }
            return false;
        }

        public static function delete($obj){
            if(gettype($obj) == "integer"){
                global $database;

                $query = sprintf("DELETE FROM photos WHERE id=%d", $obj);

                if(mysqli_query($database, $query)){
                    return true;
                }
            } else if(gettype($obj) == "object"){
                if(get_class($obj) == "Photo"){
                    global $database;

                    $query = sprintf("DELETE FROM photos WHERE id=%d", $obj->id);

                    if(mysqli_query($database, $query)){
                        return true;
                    }
                }
            }
        }

    }