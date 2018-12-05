<?php
    if($_SERVER['REQUEST_METHOD'] === "POST") {
        if(isset($_POST['target'])){
            require_once("database/connect.php");
            require_once("models/Response.php");
            if($_POST['target'] == "item"){
                if(isset($_POST['id'])){
                    require_once("models/Item.php");
                    require_once("repositories/ItemRepository.php");
                    echo (json_encode(ItemRepository::get($_POST['id'])));
                    return;
                } else {
                    echo new Response("Wrong fields");
                    return;
                }
            } else if($_POST['target'] == 'items'){
                require_once("models/Item.php");
                require_once("repositories/ItemRepository.php");
                echo (json_encode(ItemRepository::getAll()));
                return;
            } else if($_POST['target'] == 'category'){
                if(isset($_POST['id'])){
                    require_once("models/Category.php");
                    require_once("repositories/CategoryRepository.php");
                    echo (json_encode(CategoryRepository::get($id)));
                    return;
                }
            } else if($_POST['target'] == "categories"){
                require_once("models/Category.php");
                require_once("repositories/CategoryRepository.php");
                echo (json_encode(CategoryRepository::getAll()));
                return;
            } else if($_POST['target'] == "events"){
                require_once("models/Event.php");
                require_once("repositories/EventRepositories.php");
                echo (json_encode(EventRepository::getAll()));
                return;
            } else if($_POST['target'] == "event"){
                require_once("models/Event.php");
                require_once("repositories/EventRepositories.php");
                if(isset($_POST['id'])){
                    echo (json_encode(EventRepository::get($_POST['id'])));
                } 
                echo (json_encode(new Response("Whateber")));
                return;
            } else if($_POST['target'] == "menu"){
                require_once("models/Item.php");
                require_once("repositories/ItemRepository.php");
                require_once("models/Category.php");
                require_once("repositories/CategoryRepository.php");

                $categories = CategoryRepository::getAll();

                for($i = 0; i < sizeof($categories); $i++){
                    $items = ItemRepository::getCategoryItems($categories[$i]->id);

                    $categories[$i] -> setItems($items);
                }

                echo (json_encode(new Menu($categories)));
                return;
            }
            return;
        }
        return;
        // require_once("database/connect.php");
        
        
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

