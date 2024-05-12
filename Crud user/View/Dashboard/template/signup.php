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
  <?php
    require_once '../../../Controller/UserC.php';
    $UserController = new UserController();


   
    if(isset($_POST['submit'])) {
        $id = $_POST['id'];
        $mdp = $_POST['mdp']; 
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $poste = $_POST['poste'];

        if (!empty($id) && !empty($mdp) && !empty($nom) && !empty($prenom) && !empty($email) && !empty($age)&& !empty($poste)) {
            
                $UserController->addUser($id,$mdp,$nom,$prenom,$email, $age, $poste);
                header('Location: signin.html');
            }
        }

   
       
      

    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $mdp = $_POST['mdp'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $poste = $_POST['poste'];
    
        if (!empty($id) && !empty($mdp) && !empty($nom) && !empty($prenom) && !empty($email) && !empty($age)&& !empty($poste)) {
            $UserController->updateUser($id,$mdp, $nom, $prenom, $email, $age,$poste );
        } else {
            echo "Tous les champs sont obligatoires.";
        }
    }
    if (isset($_GET['id'])) {
        $user_id=$_GET['id'];
        $user=$UserController->getUser($user_id);
    }


    $list = $UserController->listUsers();

    ?>
    <script>
    function validateForm() {
        var email = document.getElementById('email').value;
        var id = document.getElementById('id').value;
        var poste = document.getElementById('poste').value.toLowerCase();
        var age = document.getElementById('age').value;
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (id.trim() === '' || isNaN(id)) {
        alert("L'ID doit être un nombre et ne peut pas être vide.");
        return false;
    }
    
    if (!emailPattern.test(email)) {
        alert("Veuillez entrer une adresse e-mail valide.");
        return false;
    }
    if (poste !== 'admin' && poste !== 'employe' && poste !== 'candidat') {
        alert("Veuillez saisir 'admin' ou 'employe' ou 'candidat' comme poste.");
            return false;
    }
        
    if (age.trim() === '' || isNaN(age)) {
        alert("L'âge doit être un nombre et ne peut pas être vide.");
        return false;
    }
    return true;
    }
    </script>
  <body class="az-body">
  
    <div class="az-signup-wrapper">
    <img src="../img/logo.png" width="200" height="200"  alt="Career Path Logo">
      <div class="az-column-signup-left">
      
        <div>
          <i class="typcn typcn-chart-bar-outline"></i>
          <h5>Responsive Modern Dashboard</h5>
          <p>We are excited to launch our new company Carrer Path.</p>
          <p>Browse our site and see for yourself why you need Carrer Path.</p>
          <a href="index.html" class="btn btn-outline-indigo">Learn More</a>
        </div>
      </div><!-- az-column-signup-left -->
      <div class="az-column-signup">
         <h2>Career Path</h2>
        <div class="az-signup-header">
          <h2>Add User</h2>

          <form action="#" method="post" onsubmit="return validateForm();">
          <div class="form-group">
            <label for="id">User ID:</label>
            <input type="text" id="id" name="id" class="form-control">
          </div>
          <div class="form-group">
            <label for="mdp">Password:</label>
            <input type="password" id="mdp" name="mdp" class="form-control">
          </div>
          <div class="form-group">
            <label for="nom">Name:</label>
            <input type="text" id="nom" name="nom" class="form-control">
          </div>
          <div class="form-group">
            <label for="prenom">Surname:</label>
            <input type="text" id="prenom" name="prenom" class="form-control">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label for="age">Age:</label>
            <input type="text" id="age" name="age" class="form-control">
          </div>
          <div class="form-group">
            <label for="poste">Position:</label>
            <input type="text" id="poste" name="poste" class="form-control">
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Create Account</button>
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
