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
      if($this->$marque=="Audi"){   //si l'objet est audi...
        echo "RESERVED";
      }
      else{
        echo "FREE";
      }
    }

    public function Type(){
      if($this->$poids>3500){    //si le poids dépasse 3500kg
        echo "UTILITAIRE";
      }
      else{
        echo "COMMERCIALE";
      }
    }

    public function Pays(){
      if(stristr($this->$immatriculation,"BE")==True){
        echo "BELGIQUE";
      }
      elseif(stristr($this->$immatriculation,"FR"==True)){
        echo "FRANCE";
      }
      elseif(stristr($this->$immatriculation,"DE"==True)){
        echo "ALLEMAGNE";
      }
      else{
        echo "FROM SOMEWHERE OVER THE RAINBOW";
      }
    }

    public function Ride(){
      return $this->kilometrage+=100000;
    }

    public function Usure(){
      if($this->kilometrage<100000){
        echo "LOW";
      }
      elseif($this->kilometrage>100000){
        echo "MIDDLE";
      }
      elseif($this->kilometrage>200000){
        echo "HIGH";
      }
    }

    public function Age(){
      $datejour=date("Y");
      $ageauto=$annee-$this->dateCirculation;
        echo $ageauto;
    }

    public function Img($image){
      echo '<img src="audi.jpg">';
    }
}

$test= new Voiture('Audi','R8','Red',1499,'BE-JXH-591',1200,2017);
$test->Img();
// $test->Usure();
  echo '<pre>';
  print_r ($test);
  echo '</pre>'


?>
