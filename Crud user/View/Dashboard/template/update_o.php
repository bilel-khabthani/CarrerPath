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
   require_once "../../../controller/OffreController.php";
   $OffreController = new OffreController();
   
   if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date_created = $_POST['date_created'];
    $date_expired = $_POST['date_expired'];

    if (!empty($id) && !empty($title) && !empty($description) && !empty($date_created) && !empty($date_expired)) {
      $existingOffre = $OffreController->getOffre($id);
      
      if ($existingOffre) {
          $OffreController->updateOffre($id, $title, $description, $date_created, $date_expired);
          echo "<script>alert('Offre modifiée avec succès.');</script>";
      } else {
       echo "<script>alert('Erreur : l'identifiant n'existe pas..');</script>";
      }
  } else {
      echo "<script>alert('Tous les champs sont obligatoires.');</script>";
  }
   if(isset($_GET['id'])) {
        $offre_id = $_GET['id'];
        $offre = $offreController->getOffre($offre_id);
    }
  
}?>
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
         
          <form action="#" method="post">
          <div class="form-group">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" class="form-control">
          </div>
          <div class="form-group">
            <label for="title">title:</label>
            <input type="text" id="title" name="title" class="form-control">
          </div>
          <div class="form-group">
            <label for="description">description:</label>
            <input type="text" id="description" name="description" class="form-control">
          </div>
          <div class="form-group">
            <label for="date_created">date_created:</label>
            <input type="date" id="date_created" name="date_created" class="form-control">
          </div>
          <div class="form-group">
            <label for="date_expired">date_expired:</label>
            <input type="date" id="date_expired" name="date_expired" class="form-control">
          </div>
          <button type="submit" name="update" class="btn btn-primary">Update</button>
        </form>

    </div>
  </div>
  </div>
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
  