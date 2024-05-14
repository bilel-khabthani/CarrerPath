<?php

//require_once "../Model/Formation.php";
//require '../config.php';
require_once __DIR__ .  '/../config.php';

class FormationController {
    public function listFormations() {
        $sql = "SELECT * FROM formation";
        $db = config::connexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function getFormation($ID_Formation) {
        $sql = "SELECT * FROM formation WHERE ID_Formation = :ID_Formation";
        $db = config::connexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':ID_Formation', $ID_Formation);
            $stmt->execute();
            $formation = $stmt->fetch(PDO::FETCH_ASSOC);
            return $formation;
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function addFormation($ID_Formation, $Titre, $date, $Objectifs, $Duree, $Langue_Formation, $Lieu, $Ressources) {
        $sql = "INSERT INTO formation (ID_Formation, Titre, date, Objectifs, Duree, Langue_Formation, Lieu, Ressources) 
                VALUES (:ID_Formation, :Titre, :date, :Objectifs, :Duree, :Langue_Formation, :Lieu, :Ressources)";
        $db = config::connexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':ID_Formation', $ID_Formation, PDO::PARAM_INT);
            $stmt->bindValue(':Titre', $Titre);
            $stmt->bindValue(':date', $date);
            $stmt->bindValue(':Objectifs', $Objectifs);
            $stmt->bindValue(':Duree', $Duree);
            $stmt->bindValue(':Langue_Formation', $Langue_Formation);
            $stmt->bindValue(':Lieu', $Lieu);
            $stmt->bindValue(':Ressources', $Ressources);
            $stmt->execute();
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    
    public function updateFormation($ID_Formation, $Titre, $date, $Objectifs, $Duree, $Langue_Formation, $Lieu, $Ressources) {
        $sql = "UPDATE formation SET Titre = :Titre, date = :date, Objectifs = :Objectifs, Duree = :Duree, Langue_Formation = :Langue_Formation, Lieu = :Lieu, Ressources = :Ressources WHERE ID_Formation = :ID_Formation";
        $db = config::connexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':ID_Formation', $ID_Formation, PDO::PARAM_INT);
            $stmt->bindParam(':Titre', $Titre);
            $stmt->bindParam(':date', $date);
            $stmt->bindParam(':Objectifs', $Objectifs);
            $stmt->bindParam(':Duree', $Duree);
            $stmt->bindParam(':Langue_Formation', $Langue_Formation);
            $stmt->bindParam(':Lieu', $Lieu);
            $stmt->bindParam(':Ressources', $Ressources);
            $stmt->execute();
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function deleteFormation($ID_Formation) {
        $sql = "DELETE FROM formation WHERE ID_Formation = :ID_Formation";
        $db = config::connexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':ID_Formation', $ID_Formation, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}   
?>
