<?php

require "controller/functions.php";
require "controller/voitures.php";
// require "controller/form.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Drill4 / Voitures</title>
</head>
<body>

<h1> PARC AUTOMOBILE </h1>

  <form action="index.php" method="post">
    Choisissez une voiture:
      <?php
      $form=new Form();
        echo $form->select();
        echo $form->submit();
      ?>
  </form>
</body>
</html>
