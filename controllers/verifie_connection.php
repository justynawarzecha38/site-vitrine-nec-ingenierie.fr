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
// accès base de donnée en local
    $host = $_ENV["DB_HOST"];
    $username = $_ENV["DB_USERNAME"];
    $password = $_ENV["DB_PASSWORD"];
    $db = $_ENV["DB_NAME"];

    $conn = new mysqli($host, $username, $password, $db);

    $data['iden'] = mysqli_real_escape_string($conn, $data['iden']);
    $data['password'] = mysqli_real_escape_string($conn, $data['password']);

    $query = "SELECT * FROM `user` WHERE username = '" . $data['iden'] . "' and password='" . hash('sha256', $data['password']) . "' and role='admin'";

    $result = mysqli_query($conn, $query);
    $rows = mysqli_num_rows($result);

    if ($rows == 1) {
        $_SESSION['username'] = $data['iden'];
        $_SESSION['role'] = "admin";

        $server_host = $_ENV["SERVER_HOST"];

        header("Location: $server_host");
    }else{
        header("Location: http://localhost/site-vitrine-nec-ingenierie.fr/connection_formulaire.php");
    }

}
if($data['submit'] == "Se déconnecter"){
    $_SESSION['username'] = NULL;
    $_SESSION['role'] = NULL;
    header("Location: http://localhost/site-vitrine-nec-ingenierie.fr/connection_formulaire.php");
}

