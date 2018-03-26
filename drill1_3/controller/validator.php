<?php

//* DRILL EXERCICE 3 VALIDATOR DU FORMULAIRE

class Validator{

  public function Valider($valid){
    if(isset($_POST['nom']) && (!empty($_POST['nom']))){
      $nom= filter_var($_POST['nom'], FILTER_SANITIZE_STRING);
    }
    else{
      echo "Quel est votre prénom?";
    }

  }



}
?>
