<?php  require_once(__DIR__ . '/../Controller/entretienC.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Carrer Path Entretiens</title>
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


  <html lang="en"><head>
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

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">


    <style>
/* Styles CSS */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
.containerr {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    display: flex;
    flex-wrap: nowrap; /* Ajout de la propriété pour empêcher le saut de ligne */
    align-items: center;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}
table, th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}
th {
    background-color: #f2f2f2;
}
button {
    padding: 5px 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-right: 5px;
}
button:hover {
    background-color: #45a049;
}
.icon {
    width: 30px;
    height: 30px;
    cursor: pointer;
    margin-right: 10px;
    
    
}

</style>






  </head>
  <body>
    
    <header role="banner">
     
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
          <a class="navbar-brand absolute" href="index.html">Skwela</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
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
                <a class="nav-link" href="blog.html">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contact.html">Entretien</a>
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
    <!-- END header -->

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(&quot;images/big_image_1.jpg&quot;); background-position: -25px -25px;">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate fadeInUp element-animated">
              <h1>Entretien</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
     
    <div class="containerr" >
    
    <div id="icon">
        <h3>Liste des entretiens</h3>
        <!-- Utilisation d'icônes utilisateur -->
        <?php  foreach ($entretiens as $entretien): ?>
            <div class="l" aria-hidden="false">
                <button class="ax fm am ab q ao fn fo fp" aria-label="user options menu" data-testid="headerUserIcon">
                    <div class="l fi">
                        <img alt="" class="l fc bx by bz cw" src="leader.png" width="30" height="32" loading="lazy" role="presentation" onclick="showEntretienDetails('<?php echo $entretien['id_entretien']; ?>')">
                        <div class="fq bx l by bz fr n ax fs"></div>
                    </div>
                </button>
            </div>
            <span><?php echo $entretien['nom'] . ' ' . $entretien['prenom']; ?></span>
            
        <?php endforeach; ?>
    </div>
    <div id="entretienDetails" style="display: none;"></div>
</div>
<script>
    // JavaScript pour la gestion des entretiens
    let entretiens = <?php echo json_encode($entretiens); ?>; // Tableau pour stocker les entretiens




    


    // JavaScript pour la gestion des entretiens dans le front office
    const entretienDetails = document.querySelectorAll('.entretien-details');

    // Ajouter un événement de clic sur chaque entretien pour afficher / masquer les détails
    entretienDetails.forEach(item => {
        item.previousElementSibling.addEventListener('click', () => {
            item.classList.toggle('active');
        });
    });

    function showEntretienDetails(id) {
    const entretien = entretiens.find(e => e.id_entretien === id);
    const detailsContainer = document.getElementById('entretienDetails');

    // Rechercher les réponses associées à cet entretien
    const reponses = <?php echo json_encode($reponses); ?>;
    const reponsesEntretien = reponses.filter(reponse => reponse.id_entretien === id);

    detailsContainer.innerHTML = `
        <h3>Détails de l'entretien</h3>
        <table>
            <tr>
                <th>ID Entretien</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Âge</th>
                <th>Téléphone</th>
                <th>Email</th>
                <th>Date d'entretien</th>
            </tr>
            <tr>
                <td>${entretien.id_entretien}</td>
                <td>${entretien.nom}</td>
                <td>${entretien.prenom}</td>
                <td>${entretien.age}</td>
                <td>${entretien.telephone}</td>
                <td>${entretien.email}</td>
                <td>${entretien.date_entretien}</td>
            </tr>
        </table>
        <br><br>
        <h3>Réponses aux entretiens</h3>
        ${reponsesEntretien.length > 0 ?
            `<table>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Résultat</th>
                </tr>
                ${reponsesEntretien.map(reponse => `
                    <tr>
                        <td>${entretien.nom}</td>
                        <td>${entretien.prenom}</td>
                        <td>${reponse.resultat}</td>
                    </tr>
                `).join('')}
            </table>`
            :
            `Pas de réponse`
        }
        <br><br>
        <h4> note bien: </h4>
        
        <p> respecter le date et vous pouvez uilisier la camera et le micro (obligatoire) || voici le lien   </p>
        <a href="https://meet.google.com/"> passer a l'examan enligne </a>
        <br><br>
        <button id="retourButton" onclick="showFrontOffice()">Retour</button>
    `;

    detailsContainer.style.display = 'block';
    document.getElementById('icon').style.display = 'none'; 
    document.getElementById('retourButton').style.display = 'inline-block';
}









  


    

    function showFrontOffice() {
        document.getElementById('frontOffice').style.display = 'block';
        document.getElementById('backOffice').style.display = 'none';
        document.getElementById('entretienDetails').style.display = 'none';

        
        document.getElementById('icon').style.display = 'block'; // Afficher les icônes utilisateur
        document.getElementById('retourButton').style.display = 'inline-block';

    }

    

    

    

    


    

    



    

    
</script>

    <!-- END section -->

     <section class="overflow">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          
          
          <div class="col-lg-7 order-lg-3 order-1 mb-lg-0 mb-5">
            <img src="images/person_testimonial_1.jpg" alt="Image placeholder" class="img-md-fluid">
          </div>
          <div class="col-lg-1 order-lg-2"></div>
          <div class="col-lg-4 order-lg-1 order-2 mb-lg-0 mb-5">
            <blockquote class="testimonial">
              “ Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt incidunt nihil ab cumque molestiae commodi. ”
            </blockquote>
            <p>— John Doe, Certified ReactJS Student</p>
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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, accusantium optio unde perferendis eum illum voluptatibus dolore tempora, consequatur minus asperiores temporibus reprehenderit.</p>
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
Copyright ©<script>document.write(new Date().getFullYear());</script>2024 All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"></circle><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"></circle></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    
    <script src="js/main.js"></script>
  
</body></html>
</html>