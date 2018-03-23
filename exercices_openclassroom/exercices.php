<?php

class Personnage {

  private $_degats; //attributs de Personnage
  //pour récupérer la valeur d'un attribut privé:
  //public function degats(){
  //  return $this->_degats;}
  private $_force;
  private $_experience;
  private $_localisation;

    public function __construct($force, $degats){   //Constructeur demande 2 paramètres
      echo "Je suis le constructeur!";
        $this->setForce($force);
        $this->setDegats($degats);
        $this->_experience=1;
    }

  // public function afficherExperience(){  //afficherExperience = methode
  //   echo $this->_experience;   //$this = objet = $perso  echo affiche une valeur
  // }
  // public function gagnerExperience(){  // ajouté à l'attribut $_expérience
  //   $this->_experience = $this->_experience++;
  // }
  // public function frapper(Personnage $persoAFrapper){  //methode sur un objet  s'applique si le paramètre est de type Personnage
  //   //exemple: $batman Personnage  $superman Personnage   $batman->frapper($ironman) =page blanche
  //   $persoAFrapper->_degats+=$this->_force; //1.nouvelle valeur à l'attribut _degats
  //                   //2.nouvelle valeur atteinte->force
  //   //$this s'applique au personnage àpduquel on appelle la methode $perso->frapper()
  // }


//Mutateur chargé de modifier l'attribut $_force
  public function setForce($force){
    if(!is_int($force)){  //s'il ne s'agit pas d'un nombre entier
      trigger_error('La force d\'un personnage ne peut dépasser 100', E_USER_WARNING);
      return;
    }
    if($force>100){ //On vérifie qu'on n'assigne pas de valeur supérieure à 100
    return;
  }
  $this->_force=$force;
}
//Mutateur modifie l'attribut $_experience
  public function setExperience($experience){
    if(!is_int($experience)){
      trigger_error('L\'experience d\'un personnage doit être un nombre entier', E_USER_WARNING);
      return;
    }
    if($experience >100){
      trigger_error('L\'experience d\'un personnage ne peut dépasser 100',E_USER_WARNING);
      return;
    }
    $this->_experience=$experience;
  }
  public function degats(){ //methode dégats: renvoie le contenu de l'attribut dégats
    return $this->_degats;
  }
  public function force(){ //methode experience:renvoie le contenu de l'attribut expereince
    return $this->_force;
  }
  public function experience(){
    return $this->_experience;
  }
}

$superman=new Personnage;
$superman->setForce(20);
$superman->setExperience(50);

$batman=new Personnage;
$batman->setForce(9);
$batman->setExperience(15);
$superman->gagnerExperience(); //applique la méthode au personnage

$superman->frapper($batman); //methode frapper demande l'argument perso2
$superman->gagnerExperience();
$superman->gagnerExperience();
//$superman->afficherExperience();
//
// $batman->frapper($superman);
// $batman->gagnerExperience();
//$batman->afficherExperience();
//$

echo 'Batman a ', $batman->force(), ' de force, contrairement à Superman qui a ', $superman->force(), ' de force.<br/>';

echo 'Batman a ', $batman->experience(), ' d\'expérience, contrairement à Superman qui a ', $superman->experience(), ' d\'expérience.<br/>';

echo 'Batman a ', $batman->degats(), ' de dégâts, contrairement à Superman qui a ', $superman->degats(), ' de dégâts.<br/>';


//LE CONSTRUCTEUR
$wonderwoman=new Personnage(60, 0);  // 60 de force, 0 dégats
$tornade=new Personnage(100, 10); // 100 de force, 0 dégats


?>
