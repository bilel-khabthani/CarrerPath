<?php
require 'C:/xampp/htdocs/formation/config.php';

class Formation {
    private int $ID_Condidature; // Changement de l'attribut ID_Formation en ID_Condidature
    private string $Nom; // Ajout de l'attribut Nom
    private string $Prenom; // Ajout de l'attribut Prenom
    private string $Email; // Changement de l'attribut NomFormation en Email
    
    public function __construct($ID_Condidature, $Nom, $Prenom, $Email) { // Changement de construct en __construct
        $this->ID_Condidature = $ID_Condidature;
        $this->Nom = $Nom; // Ajout de l'initialisation de l'attribut Nom
        $this->Prenom = $Prenom; // Ajout de l'initialisation de l'attribut Prenom
        $this->Email = $Email;
    }

    public function getID_Condidature() {
        return $this->ID_Condidature;
    }

    public function getNom() { // Changement de la méthode getNomFormation() en getNom()
        return $this->Nom;
    }

    public function getPrenom() { // Ajout de la méthode getPrenom()
        return $this->Prenom;
    }

    public function getEmail() { // Changement de la méthode getNomFormation() en getEmail()
        return $this->Email;
    }
}
?>
