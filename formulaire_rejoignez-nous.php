<!DOCTYPE HTML>
<html lang="fr">

<style>
</style>

<head>
    <?php
    $main_title = 'Accueil';
    $main_nav_key = 'home';
    include_once('./includes/head.php');
    ?>
    <?php include_once('./includes/styles.php'); ?>
    <link rel="stylesheet" href="./styles/pages/home.css?v=<?php echo(date("Y-m-d-H-i-s", filemtime('./styles/pages/home.css'))) ?>">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>

<body class="flex-column-nowrap" style="overflow: hidden;">
    <?php include_once('./includes/header.php'); ?>

    <main class="container-fluid flex-column-nowrap flex-adapt-height flex-scrollable p-0">

        <script type="text/javascript">

            require("dotenv").config();
            var password = process.env.PAGE_FORMULAIRE_PASS;

            var x = prompt("Enter in the password ","  ");
            if (x.toLowerCase() == password) {
                alert("Come right in \n \n You've entered in the right password");
                window.location = "./formulaire_rejoignez-nous.php";
            }
        </script>

        <?php

        $job_offers_list = array();

        $host = "localhost";
        $username = "root";
        $password = "";
        $db = "new_energie_concept";
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
                        <?php for ($i = 1; $i <= 8; $i ++): ?>
                            <td>
                                <input type="text" size="10" id="<?php echo($job_offers_row[0]); ?>_<?php echo($job_name_list[$i-1]); ?>" name="<?php echo($job_name_list[$i]); ?>" value="<?php echo($job_offers_row[$i]); ?>">
                            </td>
                        <?php endfor; ?>
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

        <?php  ?>
        <center>
            <form id="join-us-form" class="w-100" action="./controllers/addjoboffer.php" method="POST" enctype="multipart/form-data">
                <br>
                <label>*A remplir obligatoire</label><br>
                <input type="text" id="tittle_job" name="tittle_job" placeholder="Titre du Poste à pourvoir* :"/><br>
                <input type="text" id="adresse_job" name="adresse_job" placeholder="Adresse* :"/><br>
                <input type="text" id="description_job" name="description_job" placeholder="Descriptif* :"/><br>
                <input type="text" id="profil_job" name="profil_job" placeholder="Profil rechercher* :"/><br>
                <input type="text" id="contract_job" name="contract_job" placeholder="Type de contrat* :"/><br>
                <input type="text" id="salary_job" name="salary_job" placeholder="Salaires :"/><br>
                <input type="text" id="experience_job" name="experience_job" placeholder="Expèrience exigée :"/><br>
                <input type="text" id="qualification_job" name="qualification_job" placeholder="Qualification :"/><br>
                <input type="submit" id="button" value="submit"/>
            </form>
        </center>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
        <?php include_once('./includes/footer.php'); ?>
    </main>
</body>
