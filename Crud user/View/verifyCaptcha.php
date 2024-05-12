<?php
session_start();

// Supposons que les variables de session pour l'ID et le poste de l'utilisateur soient définies lors de la connexion
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    echo json_encode(['success' => false, 'message' => 'Utilisateur non connecté']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userCaptcha = $_POST['captcha'];
    $expectedCaptcha = $_POST['expectedCaptcha'];

    if ($userCaptcha === $expectedCaptcha) {
        // Redirection en fonction du rôle stocké dans la session
        $redirectUrl = $_SESSION['poste'] === 'admin' ? 'Dashboard/template/principale.php' : 'home.html';
        echo json_encode(['success' => true, 'redirectUrl' => $redirectUrl]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Captcha incorrect']);

    }
} else {
    // Non POST request, handle error or redirect
    header("Location: captcha.php");
    exit;
}
?>
