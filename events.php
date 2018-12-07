<?php
  // put your title for the page here, otherwise it's gonna be the default "TOROS"
  $title = "Event";
  require_once("shared/header.php");

  require_once("php/models/Event.php");
  require_once("php/repositories/eventRepository.php");

  $events = eventRepository::getNearestEvents();
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
  
  <!-- Gallery -->
  <div class="container pt-4"> <!-- /open container --> 
      <div class="row">
        <?php if($events != null) {?>
          <?php foreach($events as $event) {?>

            <div class="col-md-6 col-lg-4">
              <div class="card mb-3">
                <img class="card-img-top" src="<?php echo $event->imageURL?>" alt="Vivianne">
                <div class="card-body">
                <h4 class="card-title"><?php echo $event->title?></h4>
                <p class="card-text"><?php echo $event->date?></p>
              </div>
              </div>
          <?php } ?>
        <?php } else { ?>
          <div class="col-md-6 col-lg-4 offset-md-3 offset-lg-4">
          <div class="card mb-3">
            <img class="card-img-top" src="img/vivianne.png" alt="Vivianne">
            <div class="card-body">
             <h4 class="card-title">No upcoming events</h4>
             <p class="card-text">The events will be added here</p>
           </div>
        </div>
        <?php } ?>

      </div>   
     <!-- /Gallery --> 
    </div>     <!-- /close container -->    
  </body>
</html>  

<?php 
  require_once("shared/footer.php");
?>

