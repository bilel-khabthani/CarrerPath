<?php
require_once __DIR__ . '/../config.php';

class candidature {
    private int $idC;
    private string $nom;
    private string $prenom;
    private string $email;
    private string $cvPath;
    private string $lettreMotivation;
    private date $date_postulation;
    private int $telephone;
    private string $adresse;
    private string $experienceProfessionnelle;

    public function __construct($idC, $nom, $prenom, $email, $cvPath, $lettreMotivation, $date_postulation, $telephone, $adresse, $experienceProfessionnelle) {
        $this->idC = $idC;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->$cvPath= $cvPath;
        $this->lettreMotivation = $lettreMotivation;
        $this->date_postulation = $date_postulation;
        $this->telephone = $telephone;
        $this->adresse = $adresse;
        $this->experienceProfessionnelle = $experienceProfessionnelle;
    }

    // Getters pour accéder aux attributs privés

    public function getIdC() {
        return $this->idC;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getEmail() {
        return $this->email;
    }
    public function getCvPath() {
        return $this->cvPath;
    }
    public function getLettreMotivation() {
        return $this->lettreMotivation;
    }

    public function getDatePostulation() {
        return $this->date_postulation;
    }

    public function getTelephone() {
        return $this->telephone;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function getExperienceProfessionnelle() {
        return $this->experienceProfessionnelle;
    }
}
?>
