<?php

use Dotenv\Dotenv;

require '../vendor/autoload.php';

session_start();

$dir = dirname(__DIR__, 1);
// Remote directory
// $dir = $_SERVER["DOCUMENT_ROOT"];
$dotenv = Dotenv::createImmutable($dir);
$dotenv->load();

$input_data = $_POST;
$data = [];

$data['iden'] = isset($input_data['iden']) ? $input_data['iden'] : "";
$data['password'] = isset($input_data['password']) ? $input_data['password'] : "";
$data['submit'] = isset($input_data['button']) ? $input_data['button'] : "";

if($data['submit'] == "S'authentifier") {
    // Accès base de donnée
    $host = $_ENV["DB_HOST"];
    $username = $_ENV["DB_USERNAME"];
    $password = $_ENV["DB_PASSWORD"];
    $db = $_ENV["DB_NAME"];

    // On récupère les deux indice qui sont le mot de passe et l'identifiant ou recherche si les deux corresponde à une ligne du tableau user de la bse de donnée
    $conn = new mysqli($host, $username, $password, $db);
    $data['iden'] = mysqli_real_escape_string($conn, $data['iden']);
    $data['password'] = mysqli_real_escape_string($conn, $data['password']);
    $query = "SELECT * FROM `user` WHERE username = '" . $data['iden'] . "' and password='" . hash('sha256', $data['password']) . "';";

    // Récupère le nombre de ligne
    $result = mysqli_query($conn, $query);
    $rows = mysqli_num_rows($result);

    // Si ou trouve une ligne alors...
    if ($rows == 1) {
        $_SESSION['acces'] = "yes";
        $_SESSION['iden'] = $data['iden'];

        $server_host = $_ENV["SERVER_HOST"];

        header("Location: $server_host");
    }else{
        $_SESSION['acces'] = "no";
        header("Location: http://localhost/site-vitrine-nec-ingenierie.fr/connection_formulaire.php");
    }
} else if($data['submit'] == "Se deconnecter de votre compte") {
    $_SESSION['acces'] = "no";

    header("Location: http://localhost/site-vitrine-nec-ingenierie.fr/connection_formulaire.php");
}

