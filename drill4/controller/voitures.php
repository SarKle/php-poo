<?php

// ($marque,$modele,$couleur,$immatriculation,$dateCirculation,$kilometrage,$poids

$voiture1= new Voiture('Audi','R8','Bleu','BE-JXH-591','2016','15000','1499');
  $voiture1->Img('assets/audi.jpg');
  $voiture1->Dispo();
  $voiture1->Pays();
  $voiture1->Usure();
  $voiture1->Ride();
  $voiture1->Type();
  $voiture1->Age();

$voiture2=new Voiture('Bentley','Bentayga','Noir/Gris','DE-123','2017','80000','2400');
  $voiture2->Img('assets/bentleybentayga.jpg');
  $voiture2->Dispo();
  $voiture2->Pays();
  $voiture2->Usure();
  $voiture2->Ride();
  $voiture2->Type();
  $voiture2->Age();

$voiture3=new Voiture('Ferrari','F488 Spider','Rouge','IT-178','2015','10000','1200');
  $voiture3->Img('assets/ferrari.jpeg');
  $voiture3->Dispo();
  $voiture3->Pays();
  $voiture3->Usure();
  $voiture3->Ride();
  $voiture3->Type();
  $voiture3->Age();

$voiture4=new Voiture('Mercedes','GLE Coupé','Gris','FR-159','2016','115000','2000');
  $voiture4->Img('assets/mercedesgle.jpg');
  $voiture4->Dispo();
  $voiture4->Pays();
  $voiture4->Usure();
  $voiture4->Ride();
  $voiture4->Type();
  $voiture4->Age();

$voiture5=new Voiture('Porsche','Panamera','Sable','DE-891','2017','95000','1800');
  $voiture5->Img('assets/panamera.jpeg');
  $voiture5->Dispo();
  $voiture5->Pays();
  $voiture5->Usure();
  $voiture5->Ride();
  $voiture5->Type();
  $voiture5->Age();

$voiture6=new Voiture('Rolls Royce','Dawn','Bleu/Gris','DE-129','2015','10500','1499');
  $voiture6->Img('assets/rolls-royce-dawn.jpg');
  $voiture6->Dispo();
  $voiture6->Pays();
  $voiture6->Usure();
  $voiture6->Ride();
  $voiture6->Type();
  $voiture6->Age();

$voiture7=new Voiture('Jaguar','F-Pace','Gris','GB-789','2014','110000','1700');
  $voiture7->Img('assets/jaguar-fpace.jpeg');
  $voiture7->Dispo();
  $voiture7->Pays();
  $voiture7->Usure();
  $voiture7->Ride();
  $voiture7->Type();
  $voiture7->Age();

$voiture8=new Voiture('Range Rover','Evoque','Gris','FR-147','2015','126000','1499');
  $voiture8->Img('assets/range-rover-evoque.jpeg');;
  $voiture8->Dispo();
  $voiture8->Pays();
  $voiture8->Usure();
  $voiture8->Ride();
  $voiture8->Type();
  $voiture8->Age();

$voiture9=new Voiture('BMW','i8','Blanc','CH-753','2015','135000','1200');
  $voiture9->Img('assets/bmw-i8.jpg');
  $voiture9->Dispo();
  $voiture9->Pays();
  $voiture9->Usure();
  $voiture9->Ride();
  $voiture9->Type();
  $voiture9->Age();

?>
<!-- //
$voiture=[
  new Voiture('Audi','R8','Bleu','BE-JXH-591','2016','15000','1499'),
  new Voiture('Bentley','Bentayga','Noir/Gris','DE-123','2017','80000','2400'),
  new Voiture('Ferrari','F488 Spider','Rouge','IT-178','2015','10000','1200'),
  new Voiture('Mercedes','GLE Coupé','Gris','FR-159','2016','115000','2000'),
  new Voiture('Porsche','Panamera','Sable','DE-891','2017','95000','1800'),
  new Voiture('Rolls Royce','Dawn','Bleu/Gris','DE-129','2015','10500','1499'),
  new Voiture('Jaguar','F-Pace','Gris','GB-789','2014','110000','1700'),
  new Voiture('Range Rover','Evoque','Gris','FR-147','2015','126000','1499'),
  new Voiture('BMW','i8','Blanc','CH-753','2015','135000','1200')];

// foreach($voiture as $key=>$value){
//   echo $value;
// }
echo '<pre>';
print_r($voiture);
echo '</pre>';

// foreach($voiture as $key=>$value){
//   echo $value;
// }

// ?> -->
