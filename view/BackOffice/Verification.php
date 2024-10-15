<?php
include '../../Model/TravelOffer.php';

$titre = $_POST['title'];  
$destination = $_POST['destination'];  
$date_depart = $_POST['departure_date']; 
$date_retour = $_POST['return_date'];  
$prix = $_POST['price'];  


$disponible = isset($_POST['availability']) ? 'Oui' : 'Non';  
$categorie = $_POST['category']; 

$offre1 = new TravelOffer($titre, $destination, $date_depart, $date_retour, $prix, $disponible, $categorie);

echo "<h2>Informations détaillées (var_dump):</h2>";
var_dump($offre1);
echo "<h2>Informations de l'offre:</h2>";
# $offre1->show();
?>
