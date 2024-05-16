<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "entretiens";

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Ajouter un entretien
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_entretien']) ) {
    // Récupérer les valeurs du formulaire
    $id_entretien = $_POST['id_entretien'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $date_entretien = $_POST['date_entretien'];

    // Vérifier si les valeurs sont vides
    // Préparer la requête SQL d'insertion
$sql = "INSERT INTO entretiens (id_entretien, nom, prenom, age, telephone, email, date_entretien) 
VALUES (?, ?, ?, ?, ?, ?, ?)";

// Préparer la déclaration et lier les paramètres
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssissss", $id_entretien, $nom, $prenom, $age, $telephone, $email, $date_entretien);

// Exécuter la requête
if ($stmt->execute()) {
echo "Entretien ajouté avec succès ......";
} else {
echo "Erreur lors de l'ajout de l'entretien : " . $stmt->error;
}

    }


// Fonction pour récupérer les entretiens depuis la base de données
function getEntretiensFromDB($conn) {
    $entretiens = array();

    // Requête SQL pour sélectionner tous les entretiens
    $sql = "SELECT * FROM entretiens";

    // Exécution de la requête
    $result = $conn->query($sql);

    // Vérifier s'il y a des résultats
    if ($result->num_rows > 0) {
        // Parcourir les résultats et les ajouter au tableau d'entretiens
        while ($row = $result->fetch_assoc()) {
            $entretiens[] = $row;
              
        }
    }

    // Retourner le tableau d'entretiens
    return $entretiens;
}

// Afficher les entretiens dans le Back Office
$entretiens = getEntretiensFromDB($conn);

// Supprimer un entretien
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_entretien'])) {
    $id_entretien = $_POST['delete_entretien'];

    // Préparer la requête SQL de suppression
    $sql = "DELETE FROM entretiens WHERE id_entretien='$id_entretien'";

    if ($conn->query($sql) === TRUE) {
        echo "Entretien supprimé avec succès.";
    } else {
        echo "Erreur lors de la suppression de l'entretien : " . $conn->error;
    }
}





// Modifier un entretien
// Récupérer les valeurs du formulaire
$id_entretien = isset($_POST['id_entretien']) ? $_POST['id_entretien'] : '';
$nom = isset($_POST['nom']) ? $_POST['nom'] : '';
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
$age = isset($_POST['age']) ? $_POST['age'] : '';
$telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$date_entretien = isset($_POST['date_entretien']) ? $_POST['date_entretien'] : '';

// Vérifier si les valeurs sont vides
if (empty($id_entretien) || empty($nom) || empty($prenom) || empty($age) || empty($telephone) || empty($email) || empty($date_entretien)) {
    echo "";
} else {
    // Continuez avec le traitement des données
    // Préparer la requête SQL de mise à jour
    $sql = "UPDATE entretiens SET nom=?, prenom=?, age=?, telephone=?, email=?, date_entretien=? WHERE id_entretien=?";

    // Préparer la déclaration et lier les paramètres
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssisssi", $nom, $prenom, $age, $telephone, $email, $date_entretien, $id_entretien);

    // Exécuter la requête
    if ($stmt->execute()) {
        echo "Entretien modifié avec succès.";
    } else {
        echo "Erreur lors de la modification de l'entretien : " . $stmt->error;
    }

}



// Ajouter une réponse à un entretien
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_reponse'])) {
    // Récupérer les valeurs du formulaire
    $id_entretien = $_POST['id_entretien'];
    $resultat = $_POST['resultat'];

    // Vérifier si les valeurs sont vides
    if (empty($id_entretien) || empty($resultat)) {
        echo "";
    } else {
        // Préparer la requête SQL d'insertion
        $sql = "INSERT INTO reponses (id_entretien, resultat) VALUES (?, ?)";

        // Préparer la déclaration et lier les paramètres
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("is", $id_entretien, $resultat);

        // Exécuter la requête
        if ($stmt->execute()) {
            echo "Réponse ajoutée avec succès.";
        } else {
            echo "Erreur lors de l'ajout de la réponse : " . $stmt->error;
        }
    }
}







































// Fonction pour récupérer les réponses aux entretiens depuis la base de données
function getReponsesFromDB($conn) {
    $reponses = array();

    // Requête SQL pour sélectionner toutes les réponses aux entretiens
    $sql = "SELECT * FROM reponses";

    // Exécution de la requête
    $result = $conn->query($sql);

    // Vérifier s'il y a des résultats
    if ($result->num_rows > 0) {
        // Parcourir les résultats et les ajouter au tableau de réponses
        while ($row = $result->fetch_assoc()) {
            $reponses[] = $row;
        }
    }

    // Retourner le tableau de réponses
    return $reponses;
}


// Récupérer les réponses depuis la base de données
$reponses = getReponsesFromDB($conn);





// Requête SQL pour récupérer le nombre total d'entretiens
$sql_total_entretiens = "SELECT COUNT(*) AS total_entretiens FROM entretiens";
$result_total_entretiens = $conn->query($sql_total_entretiens);
$row_total_entretiens = $result_total_entretiens->fetch_assoc();
$total_entretiens = $row_total_entretiens['total_entretiens'];

// Requête SQL pour récupérer le nombre total de réponses acceptées
$sql_total_reponses_acceptees = "SELECT COUNT(*) AS total_reponses_acceptees FROM reponses WHERE resultat = 'acepter'";
$result_total_reponses_acceptees = $conn->query($sql_total_reponses_acceptees);
$row_total_reponses_acceptees = $result_total_reponses_acceptees->fetch_assoc();
$total_reponses_acceptees = $row_total_reponses_acceptees['total_reponses_acceptees'];

// Fermer la connexion
$conn->close();

// Afficher les statistiques
$data = array(
    'total_entretiens' => $total_entretiens,
    'total_reponses_acceptees' => $total_reponses_acceptees
);




   






?>
