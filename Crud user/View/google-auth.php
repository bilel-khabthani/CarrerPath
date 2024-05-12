<?php
require_once '../vendor/autoload.php';
require "../Controller/UserC.php";
session_start();

$client = new Google_Client();
$client->setClientId('198029798843-e3jkki3vlktcq0oormd3iip5a03ouqkd.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost/Crud%20user/View/home.html');
$client->addScope("email");
$client->addScope("profile");

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    // Obtenez les données de profil de l'utilisateur
    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();
    $email = $google_account_info->email;
    $name = $google_account_info->name;
     // Vérifier si l'utilisateur existe déjà
     $pdo = config::Connexion();
     $query = "SELECT * FROM user WHERE email = ?";
     $stmt = $pdo->prepare($query);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $result = $stmt->get_result();
 
     if ($result->num_rows == 0) {
         // Insérer le nouvel utilisateur
         $userId = bin2hex(random_bytes(8));
         $insertStmt = $conn->prepare("INSERT INTO user (user_id, name, email) VALUES (?, ?, ?)");
         $insertStmt->bind_param("sss", $userId, $name, $email);
         $insertStmt->execute();
     }
 
     $_SESSION['user_id'] = $userId;
     $_SESSION['user_name'] = $name;
     $_SESSION['user_email'] = $email;
     
     // Redirection vers la page de profil ou d'accueil
     header('Location: profile.php');
     exit();
 }
    // Vérifiez si cet e-mail existe dans votre base de données
    // Logique pour lier/connecter l'utilisateur à votre système
else {
    $auth_url = $client->createAuthUrl();
    header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
    exit();
}
?>