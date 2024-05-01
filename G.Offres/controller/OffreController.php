<?php
require_once __DIR__ . "/../model/Offre.php";
require_once __DIR__ . '/../config.php'; 

class OffreController {
    public function listOffresWithCandidats() {
        $sql = "SELECT offres.*, candidature.nom AS nom_candidat, candidature.prenom AS prenom_candidat 
                FROM offres 
                LEFT JOIN candidature ON offres.id = candidature.offre_id";
        $db = Config::connexion(); 
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    
    
    
    public function listOffres() {
        $sql = "SELECT * FROM offres";
        $db = config::connexion(); 
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function getOffre($id) {
        $sql = "SELECT * FROM offres WHERE id = :id";
        $db = config::connexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $offre = $stmt->fetch(PDO::FETCH_ASSOC);
            return $offre;
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function addOffre($id, $title, $description, $date_created, $date_expired) {
        $sql = "INSERT INTO offres (id, title, description, date_created, date_expired) VALUES (:id, :title, :description, :date_created, :date_expired)";
        $db = config::connexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':date_created', $date_created);
            $stmt->bindParam(':date_expired', $date_expired);
            $stmt->execute();
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function updateOffre($id, $title, $description, $date_created, $date_expired) {
        $sql = "UPDATE offres SET title = :title, description = :description, date_created = :date_created, date_expired=:date_expired WHERE id = :id";
        $db = config::connexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':date_created', $date_created);
            $stmt->bindParam(':date_expired', $date_expired);
            $stmt->execute();
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function deleteOffre($id) {
        $sql = "DELETE FROM offres WHERE id = :id";
        $db = config::connexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    
    
    
}
?>
