<?php
  // put your title for the page here, otherwise it's gonna be the default "TOROS"
  $title = "Index";
  require_once("shared/header.php");
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
  </head>
  <body>
   <!-- jumbotron -->
    <div class="bg" style="background-image: url("woodPlatesinBar.jpg");">
       <div class="jumbotron jumbotron-fluid bg-info text-white">
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
    </div>
  <!-- /jumbotron -->   
    
    <div class="container pt-4"> <!-- content with fixed width -->
      <!-- Monthly Specials -->
     <div class="row">

        <div class="col-md-6 col-lg-4">
          <div class="card mb-3">
            <img class="card-img-top" src="images/gløgg.jpg" alt="fængslet">
            <div class="card-body">
             <h4 class="card-title">The Next Upcoming Events</h4>
             <p class="card-text">Vi har haft den fornøjelse at give tag til Deniz Serincis bogreception. </p>
             <a href="#menu" class="btn btn-primary">See all Drinks</a>
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
             <a href="/menu" class="btn btn-primary">See all Drinks</a>
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
    

<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ToroBar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <style>

  .fakeimg {
      height: 200px;
      background: #aaa;
  }
  </style>
</head>
<body>


<div class="container" style="margin-top:30px">

   <div class="row">

    <div class="col-sm-4">
          <h2>Cocktail of the Month!</h2>
          <h5>Name of cocktail:</h5>
          <div class="fakeimg">cocktail image</div>
          <p>Description of cocktail</p>
    </div>


        <div class="col-sm-4">
          <h2>Nearest Events!</h2>
          <h5>Title of event, Dec 7, 2017</h5>
          <div class="fakeimg">event image</div>
          <p>Event description</p>
         </div> 

        <div class="col-sm-4">
          <h2>Beer of the Month!</h2>
          <h5>beer name</h5>
          <div class="fakeimg">beer image</div>
           <p>Beer description</p>
       </div>

  </div>
</div>


<div class="jumbotron text-center" style="margin-bottom:0">
  
  <div class="row">
    
      <div class="col-sm-2">
        <h1> Kontakt </h1>
        <p>Tlf nr: 000000000</p>
        <p>email : cccccc</p>
      </div>

      <div class="col-sm-2">
        <h1> Opening hours: </h1>
        <p>Tlf nr: 000000000</p>
        <p>email : cccccc</p>
      </div>

      <div class="col-sm-2">
        <h1> Facebook </h1>
        <h1> Instagram </h1>
      </div>

  </div>



</div>

</body>
</html>
Insert code here -->

<?php 
  require_once("footer.php");
?>
