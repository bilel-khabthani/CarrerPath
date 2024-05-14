<?php

require 'C:/xampp/htdocs/formation/config.php';

class SpecialiteController {
    public function listSpecialite() {
        $sql = "SELECT ID_Condidature, Nom, Prenom, Email FROM specialite";
        $db = config::connexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function getSpecialite($ID_Condidature) {
        $sql = "SELECT ID_Condidature, Nom, Prenom, Email FROM specialite WHERE ID_Condidature = :ID_Condidature";
        $db = config::connexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':ID_Condidature', $ID_Condidature);
            $stmt->execute();
            $specialite = $stmt->fetch(PDO::FETCH_ASSOC);
            return $specialite;
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function addSpecialite($ID_Condidature, $Nom, $Prenom, $Email) {
        // Insérer les données dans la base de données
        $sql = "INSERT INTO specialite VALUES (:ID_Condidature, :Nom, :Prenom, :Email)";
        $db = config::connexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':ID_Condidature', $ID_Condidature, PDO::PARAM_INT);
            $stmt->bindValue(':Nom', $Nom);
            $stmt->bindValue(':Prenom', $Prenom);
            $stmt->bindValue(':Email', $Email);
            $stmt->execute();
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    
    
    public function updateSpecialite($ID_Condidature, $Nom, $Prenom, $Email) {
        $sql = "UPDATE specialite SET Nom = :Nom, Prenom = :Prenom, Email = :Email WHERE ID_Condidature = :ID_Condidature";
        $db = config::connexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':ID_Condidature', $ID_Condidature, PDO::PARAM_INT);
            $stmt->bindParam(':Nom', $Nom);
            $stmt->bindParam(':Prenom', $Prenom);
            $stmt->bindParam(':Email', $Email);
            $stmt->execute();
             
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function deleteSpecialite($ID_Condidature) {
        $sql = "DELETE FROM specialite WHERE ID_Condidature = :ID_Condidature";
        $db = config::connexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':ID_Condidature', $ID_Condidature, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
?>
