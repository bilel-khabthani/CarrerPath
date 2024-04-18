<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Offres</title>
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
        }

        .header {
            text-align: center;
            margin-bottom: 60px;
        }

        .logo {
            width: 300px; /* Ajustez la taille selon votre logo */
        }

        .buttons {
            text-align: center;
        }

        h2 {
            margin-top: 30px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 20px 40px; /* agrandir les boutons */
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 0 10px;
            font-size: 20px; /* agrandir la police */
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
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="logo.png" alt="Logo" class="logo">
            <h2>Gestion des Offres</h2>
        </div>
        <div class="buttons">
            <a href="addOffre.php"><button>Ajouter une offre</button></a>
            <a href="showOffre.php"><button>Afficher les offres</button></a>
            <a href="stats.php"><button>Statistiques</button></a>
        </div>
    </div>
</body>
</html>
