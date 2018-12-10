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
    <link rel="stylesheet" href="styles/style.css"/>

  </head>
  <body>
    <!-- jumbotron -->
       <div class="jumbotron jumbotron-fluid text-white JumbotronHeaderImg">
        <div class="container text-center pt-5 ">
          <h1 class="display-2 m-3">Our Story</h1>
        </div>
      </div>  
    <!-- /jumbotron -->  
    <div class="container pt-4"> <!-- /open container --> 
       <!-- ABOUT -->
       <div class="row">
        <div class="col-lg">
         <h3 class="mb-4">HVEM ER VI</h3>   <!-- MB-4 is margin spacing --> 
          <img class="mb-4 img-fluid rounded d-none d-sm-block" src="images/torobarphoto.png" style="max-height: 200px" alt="portland">
          <p>Torobar Torobar Torobar Torobar Torobar Torobar Torobar Torobar Torobar Torobar Torobar Torobar</p>
          <p>We are a nice bar! </p> 
        </div>    
      </div><!-- /ABOUT -->   
    </div>
  </div>     <!-- /close container -->  
 </body>  
</html>  


<?php 
  require_once("shared/footer.php");
?>


