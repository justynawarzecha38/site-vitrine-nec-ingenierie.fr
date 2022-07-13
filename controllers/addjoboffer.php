<?php

use Dotenv\Dotenv;

require '../vendor/autoload.php';

// Récupère les valeur venant du formulaire pour rajouter un nouveau poste
$input_data = $_POST;
$data = [];
$data['tittle_job'] = isset($input_data['tittle_job']) ? $input_data['tittle_job'] : "";
$data['adresse_job'] = isset($input_data['adresse_job']) ? $input_data['adresse_job'] : "";
$data['description_job'] = isset($input_data['description_job']) ? $input_data['description_job'] : "";
$data['profil_job'] = isset($input_data['profil_job']) ? $input_data['profil_job'] : "";
$data['contract_job'] = isset($input_data['contract_job']) ? $input_data['contract_job'] : "";
$data['salary_job'] = isset($input_data['salary_job']) ? $input_data['salary_job'] : "";
$data['experience_job'] = isset($input_data['experience_job']) ? $input_data['experience_job'] : "";
$data['qualification_job'] = isset($input_data['qualification_job']) ? $input_data['qualification_job'] : "";

$dir = dirname(__DIR__, 1);
$dotenv = Dotenv::createImmutable($dir);
$dotenv->load();

// accès base de donnée en local
$host = $_ENV["DB_HOST"];
$username = $_ENV["DB_USERNAME"];
$password = $_ENV["DB_PASSWORD"];
$db = $_ENV["DB_NAME"];

// Rajoute une nouvelle ligne dans la base de donnée du tableau poste
$conn = new mysqli($host,$username, $password,$db) ;
$sql_req = 'INSERT INTO `poste` (`poste_id`, `titre`, `descriptif_poste`, 
                                 `profil_recherche`, `type_contrat`, `salaire`, 
                                 `experience_exigee`, `qualification`, `city`) 
            VALUES (NULL, "'.$data['tittle_job'].'", "'.$data['description_job'].'",
                    "'.$data['profil_job'].'", "'.$data['contract_job'].'", "'.$data['salary_job'].'",
                    "'.$data['experience_job'].'", "'.$data['qualification_job'].'","'.$data['adresse_job'].'");';
$res = $conn->multi_query($sql_req);

// Selectionne la derniere ligne du tableau poste de la base de donnée, on récupéra que l'identifiant
$conn = new mysqli($host,$username, $password,$db) ;
$sql = "SELECT poste_id FROM poste ORDER BY poste_id DESC LIMIT 1;";
$result = $conn->query($sql);

// Récupère la valeur de la requete sql
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $poste_id = $row["poste_id"];
    }
} else {
    echo "0 results";
}
$conn->close();

$i = 1;
$value = "knowledge_required_job_";
$value .= "$i";

// Pour chaque savoir faire qui ont été marquer dans le formulaire
while(isset($input_data[$value]) ? $input_data[$value] : ""){
    // On récupère ce champ de texte du savoir faire
    $data[$value] = isset($input_data[$value]) ? $input_data[$value] : "";

    // On le met dans la base de donné du tableau savoirs
    $conn = new mysqli($host,$username, $password,$db) ;
    $sql_req = 'INSERT INTO `savoirs` (`savoirs_id`, `savoir_faire`, `poste_id`) 
            VALUES (NULL, "'.$data[$value].'", "'.$poste_id.'");';
    $res = $conn->multi_query($sql_req);

    $value = "knowledge_required_job_";
    $i++;
    $value .= "$i";
}

$server_host = $_ENV["SERVER_HOST"];

header("Location: $server_host");
exit();
