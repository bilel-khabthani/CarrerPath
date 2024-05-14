<?php
require_once '../../../Controller/reclamationC.php';

$ReclamationC = new ReclamationC();

// Filter reclamations by etat (approuved or rejected)
$reclamationByEtat = $ReclamationC->countReclamationByEtat();

// Extracting labels and data from the result
$labels = [];
$dataApprouved = [];
$dataRejected = [];
foreach ($reclamationByEtat as $reclamation) {
    if ($reclamation['etat'] == 'approuved') {
        $labels[] = $reclamation['etat'];
        $dataApprouved[] = $reclamation['count'];
    } else {
        $labels[] = $reclamation['etat'];
        $dataRejected[] = $reclamation['count'];
    }
}
?>

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
    <body>

      <div class="az-header">
        <div class="container">
          <div class="az-header-left">
            <a href="index.html" class="az-logo"><span></span> Career Path</a>
            <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
          </div><!-- az-header-left -->
          <div class="az-header-menu">
            <div class="az-header-menu-header">
              <a href="index.html" class="az-logo"><span></span> Career Path/a>
              <a href="" class="close">&times;</a>
            </div><!-- az-header-menu-header -->
            <ul class="nav">
              <li class="nav-item">
                <a href="index.html" class="nav-link"><i class="typcn typcn-chart-area-outline"></i> Dashboard</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link with-sub"><i class="typcn typcn-document"></i> Pages</a>
                <nav class="az-menu-sub">
                  <a href="ajouter.php" class="nav-link">Ajouter reclamation</a>
                  <a href="update.php" class="nav-link">Update reclamation</a>
                  <a href="delete.php" class="nav-link">Delete reclamation</a>
                  <a href="Read.php" class="nav-link">View All reclamation</a>
                  <a href="signin.html" class="nav-link">Stats</a>

                </nav>
              </li>
              <li class="nav-item active">
                <a href="chart-chartjs.html" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i> Charts</a>
              </li>
              <li class="nav-item">
                <a href="form-elements.html" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i> Forms</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link with-sub"><i class="typcn typcn-book"></i> Components</a>
                <div class="az-menu-sub">
                  <div class="container">
                    <div>
                      <nav class="nav">
                        <a href="elem-buttons.html" class="nav-link">Buttons</a>
                        <a href="elem-dropdown.html" class="nav-link">Dropdown</a>
                        <a href="elem-icons.html" class="nav-link">Icons</a>
                        <a href="table-basic.html" class="nav-link">Table</a>
                      </nav>
                    </div>
                  </div><!-- container -->
                </div>
              </li>
            </ul>
          </div><!-- az-header-menu -->
          <div class="az-header-right">
            <a href="https://www.bootstrapdash.com/demo/azia-free/docs/documentation.html" target="_blank" class="az-header-search-link"><i class="far fa-file-alt"></i></a>
            <a href="" class="az-header-search-link"><i class="fas fa-search"></i></a>
            <div class="az-header-message">
              <a href="#"><i class="typcn typcn-messages"></i></a>
            </div><!-- az-header-message -->
            <div class="dropdown az-header-notification">
              <a href="" class="new"><i class="typcn typcn-bell"></i></a>
              <div class="dropdown-menu">
                <div class="az-dropdown-header mg-b-20 d-sm-none">
                  <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <h6 class="az-notification-title">Notifications</h6>
                <p class="az-notification-text">You have 2 unread notification</p>
                <div class="az-notification-list">
                  <div class="media new">
                    <div class="az-img-user"><img src="../img/faces/face2.jpg" alt=""></div>
                    <div class="media-body">
                      <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                      <span>Mar 15 12:32pm</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media new">
                    <div class="az-img-user online"><img src="../img/faces/face3.jpg" alt=""></div>
                    <div class="media-body">
                      <p><strong>Joyce Chua</strong> just created a new blog post</p>
                      <span>Mar 13 04:16am</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="az-img-user"><img src="../img/faces/face4.jpg" alt=""></div>
                    <div class="media-body">
                      <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                      <span>Mar 13 02:56am</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="az-img-user"><img src="../img/faces/face5.jpg" alt=""></div>
                    <div class="media-body">
                      <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                      <span>Mar 12 10:40pm</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </div><!-- az-notification-list -->
                <div class="dropdown-footer"><a href="">View All Notifications</a></div>
              </div><!-- dropdown-menu -->
            </div><!-- az-header-notification -->
            <div class="dropdown az-profile-menu">
              <a href="" class="az-img-user"><img src="../img/faces/face1.jpg" alt=""></a>
              <div class="dropdown-menu">
                <div class="az-dropdown-header d-sm-none">
                  <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <div class="az-header-profile">
                  <div class="az-img-user">
                    <img src="../img/faces/face1.jpg" alt="">
                  </div><!-- az-img-user -->
                  <h6>Aziana Pechon</h6>
                  <span>Premium Member</span>
                </div><!-- az-header-profile -->

                <a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
                <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
                <a href="page-signin.html" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
              </div><!-- dropdown-menu -->
            </div>
          </div><!-- az-header-right -->
        </div><!-- container -->
      </div><!-- az-header -->

      <!-- Section pour les boutons -->
      <!-- vendor css -->
      <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
      <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
      <link href="../lib/typicons.font/typicons.css" rel="stylesheet">

      <!-- azia CSS -->
      <link rel="stylesheet" href="../css/azia.css">

      <style>
          /* Style pour positionner la section des boutons à gauche */
          .az-content-left-components {
              width: 250px; /* Largeur des boutons */
              position: fixed; /* Fixer la position pour rester à gauche même en faisant défiler la page */
              top: 0;
              left: 0;
              bottom: 0;
              background-color: #f8f9fa; /* Couleur de fond */
              padding-top: 70px; /* Espacement du haut pour éviter de chevaucher l'en-tête */
              padding-left: 20px; /* Espacement à gauche */
              box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Ombre légère pour un aspect visuel */
          }

          /* Style pour les boutons */
          .component-item {
              padding: 20px 0; /* Espacement autour des boutons */
          }

          .component-item label {
              font-weight: bold;
          }

          .component-item .nav-link {
              padding: 10px 20px; /* Espacement intérieur horizontal */
              color: #333;
              display: block; /* Afficher les boutons en bloc pour occuper tout l'espace disponible */
              transition: all 0.3s ease; /* Animation de transition douce */
          }

          .component-item .nav-link:hover {
              color: #007bff;
              background-color: rgba(0, 123, 255, 0.1); /* Couleur de fond au survol */
          }
      </style>
  </head>
  <body>

  <div class="az-content-left az-content-left-components">
      <div class="component-item">
          <label>UI Elements</label>
          <nav class="nav flex-column">
              <a href="ajouter.php" class="nav-link">Ajouter reclamation</a>
              <a href="update.php" class="nav-link">Update reclamation</a>
              <a href="delete.php" class="nav-link">Delete reclamation</a>
              <a href="Read.php" class="nav-link">View All reclamation</a>
              <a href="stats.php" class="nav-link">Stats</a>
          </nav>
      </div><!-- component-item -->
  </div><!


                
              
            </div><!-- component-item -->


    <button onclick="window.location.href='index.html';">Home</button>
  
     <!-- Meta tags -->
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stats</title>

    <!-- Include the CSS files used in Read.php -->
    <link rel="stylesheet" href="../lib/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../lib/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../lib/typicons.font/typicons.css">
    <link rel="stylesheet" href="../css/azia.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistiques des Réclamations</title>
    <!-- Include Chart.js JavaScript library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <body>
      
      <main>
          

          <section class="section dashboard">
          <div class="container">
      
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-12">
              <div class="az-content pd-y-20 pd-lg-y-30 pd-xl-y-40">
                  <!-- Votre contenu de la page ici -->
                  <div class="card recent-sales overflow-auto">
                      <div class="card-body">
                          <!-- Formulaire de recherche et de tri -->
                          <center>
                          <div class="pagetitle">
              <h1>Liste des Reclamations</h1>
              <br>
          </div>
                              <form action="" method="POST">
                                  <br>
                                  <div class="form-row align-items-center justify-content-center">
                                      <div class="col-auto">
                                          <input type="text" placeholder="Search..." name="rech" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" style="height:50px;">
                                      </div>
                                      <div class="col-auto">
                                          <input type="submit" class="btn btn-outline-primary btn-sm" name="Readd" value="Search" />
                                      </div>
                                      <div class="col-auto">
                                          <input type="submit" class="btn btn-outline-primary btn-sm" name="Read" value="Tri" />
                                      </div>
                                      <div class="col-auto">
                                          
                                          <a href="filtrer.php" class="btn btn-outline-primary btn-sm">Afficher les clients approuvés</a>
                                      </div>
                                      <div class="col-auto">
                                          <button id="resetFilterBtn" class="btn btn-outline-secondary btn-sm">Réinitialiser le filtre</button>
                                      </div>
                                      
                                      

                                              </button> 
                                          </form>
                                      </div>
                                  </div>
                              </form>
                          </center>
      

