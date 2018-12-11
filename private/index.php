<?php
    session_start();
    if(!isset($_SESSION['user'])){
        // redirect to login
        header("Location: login.php");
    }

    //get connection variables
    require_once("../php/database/connect.php");
    //get the menu functions
    require_once("../php/models/Item.php");
    require_once("../php/models/Category.php");
    require_once("../php/repositories/ItemRepository.php");
    require_once("../php/repositories/CategoryRepository.php");

    $categories = CategoryRepository::getAll();

    for($i = 0; $i < count($categories); $i++){
        $items = ItemRepository::getCategoryItems($categories[$i]->id);

        $categories[$i]->items = $items;
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Admin panel</title>
    <link rel="stylesheet" href="style.css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  </head>
  <body>

    <div class="container mainContainer">
        <div class="row">
            <div class="col-md-3 menuBar">
                <span class="welcome-message">Welcome, <?php echo $_SESSION['user'];  ?>.</span>
                <br/>
                <a class="active" href="#">Menu</a>
                <a href="#">Link</a>
                <a class="logout" href="/php/logout.php">Logout</a>
            </div>
            <div class="col-md-8 col-sm-12 mainArea">
                <div class="container">
                    <div class="row">
                        <table class="table table-dark">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Category</th>
                                <th scope="col">Items</th>
                                <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($categories as $category) {?>
                                <tr>
                                    <th scope="row"><?php echo $category->id; ?></th>
                                    <td><?php echo $category->name; ?> (<?php echo $category->nameDK; ?>)</td>
                                    <td><?php echo count($category->items); ?></td>
                                    <td>
                                        <button class="btn btn-success edit-btn" id="edit-<?php echo $category->id?>">Edit</button>
                                        <button class="btn btn-danger delete-btn" id="delete-<?php echo $category->id?>">Delete</button>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        <button class="btn btn-primary" id="new-btn" data-toggle="modal" data-target="#createNewModal">Add new category</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="createNewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="#">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter a category name">
                    <small id="nameHelp" class="form-text text-muted">This name will appear in english website.</small>
                </div>
                <div class="form-group">
                    <label for="nameDK">Navn</label>
                    <input type="text" class="form-control" id="nameDK" aria-describedby="nameHelpDK" placeholder="Enter a category name">
                    <small id="nameHelpDK" class="form-text text-muted">This name will appear in danish website.</small>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="edit-category-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="edit-modal-body">
                <ul id="edit-list">
                    <li>Hello <span style="right: 0; font-weight: bold">X</span></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class='btn btn-success add-item' id='add-item'>Add item</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
            </div>
        </div>
    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>