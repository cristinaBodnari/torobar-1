<?php
  // put your title for the page here, otherwise it's gonna be the default "TOROS"
  $title = "Gallery";

  require_once("shared/header.php");

  require_once("php/database/connect.php");
  require_once("php/models/Photo.php");
  require_once("php/repositories/PhotoRepository.php");

  $photos = PhotoRepository::getLatest();
?>
   
<!DOCTYPE html>
 <html lang="en">
  <head>
    <title>ToroBar</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css"/>
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


    <!-- Grid row -->
    <div class="gallery" id="gallery">

      <!-- Grid column -->
      <?php if($photos != null) { ?>
        <?php foreach($photos as $photo){ ?>
          <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="<?php echo $photo->url; ?>" alt="Image id <?php echo $photo->id; ?>">
          </div>
        <?php } ?>
      <?php } else { ?>
        <div class="row">
          <div class="col" style="text-align: center">
            <h3>No images!</h3>
          </div>
        </div>
      <?php } ?>
      <!-- Grid column -->

    </div>


    </div> 
  </body>
</html>    

<?php 
  require_once("shared/footer.php");
?>