<?php

    class AlbumRepository{
        public static function insert($album){
            if(gettype($album) == "object"){
                if(get_class($album) == "Album"){
                    global $database;

                    $query = sprintf("INSERT INTO albums (title) VALUES (%s)", $album->getTitle());

                    if(mysqli_query($database, $query)){
                        return true;
                    }

                    $id = $database->lastInsertId();

                    if($album->getPhotos){
                        
                    }
                }
            }
            return false;
        }

        public static function get($id){
            // returns an Album object with filled array of photos
            if(gettype($id) == "integer"){
                global $database;

                // return variables
                $albumId = null;
                $albumTitle = null;
                $photos = array();

                $query = sprintf("SELECT photos.id AS id, photos.url AS url, photos.album AS albumID, albums.title AS albumTitle FROM photos INNER JOIN albums ON photos.album=albums.id WHERE photos.album=%d", $id);

                $result = mysqli_query($database, $query);

                while($photo = mysqli_fetch_assoc($result)){
                    if($albumId == null){
                        // only runs the first time to set the value
                        $albumId = $photo["albumId"];
                    }
                    if($albumTitle == null){
                        $albumTitle = $photo["albumTitle"];
                    }

                    array_push($photos, new Photo(array(
                        "id" => $photo["id"],
                        "url" => $photo["url"],
                        "albumId" => $photos["albumID"]
                    )));
                }

                return new Album(array(
                    "id" => $albumId,
                    "title" => $albumTitle,
                    "photos" => $photos
                ));
            }
        }

        public static function update($album){
            // this only updates the title of the album
            if(gettype($album) == "object"){
                if(get_class($album) == "Album"){
                    global $database;

                    $query = printf("UPDATE albums SET title=%s WHERE id=%d", $album->getTitle(), $album->getId());
                
                    if(mysqli_query($database, $query)){
                        return true;
                    }
                }
            }
            return false;
        }

        public static function removePhotoFromLibrary($data){
            // data should include the target photo as photo, and target album as album
            if(gettype($data) == "array"){
                if(key_exists("photo", $data) && key_exists("album", $data)){
                    global $database;

                    $query = printf("DELETE FROM photos WHERE id=%d AND album=%d", $data["photo"], $data["album"]);

                    if(mysqli_query($database, $query)){
                        return true;
                    }
                }
            }
            return false;
        }
    }