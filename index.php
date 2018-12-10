<?php
  // put your title for the page here, otherwise it's gonna be the default "TOROS"
  $title = "Index";
  require_once("php/models/Event.php");
  require_once("php/repositories/eventRepository.php");
  require_once("php/models/Item.php");
  require_once("php/repositories/ItemRepository.php");
  $nearest_event = EventRepository::getNearest();
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
    <style>  .JumbotronHeaderImg{
  /*background-image: url("images/woodPlatesinBar.jpg");
  background-size: cover;*/
  background-color: black;
 }</style>
 
       <div class="jumbotron jumbotron-fluid text-white JumbotronHeaderImg">
          <div class="container text-center pt-5 ">
            <h1 class="display-2 m-3">ToroBar</h1>
              <!-- <img src="images/woodPlatesinBar.jpg" alt="toro"> -->
             <div class="btn-group" role="group" aria-label="Basic example">
              <nav class="nav nav-pills nav-justified navbar-expand-sm">
                <a class="button btn-light btn-lg m-2" href="about.php">About</a>
                <a class="button btn-light btn-lg m-2" href="menu.php">Menu</a>
                <a class="button btn-light btn-lg m-2" href="events.php">Events</a>
                <a class="button btn-light btn-lg m-2" href="gallery.php">Gallery</a>
              </nav>
             </div> 
          </div>
        </div>  
    
  <!-- /jumbotron -->   
    
    <div class="container pt-4"> <!-- content with fixed width -->
      <!-- Monthly Specials -->
     <div class="row">

        <div class="col-md-6 col-lg-4">
          <div class="card mb-3">
            <img class="card-img-top" src="images/gløgg.jpg" alt="fængslet">
            <div class="card-body">
             <h4 class="card-title">The Drink of the Month: "Gløgg"</h4>

             <p class="card-text">Vores hjemmelavet gløgg er kun 50,- per glas. Kom og smag! Skål!</p>
             <a href="#menu" class="btn btn-primary">See all drinks</a>
           </div>
          </div>
        </div>

        <?php if($nearest_event != null){?>
        <div class="col-md-6 col-lg-4">
          <div class="card mb-3">
            <img class="card-img-top" src="<?php echo $nearest_event->imageURL?>" alt="Vivianne">
            <div class="card-body">
             <h4 class="card-title"><?php echo $nearest_event->title?></h4>
             <p class="card-text"><?php echo $nearest_event->description?></p>
             <a href="/menu" class="btn btn-primary">See all events</a>
           </div>
          </div>
        </div>
      <?php } else { ?>
        <div class="col-md-6 col-lg-4">
          <div class="card mb-3">
            <img class="card-img-top" src="images/boglancering.jpg"  alt="gløgg">
            <div class="card-body">
             <h4 class="card-title">There are no upcoming events</h4>
             <p class="card-text">Events will be displayed.</p>
             <a href="menu.php" class="btn btn-primary">See all Drinks</a>
           </div>
          </div>
        </div>
      <?php } ?>
      
        <div class="col-md-6 col-lg-4">
          <div class="card mb-3">
            <img class="card-img-top" src="images/skilt.jpg" alt="skilt">
            <div class="card-body">
             <h4 class="card-title">Happy Hour every Monday to Wednesday</h4>
             <p class="card-text"> Fra 12-20 har vi 20% rabat til alle vores drinks, øl og vin, derefter vores kaffe menu er kun 20kr,-.</p>
             <a href="#menu" class="btn btn-primary">See All Events</a>
           </div>
          </div>
        </div>
      </div>
    </div><!-- /.CONTAINER-->  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>