<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une offre</title>
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
   
</head>
<body>
    <?php
        require "../controller/OffreController.php";
        $offreController = new OffreController();
        
        if(isset($_POST['submit'])) {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $date_created = $_POST['date_created'];
            $date_expired = $_POST['date_expired'];

            do {
                $id = sprintf('%04d', mt_rand(0, 9999));
                $existing_offre = $offreController->getOffre($id);
            } while($existing_offre);

            if (!empty($title) && !empty($description) && !empty($date_created) && !empty($date_expired)) {
                $offreController->addOffre($id, $title, $description, $date_created, $date_expired);
            } else {
                echo "<script>alert('Tous les champs sont obligatoires.');</script>";
            }
        }
    ?>
    <h2>Ajouter une nouvelle offre</h2>
    <button onclick="window.location.href='index.php';">Home</button>
    <form action="addOffre.php" method="POST">
        <label for="title">Titre:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description"></textarea><br><br>
        <label for="date_created">Date de création:</label>
        <input type="date" id="date_created" name="date_created" required>
        <label for="date_expired">Date d'expiration:</label>
        <input type="date" id="date_expired" name="date_expired" required>
        <button type="submit" name="submit">Ajouter</button>
        
    </form>
    
</body>
</html>
