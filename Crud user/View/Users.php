<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Utilisateurs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,900" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    require "../Controller/UserC.php";
    $UserController = new UserController();


   
    if(isset($_POST['submit'])) {
        $id = $_POST['id'];
        $mdp = $_POST['mdp']; 
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $poste = $_POST['poste'];

        if (!empty($id) && !empty($mdp) && !empty($nom) && !empty($prenom) && !empty($email) && !empty($age)&& !empty($poste)) {
            
                $UserController->addUser($id,$mdp,$nom,$prenom,$email, $age, $poste);
            }
        } else {
            $error= "Tous les champs sont obligatoires.";
        }

   
    if(isset($_GET['delete'])) {
        $UserController->deleteUser($_GET['delete']);
       
    }

    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $mdp = $_POST['mdp'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $poste = $_POST['poste'];
    
        if (!empty($id) && !empty($mdp) && !empty($nom) && !empty($prenom) && !empty($email) && !empty($age)&& !empty($poste)) {
            $UserController->updateUser($id,$mdp, $nom, $prenom, $email, $age,$poste );
        } else {
            echo "Tous les champs sont obligatoires.";
        }
    }
    if (isset($_GET['id'])) {
        $user_id=$_GET['id'];
        $user=$UserController->getUser($user_id);
    }


    $list = $UserController->listUsers();

    ?>
    <h2>Liste des Utilisateurs</h2>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Mot De Passe</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Âge</th>
                <th>Poste</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list as $user): ?>
                <tr>
                    <td><?= $user['id']; ?></td>
                    <td><?= $user['mdp']; ?></td>
                    <td><?= $user['nom']; ?></td>
                    <td><?= $user['prenom']; ?></td>
                    <td><?= $user['email']; ?></td>
                    <td><?= $user['age']; ?></td>
                    <td><?= $user['poste']; ?></td>
                    <td>
                        <form action="" method="POST">
                            <input type="text" name="id" value="<?= $user['id']; ?>">
                            <input type="text" name="mdp" value="<?= $user['mdp']; ?>">
                            <input type="text" name="nom" value="<?= $user['nom']; ?>">
                            <input type="text" name="prenom" value="<?= $user['prenom']; ?>">
                            <input type="text" name="email" value="<?= $user['email']; ?>">
                            <input type="text" name="age" value="<?= $user['age']; ?>">
                            <input type="text" name="poste" value="<?= $user['poste']; ?>">
                            <button type="submit" name="update">Update</button>
                            
                            
                        </form>
                        <a href="?delete=<?= $user['id']; ?>">Delete</a>
                        
                        
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
            
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
    if (poste !== 'admin' && poste !== 'employe') {
        alert("La catégorie doit être 'admin' ou 'employe'.");
            return false;
    }
        
    if (age.trim() === '' || isNaN(age)) {
        alert("L'âge doit être un nombre et ne peut pas être vide.");
        return false;
    }
    return true;
    }
    </script>
    <h2>Ajouter un nouvel Utilisateur</h2>
    <form action="" method="POST" onsubmit="return validateForm();">
        <label for="id">ID:</label><br>
        <input type="text" id="id" name="id"><br>
        <label for="mdp">Mot De Passe:</label><br>
        <input type="text" id="mdp" name="mdp"><br>
        <label for="nom">Nom:</label><br>
        <input type="text" id="nom" name="nom"><br>
        <label for="prenom">Prenom:</label><br>
        <input type="text" id="prenom" name="prenom"><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="agel">Age</label><br>
        <input type="text" id="age" name="age"><br>
        <label for="poste">Poste</label><br>
        <input type="text" id="poste" name="poste"><br>
        <button type="submit" name="submit">Ajouter</button>
    </form>
    
</body>
</html>
