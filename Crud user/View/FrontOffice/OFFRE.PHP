<!DOCTYPE html>
<html lang="en">

<head>
    <title>Offres d'emploi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,900" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
    
    <style>
        /* Ajout de styles personnalisés */
        .job-post-item {
            border-bottom: 1px solid #e5e5e5;
            padding: 20px;
            margin-bottom: 20px;
        }

        .job-post-item .job-post-item-header {
            margin-bottom: 10px;
        }

        .job-post-item .job-post-item-header h2 {
            margin-bottom: 0;
        }

        .job-post-item .badge-wrap {
            display: inline-block;
            margin-left: 10px;
        }

        .job-post-item .badge {
            font-size: 14px;
            font-weight: 400;
            padding: 6px 12px;
        }

        .job-post-item .job-post-item-body {
            margin-top: 10px;
            color: #888;
        }

        .job-post-item .job-post-item-body div {
            margin-right: 20px;
        }

        .job-post-item .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .job-post-item .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

                    
        .star-rating {
    font-size: 0;
    display: inline-block;
}

.star-rating input {
    opacity: 0;
    position: absolute;
    z-index: -1;
}

.star-rating label {
    font-size: 25px;
    color: #000; 
    cursor: pointer;
    display: inline-block;
    width: 30px; /* Ajuster la largeur pour prendre en compte la bordure */
    height: 30px; /* Ajuster la hauteur pour prendre en compte la bordure */
    text-align: center;
    position: relative;
    border: 1px solid black; /* Ajout de la bordure noire */
    box-sizing: border-box; /* Inclure la bordure dans la largeur et la hauteur */
    line-height: 30px; /* Ajuster la hauteur de ligne pour centrer le texte */
}

.star-rating label:before {
    content: '\2605';
    position: absolute;
    opacity: 0;
    transition: opacity 0.3s, color 0.3s;
    text-shadow: 0 0 1px black;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto; /* Centrer l'étoile dans le conteneur */
}

.star-rating label:hover:before,
.star-rating input:checked ~ label:before {
    opacity: 1;
    color: gold;
}

.star-rating label:hover:before {
    color: gold;
}


.rating-container {
    display: flex;
    align-items: center;
}

.evaluation-label {
    font-size: 14px;
    color: #888;
    margin-bottom: 5px; /* Espacement entre le texte et les étoiles */
}



    </style>
</head>

<body>

    <header role="banner">
        <!-- Votre code de navigation ici -->
    </header>


    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
    <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <h1>OFFRES D'EMPLOI</h1>
               <!-- <p class="lead">Learn something new every day with skwela lorem ipsum dolor sit amet.</p>
              <p><a href="#" class="btn btn-primary">Sign up and get a 7-day free trial</a></p>-->
            </div>

    </section>
    <header role="banner">
     
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
        <img src="../images/logo.png" width="200" height="200" alt="Career Path Logo">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link" href="../home.html">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Formations.php">FORMATIONS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="OFFRE.PHP">OFFRES D'EMPLOI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../blog.html">BLOG</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../about.html">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../reclamation.php">RECLAMATIONS</a>
              </li>
            </ul>
            <ul class="navbar-nav absolute-right">
              <li class="nav-item">
                <a href="../login.php" class="nav-link">Logout</a>
                <a href="../update.php" class="nav-link">Profile</a>
              </li>
            
          </div>
        </div>
      </nav>
    </header>
    <section class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <h2>Voici les OFFRES</h2>
                    <p class="lead"> Découvrez ci-dessous les offres disponibles : une gamme diversifiée d'opportunités professionnelles vous attendent. Parcourez-les pour trouver celle qui vous inspire et correspond à vos objectifs de carrière.</p>
                </div>
            </div>

            <!-- Section pour afficher les offres -->
            <?php
            require "../../controller/OffreController.php";
            $offreController = new OffreController();
            $list = $offreController->listOffres();
            ?>

            <div class="row">
                <?php foreach ($list as $offre): ?>
                <div class="col-md-12">
                    <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
                        <div class="mb-4 mb-md-0 mr-5">
                            <div class="job-post-item-header d-flex align-items-center">
                                <h2 class="mr-3 text-black h4"><?= $offre['title']; ?></h2>

                                <div>
                                    <?= $offre['description']; ?>
                                </div>
                            </div>
                            <div class="job-post-item-body d-block d-md-flex">
                                <div class="mr-3"><span class="flaticon-clock"></span> Date d'expiration: <?= $offre['date_expired']; ?></div>
                            </div>
                            <div class="star-rating rating-container">
                                <span class="evaluation-label">Votre évaluation</span> 
                                <input type="radio" id="star5-<?= $offre['id']; ?>" name="rating-<?= $offre['id']; ?>" value="5"/><label for="star5-<?= $offre['id']; ?>" title="5 stars"></label>
                                <input type="radio" id="star4-<?= $offre['id']; ?>" name="rating-<?= $offre['id']; ?>" value="4"/><label for="star4-<?= $offre['id']; ?>" title="4 stars"></label>
                                <input type="radio" id="star3-<?= $offre['id']; ?>" name="rating-<?= $offre['id']; ?>" value="3"/><label for="star3-<?= $offre['id']; ?>" title="3 stars"></label>
                                <input type="radio" id="star2-<?= $offre['id']; ?>" name="rating-<?= $offre['id']; ?>" value="2"/><label for="star2-<?= $offre['id']; ?>" title="2 stars"></label>
                                <input type="radio" id="star1-<?= $offre['id']; ?>" name="rating-<?= $offre['id']; ?>" value="1"/><label for="star1-<?= $offre['id']; ?>" title="1 star"></label>
                                <span></span>
                            </div>



                        </div>
                        <div class="ml-auto">
                            <button class="btn btn-primary py-2 postuler-btn" data-offre="<?= $offre['id']; ?>">Postuler maintenant</button>

                        </div>
                       
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>
    <?php

        require_once "../../controller/CandidatureController.php";
        $candidatureController = new CandidatureController();


       
