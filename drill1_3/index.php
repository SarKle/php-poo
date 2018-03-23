<?php

require "controller/controls.php";

$form = new Form($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Drill / Form</title>
</head>
<body>

  <form action='index.php' method="post">
    Nom: <?php echo $form->input ("nom",$nom);?>
      <?php $valid = new Validator();
        echo $valid->Valider(); ?> <br>

    Prénom: <?php echo $form->input ("prenom",$prenom);?>
      <?php echo $form->submit( );?>
  </form>

</body>
</html>
