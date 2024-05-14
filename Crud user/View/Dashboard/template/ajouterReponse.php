<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../../../vendor/autoload.php';
require __DIR__ . '/../../../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require __DIR__ . '/../../../vendor/phpmailer/phpmailer/src/Exception.php';
require __DIR__ . '/../../../vendor/phpmailer/phpmailer/src/SMTP.php';


include_once '../../../controller/reponseC.php';
require_once '../../../controller/reclamationC.php';
require_once '../../../model/reponse.php';

date_default_timezone_set('Africa/Tunis');
$systemDate = date('Y-m-d');

$error = "";
$reponse = null;
$reclamationC = new reclamationC();
$reponseC = new reponseC();

if (isset($_POST['description'])) {
    if (!empty($_POST["description"])) {
        $reponse = new reponse(
            $systemDate,
            $_POST['description'],
            $_GET["id"]
        );
        $reponseC->ajouter($reponse);

        // Créer une instance de PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Paramètres du serveur SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'ghassenh51@gmail.com';
            $mail->Password = 'kcat qcyk uoit zfcs';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->SMTPDebug = 3;
            

            // Destinataire
            $mail->setFrom('ghassenh51@gmail.com', 'ghassen');
            $mail->addAddress('ghassenh51@gmail.com', 'ghasseno');

            // Contenu de l'e-mail
            $mail->isHTML(true);
            $mail->Subject = 'Nouvelle réponse ajoutée';
            $mail->Body = '<html><body>Une nouvelle réponse a été ajoutée.</body></html>';

            // Envoyer l'e-mail
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        $error = "Missing information";
    }
}

if (isset($_POST['repondre'])) {
    header('Location:afficherReponse.php');
}
?>



<!DOCTYPE html>
<html>

<head>
    <title>Dashboard | Ajouter Reponse</title>
    <link rel="stylesheet" type="text/css" href="back/admin.css">
    <link rel="shortcut icon" type="image/x-icon" href="back/assets/img/favicon.png">


    <link href="back/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="back/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="back/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="back/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="back/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="back/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="back/vendor/simple-datatables/style.css" rel="stylesheet">

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
   

    <main>
        <div class="pagetitle">
            <h1>Ajouter une Reponse</h1>
            <br>
        </div>

        <section class="section dashboard">
            <div class="row">
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">
                            <form method="POST" onsubmit="return verif();">
                                <div class="mb-5">
                                    <div class="row">
                                        <div class="card-body" style="margin-left:50px;">
                                            <form method="POST">
                                                <div class="mb-5">
                                                    <div class="row">
                                                        <div class="card-body" style="margin-left:50px;">
                                                            <form method="POST" onsubmit="return verif();">
                                                                <div class="row mb-3">
                                                                    <div class="col-sm-10">
                                                                        <textarea name="description" class="form-control" id="description" placeholder="Description"></textarea>
                                                                        <br>
                                                                    </div>
                                                                </div>
                                                                <div class="text-center">
                                                                    <input class="btn btn-success" type="submit" name="repondre" value="Répondre">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Sadaka Management Dashboard</p>
    </footer>

    <script src="ctrlReponse.js"></script>
</body>

</html>
