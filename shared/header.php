<?php 
  // always define $title before including header if customer header required
  if(defined($title)){
    $title = "ToroBar";
  }

  require_once("php/database/connect.php");
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

   
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #000000;">
     <div class="container">
      <a class="navbar-brand order-1 mr-0" style="color: #ffffff" href="#" target="_blank">ToroBar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" style="color: #ffffff" href="index.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" style="color: #ffffff" href="about.php">About</a>
          <a class="nav-item nav-link" style="color: #ffffff" href="menu.php">Menu</a>
          <a class="nav-item nav-link" style="color: #ffffff" href="events.php">Events</a>
          <a class="nav-item nav-link" style="color: #ffffff" href="gallery.php">Gallery</a>
        </div>
       </div>
      </div> 
    </nav>
 
  </body>  
</html>  








