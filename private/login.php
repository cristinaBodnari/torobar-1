
<?php
  // put your title for the page here, otherwise it's gonna be the default "TOROS"
  $title = "Login";
  require_once("php/models/Event.php");
  require_once("php/repositories/eventRepository.php");
  require_once("php/models/Item.php");
  require_once("php/repositories/ItemRepository.php");

  

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ToroBar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
   <link rel="stylesheet" href="../styles/loginStyles.css">
   <link rel="stylesheet" href="styles/style.css"/>
  </head>
  <body>

   <style>
   .JumbotronHeaderImg{
      background-image: url("images/woodPlatesinBar.jpg");
      background-size: cover;
   }
   </style> 

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

    <!-- jumbotron -->
        <!-- jumbotron -->
        <div class="jumbotron jumbotron-fluid text-white JumbotronHeaderImg">
        <div class="container text-center pt-5 ">
          <h1 class="display-2 m-3">Admin Pages</h1>
        </div>
      </div>  
    <!-- /jumbotron -->  
  
  <!-- Login Form -->
   <div class="container pt-4"> 
      <form action="php/logon.php" method="post">
        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" id="username" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" id="password" required>

          <button type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember">Remember me
          </label>
        </div>

        <div class="container" style="background-color:#ffffff">
          <button type="button" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot<a href="#"> password?</a></span>
        </div>  
      </form>
   </div>   
   
<?php 
  require_once("../shared/footer.php");
?>   