<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Offres</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h2 {
            margin-top: 30px;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            cursor: pointer;
        }
        form {
            width: 50%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        a {
            text-decoration: none;
            color: #f44336;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <?php
    require "../controller/OffreController.php";
    $offreController = new OffreController();

    if(isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $offreController->deleteOffre($id);
        header("Location: {$_SERVER['PHP_SELF']}");
        exit();
    }

    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $date_created = $_POST['date_created'];
        $date_expired = $_POST['date_expired'];

        if (!empty($id) && !empty($title) && !empty($description) && !empty($date_created)  && !empty($date_expired)) {
            $offreController->updateOffre($id, $title, $description, $date_created, $date_expired);
        } else {
            echo "<script>alert('Tous les champs sont obligatoires.');</script>";
        }
    }

    if(isset($_GET['id'])) {
        $offre_id = $_GET['id'];
        $offre = $offreController->getOffre($offre_id);
    }

    $list = $offreController->listOffres();
    ?>

    <h2>Liste des Offres</h2>
    <button onclick="window.location.href='index.php';">Home</button>
    <table>
        <thead>
            <tr>
                <th onclick="sortTable(0)">ID</th>
                <th onclick="sortTable(1)">Titre</th>
                <th onclick="sortTable(2)">Description</th>
                <th onclick="sortTable(3)">Date de création</th>
                <th onclick="sortTable(4)">Date d'expiration</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($list as $offre): ?>
                <tr>
                    <td><?= $offre['id']; ?></td>
                    <td><?= $offre['title']; ?></td>
                    <td><?= $offre['description']; ?></td>
                    <td><?= $offre['date_created']; ?></td>
                    <td><?= $offre['date_expired']; ?></td>
                    <td>
                        <form action="" method="POST">
                            <input type="hidden" name="id" value="<?= $offre['id']; ?>">
                            <input type="text" name="title" value="<?= $offre['title']; ?>">
                            <input type="text" name="description" value="<?= $offre['description']; ?>">
                            <input type="date" id="form-control" id="date_created" name="date_created" required>
                            <input type="date" id="form-control" id="date_created" name="date_expired" required>
                            <button type="submit" name="update">Update</button>
                        </form>
                        <a href="?delete=<?= $offre['id']; ?>">Delete</a>
                        
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    

    <script>
        function sortTable(n) {
            var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
            table = document.querySelector("table");
            switching = true;
            dir = "asc";
            while (switching) {
                switching = false;
                rows = table.rows;
                for (i = 1; i < (rows.length - 1); i++) {
                    shouldSwitch = false;
                    x = rows[i].getElementsByTagName("td")[n];
                    y = rows[i + 1].getElementsByTagName("td")[n];
                    if (dir === "asc") {
                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    } else if (dir === "desc") {
                        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    }
                }
                if (shouldSwitch) {
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                    switchcount ++;
                } else {
                    if (switchcount === 0 && dir === "asc") {
                        dir = "desc";
                        switching = true;
                    }
                }
            }
        }
    </script>
</body>
</html>