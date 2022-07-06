<!DOCTYPE HTML>
<html lang="fr">

<style>
</style>

<head>
    <?php

    use Dotenv\Dotenv;

    $main_title = 'Accueil';
    $main_nav_key = 'home';
    include_once('./includes/head.php');
    ?>
    <?php include_once('./includes/styles.php'); ?>
    <link rel="stylesheet" href="./styles/pages/home.css?v=<?php echo(date("Y-m-d-H-i-s", filemtime('./styles/pages/home.css'))) ?>">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>

<body class="flex-column-nowrap" style="overflow: hidden;">
    <?php
        session_start();
        include_once('./includes/header.php');
    ?>

    <main class="container-fluid flex-column-nowrap flex-adapt-height flex-scrollable p-0">

        <?php if($_SESSION["role"] == "admin"): ?>
            <?php
                echo "hello welcome " . $_SESSION["username"];
            ?>
            <?php

            $job_offers_list = array();

            require 'vendor/autoload.php';

            $dotenv = Dotenv::createImmutable(__DIR__);
            $dotenv->load();

            // accès base de donnée serveur plesk
            $host = $_ENV["DB_HOST"];
            $username = $_ENV["DB_USERNAME"];
            $password = $_ENV["DB_PASSWORD"];
            $db = $_ENV["DB_NAME"];

            // accès base de donnée en local
            /*$host = "localhost";
            $username = "root";
            $password = "";
            $db = "new_energie_concept";*/

            $n = 0;

            $conn = new mysqli($host,$username, $password,$db) ;

            if ($result = $conn -> query('SELECT * FROM poste;')) {
                while($row = $result->fetch_assoc()) {
                    $job_offers_list[$n] = [
                        $row["poste_id"], $row["titre"], $row["descriptif_poste"],
                        $row["profil_recherche"], $row["type_contrat"], $row["salaire"],
                        $row["experience_exigee"], $row["qualification"], $row["city"]
                    ];
                    $n++;
                }
            }
            ?>

            <?php
                $column_name_list = [
                        "titre du poste",
                        "descriptif du poste",
                        "profil recherché",
                        "type de contrat",
                        "salaire",
                        "expérience exigée",
                        "qualification",
                        "ville"
                ];
                $job_name_list = [
                        "job_tittle",
                        "job_description",
                        "job_profil",
                        "job_contract",
                        "job_salary",
                        "job_experience",
                        "job_qualification",
                        "job_city"

                ];
            ?>

            <?php if(!empty($job_offers_list)): ?>
                <table>
                    <thead>
                    <tr>
                        <?php foreach($column_name_list as $column_name_list): ?>
                            <th><?php echo($column_name_list); ?></th>
                        <?php endforeach; ?>
                    </tr>
                    </thead>
                    <?php foreach($job_offers_list as $job_offers_row): ?>
                        <tr>
                            <td>
                                <input type="text" size="10" id="<?php echo($job_offers_row[0]); ?>_<?php echo($job_name_list[0]); ?>" value="<?php echo($job_offers_row[1]); ?>">
                            </td>
                            <td>
                                <textarea type="text" size="10" id="<?php echo($job_offers_row[0]); ?>_<?php echo($job_name_list[1]); ?>" value="<?php echo($job_offers_row[2]); ?>"><?php echo($job_offers_row[2]); ?></textarea>
                            </td>
                            <td>
                                <textarea type="text" size="10" id="<?php echo($job_offers_row[0]); ?>_<?php echo($job_name_list[2]); ?>" value="<?php echo($job_offers_row[3]); ?>"><?php echo($job_offers_row[3]); ?></textarea>
                            </td>
                            <td>
                                <input type="text" size="10" id="<?php echo($job_offers_row[0]); ?>_<?php echo($job_name_list[3]); ?>" value="<?php echo($job_offers_row[4]); ?>">
                            </td>
                            <td>
                                <input type="text" size="10" id="<?php echo($job_offers_row[0]); ?>_<?php echo($job_name_list[4]); ?>" value="<?php echo($job_offers_row[5]); ?>">
                            </td>
                            <td>
                                <input type="text" size="10" id="<?php echo($job_offers_row[0]); ?>_<?php echo($job_name_list[5]); ?>" value="<?php echo($job_offers_row[6]); ?>">
                            </td>
                            <td>
                                <input type="text" size="10" id="<?php echo($job_offers_row[0]); ?>_<?php echo($job_name_list[6]); ?>" value="<?php echo($job_offers_row[7]); ?>">
                            </td>
                            <td>
                                <input type="text" size="10" id="<?php echo($job_offers_row[0]); ?>_<?php echo($job_name_list[7]); ?>" value="<?php echo($job_offers_row[8]); ?>">
                            </td>
                            <td>
                                <input type="submit" id="button" name="button_job" value="delete" onclick="deleteJob(<?php echo($job_offers_row[0]); ?>)"/>
                            </td>
                            <td>
                                <input type="submit" id="button" name="button_job" value="update" onclick="updateJob('<?php echo($job_offers_row[0]); ?>')"/>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>

            <script type="text/javascript">
                function deleteJob(indice_id) {
                    window.location  = "./controllers/deletejoboffer.php?id="+indice_id;
                }

                function updateJob(indice_id) {

                    let indice_col = ["_job_tittle",
                        "_job_description",
                        "_job_profil",
                        "_job_contract",
                        "_job_salary",
                        "_job_experience",
                        "_job_qualification",
                        "_job_city"];

                    let new_value_col = [];

                    for(let i = 0; i <= 7; i++){
                        new_value_col[i] = document.getElementById(indice_id+indice_col[i]).value;
                    }

                    window.location  = "./controllers/updatejoboffer.php?id="+indice_id+"&table="+new_value_col;
                }
            </script>

            <center>
                <form id="join-us-form" action="./controllers/addjoboffer.php" method="POST" enctype="multipart/form-data">
                    <br>
                    <label>*A remplir obligatoire</label><br>
                    <input type="text" id="tittle_job" name="tittle_job" placeholder="Titre du Poste à pourvoir* :"/><br>
                    <input type="text" id="adresse_job" name="adresse_job" placeholder="Adresse Ville* :"/><br>
                    <textarea type="text" id="description_job" name="description_job" placeholder="Descriptif* :"></textarea><br>
                    <textarea type="text" id="profil_job" name="profil_job" placeholder="Profil rechercher* :"></textarea><br>
                    <input type="text" id="contract_job" name="contract_job" placeholder="Type de contrat* :"/><br>
                    <input type="text" id="salary_job" name="salary_job" placeholder="Salaires* :"/><br>
                    <input type="text" id="experience_job" name="experience_job" placeholder="Expèrience exigée* :"/><br>
                    <input type="text" id="qualification_job" name="qualification_job" placeholder="Qualification* :"/><br>
                    <input type="submit" id="button" value="submit"/>
                </form>
            </center>

            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

        <?php else: ?>

            <p>you do not have acces to this page</p>

        <?php endif; ?>

        <?php include_once('./includes/footer.php'); ?>
    </main>
</body>
