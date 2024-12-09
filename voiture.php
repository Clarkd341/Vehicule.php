

<?php

// Classe Voiture avec toutes ses propriétés
class Voiture {

    // Déclaration des propriétés
    public string $marque;
    public string $modele;
    public int $kilometre;
    public int $vitesseMax;
    public int $cylindre;

    // Constructeur
    public function __construct(string $marque, string $modele, int $kilometre, int $vitesseMax, int $cylindre) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->kilometre = $kilometre;
        $this->vitesseMax = $vitesseMax;
        $this->cylindre = $cylindre;
    }

    // Rôle de la voiture
    public function role() {
        
        echo"Marque : {$this->marque}";
        echo "La voiture roule à une vitesse Max de {$this->vitesseMax} km/h !";
        
    }

    // Setters pour toutes les propriétés
    public function setMarque(string $marque) {
        $this->marque = $marque;
    }

    public function setModele(string $modele) {
        $this->modele = $modele;
    }

    public function setKilometre(int $kilometre) {
        $this->kilometre = $kilometre;
    }

    public function setVitesseMax(int $vitesseMax) {
        $this->vitesseMax = $vitesseMax;
    }

    public function setCylindre(int $cylindre) {
        $this->cylindre = $cylindre;
    }

    // Getters pour toutes les propriétés
    public function getMarque(): string {
        return $this->marque;
    }

    public function getModele(): string {
        return $this->modele;
    }

    public function getKilometre(): int {
        return $this->kilometre;
    }

    public function getVitesseMax(): int {
        return $this->vitesseMax;
    }

    public function getCylindre(): int {
        return $this->cylindre;
    }
}

?>

