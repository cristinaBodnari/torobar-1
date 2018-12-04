<?php
    if($_SERVER['REQUEST_METHOD'] === "POST") {
        
        require_once("database/connect.php");
        
        
    } else if($_SERVER['REQUEST_METHOD'] === "GET"){
        header("Location:../index.php");

        // require("models/Album.php");
        // $album = new Album();
        // echo (count($album->getPhotos()));
        // require("models/Item.php");
        // require("models/Menu.php");

        // $item = new Item(array("name" => "Rimbo"));
        // $item2 = new Item(array("id" => 41));
        // $menu = new Menu(array($item, $item2));
        // echo(json_encode($menu->expose()));
    }

