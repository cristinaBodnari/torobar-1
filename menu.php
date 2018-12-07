<?php
  // put your title for the page here, otherwise it's gonna be the default "TOROS"
  $title = "Gallery";
  require_once("shared/header.php");

  require_once("php/database/connect.php");

  require_once("php/models/Category.php");
  require_once("php/repositories/CategoryRepository.php");
  require_once("php/models/Item.php");
  require_once("php/repositories/ItemRepository.php");

  $categories = CategoryRepository::getAll();

  if($categories == null){
    
  } else {
    for($i=0; $i < count($categories); $i++){
      $items = ItemRepository::getCategoryItems($categories[$i]->id);
  
      $categories[$i]->setItems($items);
    }
  }
?>
   
<!DOCTYPE html>
 <html lang="en">
  <head>
    <title>ToroBar</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>

    <!-- jumbotron -->
      <div class="jumbotron jumbotron-fluid bg-info text-white">
        <div class="container text-center pt-5 ">
          <h1 class="display-2 m-3">ToroBar</h1>
        </div>
      </div>  
    <!-- /jumbotron -->  
    <div class="container pt-4"> <!-- /open container --> 
        <div class="row">
        <?php if($categories != null) { ?>
          <?php foreach($categories as $category) {?>
          <div class="col-md-6 col-lg-4">
            <div class="card mb-3">
              
              <div class="card-body">
              <h4 class="card-title"><?php echo $category->name?></h4>
                  <table>
                      <thead>
                      <tr>
                          <th>Name</th>
                          <th>Price</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php foreach($category->items as $item) {?>
                          <tr >
                              <td ><?php echo $item->title; ?></td>
                              <td ><?php echo $item->price; ?></td>
                          </tr>
                        <?php } ?>
                      </tbody>

                      </tr>
                  </table>

              </div>
              </div>
            </div>
          <?php } ?>
        <?php } else { ?>
                          
          <div class="col-md-6 col-lg-4">
            No items added
          </div>

        <?php } ?>
      </div>

    </div>     <!-- /close container -->  

  </body>
</html>    

<?php 
  require_once("shared/footer.php");
?>