<?php

$id_indice = $_GET['id'];

// accès base de donnée serveur plesk
/*$host = "localhost";
$username = "admin_nec";
$password = "adminx2022@_8";
$db = "database_nec";*/

// accès base de donnée en local
$host = "localhost";
$username = "root";
$password = "";
$db = "new_energie_concept";

$value = 0;

$conn = new mysqli($host,$username, $password,$db) ;

$sql_req = 'DELETE FROM `poste` WHERE `poste`.`poste_id` = "'. $id_indice .'" ';

$res = $conn->multi_query($sql_req);

header("Location: http://localhost/site-vitrine-nec-ingenierie.fr/formulaire_rejoignez-nous.php");
exit();

