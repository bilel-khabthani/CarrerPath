<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stats</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h2 {
            margin-top: 30px;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            cursor: pointer;
        }
        form {
            width: 50%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
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
        a {
            text-decoration: none;
            color: #f44336;
            margin-right: 10px;
        }
    </style>
    <!-- Inclure Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<button onclick="window.location.href='index.php';">Home</button>

    <h2>Statistiques des Offres</h2>
    

    
    <canvas id="creationChart"></canvas>
    <canvas id="expirationChart"></canvas>

    <?php
    require_once "../../../controller/OffreController.php";
    $offreController = new OffreController();
    $list = $offreController->listOffres();
    
    // Initialiser les tableaux pour stocker les données
    $creationCounts = [];
    $expirationCounts = [];

    // Compter le nombre d'offres pour chaque date de création et d'expiration
    foreach ($list as $offre) {
        $creationDate = $offre['date_created'];
        $expirationDate = $offre['date_expired'];
        
        // Incrémenter le compteur pour la date de création
        if (array_key_exists($creationDate, $creationCounts)) {
            $creationCounts[$creationDate]++;
        } else {
            $creationCounts[$creationDate] = 1;
        }

        // Incrémenter le compteur pour la date d'expiration
        if (array_key_exists($expirationDate, $expirationCounts)) {
            $expirationCounts[$expirationDate]++;
        } else {
            $expirationCounts[$expirationDate] = 1;
        }
    }
    
    ?>
    <script>
        // Récupérer les données PHP dans des variables JavaScript
        var creationCounts = <?php echo json_encode($creationCounts); ?>;
        var expirationCounts = <?php echo json_encode($expirationCounts); ?>;

        // Extraire les dates et les nombres d'offres pour les graphiques
        var creationDates = Object.keys(creationCounts);
        var creationValues = Object.values(creationCounts);
        var expirationDates = Object.keys(expirationCounts);
        var expirationValues = Object.values(expirationCounts);

        // Créer un graphique pour la date de création avec Chart.js
        var creationCtx = document.getElementById('creationChart').getContext('2d');
        var creationChart = new Chart(creationCtx, {
            type: 'bar',
            data: {
                labels: creationDates, // Utiliser les dates de création comme labels
                datasets: [{
                    label: 'Offres par Date de Création',
                    data: creationValues, // Utiliser les nombres d'offres comme données
                    backgroundColor: 'rgba(255, 99, 132, 0.2)', // Couleur de fond
                    borderColor: 'rgba(255, 99, 132, 1)', // Couleur de bordure
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Créer un graphique pour la date d'expiration avec Chart.js
        var expirationCtx = document.getElementById('expirationChart').getContext('2d');
        var expirationChart = new Chart(expirationCtx, {
            type: 'bar',
            data: {
                labels: expirationDates,
                datasets: [{
                    label: 'Offres par Date d\'Expiration',
                    data: expirationValues,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
             }
        });
    </script>
</body>
</html>
