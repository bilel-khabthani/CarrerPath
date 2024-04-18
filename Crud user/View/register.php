<!doctype html>
<html lang="en">
  <head>
    <title>Career Path :Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,900" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <?php
    require "../Controller/UserC.php";
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
    if (poste !== 'employe') {
        alert("Veuillez saisir 'employe'.");
            return false;
    }
        
    if (age.trim() === '' || isNaN(age)) {
        alert("L'âge doit être un nombre et ne peut pas être vide.");
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
            <ul class="navbar-nav right">
              <li class="nav-item">
              <a class="nav-link" href="login.html">Login</a>
              </li>
            </ul>
            
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
              <h1>Register</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->


    <section class="site-section bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5 box">
        <h2 class="mb-5">Register new account</h2>
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
            <input type="email" id="email" name="email" class="form-control">
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
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Company</a></li>
                  <li><a href="#">Teachers</a></li>
                  <li><a href="#">Courses</a></li>
                  <li><a href="#">Categories</a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Company</a></li>
                  <li><a href="#">Teachers</a></li>
                  <li><a href="#">Courses</a></li>
                  <li><a href="#">Categories</a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Company</a></li>
                  <li><a href="#">Teachers</a></li>
                  <li><a href="#">Courses</a></li>
                  <li><a href="#">Categories</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
           
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