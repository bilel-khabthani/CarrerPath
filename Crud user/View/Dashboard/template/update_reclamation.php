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
  <button onclick="window.location.href='index.html';">Home</button>
  <?php
   require_once "../../../controller/reclamationC.php";
   $reclamationC= new reclamationC();
   
   if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $etat = $_POST['etat'];
    $sujet = $_POST['sujet'];
    $date = $_POST['date'];
    $description = $_POST['description'];

    if (!empty($id) && !empty($nom) && !empty($email) && !empty($phone) && !empty($etat)&& !empty($sujet) && !empty($date) && !empty($description)) {
      $existing_reclamation = $reclamationC->rechercheReclamation($id);
      
      if ($existing_reclamation) {
        $reclamation = new reclamation(
          $_POST['nom'],
          $_POST['email'] ,
          $_POST['phone'] ,
          $_POST['etat'] ,
          $_POST['sujet'] ,
          $_POST['date'] ,
          $_POST['description'] 
      );
          $reclamationC->modifier($reclamation,$_GET['id']); 
          echo "Reclamation modifiée avec succès.";
      } else {
          echo "Erreur : l'identifiant n'existe pas.";
      }
  } 
   if(isset($_GET['id'])) {
        $reclamation_id = $_GET['id'];
        $reclamation = $reclamationC->rechercheReclamation($reclamation_id);
    }
  
}?>
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

          <form action="#" method="post" onsubmit="return verif();">
          <div class="form-group">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" class="form-control">
          </div>
          <div class="form-group">
            <label for="nom">nom:</label>
            <input type="text" id="nom" name="nom" class="form-control">
          </div>
          <div class="form-group">
            <label for="email">email:</label>
            <input type="text" id="email" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label for="phone">phone:</label>
            <input type="text" id="phone" name="phone" class="form-control">
          </div>
          <div class="form-group">
            <label for="etat">etat:</label>
            <input type="text" id="etat" name="etat" class="form-control" >
          </div>
          <div class="form-group">
            <label for="sujet">sujet:</label>
            <input type="text" id="sujet" name="sujet" class="form-control">
          </div>
          <div class="form-group">
            <label for="date">date:</label>
            <input type="text" id="date" name="date" class="form-control">
          </div>
          <div class="form-group">
            <label for="description">description:</label>
            <input type="text" id="description" name="description" class="form-control">
          </div>
          <button type="submit" name="update" class="btn btn-primary">update</button>
        </form>
      </div>

    </div>
  </div>
  <main>
        <div class="pagetitle">
            <h1>Modifier Reclamation</h1>
            <br>
        </div>

        <section class="section dashboard">
            <div class="row">
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body"> 
                            <?php 
                                if (isset($_GET['id'])){
                                $rec = $reclamationC->recupererReclamation($_GET['id']);
                            ?>
                            <form method="POST" onsubmit="return verif();">
                                <div class="mb-5">
                                    <div class="row">
                                        <div class="card-body" style="margin-left:50px;">
                                        <form method="POST">
                                            <div class="row mb-3">
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control p-2" value="<?php echo $rec['nom']?>" name="nom" id="nom" placeholder="Nom">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control p-2" value="<?php echo $rec['email']?>" name="email" id="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control p-2" value="<?php echo $rec['phone']?>" name="phone" id="phone" placeholder="Phone">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-10">
                                                    <select class="form-control p-2" name="etat" id="etat">
                                                        <option value="<?php echo $rec['etat']?>"><?php echo $rec['etat']?></option>
                                                        <option value="Pending">Pending</option>
                                                        <option value="Approved">Approved</option>
                                                        <option value="Not Approved">Not Approved</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control p-2" value="<?php echo $rec['sujet']?>" name="sujet" id="sujet" placeholder="Sujet">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-10">
                                                    <input type="date" class="form-control p-2" value="<?php echo $rec['date']?>" name="date" id="date" placeholder="Date">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-10">
                                                    <textarea type="text" class="form-control p-2" name="description" id="description" placeholder="Description"><?php echo $rec['description']?></textarea>
                                                </div>
                                            <br>
                                            </div>
                                            <div class="text-center">
                                                <input class="btn btn-success" type="submit" name="modifier" value="Modifier">
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

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
  