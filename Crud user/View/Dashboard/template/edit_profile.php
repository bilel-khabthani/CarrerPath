<?php
session_start();
require_once '../../../Controller/UserC.php';

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pdo = config::Connexion();
    $email = $_POST['email'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $poste = $_POST['poste'];

    // Ajoutez des validations et des nettoyages appropriés ici
    
    $query = "UPDATE user SET email = :email, nom = :nom,prenom = :prenom,age = :age,poste = :poste WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':age', $age);
    $stmt->bindParam(':poste', $poste);

    $stmt->bindParam(':id', $_SESSION['id'], PDO::PARAM_INT);
    $stmt->execute();

    // Redirection après la mise à jour
    header('Location: update.php');
    exit;
}
?>
<script>
function validateForm() {
    var email = document.getElementById('email').value;
    var id = document.getElementById('id').value;
    var poste = document.getElementById('poste').value.toLowerCase();
    var age = document.getElementById('age').value;
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (id.trim() === '' || isNaN(id)) {
    alert("L'ID doit être un nombre et ne peut pas être vide.");
    return false;
}

if (!emailPattern.test(email)) {
    alert("Veuillez entrer une adresse e-mail valide.");
    return false;
}
if (poste !== 'employe' && poste !== 'candidat' && poste !== 'admin') {
    alert("Veuillez Saisir 'employe' ou 'candidat' ou 'admin'.");
        return false;
}
    
if (age.trim() === '' || isNaN(age)) {
    alert("L'âge doit être un nombre et ne peut pas être vide.");
    return false;
}
return true;
}
</script>
