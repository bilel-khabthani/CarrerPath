<?php

require_once __DIR__ . '/../Model/User.php';
require_once __DIR__ . '/../config.php';


class UserController {
    public function listUsers() {
        $sql = "SELECT * FROM user";
        $db = config::connexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function getUser($id) {
        $sql = "SELECT * FROM user WHERE id = :id";
        $db = config::connexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            return $user;
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function addUser($id,$mdp,$nom, $prenom,$email, $age, $poste) {

        $id = $_POST['id'];
        $mdp = $_POST['mdp'];
        $sql = "INSERT INTO user (id,mdp, nom, prenom, email, age, poste) VALUES (:id,:mdp, :nom, :prenom, :email, :age, :poste)";

        $db = config::connexion();
        try {
            
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':mdp', $mdp);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':age', $age, PDO::PARAM_INT);
            $stmt->bindParam(':poste', $poste);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            //die('Error: ' . $e->getMessage());
            return false;
        }
        
    }

    public function updateUser($id,$mdp, $nom, $prenom,$email, $age, $poste) {
        $sql = "UPDATE user SET mdp = :mdp , nom = :nom, prenom = :prenom, email= :email, age = :age, poste = :poste WHERE id = :id";
        $db = config::connexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':mdp', $mdp);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':age', $age, PDO::PARAM_INT);
            $stmt->bindParam(':poste', $poste);
            $stmt->execute();
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function deleteUser($id) {
        $sql = "DELETE FROM user WHERE id = :id";
        $db = config::connexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
?>
