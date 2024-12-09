<?php

include("./voiture.php");

// Création de l'objet 
$maVoiture = new Voiture("BMW", "X5", 50000, 240, 3000);

// Affiche la marque
echo $maVoiture->getMarque(); 

$maVoiture->role();

?>
