<?php

class Voiture{

  private $marque;
  private $modele;
  public $couleur;
  private $immatriculation;
  private $dateCirculation;
  public $kilometrage;
  public $poids;
  public $image;

    public function __construct($marque,$modele,$couleur,$immatriculation,$dateCirculation,$kilometrage,$poids,$image){
      $this->marque=$marque;
      $this->modele=$modele;
      $this->couleur=$couleur;
      $this->immatriculation=$immatriculation;
      $this->dateCirculation=$dateCirculation;
      $this->kilometrage=$kilometrage;
      $this->poids=$poids;
      $this->image=$image;

      //return "Hello";
    }
//Voiture free or reserved
    public function Dispo(){
      if($this->marque=="Audi"){   //si l'objet est audi...
        echo '<p>'."RESERVED".'</p>';
      }
      else{
        echo '<p>'."FREE".'</p>';
      }
    }

    public function Type(){
      if($this->poids>3500){    //si le poids dépasse 3500kg
        echo '<p>'."UTILITAIRE".'</p>';
      }
      else{
        echo '<p>'."COMMERCIALE".'</p>';
      }
    }

    public function Pays(){
      if(stristr($this->immatriculation,"BE")==True){
        echo '<p>'."BELGIQUE".'</p>';
      }
      elseif(stristr($this->immatriculation,"FR"==True)){
        echo '<p>'."FRANCE".'</p>';
      }
      elseif(stristr($this->immatriculation,"DE"==True)){
        echo '<p>'."ALLEMAGNE".'</p>';
      }
      else{
        echo '<p>'."FROM SOMEWHERE OVER THE RAINBOW".'</p>';
      }
    }

    public function Ride(){
      echo $this->kilometrage+=100000;
    }

    public function Usure(){
      if($this->kilometrage<100000){
        echo '<p>'."LOW".'</p>';
      }
      elseif($this->kilometrage>100000){
        echo '<p>'."MIDDLE".'</p>';
      }
      elseif($this->kilometrage>200000){
        echo '<p>'."HIGH".'</p>';
      }
    }

    public function Age(){
      $datejour=date("Y");
      $ageauto=$datejour-$this->dateCirculation;
        echo $ageauto;
    }

    public function Img($image){
      echo '<img src="'.$image.'" alt="'.Photo.' '.$this->marque.'">';
    }
}
// ($marque,$modele,$couleur,$immatriculation,$dateCirculation,$kilometrage,$poids,$image
$test= new Voiture('Audi','R8','Bleu','BE-JXH-591','2016','15000','1499');

// foreach ($test as $key=>$value){
// echo $value;
// }

$test->Img('audi.jpg');
  echo '<pre>';
  print_r ($test);
  echo '</pre>';
$test->Dispo();
$test->Pays();
$test->Usure();
$test->Ride();
$test->Type();
$test->Age();





?>
