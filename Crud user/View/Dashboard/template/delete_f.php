<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="wID_Formationth=device-wID_Formationth, initial-scale=1.0">
    <title>Delete Formation</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?ID_Formation=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="wID_Formationth=device-wID_Formationth, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <!-- <meta name="twitter:site" content="@bootstrapdash">
    <meta name="twitter:creator" content="@bootstrapdash">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png"> -->

    <!-- Facebook -->
    <!-- <meta property="og:url" content="https://www.bootstrapdash.com/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:wID_Formationth" content="1200">
    <meta property="og:image:height" content="600"> -->

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Dashboard</title>

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">

</head>

</html>

<?php
// Inclure votre fichier FormationC.php
require_once '../../../Controller/FormationC.php';

// Créer une instance de votre contrôleur
$formationController = new FormationController();

// Vérifier si le formulaire a été soumis
if(isset($_POST['delete_ID_Formation'])) {
    // Récupérer l'ID_Formation de la formation à supprimer
    $delete_ID_Formation = $_POST['delete_ID_Formation'];

    // Supprimer la formation
    $formationController->deleteFormation($delete_ID_Formation);

    // Rediriger vers une page de confirmation ou une autre page appropriée
    header("Location: index.html");
    exit();
}
?>
<style>
 body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      margin: 20px;
    }

    h2 {
      margin-bottom: 20px;
    }

    table {
      wID_Formationth: 100%;
      border-collapse: collapse;
      border-radius: 5px;
      overflow: hID_Formationden;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      background-color: #fff;
    }

    th, td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solID_Formation #e0e0e0;
    }

    th {
      background-color: #007bff;
      color: #fff;
      cursor: pointer;
    }

    th:hover {
      background-color: #0056b3;
    }

    tbody tr:hover {
      background-color: #f5f5f5;
    }

    .action-buttons button {
      margin-right: 5px;
    }

    .action-buttons button:last-child {
      margin-right: 0;
    }
    button {
            background-color: #3366ff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #3366ff;
        }
  </style>
<body class="az-body">

<div class="az-signup-wrapper">
  <div class="az-column-signup-left">
    <div>
      <i class="typcn typcn-chart-bar-outline"></i>
    </div>
  </div><!-- az-column-signup-left -->
  <div class="az-column-signup">
     <h2>Career Path</h2>
    <div class="az-signup-header">
      <h2>Get Started</h2>

      <form action="#" method="post">
      <div class="form-group">
      <body>
    <h2>Delete Formation</h2>
    <form action="" method="post" onsubmit="return valID_FormationateForm()">
        <label for="delete_ID_Formation">Formation ID_Formation:</label>
        <input type="text" ID_Formation="delete_ID_Formation" name="delete_ID_Formation">
        <button type="submit">Delete Formation</button>
    </form>
    <button onclick="window.location.href='index.html';">Home</button>
</body>
      </form>
      </div>

    </div>
  </div>

    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>
    <script src="../js/jquery.cookie.js" type="text/javascript"></script>

    <script src="../js/azia.js"></script>
<script>
    function valID_FormationateForm() {
        var deleteID_Formation = document.getElementByID_Formation("delete_ID_Formation").value;
        if (deleteID_Formation == "") {
            alert("Formation ID_Formation must be filled out");
            return false;
        }
        return true;
    }
    </script>
  </body>
</html>
