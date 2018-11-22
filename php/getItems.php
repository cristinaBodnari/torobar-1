<?php
    if($_SERVER['REQUEST_METHOD'] === "POST") {
        require_once("database/connect.php");
        if(isset($_POST['target'])){
            if($_POST['target'] == "item" && isset($_POST['id'])){

                $IDint = intval($_POST['id']);

                
            } else if($_POST['target'] == "menu"){

            }
        }
        
    } else if($_SERVER['REQUEST_METHOD'] === "GET"){
        require("models/Album.php");
        $album = new Album();
        echo (count($album->getPhotos()));
        // require("models/Item.php");
        // require("models/Menu.php");

        // $item = new Item(array("name" => "Rimbo"));
        // $item2 = new Item(array("id" => 41));
        // $menu = new Menu(array($item, $item2));
        // echo(json_encode($menu->expose()));
    }

