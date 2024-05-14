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
    </style>
</head>

<body>
<header role="banner">
     
     <nav class="navbar navbar-expand-md navbar-dark bg-light">
       <div class="container">
       <img src="images/logo.png" width="200" height="200" alt="Career Path Logo">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
<div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link" href="Home.html">HOME</a>
              </li>
              <li class="nav-item dropdown">
              <li class="nav-item">
                <a class="nav-link active" href="Formations.php">FORMATIONS</a>
              </li>

              </li>

              <li class="nav-item">
                <a class="nav-link" href="FrontOffice/OFFRE.PHP">OFFRES D'EMPLOI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.html">BLOG</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="reclamation.php">RECLAMATIONS</a>
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

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <h1>Formations</h1>

            </div>

            
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    <header role="banner">
        <!-- Votre code de navigation ici -->
    </header>
    

    
                
    <section class="site-section bg-light formation-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center">
                
            <h2>Voici les FORMATIONS</h2>
            </div>
        </div>

        <!-- Section pour afficher les offres -->
        <?php
       require "../Controller/FormationC.php";
        $formationController = new FormationController();
        $list = $formationController->listFormations();
        ?>

        <div class="row">
            <div class="col-md-12 mb-4">
                <?php foreach ($list as $formation): ?>
                    <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
                        <div class="mr-5">
                            <h2 class="mr-3 text-black h4"><?= $formation['Titre']; ?></h2>
                            <p>Date: <?= $formation['date']; ?></p>
                        </div>
                        <div class="ml-auto">
                            <a href="details_formation.php?ID_Formation=<?= $formation['ID_Formation']; ?>" class="btn btn-primary py-2 postuler-btn">Voir plus</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        
            <tbody>
                <?php foreach ($list as $formation): ?>
                    <tr>
                        <td><?= $formation['ID_Formation']; ?></td>
                        <td><?= $formation['Titre']; ?></td>
                        <td><?= $formation['date']; ?></td>
                        <td><?= $formation['Objectifs']; ?></td>
                        <td><?= $formation['Duree']; ?></td>
                        <td><?= $formation['Langue_Formation']; ?></td>
                        <td><?= $formation['Lieu']; ?></td>
                        <td><?= $formation['Ressources']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

    
    
        <section class="site-section">
      <div class="container">
        <section class="school-features text-dark d-flex">

          <div class="inner">
            <div class="media d-block feature">
              <div class="icon"><span class="flaticon-video-call"></span></div>
              <div class="media-body">
                <h3 class="mt-0">Online trainings from experts</h3>
                <p>It is very important for the customer to pay attention to the adipiscing process. The times that the flight takes are never more often than not, it turns out to be the right to assume some assets!</p>
              </div>
            </div>

            <div class="media d-block feature">
              <div class="icon"><span class="flaticon-student"></span></div>
              <div class="media-body">
                <h3 class="mt-0">Learn anywhere in the world</h3>
                <p>The chosen flight of pleasures is less important, the softness of the distinction to be assumed by the pleasures which any one of them repels with hatred. Some, praise, choice? He wants to make a mistake, otherwise.</p>
              </div>
            </div>

            <div class="media d-block feature">
              <div class="icon"><span class="flaticon-video-player-1"></span></div>
              <div class="media-body">
                <h3 class="mt-0">Creative learning video</h3>
                <p>The chosen flight of pleasures is less important, the softness of the distinction to be assumed by the pleasures which any one of them repels with hatred. Some, praise, choice? He wants to make a mistake, otherwise.</p>
              </div>
            </div>


            <div class="media d-block feature">
              <div class="icon"><span class="flaticon-audiobook"></span></div>
              <div class="media-body">
                <h3 class="mt-0">Audio learning</h3>
                <p>To obtain these, he is asperated. Let the guilt blinded by the truth of repudiating those who owe them flee, when they are freed from pleasures, they flee to distinction;</p>
              </div>
            </div>
          </div>
        </section>
        <section class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2>Top Courses</h2>
            <p class="lead">It is very important for the customer to pay attention to the adipiscing process. It will happen that their parents will get the big one.</p>
          </div>
        </div>
        <div class="row top-course">
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a  class="course">
              <img src="images/webdesign.jpg" alt="Image placeholder">
              <h2>Web Design 101</h2>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a  class="course">
              <img src="images/wordpress.jpg" alt="Image placeholder">
              <h2>Learn How To Develop WordPress Plugin</h2>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a  class="course">
              <img src="images/javascript.jpg" alt="Image placeholder">
              <h2>JavaScript 101</h2>
              
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a  class="course">
              <img src="images/photoshop.jpg" alt="Image placeholder">
              <h2>Photoshop Design 101</h2>
             
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a  class="course">
              <img src="images/reactjs.jpg" alt="Image placeholder">
              <h2>Learn Native ReactJS</h2>
             
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a  class="course">
              <img src="images/angularjs.jpg" alt="Image placeholder">
              <h2>Learn AngularJS 2</h2>
             
            </a>
          </div>
        </div>
      </div>
    </section>
    <div class="row justify-content-center align-items-center">
          
          
          <div class="col-lg-7 order-lg-3 order-1 mb-lg-0 mb-5">
            <img src="images/person_testimonial_1.jpg" alt="Image placeholder" class="img-md-fluid">
          </div>
          <div class="col-lg-1 order-lg-2"></div>
          <div class="col-lg-4 order-lg-1 order-2 mb-lg-0 mb-5">
            <blockquote class="testimonial">
              “ It's important to take care of the patient, the patient will be followed. They do not know that there is no benefit from any inconvenience. ”
            </blockquote>
            <p>— John Doe, Certified ReactJS Student</p>
          </div>
        </div>
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