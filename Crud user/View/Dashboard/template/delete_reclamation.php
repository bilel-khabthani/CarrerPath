<?php
require_once '../../../controller/reclamationC.php';


$rec = new reclamationC();
$rec->supprimer($_GET["id"]);
header('Location:Read.php');


?>