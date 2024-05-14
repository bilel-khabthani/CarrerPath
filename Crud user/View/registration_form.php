<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta Name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"], /* corrected */
        input[type="tel"],
        input[type="date"],
        select,
        textarea {
            width: calc(100% - 22px);
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            float: right;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        textarea {
            width: calc(100% - 22px);
            resize: vertical;
        }
    </style>
</head>
<body>
    
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'C:/xampp/htdocs/formation/phpmailer/phpmailer/src/Exception.php';
require '../../phpmailer/phpmailer/phpmailer/src/PHPMailer.php';
require '../../phpmailer/phpmailer/phpmailer/src/SMTP.php';
require "../Controller/SpecialiteC.php";
$specialiteController = new SpecialiteController(); // Correction du nom de la classe

$mail = new PHPMailer(true);


if(isset($_POST['Submit'])) { // Correction du nom de l'attribut du bouton de soumission
    $ID_Condidature = $_POST['ID_Condidature'];
    $Nom = $_POST['Nom'];
    $Prenom = $_POST['Prenom'];
    $Email = $_POST['Email'];

    if (!empty($ID_Condidature) && !empty($Nom) && !empty($Prenom) && !empty($Email)) {
        $specialiteController->addSpecialite($ID_Condidature, $Nom, $Prenom, $Email);
        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'dhiaayadi25@gmail.com'; // Mettez votre adresse e-mail Gmail
            $mail->Password   = 'audhtttuztxkjbdo'; // Mettez votre mot de passe Gmail
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;

            //Recipients
            $mail->setFrom('dhiaayadi25@gmail.com', 'carreer path'); // Mettez votre adresse e-mail et nom ici
            $mail->addAddress($Email); // Ajoutez l'adresse e-mail de l'utilisateur ici

            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Confirmation d\'inscription';
            $mail->Body    = 'Bonjour ' . $Nom . ' ' . $Prenom . ',<br>Votre inscription a été confirmée avec succès.';

            $mail->send();
            echo "<script>alert('Spécialité ajoutée avec succès. Un e-mail de confirmation a été envoyé.');</script>";
        } catch (Exception $e) {
            echo "<script>alert('Erreur lors de l'envoi de l'e-mail de confirmation: {$mail->ErrorInfo}');</script>";
        }

        header('Location: Formations.php');
    } else {
        echo "<script>alert('Tous les champs sont obligatoires.');</script>";
    }
}
?>
<div class="container">
    <h1>User Registration</h1>
    <form action="#" method="post">
        <label for="ID_Condidature">ID:</label><br>
        <input type="text" id="ID_Condidature" name="ID_Condidature" required><br>
        <label for="Nom">Nom:</label><br>
        <input type="text" id="Nom" name="Nom" required><br>
        <label for="Prenom">Prénom:</label><br>
        <input type="text" id="Prenom" name="Prenom" required><br>
        <label for="Email">Email:</label><br>
        <input type="email" id="Email" name="Email" required><br> <!-- Correction du nom de l'attribut -->
        <input type="submit" value="Submit" name="Submit"> <!-- Correction du nom de l'attribut -->
    </form>
</div>

</body>
</html>
