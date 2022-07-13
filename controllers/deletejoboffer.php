<?php

use Dotenv\Dotenv;

// Récupère dans le lien d'url l'identifiant
$id_indice = $_GET['id'];

require '../vendor/autoload.php';

$dir = dirname(__DIR__, 1);
// Remote directory
// $dir = $_SERVER["DOCUMENT_ROOT"];
$dotenv = Dotenv::createImmutable($dir);
$dotenv->load();

// accès base de donnée en local
$host = $_ENV["DB_HOST"];
$username = $_ENV["DB_USERNAME"];
$password = $_ENV["DB_PASSWORD"];
$db = $_ENV["DB_NAME"];

// Supprime la ligne de la base de donné qui correspond au même identifiant du tableau poste
$conn = new mysqli($host,$username, $password,$db) ;
$sql_req = 'DELETE FROM savoirs WHERE poste_id = "'.$id_indice.'";';
$res = $conn->multi_query($sql_req);

// Supprime les lignes qui on le même identifiant de la base donnée dans le tableau savoirs que celui de url
$conn = new mysqli($host,$username, $password,$db) ;
$sql_req = 'DELETE FROM `poste` WHERE `poste`.`poste_id` = "'. $id_indice .'" ';
$res = $conn->multi_query($sql_req);

// Redirectione vers la page du formulaire
$server_host = $_ENV["SERVER_HOST"];
header("Location: $server_host");
exit();

