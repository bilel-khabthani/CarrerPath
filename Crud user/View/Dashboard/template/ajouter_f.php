<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
      width: 100%;
      border-collapse: collapse;
      border-radius: 5px;
      overflow: hidden;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      background-color: #fff;
    }

    th, td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid #e0e0e0;
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
    <meta property="og:image:width" content="1200">
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
 
  <?php
require_once '../../../Controller/FormationC.php';
$formationController = new FormationController();

if(isset($_POST['submit'])) {
   //$ID_Formation = $_POST['ID_Formation'];
    $Titre = $_POST['Titre'];
    $date = $_POST['date'];
    $Objectifs = $_POST['Objectifs'];
    $Duree = $_POST['Duree'];
    $Langue_Formation = $_POST['Langue_Formation'];
    $Lieu = $_POST['Lieu'];
    $Ressources = $_POST['Ressources'];

    // Génération d'un ID unique (vous pouvez modifier cette logique si nécessaire)
    do {
        $ID_Formation = sprintf('%04d', mt_rand(0, 9999));
        $existing_formation = $formationController->getFormation($ID_Formation);
    } while($existing_formation);

    if (!empty($ID_Formation) && !empty($Titre) && !empty($date) && !empty($Objectifs) && !empty($Duree) && !empty($Langue_Formation) && !empty($Lieu) && !empty($Ressources)) {
        $formationController->addFormation($ID_Formation, $Titre, $date, $Objectifs, $Duree, $Langue_Formation, $Lieu, $Ressources);
        echo "<script>alert('Formation ajoutée avec succès.');</script>";
    } else {
        echo "<script>alert('Tous les champs sont obligatoires.');</script>";
    }
}
?>


<!-- Ajout du message après le formulaire -->


  <body class="az-body">
  <button onclick="window.location.href='index.html';">Home</button>
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
         
          <form action="" method="POST">
    
    <label for="Titre">Titre de la formation:</label><br>
    <textarea id="Titre" name="Titre"></textarea><br><br>
    
    <label for="date">Date :</label><br>
    <input type="date" id="date" name="date"><br><br>
    
    <label for="Objectifs">Objectifs :</label><br>
    <textarea id="Objectifs" name="Objectifs"></textarea><br><br>
    
    <label for="Duree">Duree :</label><br>
    <input type="text" id="Duree" name="Duree"><br><br>
    
    <label for="Langue_Formation">Langue de la formation :</label><br>
    <input type="text" id="Langue_Formation" name="Langue_Formation"><br><br>
    
    <label for="Lieu">Lieu :</label><br>
    <input type="text" id="Lieu" name="Lieu"><br><br>
    
    <label for="Ressources">Ressources :</label><br>
    <input type="text" id="Ressources" name="Ressources"><br><br>
    
  

        <button type="submit" name="submit">Ajouter</button>
        
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
