<?php
include '../../Model/TravelOffer.php';

    $titre = $_POST['title'] ?? '';
    $destination = $_POST['destination'] ;
    $date_depart = $_POST['departure_date'] ;
    $date_retour = $_POST['return_date'] ;
    $prix = $_POST['price'] ;
    $disponible = $_POST['Disponibility'] ;
    $categorie = $_POST['category'] ?? '';





    $offre = new TravelOffer(
        $titre,
        $destination,
        $date_depart,
        $date_retour,
        $prix,
        $disponible,
        $categorie
    );
    
    // Debugging output using var_dump
    echo "<h2>Informations via var_dump:</h2>";
        var_dump($offre);
    
    // Display the travel offer using the show() method
    echo "<h2>Affichage de l'offre :</h2>";
    $offre->show();

?>

  



