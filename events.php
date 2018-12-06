<?php
  // put your title for the page here, otherwise it's gonna be the default "TOROS"
  $title = "Event";
  require_once("shared/header.php");
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
    <!-- /nav -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
     <div class="container">
      <a class="navbar-brand order-1 mr-0" href="#http://wwww.torobar.com/home" target="_blank">ToroBar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="about.php">About</a>
          <a class="nav-item nav-link" href="menu.php">Menu</a>
          <a class="nav-item nav-link" href="events.php">Events</a>
          <a class="nav-item nav-link" href="gallery.php">Gallery</a>
        </div>
       </div>
      </div> 
    </nav> 
    <!-- nav -->

    <!-- jumbotron -->
      <div class="jumbotron jumbotron-fluid bg-info text-white">
        <div class="container text-center pt-5 ">
          <h1 class="display-2 m-3">ToroBar</h1>
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
  
  <!-- Gallery -->
  <div class="container pt-4"> <!-- /open container --> 
  <h1 class="display-4 text-center my-5 text-muted">Speakers</h1>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="card mb-3">
            <img class="card-img-top" src="img/vivianne.png" alt="Vivianne">
            <div class="card-body">
             <h4 class="card-title">Event</h4>
             <p class="card-text">jjjj</p>
           </div>
          </div>
        </div>
      
        <div class="col-md-6 col-lg-4">
          <div class="card mb-3">
            <img class="card-img-top" src="img/vivianne.png" alt="Vivianne">
            <div class="card-body">
             <h4 class="card-title">Event</h4>
             <p class="card-text">jjjj</p>
           </div>
          </div>
        </div>
      
        <div class="col-md-6 col-lg-4">
          <div class="card mb-3">
            <img class="card-img-top" src="img/vivianne.png" alt="Vivianne">
            <div class="card-body">
             <h4 class="card-title">Event</h4>
             <p class="card-text">jjjj</p>
           </div>
          </div>
        </div>
      
        <div class="col-md-6 col-lg-4">
          <div class="card mb-3">
            <img class="card-img-top" src="img/vivianne.png" alt="Vivianne">
            <div class="card-body">
             <h4 class="card-title">Event</h4>
             <p class="card-text">jjjj</p>
           </div>
          </div>
        </div>
      
        <div class="col-md-6 col-lg-4">
          <div class="card mb-3">
            <img class="card-img-top" src="img/vivianne.png" alt="Vivianne">
            <div class="card-body">
             <h4 class="card-title">Event</h4>
             <p class="card-text">jjjj</p>
           </div>
          </div>
        </div>
      
        <div class="col-md-6 col-lg-4">
          <div class="card mb-3">
            <img class="card-img-top" src="img/vivianne.png" alt="Vivianne">
            <div class="card-body">
             <h4 class="card-title">Event</h4>
             <p class="card-text">jjjj</p>
           </div>
          </div>
        </div>
      </div>   
     <!-- /Gallery --> 
    </div>     <!-- /close container -->    
  </body>
</html>  

<?php 
  require_once("shared/footer.php");
?>