<body>

<a href="Read_reclamation.php" class="btn btn-primary mt-3">Back to Reclamation Table</a>

    <!-- Div to display the chart -->
    <div style="width: 600px; height: 400px;">
        <canvas id="reclamationsChart"></canvas>
    </div>

    <script>
        // Retrieve reclamation data from PHP
        var labels = <?php echo json_encode($labels);?>; // Labels for X-axis (e.g., reclamation types)
        var dataApprouved = <?php echo json_encode($dataApprouved);?>; // Data for Y-axis (e.g., number of reclamations per type)
        var dataRejected = <?php echo json_encode($dataRejected);?>; // Data for Y-axis (e.g., number of reclamations per type)

        // Create a new chart with Chart.js
        var ctx = document.getElementById('reclamationsChart').getContext('2d');
        var reclamationsChart = new Chart(ctx, {
            type: 'bar', // Chart type (bar, pie, line, etc.)
            data: {
                labels: labels, // Labels for X-axis
                datasets: [{
                    label: 'Réclamations Approuvées', // Data series name
                    data: dataApprouved, // Data for Y-axis
                    backgroundColor: 'rgba(75, 192, 192, 0.2)', // Background color of bars
                    borderColor: 'rgba(75, 192, 192, 1)', // Border color of bars
                    borderWidth: 1 // Border width of bars
                },
                {
                    label: 'Réclamations Rejetées', // Data series name
                    data: dataRejected, // Data for Y-axis
                    backgroundColor: 'rgba(255, 99, 132, 0.2)', // Background color of bars
                    borderColor: 'rgba(255, 99, 132, 1)', // Border color of bars
                    borderWidth: 1 // Border width of bars
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true // Start Y-axis at zero
                        }
                    }]
                }
            }
        });
    </script>
</body>
</html>