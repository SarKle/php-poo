<?php

//*Création classe HTML
class Html{

//*Fonctions associées
  public function Doctype(){
    $this->doctype=
      '<!DOCTYPE html>
      <html lang="en">';
        return $this->doctype;
  }

  public function Meta(){
    $this->meta=
      '<meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">';
        return $this->meta;
  }

  public function Css($linkrel, $href){
    $this->css=
      '<link rel="$linkrel"href="$href">';
        return $this->css;
  }

  public function HeadTitle($title){
    $this->headtitle=
      '<head> <title> $title </title> </head>';
        return $this->headtitle;
  }

  public function Body(){
    $this->body=
      '<body>' ;
        return $this->body;
  }

  public function Pageend(){
    $this->pageend=
      '</body> </html>';

  }
}

$html=new Html();
  echo $html->Doctype();
  echo $html->Meta();
  echo $html->Css();
  echo $html->HeadTitle();
  echo $html->Body();
  echo $html->Pageend();

?>
