<?php
require_once __DIR__ . "/../model/candidature.php";
require_once __DIR__ . '/../config.php'; 

class CandidatureController {
    public function listCandidatures() {
        $sql = "SELECT * FROM candidature";
        $db = Config::connexion(); 
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function getCandidature($idC) {
        $sql = "SELECT * FROM candidature WHERE idC = :idC";
        $db = Config::connexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':idC', $idC);
            $stmt->execute();
            $candidature = $stmt->fetch(PDO::FETCH_ASSOC);
            return $candidature;
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function addCandidature($idC, $nom, $prenom, $email, $cvPath, $lettreMotivation, $date_postulation, $telephone, $adresse, $experienceProfessionnelle) {
        $sql = "INSERT INTO candidature (idC, nom, prenom, email, cvPath, lettreMotivation, date_postulation, telephone, adresse, experienceProfessionnelle) VALUES (:idC, :nom, :prenom, :email, :cvPath, :lettreMotivation, :date_postulation, :telephone, :adresse, :experienceProfessionnelle)";
        $db = Config::connexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':idC', $idC);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':cvPath', $cvPath);
            $stmt->bindParam(':lettreMotivation', $lettreMotivation);
            $stmt->bindParam(':date_postulation', $date_postulation);
            $stmt->bindParam(':telephone', $telephone);
            $stmt->bindParam(':adresse', $adresse);
            $stmt->bindParam(':experienceProfessionnelle', $experienceProfessionnelle);
            $stmt->execute();
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    

    public function updateCandidature($candidature) {
        $sql = "UPDATE candidature SET nom = :nom, prenom = :prenom, email = :email, cvPath = :cvPath, lettreMotivation = :lettreMotivation, date_postulation = :date_postulation, telephone = :telephone, adresse = :adresse, experienceProfessionnelle = :experienceProfessionnelle WHERE idC = :id";
        $db = Config::connexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':idC', $candidature->getIdC());
            $stmt->bindParam(':nom', $candidature->getNom());
            $stmt->bindParam(':prenom', $candidature->getPrenom());
            $stmt->bindParam(':email', $candidature->getEmail());
            $stmt->bindParam(':cvPath', $candidature->getCvPath());
            $stmt->bindParam(':lettreMotivation', $candidature->getLettreMotivation());
            $stmt->bindParam(':date_postulation', $candidature->getDatePostulation());
            $stmt->bindParam(':telephone', $candidature->getTelephone());
            $stmt->bindParam(':adresse', $candidature->getAdresse());
            $stmt->bindParam(':experienceProfessionnelle', $candidature->getExperienceProfessionnelle());
            $stmt->execute();
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function deleteCandidature($id) {
        $sql = "DELETE FROM candidature WHERE idC = :idC";
        $db = Config::connexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':idC', $idC);
            $stmt->execute();
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
?>
