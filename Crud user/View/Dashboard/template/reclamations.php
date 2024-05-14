<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Réclamations</title>
    <!-- Mettez ici vos liens vers les feuilles de style et les scripts -->
</head>
<body>
    <?php
    // Inclure le contrôleur des réclamations
    require "../Controller/reclamationC.php";
    $reclamationController = new reclamationC();

    // Code pour ajouter une réclamation
    if(isset($_POST['submit'])) {
        // Récupération des données du formulaire
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $etat = $_POST['etat'];
        $sujet = $_POST['sujet'];
        $date = $_POST['date'];
        $description = $_POST['description'];

        // Vérifier si tous les champs sont remplis
        if (!empty($nom) && !empty($email) && !empty($phone) && !empty($etat) && !empty($sujet) && !empty($date) && !empty($description)) {
            // Créer un objet réclamation
            $newReclamation = new Reclamation($nom, $email, $phone, $etat, $sujet, $date, $description);
            // Appeler la méthode pour ajouter une réclamation
            $reclamationController->ajouter($newReclamation);
        } else {
            echo "Tous les champs sont obligatoires.";
        }
    }

    // Code pour supprimer une réclamation
    if(isset($_GET['delete'])) {
        $reclamationController->supprimer($_GET['delete']);
    }

    // Récupérer la liste des réclamations
    $listeReclamations = $reclamationController->afficher();
    ?>
    
    <!-- Afficher la liste des réclamations -->
    <h2>Liste des Réclamations</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>État</th>
                <th>Sujet</th>
                <th>Date</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listeReclamations as $reclamation): ?>
                <tr>
                    <td><?= $reclamation['id']; ?></td>
                    <td><?= $reclamation['nom']; ?></td>
                    <td><?= $reclamation['email']; ?></td>
                    <td><?= $reclamation['phone']; ?></td>
                    <td><?= $reclamation['etat']; ?></td>
                    <td><?= $reclamation['sujet']; ?></td>
                    <td><?= $reclamation['date']; ?></td>
                    <td><?= $reclamation['description']; ?></td>
                    <td>
                        <!-- Ajoutez ici les liens pour supprimer ou modifier la réclamation -->
                        <a href="?delete=<?= $reclamation['id']; ?>">Supprimer</a>
                        <!-- Vous pouvez ajouter un lien pour modifier la réclamation ici -->
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Formulaire pour ajouter une nouvelle réclamation -->
    <h2>Ajouter une nouvelle Réclamation</h2>
    <form action="" method="POST">
        <label for="nom">Nom:</label><br>
        <input type="text" id="nom" name="nom"><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="phone">Téléphone:</label><br>
        <input type="text" id="phone" name="phone"><br>
        <label for="etat">État:</label><br>
        <input type="text" id="etat" name="etat"><br>
        <label for="sujet">Sujet:</label><br>
        <input type="text" id="sujet" name="sujet"><br>
        <label for="date">Date:</label><br>
        <input type="text" id="date" name="date"><br>
        <label for="description">Description:</label><br>
        <input type="text" id="description" name="description"><br>
        <button type="submit" name="submit">Ajouter</button>
    </form>
</body>
</html>
