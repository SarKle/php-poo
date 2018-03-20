<?php

require "form.php";

$form = new Form (array());


  echo $form->input ("nom");
  echo $form->input ("prenom");
  echo $form->select("homme","femme");
  echo $form->submit();

 ?>
