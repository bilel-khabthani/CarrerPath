<?php

// Paramètres SMTP
$smtpHost = 'smtp.gmail.com';
$smtpPort = 587;
$smtpUsername = 'votre_adresse@gmail.com';
$smtpPassword = 'votre_mot_de_passe';

// Adresse e-mail du destinataire
$to = 'adresse_destinataire@example.com';

// Sujet de l'e-mail de test
$subject = 'Test d\'envoi d\'e-mail via SMTP';

// Corps de l'e-mail de test
$message = 'Ceci est un test d\'envoi d\'e-mail via SMTP.';

// En-têtes de l'e-mail
$headers = "From: $smtpUsername\r\n";
$headers .= "Reply-To: $smtpUsername\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Envoi de l'e-mail de test
if (mail($to, $subject, $message, $headers)) {
    echo 'Le test d\'envoi d\'e-mail a réussi !';
} else {
    echo 'Le test d\'envoi d\'e-mail a échoué. Veuillez vérifier les paramètres SMTP.';
}
?>
