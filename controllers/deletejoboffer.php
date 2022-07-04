<?php

$id_indice = $_GET['id'];

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

/*if($_POST['button_job'] == 'delete'){


}
elseif($_POST['button_job'] == 'update'){
    $input_data = $_POST;
    $data = [];

    $data['job_id'] = isset($input_data['job_id']) ? $input_data['job_id'] : "";
    $data['job_tittle'] = isset($input_data['job_tittle']) ? $input_data['job_tittle'] : "";
    $data['job_description'] = isset($input_data['job_description']) ? $input_data['job_description'] : "";
    $data['job_profil'] = isset($input_data['job_profil']) ? $input_data['job_profil'] : "";
    $data['job_contract'] = isset($input_data['job_contract']) ? $input_data['job_contract'] : "";
    $data['job_salary'] = isset($input_data['job_salary']) ? $input_data['job_salary'] : "";
    $data['job_experience'] = isset($input_data['job_experience']) ? $input_data['job_experience'] : "";
    $data['job_qualification'] = isset($input_data['job_qualification']) ? $input_data['job_qualification'] : "";
    $data['job_city'] = isset($input_data['job_city']) ? $input_data['job_city'] : "";

    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "new_energie_concept";
    $value = 0;

    $conn = new mysqli($host,$username, $password,$db) ;

    $sql_req = 'DELETE FROM `poste` WHERE `poste`.`poste_id` = "'. $data['job_id'] .'" ';

    $res = $conn->multi_query($sql_req);

    $sql_req = 'INSERT INTO `poste` (`poste_id`, `titre`, `descriptif_poste`, 
                                 `profil_recherche`, `type_contrat`, `salaire`, 
                                 `experience_exigee`, `qualification`, `city`) 
            VALUES ("'.$data['job_id'].'", "'.$data['job_tittle'].'", "'.$data['job_description'].'",
                    "'.$data['job_profil'].'", "'.$data['job_contract'].'", "'.$data['job_salary'].'",
                    "'.$data['job_experience'].'", "'.$data['job_qualification'].'","'.$data['job_city'].'");';

    $res = $conn->multi_query($sql_req);

    header("Location: http://localhost/site-vitrine-nec-ingenierie.fr/formulaire_rejoignez-nous.php");
    exit();
}*/

