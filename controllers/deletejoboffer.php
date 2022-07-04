<?php

use Dotenv\Dotenv;

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

$value = 0;

$conn = new mysqli($host,$username, $password,$db) ;

$sql_req = 'DELETE FROM `poste` WHERE `poste`.`poste_id` = "'. $id_indice .'" ';

$res = $conn->multi_query($sql_req);

header("Location: "+$_ENV["SERVER_HOST"]);
exit();

