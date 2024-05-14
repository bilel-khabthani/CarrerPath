<?php

require_once __DIR__ .  '/../config.php';
require_once __DIR__ . '/../model/reclamation.php';
class reclamationC
{

    public function afficher()
    {
        $sql = "SELECT * FROM reclamation";
        $db = config::Connexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    public function countReclamationByEtat() {
        $sql = "SELECT etat, COUNT(*) as count FROM reclamation GROUP BY etat";
        $result = $this->db->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=utilisateur', 'root', '');
    }
    
    
    

    function supprimer($id)
    {
        $sql = "DELETE FROM reclamation WHERE id = :id";
        $db = config::Connexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }


    function ajouter($reclamation)
    {
        $sql = "INSERT INTO reclamation (nom, email, phone, etat, sujet, date, description)
        VALUES (:nom,:email, :phone, :etat, :sujet, :date, :description)";
        $db = config::Connexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $reclamation->getNom(),
                'email' => $reclamation->getEmail(),
                'phone' => $reclamation->getPhone(),
                'etat' => $reclamation->getEtat(),
                'sujet' => $reclamation->getSujet(),
                'date' => $reclamation->getDate(),
                'description' => $reclamation->getDescription()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    function modifier($reclamation, $id)
    {
        try {
            $db = config::Connexion();
            $query = $db->prepare(
                'UPDATE reclamation SET 
                    nom = :nom, 
                    email = :email,
                    phone = :phone,
                    etat = :etat,
                    sujet = :sujet,
                    date = :date,
                    description = :description
                WHERE id= :id'
            );
            $query->execute([
                'id' => $id,
                'nom' => $reclamation->getNom(),
                'email' => $reclamation->getEmail(),
                'phone' => $reclamation->getPhone(),
                'etat' => $reclamation->getEtat(),
                'sujet' => $reclamation->getSujet(),
                'date' => $reclamation->getDate(),
                'description' => $reclamation->getDescription()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function recupererReclamation($id){
        $sql="SELECT * from reclamation where id=$id";
        $conn = new config();
        $db=$conn->Connexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $reclamation=$query->fetch();
            return $reclamation;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function triReclamation()
    {
        $sql = "SELECT * FROM reclamation order by nom";
        $db = config::Connexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function rechercheReclamation($rech)
    {
        $sql = "SELECT * FROM reclamation where reclamation.nom like '%$rech%' or reclamation.email like '%$rech%' or reclamation.sujet like '%$rech%' or reclamation.etat like '%$rech%' or reclamation.description like '%$rech%'";
        $db = config::Connexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    
    
}

