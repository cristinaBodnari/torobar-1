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
            } else if($_POST['target'] == 'addItem'){
                require_once("models/Item.php");
                require_once("repositories/ItemRepository.php");
                
                if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['categoryID'])){
                    $item = new Item(array("name" => $_POST['name'], "price" => $_POST['price'], "category" => $_POST['categoryID']));
                    if(ItemRepository::insert($item)){
                        $item = ItemRepository::getLastInserted();
                        echo (json_encode($item));
                        return;
                    }
                    $message = new Response(array("message" => "Cannot insert the item."));
                    echo (json_encode($message->expose()));
                    return;
                }
                $message = new Response(array("message" => "Bad request"));
                echo (json_encode($message->expose()));
                return;
            } else if($_POST['target'] == "deleteItem") {
                if(isset($_POST['id'])){
                    require_once("models/Item.php");
                    require_once("repositories/ItemRepository.php");

                    if(ItemRepository::delete($_POST['id'])){
                        $response = new Response(array("message" => "OK"));
                        echo json_encode($response->expose());
                        return;
                    } else {
                        $response = new Repsonse(array("message" => "Server Error"));
                        echo json_encode($response->expose());
                        return;
                    }
                }

                $response = new Repsonse(array("message" => "Bad Request"));
                echo json_encode($response->expose());
                return;

            } else if($_POST['target'] == 'category'){
                if(isset($_POST['id'])){
                    require_once("models/Category.php");
                    require_once("models/Item.php");
                    require_once("repositories/CategoryRepository.php");
                    require_once("repositories/ItemRepository.php");

                    $category = CategoryRepository::get($_POST['id']);
                    $items = ItemRepository::getCategoryItems($category->id);
                    $category->items = $items;

                    echo (json_encode($category));

                    return;
                }
            } else if($_POST['target'] == "addCategory"){
                if(isset($_POST['name']) && isset($_POST['nameDK'])){
                    require_once("models/Category.php");
                    require_once("models/Item.php");
                    require_once("repositories/CategoryRepository.php");
                    require_once("repositories/ItemRepository.php");

                    $category = new Category(array("name" => $_POST['name'], "nameDK" => $_POST['nameDK']));

                    if(CategoryRepository::create($category)){
                        $category = CategoryRepository::getLastCreated();

                        if($category == null){
                            $response = new Response(array("message" => "Server error1"));
                            echo json_encode($response->expose());
                            return;
                        } else {
                            $items = ItemRepository::getCategoryItems($category->id);
                            $category->setItems($items);
                            echo json_encode($category);
                            return;
                        }
                    }

                    $response = new Response(array("message" => "Server error"));
                    echo json_encode($response->expose());

                    return;
                }
                $response = new Response(array("message" => "Bad request"));
                echo json_encode($response->expose());
            }else if($_POST['target'] == 'deleteCategory'){
                if(isset($_POST['id'])){
                    require_once("repositories/CategoryRepository.php");
                    require_once("models/Category.php");
                    require_once("models/Item.php");
                    require_once("repositories/ItemRepository.php");

                    $items = ItemRepository::getCategoryItems($_POST['id']);

                    foreach($items as $item){
                        if(ItemRepository::delete($item->id)){
                            continue;
                        } else {
                            $response = new Response(array("message" => "Error"));
                            echo json_encode($response->expose());
                            return;
                        }
                    }
                    if(CategoryRepository::delete($_POST['id'])){
                        $response = new Response(array("message" => "OK"));
                    } else {
                        $response = new Response(array("message" => "Error"));
                    }
                    echo json_encode($response->expose());
                    return;
                }
                $response = new Response(array("message" => "Bad Request"));
                echo json_encode($response->expose());                
                return;
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

