<?php
  // put your title for the page here, otherwise it's gonna be the default "TOROS"
  $title = "Index";
  require_once("shared/header.php");
?>
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
<?php 
  require_once("shared/footer.php");
?>
