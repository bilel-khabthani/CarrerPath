<?php
// Vérifiez si un ID_Formation est passé via GET
if(isset($_GET['ID_Formation'])) {
    // Inclure le fichier FormationC.php pour obtenir les détails de la formation
    require "../Controller/FormationC.php";
    $formationController = new FormationController();
    
    // Récupérer l'ID_Formation depuis la requête GET
    $formation_ID_Formation = $_GET['ID_Formation'];
    
    // Récupérer les détails de la formation à partir de l'ID_Formation
    $formation = $formationController->getFormation($formation_ID_Formation);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(&quot;images/big_image_1.jpg&quot;); background-position: -25px -25px;">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">

            
    <title>Détails de la Formation</title>
    <style>
        /* Style général */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        /* Style pour le tableau */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        /* Style pour la liste de détails de la formation */
        .details {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .details li {
            border-bottom: 1px solid #ccc;
            padding: 10px 0;
        }

        .details li:last-child {
            border-bottom: none;
        }

        .details li span {
            font-weight: bold;
            color: #555;
        }

        /* Bouton de retour */
        .back-btn {
            display: block;
            width: 120px;
            margin: 20px auto;
            padding: 10px 15px;
            text-align: center;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .back-btn:hover {
            background-color: #0056b3;
        }
        .join-btn {
            display: block;
            width: 120px;
            margin: 20px auto;
            padding: 10px 15px;
            text-align: center;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .join-btn:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Détails de la Formation</h1>
        <?php if (!empty($formation)): ?>
        <ul class="details">
            <li><span>Objectifs:</span> <?= $formation['Objectifs']; ?></li>
            <li><span>Durée:</span> <?= $formation['Duree']; ?></li>
            <li><span>Langue de la Formation:</span> <?= $formation['Langue_Formation']; ?></li>
            <li><span>Lieu:</span> <?= $formation['Lieu']; ?></li>
            <li><span>Ressources:</span> <?= $formation['Ressources']; ?></li>
            <!-- Ajoutez d'autres attributs ici -->
        </ul>
        <?php else: ?>
        <p>Aucune formation trouvée avec cet ID_Formation.</p>
        <?php endif; ?>

        <table>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Formation A</td>
                <td>Description de la Formation A</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Formation B</td>
                <td>Description de la Formation B</td>
            </tr>
            <!-- Ajoutez plus de lignes si nécessaire -->
        </table>
       <a href="Formations.php" class="back-btn">Retour</a>
       <a href="registration_form.php" class="join-btn">Rejoindre</a>

    </div>
</body>

</html>
