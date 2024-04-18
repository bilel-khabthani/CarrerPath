<?php
require_once "../config.php";

function getStats() {
    $stats = array();

    try {
        $db = config::connexion();

        // Nombre total d'offres
        $total_offres_sql = "SELECT COUNT(*) as total FROM offres";
        $stmt_total_offres = $db->query($total_offres_sql);
        $total_offres = $stmt_total_offres->fetch(PDO::FETCH_ASSOC)['total'];

        // Date de la première offre
        $first_offre_sql = "SELECT MIN(date_created) as first_date FROM offres";
        $stmt_first_offre = $db->query($first_offre_sql);
        $first_offre_date = $stmt_first_offre->fetch(PDO::FETCH_ASSOC)['first_date'];

        // Date de la dernière offre
        $last_offre_sql = "SELECT MAX(date_created) as last_date FROM offres";
        $stmt_last_offre = $db->query($last_offre_sql);
        $last_offre_date = $stmt_last_offre->fetch(PDO::FETCH_ASSOC)['last_date'];

        // Stockage des statistiques dans un tableau associatif
        $stats = array(
            'total_offres' => $total_offres,
            'first_offre_date' => $first_offre_date,
            'last_offre_date' => $last_offre_date
        );
    } catch (PDOException $e) {
        die('Error: ' . $e->getMessage());
    }

    return $stats;
}

// Récupérer les statistiques
$stats = getStats();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistiques sur les Offres</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-top: 30px;
            text-align: center;
        }
        .stats-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .stat {
            flex-basis: 30%;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .stat h3 {
            margin-top: 0;
        }
        .stat p {
            margin: 10px 0;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Statistiques sur les Offres</h2>
        <button onclick="window.location.href='index.php';">Home</button>
        <div class="stats-container">
            <div class="stat">
                <h3>Nombre total d'offres</h3>
                <p><?php echo $stats['total_offres']; ?></p>
            </div>
            <div class="stat">
                <h3>Date de la première offre</h3>
                <p><?php echo $stats['first_offre_date']; ?></p>
            </div>
            <div class="stat">
                <h3>Date de la dernière offre</h3>
                <p><?php echo $stats['last_offre_date']; ?></p>
            </div>
        </div>
    </div>
</body>
</html>
