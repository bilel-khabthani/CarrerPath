<?php
require_once '../../../vendor/autoload.php';
require_once '../../../Controller/UserC.php'; // Assurez-vous d'inclure votre fichier de connexion à la base de données ici

// Créer une nouvelle instance PDF
$pdf = new TCPDF();

// Définir les informations du document
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Votre Nom');
$pdf->SetTitle('Liste des Utilisateurs');
$pdf->SetSubject('Exportation des utilisateurs');

// Ajouter une page
$pdf->AddPage();

// Définir la police
$pdf->SetFont('dejavusans', '', 10);

// Ajouter un titre
$pdf->Cell(0, 20, 'Users List', 0, 1, 'C');

// Connexion à la base de données et récupération des données
$pdo = config::Connexion();
$query = "SELECT * FROM user"; // Remplacez 'users' par le nom de votre table
$stmt = $pdo->prepare($query);
$stmt->execute();

$html = '<table border="1" cellpadding="5"><tr><th>ID</th><th>Nom</th><th>Prenom</th><th>Email</th><th>Age</th><th>Poste</th></tr>';

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $html .= "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nom']}</td>
                <td>{$row['prenom']}</td>
                <td>{$row['email']}</td>
                <td>{$row['age']}</td>
                <td>{$row['poste']}</td>
              </tr>";
}

$html .= '</table>';

// Écrire le HTML
$pdf->writeHTML($html, true, false, true, false, '');

// Fermer et sortir le PDF à l'écran
$pdf->Output('liste_utilisateurs.pdf', 'I');
