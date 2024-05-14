<?php
require 'C:/xampp/htdocs/formation/config.php';

class Formation {
    private int $ID_Formation;
    private string $Titre;
    private string $date;
    private string $Objectifs;
    private string $Duree;
    private string $Langue_Formation;
    private string $Lieu;
    private string $Ressources;

    public function __construct($ID_Formation, $Titre, $date, $Objectifs, $Duree, $Langue_Formation, $Lieu, $Ressources) {
        $this->ID_Formation = $ID_Formation;
        $this->Titre = $Titre;
        $this->date = $date;
        $this->Objectifs = $Objectifs;
        $this->Duree = $Duree;
        $this->Langue_Formation = $Langue_Formation;
        $this->Lieu = $Lieu;
        $this->Ressources = $Ressources;
    }

    public function getID_Formation() {
        return $this->ID_Formation;
    }

    public function getTitre() {
        return $this->Titre;
    }

    public function getDate() {
        return $this->date;
    }

    public function getObjectifs() {
        return $this->Objectifs;
    }

    public function getDuree() {
        return $this->Duree;
    }

    public function getLangue_Formation() {
        return $this->Langue_Formation;
    }

    public function getLieu() {
        return $this->Lieu;
    }

    public function getRessources() {
        return $this->Ressources;
    }
}

?>
