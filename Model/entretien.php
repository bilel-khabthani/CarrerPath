<?php

class Entretien {
    private $id_entretien;
    private $nom;
    private $prenom;
    private $age;
    private $telephone;
    private $email;
    private $date_entretien;

    public function __construct($id_entretien, $nom, $prenom, $age, $telephone, $email, $date_entretien) {
        $this->id_entretien = $id_entretien;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->telephone = $telephone;
        $this->email = $email;
        $this->date_entretien = $date_entretien;
    }

    // Méthodes pour accéder aux propriétés (getters)
    public function getIdEntretien() {
        return $this->id_entretien;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getAge() {
        return $this->age;
    }

    public function getTelephone() {
        return $this->telephone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getDateEntretien() {
        return $this->date_entretien;
    }
}
  

class repanse {
    
    private $id_reponse;
    private $id_entretien;
    private $resultat;
    

    public function __construct( $id_reponse,$id_entretien, $resultat) {
        
        $this->id_reponse = $id_reponse;
        $this->id_entretien = $id_entretien;
        $this->resultat = $resultat;
        
    }

    // Méthodes pour accéder aux propriétés (getters)
    public function getIdEntretien() {
        return $this->id_entretien;
    }

    public function getIdReponse() {
        return $this->id_reponse;
    }

    public function getResultat() {
        return $this->resultat;
    }
}