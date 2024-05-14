<!DOCTYPE html>
<html lang="en">
  <head>
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
    <meta Name="viewport" content="wID_Formationth=device-wID_Formationth, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <!-- <meta Name="twitter:site" content="@bootstrapdash">
    <meta Name="twitter:creator" content="@bootstrapdash">
    <meta Name="twitter:card" content="summary_large_image">
    <meta Name="twitter:title" content="Azia">
    <meta Name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta Name="twitter:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png"> -->

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
    <meta Name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta Name="author" content="BootstrapDash">

    <title>Dashboard</title>

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">

  </head>
  <button onclick="window.location.href='index.html';">Home</button>
  <?php
require_once '../../../controller/FormationC.php';
$formationController = new FormationController();

$formationController = new FormationController();

// Vérifiez si le formulaire de mise à jour est soumis
if(isset($_POST['update'])) {
    // Récupérer les données du formulaire
    $ID_Formation = $_POST['ID_Formation'];
    $Titre = $_POST['Titre'];
    $date = $_POST['date'];
    $Objectifs = $_POST['Objectifs'];
    $Duree = $_POST['Duree'];
    $Langue_Formation = $_POST['Langue_Formation'];
    $Lieu = $_POST['Lieu'];
    $Ressources = $_POST['Ressources'];
    
    // Vérifier si les champs ne sont pas vides
    if (!empty($ID_Formation) && !empty($Titre) && !empty($date) && !empty($Objectifs) && !empty($Duree) && !empty($Langue_Formation) && !empty($Lieu) && !empty($Ressources)) {
        // Mettre à jour la formation
        $formationController->updateFormation($ID_Formation, $Titre, $date, $Objectifs, $Duree, $Langue_Formation, $Lieu, $Ressources);
        echo "Formation mise à jour avec succès.";
    } else {
        echo "<script>alert('Tous les champs sont obligatoires.');</script>";
    }
}

// Vérifiez si un ID_Formation de formation est passé via GET
if(isset($_GET['ID_Formation'])) {
    $formation_ID_Formation = $_GET['ID_Formation'];
    $formation = $formationController->getFormation($formation_ID_Formation);
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
          
    <label for="ID_Formation">ID_Formation:</label>
    <input type="text" id="ID_Formation" name="ID_Formation" class="form-control">
</div>
<div class="form-group">
    <label for="Titre">Titre:</label>
    <input type="text" id="Titre" name="Titre" class="form-control">
</div>
<div class="form-group">
    <label for="date">Date:</label>
    <input type="date" id="date" name="date" class="form-control">
</div>
<div class="form-group">
    <label for="Objectifs">Objectifs:</label>
    <input type="text" id="Objectifs" name="Objectifs" class="form-control">
</div>
<div class="form-group">
    <label for="Duree">Duree:</label>
    <input type="text" id="Duree" name="Duree" class="form-control">
</div>
<div class="form-group">
    <label for="Langue_Formation">Langue de Formation:</label>
    <input type="text" id="Langue_Formation" name="Langue_Formation" class="form-control">
</div>
<div class="form-group">
    <label for="Lieu">Lieu:</label>
    <input type="text" id="Lieu" name="Lieu" class="form-control">
</div>
<div class="form-group">
    <label for="Ressources">Ressources:</label>
    <input type="text" id="Ressources" name="Ressources" class="form-control">
</div>

        
          <!-- You can add more form fields here as needed -->
          <button type="submit" Name="update" class="btn btn-primary">Update</button>
        </form>

    </div>
  </div>
  </div>
        <div class="az-signup-footer">
          <p>Already have an account? <a href="page-signin.html">Sign In</a></p>
        </div><!-- az-signin-footer -->
      </div><!-- az-column-signup -->
    </div><!-- az-signup-wrapper -->

    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>
    <script src="../js/jquery.cookie.js" type="text/javascript"></script>

    <script src="../js/azia.js"></script>
    <script>
      $(function(){
        'use strict'

      });
    </script>
  </body>
</html>