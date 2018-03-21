<?php

//*CREATION DE LA CLASSE HTML
class Html{

//*FONCTIONS
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
    echo $style->css('style.css');
       

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

  public function img($image){
    echo '<img src="image.jpeg">';
  }
}    
      $image=new Image();
        echo $image->img();


//* CREATION DE LA CLASSE LINK
class Link{

  public function lien($link){
    echo '<a href="http://resume.github.io/?sarahklewiec" target="_blank">My resume</a>'
  }
      $link=new Link();
        echo $link->lien 
}

//* CREATION DE LA CLASS JAVA
class Java{
  
  public function js($javascript){
    echo '<script> Javascript </script>';

      $javascript = new Java();
        echo $javascript->java();  
  }
}
?>
