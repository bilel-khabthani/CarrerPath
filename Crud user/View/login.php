<!doctype html>
<html lang="en">
  <head>
    <title>Career Path :Login</title>
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
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
  </head>
  <body>
  <?php
session_start();
require "../Controller/UserC.php";

$error = '';
if (isset($_POST['username']) && isset($_POST['password'])) {
    $id = intval($_POST['username']);
    $mdp = $_POST['password'];

    $pdo = config::Connexion();
    
    $query = "SELECT id, poste FROM user WHERE id = :id AND mdp = :mdp";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':mdp', $mdp);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user) {
        $_SESSION['loggedin'] = true;
        $_SESSION['id'] = $user['id'];
        $_SESSION['poste'] = $user['poste'];
        
        // Redirection vers le CAPTCHA si authentification réussie
        header('Location: captcha.php');
        exit;
    } else {
        $error = "Identifiant ou mot de passe invalide.";
    }
}
?>


    <header role="banner">
     
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
          <img src="images/logo.png" width="200" height="200" alt="Career Path Logo">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
             <ul class="navbar-nav absolute-right">
              <li class="nav-item">
                <a href="login.html" class="nav-link active">Login</a>
              </li>
              <li class="nav-item">
                <a href="register.php" class="nav-link">Register</a>
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
              <h1>Login</h1>
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
            <h2 class="mb-5">Log in with your account</h2>
            <form action="#" method="post">
    <div class="form-group">
        <label for="username">Your Id</label>
        <input type="text" id="username" name="username" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>
<script>
document.addEventListener('DOMContentLoaded', function () {
    <?php if (!empty($error)): ?>
    alert("<?= addslashes($error) ?>");
    <?php endif; ?>
});
</script>
<a href="google-auth.php" class="btn btn-primary">Login with Google</a>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '433748192735531', // Remplacez par votre App ID
            cookie     : true,
            xfbml      : true,
            version    : 'v12.0'
        });

        FB.AppEvents.logPageView();   
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    function facebookLogin() {
        FB.login(function(response) {
            if (response.authResponse) {
                console.log('Welcome!  Fetching your information.... ');
                FB.api('/me', {fields: 'name, email'}, function(response) {
                    console.log('Good to see you, ' + response.name + '.');
                    // Vous pouvez aussi rediriger l'utilisateur ou sauvegarder les données
                });
            } else {
                console.log('User cancelled login or did not fully authorize.');
            }
        }, {scope: 'email,public_profile'});
    }
    </script>


            
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
    <script>
    function facebookLogin() {
  FB.login(function(response) {
    if (response.authResponse) {
      console.log('Welcome! Fetching your information.... ');
      FB.api('/me', function(response) {
        console.log('Good to see you, ' + response.name + '.');
      });
    } else {
      console.log('User cancelled login or did not fully authorize.');
    }
  }, {scope: 'email,public_profile', return_scopes: true});
}
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '433748192735531', // Remplacez YOUR_APP_ID par votre App ID
      cookie     : true,
      xfbml      : true,
      version    : 'v12.0' // Utilisez la version de l'API Facebook que vous souhaitez
    });

    FB.AppEvents.logPageView();   
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

    <script src="js/main.js"></script>
    <script>
document.addEventListener('DOMContentLoaded', function () {
    <?php if (isset($error)): ?>
    alert("<?= addslashes($error) ?>");
    <?php endif; ?>
});
</script>

  </body>
  
</html>