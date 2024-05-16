<?php  require_once(__DIR__ . '/../Controller/entretienC.php');?>
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
    <link href="../View/lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../View/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../View/lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="../View/lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../View/css/azia.css">

    <style>      


/* Styles CSS */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f8f8;
}
.containerr {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    
    
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
    background-color: #E8E9EB;
}
button {
    padding: 5px 10px;
    background-color: #7F00FF;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-right: 5px;
}
button:hover {
    background-color: #E8E9EB;
}
    
    
    
    
    
    </style>






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
            <a href="index.html" class="az-logo"><span></span> Career Path</a>
            <a href="" class="close">&times;</a>
          </div><!-- az-header-menu-header -->
          <ul class="nav">
            <li class="nav-item active show">
              <a href="index.html" class="nav-link"><i class="typcn typcn-chart-area-outline"></i> Dashboard</a>
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
                  <div class="az-img-user online"><img src="../View/img/faces/face3.jpg" alt=""></div>
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
            <a href="" class="az-img-user"><img src="../View/img/faces/face1.jpg" alt=""></a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header d-sm-none">
                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <div class="az-header-profile">
                <div class="az-img-user">
                  <img src="../View/img/faces/face1.jpg" alt="">
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

    <div class="az-content az-content-dashboard">
      <div class="container">
        <div class="az-content-body">
          <div class="az-dashboard-one-title">
            <div>
              <h2 class="az-dashboard-title">Hi, welcome back!</h2>
              <p class="az-dashboard-text">Gestion des offres.</p>
            </div>
            <div class="az-content-header-right">
              <div class="media">
                <div class="media-body">
                  <label>Start Date</label>
                  <h6>Avr 24, 2024</h6>
                </div><!-- media-body -->
              </div><!-- media -->
              <div class="media">
                <div class="media-body">
                  <label>Event Category</label>
                  <h6>Offres</h6>
                </div><!-- media-body -->
              </div><!-- media -->
              <a href="" class="btn btn-purple">Export</a>
            </div>
          </div><!-- az-dashboard-one-title -->

          <div class="az-dashboard-nav"> 
            <nav class="nav">
              

              <a href="ajouter.php" class="nav-link">Ajouter entretien</a>
              <a href="update.php" class="nav-link">Update entretien</a>
              <a href="delete.php" class="nav-link">Delete entretien</a>
              <a href="Read.php" class="nav-link">View All entretien</a>
              <a href="stats.php" class="nav-link">Stats</a>
              <a href="reponce.php" class="nav-link">Repance</a>
            </nav>

            <nav class="nav">
            </nav>
          </div>
          <img src="../View/img/logo.png" width="400" height="400" alt="Career Path Logo">













        

          
    










    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>
    <script src="../lib/jquery.flot/jquery.flot.js"></script>
    <script src="../lib/jquery.flot/jquery.flot.resize.js"></script>
    <script src="../lib/chart.js/Chart.bundle.min.js"></script>
    <script src="../lib/peity/jquery.peity.min.js"></script>

    <script src="../js/azia.js"></script>
    <script src="../js/chart.flot.sampledata.js"></script>
    <script src="../js/dashboard.sampledata.js"></script>
    <script src="../js/jquery.cookie.js" type="text/javascript"></script>
    <script>
      $(function(){
        'use strict'

    		var plot = $.plot('#flotChart', [{
          data: flotSampleData3,
          color: '#007bff',
          lines: {
            fillColor: { colors: [{ opacity: 0 }, { opacity: 0.2 }]}
          }
        },{
          data: flotSampleData4,
          color: '#560bd0',
          lines: {
            fillColor: { colors: [{ opacity: 0 }, { opacity: 0.2 }]}
          }
        }], {
    			series: {
    				shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 8
          },
    			yaxis: {
            show: true,
    				min: 0,
    				max: 100,
            ticks: [[0,''],[20,'20K'],[40,'40K'],[60,'60K'],[80,'80K']],
            tickColor: '#eee'
    			},
    			xaxis: {
            show: true,
            color: '#fff',
            ticks: [[25,'OCT 21'],[75,'OCT 22'],[100,'OCT 23'],[125,'OCT 24']],
          }
        });

        $.plot('#flotChart1', [{
          data: dashData2,
          color: '#00cccc'
        }], {
    			series: {
    				shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0.2 }, { opacity: 0.2 } ] }
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
    			yaxis: {
            show: false,
            min: 0,
            max: 35
          },
    			xaxis: {
            show: false,
            max: 50
          }
    		});

        $.plot('#flotChart2', [{
          data: dashData2,
          color: '#007bff'
        }], {
    			series: {
    				shadowSize: 0,
            bars: {
              show: true,
              lineWidth: 0,
              fill: 1,
              barWidth: .5
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
    			yaxis: {
            show: false,
            min: 0,
            max: 35
          },
    			xaxis: {
            show: false,
            max: 20
          }
    		});


        //-------------------------------------------------------------//


        // Line chart
        $('.peity-line').peity('line');

        // Bar charts
        $('.peity-bar').peity('bar');

        // Bar charts
        $('.peity-donut').peity('donut');

        var ctx5 = document.getElementById('chartBar5').getContext('2d');
        new Chart(ctx5, {
          type: 'bar',
          data: {
            labels: [0,1,2,3,4,5,6,7],
            datasets: [{
              data: [2, 4, 10, 20, 45, 40, 35, 18],
              backgroundColor: '#560bd0'
            }, {
              data: [3, 6, 15, 35, 50, 45, 35, 25],
              backgroundColor: '#cad0e8'
            }]
          },
          options: {
            maintainAspectRatio: false,
            tooltips: {
              enabled: false
            },
            legend: {
              display: false,
                labels: {
                  display: false
                }
            },
            scales: {
              yAxes: [{
                display: false,
                ticks: {
                  beginAtZero:true,
                  fontSize: 11,
                  max: 80
                }
              }],
              xAxes: [{
                barPercentage: 0.6,
                gridLines: {
                  color: 'rgba(0,0,0,0.08)'
                },
                ticks: {
                  beginAtZero:true,
                  fontSize: 11,
                  display: false
                }
              }]
            }
          }
        });

        // Donut Chart
        var datapie = {
          labels: ['Search', 'Email', 'Referral', 'Social', 'Other'],
          datasets: [{
            data: [25,20,30,15,10],
            backgroundColor: ['#6f42c1', '#007bff','#17a2b8','#00cccc','#adb2bd']
          }]
        };

        var optionpie = {
          maintainAspectRatio: false,
          responsive: true,
          legend: {
            display: false,
          },
          animation: {
            animateScale: true,
            animateRotate: true
          }
        };

        // For a doughnut chart
        var ctxpie= document.getElementById('chartDonut');
        var myPieChart6 = new Chart(ctxpie, {
          type: 'doughnut',
          data: datapie,
          options: optionpie
        });

      });
    </script>






