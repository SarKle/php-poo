<?php

require "controller/controls.php";
require "controller/validator.php";

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
    <?php $valid = new Validator();?>

    Nom: <?php echo $form->input ("nom",$nom);?>
        echo $valid->Valider(); ?> <br>

    Prénom: <?php echo $form->input ("prenom",$prenom);?>
      <?php echo $form->submit( );?>
  </form>

  <?php if(isset($_POST["nom"])AND isset($_POST['prenom'])){
    echo '<p>'.'Hello '.$_POST['nom'] .$_POST['prenom'].'</p>'; }?>

</body>
</html>
