<?php
require '../vendor/autoload.php';

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

$host = "localhost";
$username = "root";
$password = "";
$db = "new_energie_concept";
$value = 0;

$conn = new mysqli($host,$username, $password,$db) ;

$sql_req = 'INSERT INTO `poste` (`poste_id`, `titre`, `descriptif_poste`, 
                                 `profil_recherche`, `type_contrat`, `salaire`, 
                                 `experience_exigee`, `qualification`, `city`) 
            VALUES (NULL, "'.$data['tittle_job'].'", "'.$data['description_job'].'",
                    "'.$data['profil_job'].'", "'.$data['contract_job'].'", "'.$data['salary_job'].'",
                    "'.$data['experience_job'].'", "'.$data['qualification_job'].'","'.$data['adresse_job'].'");';

$res = $conn->multi_query($sql_req);

header("Location: http://localhost/site-vitrine-nec-ingenierie.fr/formulaire_rejoignez-nous.php");
exit();
