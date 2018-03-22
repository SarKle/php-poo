<?php

class Voiture{

  private $marque;
  private $modele;
  public $couleur;
  private $immatriculation;
  private $dateCirculation;
  public $kilometrage;
  public $poids;

    public function __construct($marque,$modele,$couleur,$immatriculation,$dateCirculation,$kilometrage,$poids){
      $this->marque=$marque;
      $this->modele=$modele;
      $this->couleur=$couleur;
      $this->immatriculation=$immatriculation;
      $this->dateCirculation=$dateCirculation;
      $this->kilometrage=$kilometrage;
      $this->poids=$poids;
      //return "Hello";
    }

    public function dispo(){
      if($this->$modele=="Audi"){   //si l'objet est audi...
        echo "RESERVED";
      }
      else{
        echo "FREE";
      }
    }

    public function type(){
      if($this->$poids>"3,5T"){    //si l'objet a poids de +3.5T
        return "UTILITAIRE";
      }
      else{
        return "COMMERCIALE";
      }
    }

    public function pays(){
      if($this->$immatriculation=strpbrk($immatriculation,"BE")){
        echo "BELGIQUE";
      }
      elseif($this->$immatriculation=strpbrk($immatriculation,"FR")){
        echo "FRANCE";
      }
      elseif($this->$immatriculation=strpbrk($immatriculation,"DE")){
        echo "ALLEMAGNE";
      }
      else{
        echo "FROM SOMEWHERE OVER THE RAINBOW";
      }
    }

    public function usure(){
      if($this->$kilometrage<"100.000"){
        echo "LOW";
      }
      if($this->$kilometrage>"100.000"){
        echo "MIDDLE";
      }
    }

    public function age(){
      $datejour=date("Y/m/d");
      $dateauto=$this->$dateCirculation;
      $agediff=date_diff($datejour,$dateauto);
        return "$agediff(Y)";
    }

    public function ride(){
      return $this->$kilometrage+100.000;

    }
}

$voiture1=new Voiture('Mercedes','GLE','Noire','BE-JXH-591','2018/01/01','100','500');
  print_r ($voiture1);

  $voiture1->type();
  $voiture1->dispo();
  $voiture1->usure();
  $voiture1->age();
  $voiture1->pays();
  $voiture1->ride();

?>
