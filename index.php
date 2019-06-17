<?php
include 'data.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php basket</title>
    <link rel="stylesheet" href="public/css/app.css">
  </head>
  <body>
    <div class="main">

      <div class="schedagiocatore">

        <?php
          print_r(stampagiocatore());
         ?>
         
      </div>

    </div>


  </body>
</html>