<div class="containerr">
  

  
<h3>View</h3>
<form id="searchForm">
        <button onclick="sortEntretiensByDate()">Trier par date d'entretien</button>

        
    <input type="text" id="searchInput" placeholder="Rechercher...">
    <button type="button" onclick="searchEntretiens()">Rechercher</button>
</form>
        <table id="calendrierTable">
            <tr>
                <th>ID Entretien</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Âge</th>
                <th>Téléphone</th>
                <th>Email</th>
                <th>Date d'entretien</th>
            </tr>
            <?php foreach ($entretiens as $entretien): ?>
            <tr>
                <td><?php echo $entretien['id_entretien']; ?></td>
                <td><?php echo $entretien['nom']; ?></td>
                <td><?php echo $entretien['prenom']; ?></td>
                <td><?php echo $entretien['age']; ?></td>
                <td><?php echo $entretien['telephone']; ?></td>
                <td><?php echo $entretien['email']; ?></td>
                <td><?php echo $entretien['date_entretien']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
          
      </form>





  </div>

  
  
</div>


<script>
  // JavaScript pour la gestion des entretiens
  let entretiens = <?php echo json_encode($entretiens); ?>; // Tableau pour stocker les entretiens
 



  function displayEntretiens(table, entretiens) {
    const tableBody = table.getElementsByTagName('tbody')[0];
    tableBody.innerHTML = ''; // Effacer le contenu de la table
    entretiens.forEach(entretien => {
        const row = tableBody.insertRow();
        row.innerHTML = `

        
            <td>${entretien.id_entretien}</td>
            <td>${entretien.nom}</td>
            <td>${entretien.prenom}</td>
            <td>${entretien.age}</td>
            <td>${entretien.telephone}</td>
            <td>${entretien.email}</td>
            <td>${entretien.date_entretien}</td>
        `;
    });
}



  // JavaScript pour la gestion des entretiens dans le front office
  const entretienDetails = document.querySelectorAll('.entretien-details');

  // Ajouter un événement de clic sur chaque entretien pour afficher / masquer les détails
  entretienDetails.forEach(item => {
      item.previousElementSibling.addEventListener('click', () => {
          item.classList.toggle('active');
      });
  });



  // Fonction pour la modification d'un entretien
