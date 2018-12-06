<?php 
  // always define $title before including header if customer header required
  if(defined($title)){
    $title = "ToroBar";
  }
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
      <!-- footer and newsletter form -->
      <div class="container pt-4">
      <hr>
      <div class="row py-4 text-muted">
        <div class="col-md col-xl-5">
          <p><strong>ToroBar</strong></p>
          <p>Sunday - Wednesday: 11:00 - 24:00<br/> 
          Friday - Saturday: 11:00 - 02:00<br/> 
          Blågårdsgade 2 C,<br/>
          2200 København</p>
        </div>
        <div class="col-md col-xl-5 ml-auto">
        
          <p><strong>Stay up-to-date with Torobar's offers and events!</strong></p>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Email">
            <span class="input-group-btn">
              <button class="btn btn-primary" type="button">Sign up</button>
            </span>
          </div>
        </div>
      </div>
      <hr>
      <!-- / footer and signup form -->  
    </div>
 </body>  
</html>  
