
<!doctype html>
<html lang="en">
  <head>
    <title>Colorlib Listed Directory Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,900" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <?php
    // Inclure le contrôleur des réclamations
    require_once '../Controller/reclamationC.php';
    $reclamationController = new reclamationC();

    // Code pour ajouter une réclamation
    if(isset($_POST['submit'])) {
      // Récupération des données du formulaire
      $nom = $_POST['nom'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $etat = $_POST['etat'];
      $sujet = $_POST['sujet'];
      $date = $_POST['date'];
      $description = $_POST['description'];
  
      // Vérifier si tous les champs sont remplis
      if (!empty($nom) && !empty($email) && !empty($phone) && !empty($etat) && !empty($sujet) && !empty($date) && !empty($description)) {
          // Créer un objet réclamation
          $newReclamation = new Reclamation($nom, $email, $phone, $etat, $sujet, $date, $description);
          // Appeler la méthode pour ajouter une réclamation
          $reclamationController->ajouter($newReclamation);
          // Réafficher la liste des réclamations après l'ajout
          $listeReclamations = $reclamationController->afficher();
      } else {
          echo "Tous les champs sont obligatoires.";
      }
  }
        $listeReclamations = $reclamationController->afficher();
        ?>
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
   
    <header role="banner">
     
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
        <img src="images/logo.png" width="200" height="200" alt="Career Path Logo">
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link" href="home.html">HOME</a>
              </li>
              <li class="nav-item dropdown">
              <li class="nav-item">
                <a class="nav-link" href="Formations.php">FORMATIONS</a>
              </li>

              </li>

              <li class="nav-item">
                <a class="nav-link" href="FrontOffice/OFFRE.PHP">OFFRES D'EMPLOI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.html">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contact.html">RECLAMATIONS</a>
              </li>
            </ul>
            <ul class="navbar-nav absolute-right">
              <li class="nav-item">
                <a href="login.php" class="nav-link">Logout</a>
                <a href="update.php" class="nav-link">Profile</a>
              </li>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <h1>reclamation</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->


    <section class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Ajouter une nouvelle Réclamation</h2>
            <form action="#" method="POST" onsubmit="return verif();">
                  <div class="row">
                    <div class="col-md-4 form-group">
                        <label for="nom">Nom:</label><br>
                        <input type="text" id="nom" name="nom" class="form-control">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="email">Email:</label><br>
                        <input type="text" id="email" name="email" class="form-control">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="phone">Téléphone:</label><br>
                        <input type="text" id="phone" name="phone" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group">
                        <label for="etat">État:</label><br>
                        <input type="text" id="etat" name="etat" class="form-control">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="sujet">Sujet:</label><br>
                        <input type="text" id="sujet" name="sujet" class="form-control">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="date">Date:</label><br>
                        <input type="text" id="date" name="date" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="description">Description:</label><br>
                        <textarea id="description" name="description" class="form-control" rows="4"></textarea>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

     <section class="overflow">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          
          
          <div class="col-lg-7 order-lg-3 order-1 mb-lg-0 mb-5">
             <!--<img src="../rec.jpg" alt="Image placeholder" class="img-md-fluid">-->
          </div>
          <div class="col-lg-1 order-lg-2"></div>
          <div class="col-lg-4 order-lg-1 order-2 mb-lg-0 mb-5">
            <blockquote class="testimonial">
              &ldquo; Ma Reclamation Faite-vous ENTENDRE!! &rdquo;
            </blockquote>
            <p>&mdash; </p>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
  
    <footer class="site-footer" style="background-image: url(images/big_image_3.jpg);">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3>About</h3>
            <p>Carrer Path is a global leader in connecting people and jobs. Every day, Career Path aims to make every workplace happier and more productive by transforming the way employers and candidates find the right fit.</p>
          </div>
          <div class="col-md-6 ml-auto">
            <div class="row">
              <div class="col-md-4">
                <ul class="list-unstyled">
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="#">Company</a></li>
                  <li><a href="#">Teachers</a></li>
                  <li><a href="#">Courses</a></li>
                  <li><a href="#">Categories</a></li>
                </ul>
              </div>
              
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    
    <script src="js/main.js"></script>
  </body>
</html>