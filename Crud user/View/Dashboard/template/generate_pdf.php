<?php
require_once('../../../vendor/autoload.php');

function generatePDFFromDatabase() {
    // Connexion à la base de données
    $servername = "localhost"; // Remplacez par le nom de votre serveur
    $username = "root"; // Remplacez par votre nom d'utilisateur de base de données
    $password = ""; // Remplacez par votre mot de passe de base de données
    $dbname = "utilisateur"; // Remplacez par le nom de votre base de données

    // Créer une connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Requête pour récupérer les données de réclamation depuis la base de données
    $sql = "SELECT id, sujet, etat, description FROM reclamation";
    $result = $conn->query($sql);

    // Si des données sont trouvées dans la base
    if ($result->num_rows > 0) {
        // Créer une nouvelle instance de TCPDF
        $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

        // Définir les informations du document
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Votre Nom');
        $pdf->SetTitle('Détails des réclamations');
        $pdf->SetSubject('Détails des réclamations');
        $pdf->SetKeywords('Réclamation, PDF, Détails');

        // Démarrez une nouvelle page
        $pdf->AddPage();

        // Définissez la police par défaut
        $pdf->SetFont('helvetica', '', 12);

        // Titre du document
        $pdf->Cell(0, 10, 'Détails des réclamations', 0, 1, 'C');
        $pdf->Ln(10); // Saut de ligne

        // Affichage des données de réclamation
        while($row = $result->fetch_assoc()) {
            $pdf->Cell(0, 10, 'ID : ' . $row['id'], 0, 1);
            $pdf->Cell(0, 10, 'Sujet : ' . $row['sujet'], 0, 1);
            $pdf->Cell(0, 10, 'État : ' . $row['etat'], 0, 1);
            $pdf->Cell(0, 10, 'Description : ' . $row['description'], 0, 1);
            $pdf->Ln(10); // Saut de ligne entre chaque réclamation
        }

        // Sortie du PDF
        $pdf->Output('details_reclamations.pdf', 'D');
    } else {
        echo "Aucune réclamation trouvée dans la base de données.";
    }

    // Fermer la connexion à la base de données
    $conn->close();
}

// Appel de la fonction pour générer le PDF à partir de la base de données
generatePDFFromDatabase();
?>
