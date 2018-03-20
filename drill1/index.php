<?php

require "form.php";

$form = new Form($_POST);
?>

<form action='#' method="post">
  <?php
    echo $form->input ("nom");
    echo $form->input ("prenom");
    echo $form->submit( );
   ?>
</form>   
