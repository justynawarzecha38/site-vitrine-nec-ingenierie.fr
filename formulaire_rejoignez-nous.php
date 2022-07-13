<!DOCTYPE HTML>
<html lang="fr">

<style>
    table { border:solid 3px #000000; }
    th    { text-align: center }
</style>

<head>
    <?php

    use Dotenv\Dotenv;

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

        <?php if((!empty($_SESSION["acces"])) && ($_SESSION["acces"] == "yes")): ?>

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
                        "ville",
                        "savoirs"
                ];
                $job_name_list = [
                        "job_tittle",
                        "job_description",
                        "job_profil",
                        "job_contract",
                        "job_salary",
                        "job_experience",
                        "job_qualification",
                        "job_city",
                        "job_savoir"

                ];
            ?>
            <?php if(!empty($job_offers_list)): ?>
            <h2>Liste des postes :</h2>
                <table>
                    <thead>
                    <tr style="border:solid 3px #000000; align-content: center;">
                        <?php foreach($column_name_list as $column_name_list): ?>
                            <th style="text-align: center"><?php echo($column_name_list); ?></th>
                        <?php endforeach; ?>
                    </tr>
                    </thead>
                    <?php foreach($job_offers_list as $job_offers_row): ?>
                        <tr style="border:solid 3px #000000; text-align: center;">
                            <td>
                                <input type="text" size="10" id="<?php echo($job_offers_row[0]); ?>_<?php echo($job_name_list[0]); ?>" value="<?php echo($job_offers_row[1]); ?>">
                            </td>
                            <td>
                                <textarea style='width: 300px; height: 100px; min-height: 100px' type="text" size="10" id="<?php echo($job_offers_row[0]); ?>_<?php echo($job_name_list[1]); ?>" value="<?php echo($job_offers_row[2]); ?>"><?php echo($job_offers_row[2]); ?></textarea>
                            </td>
                            <td>
                                <textarea style='width: 300px; height: 100px; min-height: 100px' type="text" size="10" id="<?php echo($job_offers_row[0]); ?>_<?php echo($job_name_list[2]); ?>" value="<?php echo($job_offers_row[3]); ?>"><?php echo($job_offers_row[3]); ?></textarea>
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
                                <?php
                                    $host = $_ENV["DB_HOST"];
                                    $username = $_ENV["DB_USERNAME"];
                                    $password = $_ENV["DB_PASSWORD"];
                                    $db = $_ENV["DB_NAME"];

                                    $i = 0;
                                    $savoirs_list_value = [];

                                    $conn = new mysqli($host,$username, $password,$db);

                                    if ($result = $conn -> query('SELECT * FROM savoirs WHERE poste_id = "'.$job_offers_row[0].'"; ')) {
                                        while($row = $result->fetch_assoc()) {
                                            $savoirs_list_value[$i] = [
                                                    $i,
                                                    $row["savoir_faire"]
                                            ];
                                            $i++;
                                        }
                                    }

                                    $n = 0;
                                ?>
                                <?php $indice_savoir_faire = 0; ?>
                                <?php foreach($savoirs_list_value as $savoirs_faire): ?>
                                    <input type="text" size="10"  id="<?php echo($job_offers_row[0]); ?>_<?php echo($savoirs_faire[0]); ?>_<?php echo($job_name_list[8]); ?>" value="<?php echo($savoirs_faire[1]); ?>"><br>
                                    <?php $indice_savoir_faire++; ?>
                                <?php endforeach; ?>
                            </td>
                            <td style="border:solid 3px #000000;">
                                <input type="submit" id="button" name="button_job" value="delete" onclick="deleteJob(<?php echo($job_offers_row[0]); ?>)"/>
                            </td>
                            <td>
                                <input type="submit" id="button" name="button_job" value="update" onclick="updateJob('<?php echo($job_offers_row[0]); ?>','<?php echo($indice_savoir_faire); ?>')"/>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>

            <script type="text/javascript">

                require('dotenv').config();

                // Méthode ou va aller dans le fichier php pour supprimer la ligne du poste
                function deleteJob(indice_id) {
                    window.location  = "./controllers/deletejoboffer.php?id="+indice_id;
                }

                // Méthode qui va faire une mis à jour sur la ligne d'un poste, il aura en paramètre: l'identifiant de la ligne qui vient de la base de donnée du poste et le nombre de champ de texte de la colonne savoirs
                function updateJob(indice_id, indice_savoir_faire) {

                    // Indice sur les identifiants de chaque colonne de la ligne qu'on va faire la mis à jour
                    let indice_col = ["_job_tittle",
                        "_job_description",
                        "_job_profil",
                        "_job_contract",
                        "_job_salary",
                        "_job_experience",
                        "_job_qualification",
                        "_job_city"];

                    // Table qui stocker les valeur
                    let new_value_col = [];

                    // On va récupérer la valeur de chaque champ de texte qui corresponde à l'identifiant du champ de texte de la ligne
                    for(let i = 0; i <= 7; i++){
                        new_value_col[i] = document.getElementById(indice_id+indice_col[i]).value;
                    }

                    // Tableau qui stocker la liste des savoir faire pour la ligne séléctionner
                    let savoir_list_value = [];

                    // Boucle qui durera jusqu'au au nombre maximum de la liste savoir faire
                    for(let i = 0; i < indice_savoir_faire; i++){
                        var id_savoir = indice_id+"_"+i+"_job_savoir";
                        savoir_list_value[i] = document.getElementById(id_savoir).value;
                        id_savoir = indice_id+"_"+i+"_job_savoir";

                        // Si une des valeurs qu'on récupérer n'a rien dans le champ de texte alors...
                        if(savoir_list_value[i] == ""){

                            // Affiche un message d'alert
                            alert("vous mit aucun texte sur une des listes de savoir faire!");

                            // Sort de la méthode
                            return;
                        }
                    }

                    // Lien de redirection vers le fichier php
                    var lien_url_updateposte = "./controllers/updatejoboffer.php?id="+indice_id

                    // Récupère les valeur des 7 premiere valeur d'une ligne
                    for (let i = 0; i <= 7; i++) {
                        lien_url_updateposte += "&table"+i+"="+new_value_col[i]
                    }

                    // Récupère les valeur de la colonne savoir faire
                    for (let i = 0; i <=indice_savoir_faire-1; i++){
                        lien_url_updateposte += "&table_savoir"+i+"="+savoir_list_value[i]
                    }

                    // Redirection vers un fichier.php qui aura des paramètre en lien url
                    window.location = lien_url_updateposte;
                }
            </script>

            <center>
                <h2>Formulaire pour ajouter un poste :</h2>
                <form id="join-us-form" action="./controllers/addjoboffer.php" method="POST" enctype="multipart/form-data">
                    <br>
                    <label>*A remplir obligatoire</label><br>
                    <input style='width: 300px;' type="text" id="tittle_job" name="tittle_job" placeholder="Titre du Poste à pourvoir* :" required/><br>
                    <input style='width: 300px;' type="text" id="adresse_job" name="adresse_job" placeholder="Adresse Ville* :" required/><br>
                    <textarea style='width: 300px; height: 100px; min-height: 100px' type="text" id="description_job" name="description_job" placeholder="Descriptif* :" required></textarea><br>
                    <textarea style='width: 300px; height: 100px; min-height: 100px' type="text" id="profil_job" name="profil_job" placeholder="Profil rechercher* :" required></textarea><br>

                    <legend>Savoirs et savoir-faire :</legend>

                    <div id="pieceCompteAjoute">

                    </div>
                    <input type="button" value="ajouter un champ" onclick="ajouterPieceCompte()"/><br>
                    <input type="button" style="display:none" id="supCompte" value="supprimer un champ" onclick="supprimerPieceCompte()" /></p>

                    <script type="text/javascript">
                        var zoneAjoutPieceCompte;
                        var nbPieceCompte=1;

                        // Méthode qui rajoute une case de champ de texte pour le savoir faire
                        function ajouterPieceCompte(){
                            if(nbPieceCompte==1){ //si il s'agit du premier ajout
                                zoneAjoutPieceCompte = document.getElementById('pieceCompteAjoute') //on séléctionne l'emplacement où on veux effectuer les ajouts de champs
                                document.getElementById('supCompte').style.display='inline' //on rend disponible le bouton supprimer
                            }

                            // On ajoute un nouveau champ
                            var input = document.createElement("input");
                            input.type = "text";
                            input.name = "pieceCompteAjoute["+nbPieceCompte+"]";
                            input.id  = "knowledge_required_job_"+nbPieceCompte;
                            input.name = "knowledge_required_job_"+nbPieceCompte;
                            input.placeholder = "Savoir faire "+nbPieceCompte+"* :";
                            input.style = 'width: 300px;'
                            input.style.display = "block";
                            input.required = true;
                            zoneAjoutPieceCompte.appendChild(input);
                            nbPieceCompte++;
                        }

                        // Méthode qui enlève le dernier champ de texte de la partie savoir faire
                        function supprimerPieceCompte(){
                            nbPieceCompte--;
                            zoneAjoutPieceCompte.removeChild(document.getElementById("knowledge_required_job_"+nbPieceCompte)) // on supprime le dernier champs ajouté
                            if(nbPieceCompte==1){
                                document.getElementById('supCompte').style.display='none';// on rend indisponible le bouton supprimer
                            }
                        }
                    </script>

                    <input style='width: 300px;' type="text" id="contract_job" name="contract_job" placeholder="Type de contrat* :" required/><br>
                    <input style='width: 300px;' type="text" id="salary_job" name="salary_job" placeholder="Salaires* :" required/><br>
                    <input style='width: 300px;' type="text" id="experience_job" name="experience_job" placeholder="Expèrience exigée* :" required/><br>
                    <input style='width: 300px;' type="text" id="qualification_job" name="qualification_job" placeholder="Qualification* :" required/><br>
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
