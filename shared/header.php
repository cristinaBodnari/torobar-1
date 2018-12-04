<?php 
  // always define $title before including header if customer header required
  if(defined($title)){
    $title = "ToroBar";
  }
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title><?php echo $title ?></title>
  <meta name="description" content="">
  <meta name="author" content="The best group">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>

<body>

<div class="jumbotron text-center" style="margin-bottom:0">

  
  <h1>ToroBar</h1>
</div>


<nav class="navbar navbar-light bg-light">
  
    <a class="btn btn-outline-success" type="button">About</a>
    <a class="btn btn-outline-success" type="button">Events</a>
    <a class="btn btn-outline-success" type="button">Gallery</a>
    <a class="btn btn-outline-success" type="button">Menu</a>
    
 
</nav>

<!-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-about" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-menu" href="#">Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-gallery" href="#">Gallery</a>
      </li>    
      <li class="nav-item">
        <a class="nav-events" href="#">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-opening" href="#">Opening Hours</a>
      </li>
    </ul>
  </div>  
</nav> -->