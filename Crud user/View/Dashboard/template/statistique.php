<?php
    // Inclure le contrôleur et récupérer les données des offres
    require_once '../../../controller/FormationC.php';
    $formationController = new FormationController();
    $list = $formationController->listFormations();
    
    // Initialiser un tableau associatif pour stocker le nombre d'offres par langue
    $langueCounts = [];

    // Compter le nombre d'offres pour chaque langue de formation
    foreach ($list as $formation) {
        $langue = $formation['Langue_Formation'];
        
        // Incrémenter le compteur pour la langue de formation
        if (array_key_exists($langue, $langueCounts)) {
            $langueCounts[$langue]++;
        } else {
            $langueCounts[$langue] = 1;
        }
    }
    
    // Préparer les données pour le graphique
    $langues = array_keys($langueCounts);
    $nombreOffres = array_values($langueCounts);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistiques</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h2>Statistiques des Offres par Langue de Formation</h2>
    
    <!-- Canvas pour le graphique -->
    <canvas id="langueChart"></canvas>

    <script>
        // Récupérer les données PHP dans des variables JavaScript
        var langues = <?php echo json_encode($langues); ?>;
        var nombreOffres = <?php echo json_encode($nombreOffres); ?>;

        // Créer le graphique avec Chart.js
        var langueCtx = document.getElementById('langueChart').getContext('2d');
        var langueChart = new Chart(langueCtx, {
            type: 'bar',
            data: {
                labels: langues, // Utiliser les langues comme labels
                datasets: [{
                    label: 'Nombre d\'Offres par Langue de Formation',
                    data: nombreOffres, // Utiliser le nombre d'offres comme données
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
    </script>
</body>
</html>
