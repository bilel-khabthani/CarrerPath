<?php
    include_once '../../../controller/reponseC.php';
    require_once '../../../controller/reclamationC.php';


    $rep = new reponseC();
    $rec = new reclamationC();

    if ($_POST["Read"] == "Tri") {
    $tabRep = $rep->triReponse();
    } else if ($_POST["Readd"] == "Search") {
    $tabRep = $rep->rechercheReponse($_POST["rech"]);
    } else
    $tabRep = $rep->afficher();

?>



<!DOCTYPE html>
<html>

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

    <title>Dashboard | Afficher Reclamations</title>
    <link rel="stylesheet" type="text/css" href="back/admin.css">
    <link rel="shortcut icon" type="image/x-icon" href="gestionReclamation/view/front/img/banner/rec.png">


    <link href="back/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="back/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="back/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="back/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="back/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="back/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="back/vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,900" rel="stylesheet">

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">

<link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
<link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

<!-- Theme Style -->
<link rel="stylesheet" href="css/style.css">

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



    <main>
        <div class="pagetitle">
            <h1>Liste des Reponses</h1>
            <br>
        </div>

        <section class="section dashboard">
            <div class="row">
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">
                            <center>
                                <form action="afficherReponse.php" method="POST">
                                    <br>
                                    <input type="text" placeholder="Search..." name="rech" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" style="height:50px;">
                                    <input type="submit" class="btn btn-outline-primary btn-sm" name="aff" value="Search" />
                                    <input type="submit" class="btn btn-outline-primary btn-sm" name="aff" value="Tri" />
                                </form>
                            </center>
                            <br><br>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th> Date </th>
                                            <th> Description </th>
                                            <th> Reclamation de </th>
                                            <th>    </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($tabRep as $rep) { ?>
                                        <tr>
                                            <td> <?= $rep['date'] ?> </td>
                                            <td> <?= $rep['description'] ?> </td>
                                            <td> <?= $rec->recupererReclamation($rep['id_rec'])["email"] ?> </td>
                                            <td>
                                                <a href="modifierReponse.php?id=<?php echo $rep['id']; ?>"><button class="btn btn-outline-success btn-sm">Modifier</button></a>
                                                <a href="supprimerReponse.php?id=<?php echo $rep['id']; ?>"><button class="btn btn-outline-danger btn-sm">Supprimer</button></a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Sadaka Management Dashboard</p>
    </footer>
</body>

