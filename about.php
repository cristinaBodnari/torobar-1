<?php
  // put your title for the page here, otherwise it's going to be the default "TOROS"
  $title = "About";
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
        </div>
      </div>  
    <!-- /jumbotron -->  
    <div class="container pt-4"> <!-- /open container --> 
       <!-- ABOUT -->
       <div class="row">
        <div class="col-lg">
         <h3 class="mb-4">HVEM ER VI</h3>   <!-- MB-4 is margin spacing --> 
          <img class="mb-4 img-fluid rounded d-none d-sm-block" src="img/pdx.jpg" alt="portland">
          <p>Torobar Torobar Torobar Torobar Torobar Torobar Torobar Torobar Torobar Torobar Torobar Torobar</p>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. 
          Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur 
          ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat 
          massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. </p> 
        </div>    
      </div><!-- /ABOUT -->   
    </div>
  </div>     <!-- /close container -->  
 </body>  
</html>  


<?php 
  require_once("shared/footer.php");
?>


