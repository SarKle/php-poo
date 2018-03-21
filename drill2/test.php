<?php

class Html{

        public function css($style) {
            // echo '<head>';
            echo '<head><link rel="stylesheet" href="'.$style.'"></head>';

            // echo '</head>';
        }
}
    $style = new Html();

       echo $style->css('style.css');
?>
<?php
class Meta{
  public function balise($meta) {
    echo '<head>';
    echo '<meta name="author" content="">';
    echo '<meta charset="utf-8">' ;
    echo '<meta name="revisit-after" content="30 days">';
    echo '</head>';
  }
}

$meta = new Meta();
echo $meta->balise();
 ?>


 <?php
class Image{
  public function img($pic){
    echo '<img src="image.jpeg" alt=""> ';
  }
}

$pic = new Image();
echo $pic->img();
 ?>

 <?php
class Link{
  public function lien($link){
    echo '<br><a href="https://becode.org/" target="_blank">Learn with BeCode.org!</a>';
  }
}
$link = new Link();
echo $link->lien();
  ?>

  <?php
class Java{
  public function js($script){
    echo '<script>mon script</script>';
  }
}
$script = new Java();
echo $script->js();
   ?>
