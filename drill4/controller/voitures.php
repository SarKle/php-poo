<?php

// ($marque,$modele,$couleur,$immatriculation,$dateCirculation,$kilometrage,$poids
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

echo '<pre>';
print_r($voiture);
echo '</pre>';


// $voiture9=new Voiture('BMW','i8','Blanc','CH-753','2015','135000','1200');
//   $voiture9->Img('assets/bmw-i8.jpg');
//   $voiture9->Dispo();
//   $voiture9->Pays();
//   $voiture9->Usure();
//   $voiture9->Ride();
//   $voiture9->Type();
//   $voiture9->Age();
//
// ?>
