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

    public function __construct($marque,$modele,$couleur,$immatriculation,$dateCirculation,$kilometrage,$poids){
      $this->marque=$marque;
      $this->modele=$modele;
      $this->couleur=$couleur;
      $this->immatriculation=$immatriculation;
      $this->dateCirculation=$dateCirculation;
      $this->kilometrage=$kilometrage;
      $this->poids=$poids;
      $this->image=$image;
    }      //return "Hello";

    public function Marque(){
      return $this->marque;
    }
    public function Modele(){
      return $this->modele;
    }
    public function Couleur(){
      return $this->couleur;
    }
    public function Imma(){
      return $this->immatriculation;
    }
    public function DateImma(){
      return $this->DateImma;
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
      elseif(stristr($this->immatriculation,"FR")==True){
        echo '<p>'."FRANCE".'</p>';
      }
      elseif(stristr($this->immatriculation,"DE")==True){
        echo '<p>'."ALLEMAGNE".'</p>';
      }
      else{
        echo '<p>'."FROM SOMEWHERE OVER THE RAINBOW".'</p>';
      }
    }

    public function Ride(){
      echo $this->kilometrage+=100000;echo"km";
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
        echo '<p>'.$ageauto.ans.'</p>';
    }

    public function Img($image){
      echo '<img src="'.$image.'" alt="'.Photo.' '.$this->marque.'">';
    }


}




class Form{

  public $data;
  public $surround='<p>';
  //
  // public function __construct($data=array()){
  //   $this->data=$data;
  // }

  private function surround($html){
    return "<{$this->surround}>{$html}</{$this->surround}>";
  }

  public function select(){
    foreach ($voiture as $modele=>$value){
      echo '<select name="liste">
            <option value="'.$key.'">'.$value.'</option>
            </select>;
             '
            ;
  }


      // foreach($this as $key=>$value){
      //   echo $value;
      // }
}

?>
