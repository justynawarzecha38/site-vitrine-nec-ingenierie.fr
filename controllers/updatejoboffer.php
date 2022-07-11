<?php

use Dotenv\Dotenv;

require '../vendor/autoload.php';

$indice_id = $_GET['id'];
$table_job = $_GET['table'];
$table_savoir_job = $_GET['table_savoir'];

$table_job_split = explode(",", $table_job);
$table_savoir_job_split = explode(",", $table_savoir_job);

$data = [];

$data['job_tittle'] = $table_job_split[0];
$data['job_description'] = $table_job_split[1];
$data['job_profil'] = $table_job_split[2];
$data['job_contract'] = $table_job_split[3];
$data['job_salary'] = $table_job_split[4];
$data['job_experience'] = $table_job_split[5];
$data['job_qualification'] = $table_job_split[6];
$data['job_city'] = $table_job_split[7];

$i = 0;
$value = $indice_id . "_" . $i . "_job_savoir";

while($table_savoir_job_split[$i]){
    $data[$value] = $table_savoir_job_split[$i];
    echo "/" . $data[$value] . "/";
    $i++;
    $value = $indice_id . "_" . $i . "_job_savoir";
}

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

$conn = new mysqli($host,$username, $password,$db) ;

$sql_req = 'DELETE FROM savoirs WHERE poste_id = "'.$indice_id.'";';

$res = $conn->multi_query($sql_req);

$value = 0;

$conn = new mysqli($host,$username, $password,$db) ;

$sql_req = 'DELETE FROM `poste` WHERE `poste`.`poste_id` = "'. $indice_id .'" ';

$res = $conn->multi_query($sql_req);

$conn = new mysqli($host,$username, $password,$db) ;

$sql_req = 'INSERT INTO `poste` (`poste_id`, `titre`, `descriptif_poste`, 
                                 `profil_recherche`, `type_contrat`, `salaire`, 
                                 `experience_exigee`, `qualification`, `city`) 
            VALUES ("'.$indice_id.'", "'.$data['job_tittle'].'", "'.$data['job_description'].'",
                    "'.$data['job_profil'].'", "'.$data['job_contract'].'", "'.$data['job_salary'].'",
                    "'.$data['job_experience'].'", "'.$data['job_qualification'].'","'.$data['job_city'].'");';

$res = $conn->multi_query($sql_req);

$i = 0;
$value = $indice_id . "_" . $i . "_job_savoir";

while($data[$value]){

    $conn = new mysqli($host,$username, $password,$db) ;

    $sql_req = 'INSERT INTO `savoirs` (`savoirs_id`, `savoir_faire`, `poste_id`) 
            VALUES (NULL, "'.$data[$value].'", "'.$indice_id.'");';

    $res = $conn->multi_query($sql_req);

    $value = $indice_id . "_" . $i . "_job_savoir";

    $i++;
}

$server_host = $_ENV["SERVER_HOST"];

header("Location: $server_host");
exit();