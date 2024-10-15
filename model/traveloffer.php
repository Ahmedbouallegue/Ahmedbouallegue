<?php

class TravelOffer {
    public string $titre;
    public string $destination;
    public string $date_depart;
    public string $date_retour;
    public float $prix;
    public bool $disponible;
    public string $categorie;

    public function __construct($titre, $destination, $date_depart, $date_retour, $prix, $disponible, $categorie) {
        $this->titre = $titre;
        $this->destination = $destination;
        $this->date_depart = $date_depart;
        $this->date_retour = $date_retour;
        $this->prix = $prix;
        $this->disponible = $disponible;
        $this->categorie = $categorie;
    }
    public function show() {
        echo "
        <table border='1'>
            <tr>
                <th>Title</th>
                <th>Destination</th>
                <th>Date Départ</th>
                <th>Date Retour</th>
                <th>Prix</th>
                <th>Disponible</th>
                <th>Catégorie</th>
            </tr>
            <tr>
                <td>{$this->titre}</td>
                <td>{$this->destination}</td>
                <td>{$this->date_depart}</td>
                <td>{$this->date_retour}</td>
                <td>{$this->prix}</td>
                <td>{$this->disponible}</td>
                <td>{$this->categorie}</td>
            </tr>
        </table>
        ";
    }
    
}
?>
