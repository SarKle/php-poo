<?php

class Form{

  public $data;
  public $surround='p';


  public function __construct($data=array()){
    $this->data=$data;
  }

//function qui applique propriété <p>
  private function surround($html){
    return "<{$this->surround}>{$html}</{$this->surround}>";
  }

//récupère la valeur
  private function getValue($index){
    return isset($this->data[$index]) ? $this->data[$index]:null; //si la valeur existe dans index sinon null
  }

  public function input($nom){
    return $this->surround('<input type="text" name="'. $nom.'" value="' . $this->getValue($nom).'">');
  }

  public function submit(){
    return $this->surround('<button type="submit"> Envoyer </button>');
  }

}


?>
