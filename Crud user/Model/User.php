<?php
require_once __DIR__ . '/../config.php';

class User {
    private int $id;

    private string $mdp;
    private string $nom;
    private string $prenom;
    private string $email;
    private int $age;
    private string $poste;


    public function __construct($id,$mdp, $nom, $prenom, $email, $age, $poste) {
        $this->id = $id;
        $this->mdp = $mdp;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->age = $age;
        $this->poste = $poste;
    }

   
    public function getId() {
        return $this->id;
    }
    public function getMdp() {
        return $this->mdp;
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
    public function getAge() {
        return $this->age;
    }

    public function getPoste() {
        return $this->poste;
    }


}
?>
