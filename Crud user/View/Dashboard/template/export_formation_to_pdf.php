<?php
require_once '../../../vendor/autoload.php';
require_once '../../../Controller/FormationC.php'; // Assurez-vous d'inclure votre fichier de connexion à la base de données ici

// Créer une nouvelle instance PDF
$pdf = new TCPDF();

// Définir les informations du document
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Votre Nom');
$pdf->SetTitle('Liste des Formations');
$pdf->SetSubject('Exportation des Formations');

// Ajouter une page
$pdf->AddPage();

// Définir la police
$pdf->SetFont('dejavusans', '', 10);

// Ajouter un titre
$pdf->Cell(0, 20, 'Formations List', 0, 1, 'C');

// Connexion à la base de données et récupération des données
$pdo = config::Connexion();
$query = "SELECT * FROM formation"; // Remplacez 'users' par le nom de votre table
$stmt = $pdo->prepare($query);
$stmt->execute();

$html = '<table border="1" cellpadding="5"><tr><th>ID</th><th>Titre</th><th>Date</th><th>Objectifs</th><th>Durée</th><th>Langue</th><th>Lieu</th><th>Ressources</th></tr>';

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $html .= "<tr>
                <td>{$row['ID_Formation']}</td>
                <td>{$row['Titre']}</td>
                <td>{$row['date']}</td>
                <td>{$row['Objectifs']}</td>
                <td>{$row['Duree']}</td>
                <td>{$row['Langue_Formation']}</td>
                <td>{$row['Lieu']}</td>
                <td>{$row['Ressources']}</td>
              </tr>";
}

$html .= '</table>';

// Écrire le HTML
$pdf->writeHTML($html, true, false, true, false, '');

// Fermer et sortir le PDF à l'écran
$pdf->Output('liste_formations.pdf', 'I');
