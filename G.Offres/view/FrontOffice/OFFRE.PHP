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

        /* Styles pour le formulaire de candidature */
        #candidature-form {
            display: none;
        }
    </style>
</head>

<body>

    <header role="banner">
        <!-- Votre code de navigation ici -->
    </header>


    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
        <!-- Votre code de bannière ici -->

    </section>
    <header role="banner">
     
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
          <a class="navbar-brand absolute" href="index.html">Career path</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="courses.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Online Courses</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="courses.html">HTML</a>
                  <a class="dropdown-item" href="courses.html">WordPress</a>
                  <a class="dropdown-item" href="courses.html">Web Development</a>
                  <a class="dropdown-item" href="courses.html">Javascript</a>
                  <a class="dropdown-item" href="courses.html">Photoshop</a>
                </div>

              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="#">HTML</a>
                  <a class="dropdown-item" href="#">WordPress</a>
                  <a class="dropdown-item" href="#">Web Development</a>
                  <a class="dropdown-item" href="#">Javascript</a>
                  <a class="dropdown-item" href="#">Photoshop</a>
                </div>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="OFFRE.PHP">OFFRE D'EMPLOI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
            </ul>
            <ul class="navbar-nav absolute-right">
              <li class="nav-item">
                <a href="login.html" class="nav-link">Login</a>
              </li>
              <li class="nav-item">
                <a href="register.html" class="nav-link">Register</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <section class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <h2>Voici les OFFRES</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum magnam illum maiores adipisci pariatur, eveniet.</p>
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


       
// Assuming the 'idC' value is coming from the form submission
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

                            <!-- Input for 'offre_id' if needed -->
                            <!-- <input type="hidden" name="offre_id" id="offre_id" value=""> -->

                            <!-- Submit button -->
                            <button type="submit" name="submit" class="btn btn-primary">Postuler</button>
                        </form>

                </div>
            </div>
        </div>
    </section>
    

    <footer class="site-footer" style="background-image: url(images/big_image_3.jpg);">
        <!-- Votre code de pied de page ici -->

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
    </script>
</body>
</html>