function editEntretien(id) {
  // Récupérer l'entretien correspondant à l'ID
  const entretien = entretiens.find(entretien => entretien.id_entretien === id);
  
  // Pré-remplir le formulaire avec les données de l'entretien
  document.getElementById('id_entretien').value = entretien.id_entretien;
  document.getElementById('nom').value = entretien.nom;
  document.getElementById('prenom').value = entretien.prenom;
  document.getElementById('age').value = entretien.age;
  document.getElementById('telephone').value = entretien.telephone;
  document.getElementById('email').value = entretien.email;
  document.getElementById('date_entretien').value = entretien.date_entretien;

  
}


  function deleteEntretien(id) {
      // Confirmation de la suppression
      if (confirm("Êtes-vous sûr de vouloir supprimer cet entretien?")) {
          // Soumettre le formulaire de suppression
          document.getElementById('deleteForm').submit();
      }
  }


  function showBackOffice() {
      document.getElementById('frontOffice').style.display = 'none';
      document.getElementById('backOffice').style.display = 'block';
      
  }

  function sortEntretiensByDate() {
      entretiens.sort((a, b) => new Date(a.date_entretien) - new Date(b.date_entretien));
      displayEntretiens(document.getElementById('calendrierTable'));
  }

  function searchEntretiens() {
    // Récupérez la valeur saisie dans l'input de recherche
    const searchValue = document.getElementById('searchInput').value.toLowerCase().trim();

    // Filtrer les entretiens en fonction de la valeur de recherche
    const filteredEntretiens = entretiens.filter(entretien => {
        return (
            entretien.nom.toLowerCase().includes(searchValue) ||
            entretien.prenom.toLowerCase().includes(searchValue) ||
            entretien.age.toString().toLowerCase().includes(searchValue) ||
            entretien.telephone.toLowerCase().includes(searchValue) ||
            entretien.email.toLowerCase().includes(searchValue) ||
            entretien.date_entretien.toLowerCase().includes(searchValue)
        );
    });

    // Mettez à jour l'affichage des entretiens dans le tableau
    displayEntretiens(document.getElementById('calendrierTable'), filteredEntretiens);
}

  function validateForm() {
      const id_entretien = document.getElementById('id_entretien').value.trim();
      const nom = document.getElementById('nom').value.trim();
      const prenom = document.getElementById('prenom').value.trim();
      const age = document.getElementById('age').value.trim();
      const telephone = document.getElementById('telephone').value.trim();
      const email = document.getElementById('email').value.trim();
      const date_entretien = document.getElementById('date_entretien').value.trim();

      // Vérifier si tous les champs sont remplis
      if (id_entretien === '' || nom === '' || prenom === '' || age === '' || telephone === '' || email === '' || date_entretien === '') {
          alert('Veuillez remplir tous les champs.');
          return;
      }

      // Ajouter l'entretien si les champs sont valides
      document.getElementById('entretienForm').submit();
  }


  

  // Initialiser le calendrier FullCalendar
  document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');

      var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          locale: 'fr', // Définissez la locale du calendrier sur français
          events: [] // Vous pouvez ajouter des événements ici
      });

      calendar.render();


  });


  
  






</script>












  </body>
</html>
