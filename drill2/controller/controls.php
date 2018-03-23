<?php

//*CREATION DE LA CLASSE HTML
class Html{

//*METHODES
  public function Doctype($doctype){
    echo'<!DOCTYPE html>';
    echo'<html lang="en">';
  }

  public function Css($style){
    echo '<head>';
    echo '<link rel="stylesheet "href="'.$style.'">';
    echo '</head>';
  }
}
  $doctype=new Html();
    echo $doctype->doctype();

  $style=new Html();
    echo $style->css('view/style.css');


//* CREATION CLASS META
Class Meta{

  public function Meta($meta){
    echo '<meta charset="UTF-8">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '<meta http-equiv="X-UA-Compatible" content="ie=edge">';
  }
}
      $meta=new Meta();
        echo $meta->meta();


//* CREATION DE LA CLASSE IMAGES
class Image{

  public function Img($image){
    echo '<img src="image.jpeg">';
  }
}
      $image=new Image();
        echo $image->img();


//* CREATION DE LA CLASSE LINK
class Link{

  public function Lien($link){
    echo '<br> <a class="lien" href="http://resume.github.io/?sarahklewiec" target="_blank"> My resume </a>';
  }
}
      $link=new Link();
        echo $link->lien();

//* CREATION DE LA CLASS JAVA
class Java{

  public function Javas($javascript){
    echo '<script> Javascript </script>';
  }
}
      $javascript = new Java();
        echo $javascript->javas();
?>
