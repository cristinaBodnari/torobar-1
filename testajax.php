<?php
  // put your title for the page here, otherwise it's gonna be the default "TOROS"
  $title = "Contact";
  require_once("shared/header.php");
?>
  <!-- Insert code here -->
  <script>
    $(window).ready(() => {
      $.ajax({
        url: "php/controller.php",
        method: "POST",
        data : {
          target : "items",
        },
        success: function(response){
          console.log(JSON.parse(response));
        },
        error: function(){
          console.log("Error");
        }
      });
    });
  </script>
<?php 
  require_once("shared/footer.php");
?>
