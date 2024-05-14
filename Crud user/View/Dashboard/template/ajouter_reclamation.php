<?php
require_once '../../../controller/reclamationC.php';
//include_once '../model/reclamation.php';
date_default_timezone_set('Africa/Tunis');
    $systemDate = date('Y-m-d');

    $error = "";
    // create user
    $reclamation = null;
    // create an instance of the controller
    $reclamationC = new reclamationC();
    if (
        isset($_POST['nom']) &&
        isset($_POST['email']) &&
        isset($_POST['phone']) &&
        isset($_POST['sujet']) &&
        isset($_POST['description'])
    ){
        if (
            !empty($_POST["nom"]) &&
            !empty($_POST["email"]) &&
            !empty($_POST["phone"]) &&
            !empty($_POST["sujet"]) &&
            !empty($_POST["description"]) 
        ) {
            $reclamation = new reclamation(
                $_POST['nom'],
                $_POST['email'] ,
                $_POST['phone'] ,
                "Pending" ,
                $_POST['sujet'] ,
                $systemDate ,
                $_POST['description'] 
            );
			$reclamationC->ajouter($reclamation);
          
        }
        else
            $error = "Missing information";
   }

   if(isset($_POST['ajouter']))
	{
    	header ('Location:afficherReclamation.php');
	}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Réclamation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Style pour centrer le contenu */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        /* Style pour ajuster les champs de formulaire */
        .form-group {
            width: 100%;
            max-width: 400px; /* Ajustez la largeur maximale selon votre besoin */
            margin-bottom: 20px;
        }
        /* Style pour le bouton de soumission */
        .btn-primary {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="az-signup-wrapper">
            <div class="az-column-signup">
                <center>
                    <h2>Career Path</h2>
                    <div class="az-signup-header">
                        <h2>Get Started</h2>

                        <form action="#" method="post" onsubmit="return verif();">
                            <div class="form-group">
                                <label for="nom">Nom:</label>
                                <input type="text" id="nom" name="nom" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" id="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone:</label>
                                <input type="text" id="phone" name="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="etat">Etat:</label>
                                <input type="text" id="etat" name="etat" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="sujet">Sujet:</label>
                                <input type="text" id="sujet" name="sujet" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="date">Date:</label>
                                <input type="text" id="date" name="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <input type="text" id="description" name="description" class="form-control">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </center>
            </div>
        </div>
    </div>
    <script>
        function verif() {
            let nom = document.getElementById("nom").value;
            let email = document.getElementById("email").value;
            let phone = document.getElementById("phone").value;
            let sujet = document.getElementById("sujet").value;
            let description = document.getElementById("description").value;

            if (nom === "") {
                alert("Veuillez saisir votre nom.");
                return false;
            }

            var nomFormat = /^[A-Za-z]+$/;
            if (!nom.match(nomFormat)) {
                alert("Votre nom doit contenir seulement des lettres.");
                return false;
            }

            if (email === "") {
                alert("Veuillez saisir l'email.");
                return false;
            }

            var emailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (!email.match(emailFormat)) {
                alert("Veuillez respecter la forme de l'email.");
                return false;
            }

            if (phone === "") {
                alert("Veuillez saisir le numéro de téléphone.");
                return false;
            }

            if (phone.length !== 8 || isNaN(phone)) {
                alert("Votre numéro de téléphone doit contenir exactement 8 chiffres.");
                return false;
            }

            if (sujet === "") {
                alert("Veuillez saisir le sujet.");
                return false;
            }

            if (description === "") {
                alert("Veuillez saisir la description.");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