if(isset($_POST['submit'])) {
    // Retrieve 'idC' and other candidature details from the form
    $idC = $_POST['idC'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $cvPath = $_POST['cvPath'];
    $lettreMotivation = $_POST['lettreMotivation'];
    $date_postulation = $_POST['date_postulation'];
    $telephone = $_POST['telephone'];
    $adresse = $_POST['adresse'];
    $experienceProfessionnelle = $_POST['experienceProfessionnelle'];

    // Add the candidature to the database
    if (!empty($idC) && !empty($nom) && !empty($prenom) && !empty($email) && !empty($cvPath) && !empty($lettreMotivation) && !empty($date_postulation) && !empty($telephone) && !empty($adresse) && !empty($experienceProfessionnelle)) {
        // Assuming you have an instance of CandidatureController already created
        $candidatureController->addCandidature($idC, $nom, $prenom, $email, $cvPath, $lettreMotivation, $date_postulation, $telephone, $adresse, $experienceProfessionnelle);
        // Redirect to another page after adding the candidature
    } else {
        echo "<script>alert('Tous les champs de la candidature sont obligatoires.');</script>";
    }
}
?>
   
    <!-- Formulaire de candidature -->
    <section id="candidature-form" class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">  
                <h2>Formulaire de Candidature</h2>
                    <!-- Votre formulaire de candidature ici -->
                        <form action="" method="post">
                            <!-- Input for 'idC' provided by the user -->
                            <input type="int" name="idC" placeholder="idC" class="form-control mb-3" required>

                            <!-- Other inputs for candidature details -->
                            <input type="text" name="nom" placeholder="Nom" class="form-control mb-3" required>
                            <input type="text" name="prenom" placeholder="Prénom" class="form-control mb-3" required>
                            <input type="email" name="email" placeholder="Email" class="form-control mb-3" required>
                            <input type="file" name="cvPath" class="form-control mb-3" required>
                            <textarea name="lettreMotivation" placeholder="Lettre de motivation" class="form-control mb-3" required></textarea>
                            <input type="date" name="date_postulation" placeholder="date_postulation" class="form-control mb-3" required>
                            <input type="int" name="telephone" placeholder="telephone" class="form-control mb-3" required>
                            <input type="text" name="adresse" placeholder="adresse" class="form-control mb-3" required>
                            <textarea name="experienceProfessionnelle" placeholder="experienceProfessionnelle" class="form-control mb-3" required></textarea>
                            
                            <button type="submit" name="submit" class="btn btn-primary">Postuler</button>

                        </form>

                </div>
            </div>
        </div>
    </section>
    

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

    </footer>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        // Script pour afficher le formulaire de candidature lorsque le bouton "Postuler maintenant" est cliqué
        $(document).ready(function() {
            $(".postuler-btn").click(function() {
                var offreId = $(this).data('offre');
                // Mettre l'identifiant de l'offre dans l'input caché du formulaire
                $("#offre_id").val(offreId);
                // Afficher le formulaire de candidature
                $("#candidature-form").show();
            });
        });

        $(document).ready(function() {
            $('input[type="radio"]').change(function() {
                alert('Merci pour votre évaluation : ' + $(this).val() + ' étoiles');
            });
        });



    </script>
</body>
</html>
