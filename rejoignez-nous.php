<?php

use Dotenv\Dotenv;

session_start();

$input_data = $_POST;
$data = [];
$data['first_name'] = isset($input_data['first_name']) ? $input_data['first_name'] : "";
$data['last_name'] = isset($input_data['last_name']) ? $input_data['last_name'] : "";
$data['email'] = isset($input_data['email']) ? $input_data['email'] : "";
$data['tel'] = isset($input_data['tel']) ? $input_data['tel'] : "";
$data['object'] = isset($input_data['object']) ? $input_data['object'] : "";
$data['message'] = isset($input_data['message']) ? $input_data['message'] : "";
$data['file'] = isset($_FILES['file']) ? $_FILES['file'] : '';
$alert = [];

if ($data['first_name']):
    if ($data['last_name']):
        if ($data['email']):
            if ($data['tel']):
                if ($data['object']):
                    if ($data['message']):
                        if ($data['file']):
                            //$dir = __DIR__;
                            $dir = $_SERVER["DOCUMENT_ROOT"];
                            $datetime = new \Datetime();
                            $str_datetime = $datetime->format('Y-m-d-H-i-s');

                            $file_extension = pathinfo($data['file']['name'], PATHINFO_EXTENSION);
                            $new_filename = $dir ."/forms/join/files/".$str_datetime.".".$file_extension;

                            if (!file_exists($new_filename)):
                                // Check file size
                                if ($data['file']["size"] <= 1048576):
                                    // Allow certain file formats
                                    if(in_array($file_extension, ['jpg', 'jpeg', 'png', 'gif', 'pdf'])):
                                        // Try to upload file
                                        if (move_uploaded_file($_FILES['file']["tmp_name"], $new_filename)):
                                            if (!file_exists($dir ."/forms/join/".$str_datetime.".txt")):
                                                try {
                                                    $text = "Prénom : ".$data['first_name']."\r\n";
                                                    $text .= "Nom : ".$data['last_name']."\r\n";
                                                    $text .= "Email : ".$data['email']."\r\n";
                                                    $text .= "Téléphone : ".$data['tel']."\r\n";
                                                    $text .= "Sujet : ".$data['object']."\r\n";
                                                    $text .= "Message : ".nl2br($data['message'])."\r\n";
                                                    $text .= "Fichier : ".$new_filename;

                                                    $new_file = fopen($dir ."/forms/join/".$str_datetime.".txt", "w");
                                                    fwrite($new_file, $text);
                                                    fclose($new_file);
                                                    $alert = [
                                                        'message' => "Votre candidature a été envoyée avec succès.",
                                                        'type' => 'success',
                                                    ];
                                                } catch (\Exception $e) {
                                                    $alert = [
                                                        'message' => $e->getMessage(),
                                                        'type' => 'warning',
                                                    ];
                                                }
                                            endif;
                                        else:
                                            $alert = [
                                                'message' => "Un problème est survenu lors de l'envoi du fichier.",
                                                'type' => "warning",
                                            ];
                                        endif;
                                    else:
                                        $alert = [
                                            'message' => "Le format du fichier n'est pas valide. Vous ne pouvez envoyer qu'une image ou un fichier au format PDF.",
                                            'type' => "warning",
                                        ];
                                    endif;
                                else:
                                    $alert = [
                                        'message' => "Le poids du fichier envoyé dépasse 1 Mo.",
                                        'type' => "warning",
                                    ];
                                endif;
                            else:
                                $alert = [
                                    'message' => "Un problème est survenu lors de l'exécution de la requête.",
                                    'type' => "warning",
                                ];
                            endif;
                        else:
                            $alert = [
                                'message' => "Le CV renseigné n'est pas valide.",
                                'type' => "warning",
                            ];
                        endif;
                    else:
                        $alert = [
                            'message' => "Le message renseigné n'est pas valide.",
                            'type' => "warning",
                        ];
                    endif;
                else:
                    $alert = [
                        'message' => "Le sujet renseigné n'est pas valide.",
                        'type' => "warning",
                    ];
                endif;
            else:
                $alert = [
                    'message' => "Le numéro de téléphone renseigné n'est pas valide.",
                    'type' => "warning",
                ];
            endif;
        else:
            $alert = [
                'message' => "L'adresse email renseignée n'est pas valide.",
                'type' => "warning",
            ];
        endif;
    else:
        $alert = [
            'message' => "Le nom renseigné n'est pas valide.",
            'type' => "warning",
        ];
    endif;
else:
    $alert = [
        'message' => "Le prénom renseigné n'est pas valide.",
        'type' => "warning",
    ];
endif;
?>
<!DOCTYPE HTML>
<html lang="fr">
<head>
    <?php
    $main_title = 'Rejoignez-nous';
    $main_nav_key = 'join-us';
    include_once('./includes/head.php');
    ?>
    <?php include_once('./includes/styles.php'); ?>
    <style>
        #join-us-background {
            position: absolute;
            top: 0;
            left: 0;
            bottom: auto;
            right: 0;
            height: 200px;
            background: url(./images/bands/join-us-mobile.png?v=<?php echo(date("Y-m-d-H-i-s", filemtime('./images/bands/join-us-mobile.png'))) ?>) no-repeat center center;
            background-size: cover;
            z-index: -1;
        }
        @media (min-width: 992px) {
            #join-us-background {
                height: 620px;
                background: url(./images/bands/join-us.png?v=<?php echo(date("Y-m-d-H-i-s", filemtime('./images/bands/join-us.png'))) ?>) no-repeat center center;
            }
        }
        #join-us-content {
            padding-top: 130px;
        }
        @media (min-width: 992px) {
            #join-us-content {
                padding-top: 365px;
            }
        }


        #job-ads-accordion {
            background-color: white;
            border-radius: 4px;
            border: 2px solid white;
            box-shadow: 7px 7px 20px rgba(0, 0, 0, 0.161);
        }
        #job-ads-accordion .accordion-button {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            background-color: #F5F5F5;
            border-color: white !important;
            box-shadow: none !important;
        }
        #job-ads-accordion .accordion-item:first-child .accordion-button {
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
        }
        #job-ads-accordion .accordion-item:last-child .accordion-button {
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
        }
        #job-ads-accordion .accordion-button::before {
            flex-shrink: 0;
            width: 1.25rem;
            height: 1.25rem;
            margin-right: 1rem;
            content: "";
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23C8C8C8'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-size: 1.25rem;
            transition: transform .2s ease-in-out;
        }
        #job-ads-accordion .accordion-button::after {
            content: none;
        }
        #job-ads-accordion .accordion-button:not(.collapsed) {
            color: currentColor;
        }
        #job-ads-accordion .accordion-button:not(.collapsed)::before {
            transform: rotate(180deg);
        }
        #job-ads-accordion .accordion-item:last-of-type .accordion-collapse {
            border: none;
        }

        #job-ads-accordion ul {
            margin-bottom: 0;
        }
    </style>
</head>

<body class="flex-column-nowrap" style="overflow: hidden;">
<?php include_once('./includes/header.php'); ?>
<main class="container-fluid flex-column-nowrap flex-adapt-height flex-scrollable p-0">

    <!-- OFFRES D'EMPLOI -->
    <?php

        $job_ads_list = [
            [
                'uniq_id' => '0001',
                'title' => "Technicien CVC",
                'description' => <<<"P_1"
    <b>Descriptif du poste :</b>
    <br>Vos missions seront les suivantes :
    <ul>
    <li>Travailler en binôme avec un chargé d'affaires en suivant les règles et méthodes établies en interne,</li>
    <li>Élaborer un avant-projet détaillé ainsi qu'un cahier des charges techniques,</li>
    <li>Élaborer des quantitatifs et/ou estimatifs,</li>
    <li>Réaliser des études techniques et de dimensionnement,</li>
    <li>Élaborer des plans et pièces graphiques,</li>
    <li>Analyser des offres entreprises.</li>
    </ul>
    <br><b>Profil recherché :</b>
    <br>De formation Bac +2 en génie climatique et/ou énergie et/ou domotique, vous possédez idéalement une première expérience au sein d'une société soit comme installateur.trice soit en bureau d'études dans le domaine de la construction.
    <br>
    <br><b>Savoirs et savoir-faire :</b>
    <ul>
    <li>Élaborer des solutions techniques et financières,</li>
    <li>Définir la faisabilité et la rentabilité d'un projet,</li>
    <li>Analyser les besoins du client,</li>
    <li>Analyser les données économiques du projet,</li>
    <li>Définir un avant-projet.</li>
    </ul>
    <br><b>Type de contrat :</b> CDI de 39 heures hebdomadaires.
    <br><b>Salaire :</b> suivant expérience.
    <br><b>Expérience exigée :</b> 3 ans. Cette expérience est indispensable.
    <br><b>Qualification :</b> Technicien.
P_1,
                'city' => "Agence de Lyon - Saint-Jean de Soudain (38)",
            ],
            [
                'uniq_id' => '0002',
                'title' => "Chargé d'affaires",
                'description' => <<<"P_2"
    <b>Descriptif du poste :</b>
    <br>Dans le cadre de son implantation en IDF, notre entreprise de 15/20 personnes recherche un/e chargé/e d'affaires pour suivre les opérations et la clientèle sur la région IDF. En lien avec les autres collaborateurs, thermiciens/techniciens/dessinateurs en CVC-PB et ELEC vous assurer le management et l'ingénierie CVC-PB des projets de construction ou rénovation sur des bâtiments d'habitations et tertiaires.
    <br>
    <br><b>Profil recherché :</b>
    <br>Vous disposez d'un BAC + 5 en génie climatique et environnement.
    <br>Une expérience d'un minimum de 3 ans est exigée comme technicien ou chargé d'étude, vous devez être autonome et prêt à relever les défis, doté d'une fibre commerciale et d'un solide bagage technique.
    <br>Le lieu d'implantation de l'agence sur PARIS sera défini conjointement avec le candidat retenu.
    <br>
    <br><b>L'Entreprise :</b>
    <br>Bureau d'études fluides, électricité, économie de la construction, implanté sur ARA / GRAND EST avec pour ambition de s'installer prochainement en IDF
    <br>Vous évoluez dans une équipe de 15/20 personnes dans laquelle la convivialité et le travail d'équipe sont des valeurs importantes.
    <br>
    <br><b>Type de contrat :</b> CDI.
    <br><b>Salaire :</b> suivant expérience.
    <br><b>Expérience exigée :</b> 2 ans. Cette expérience est indispensable.
    <br><b>Qualification :</b> Cadre.
P_2,
                'city' => "Paris",
            ],
            [
                'uniq_id' => '0003',
                'title' => "Technicien CVC",
                'description' => <<<"P_3"
    <b>Descriptif du poste :</b>
    <br>Dans le cadre de son développement IDF, notre entreprise de 15/20 personnes recherche un/e technicien d'études CVC-PLOMBERIE génie climatique. En lien avec les autres collaborateurs, thermiciens/chargé d'affaires/dessinateurs en CVC-PB et ELEC vous assurez une partie du dessin, les études de dimensionnement et la rédaction des CCTP et DPGF des lots CVC-PB des projets de construction ou rénovation sur des bâtiments d'habitations et tertiaires. Vous assurez également les interfaces en réunion chez les clients sur votre secteur géographique IDF.
    <br>
    <br><b>Type de contrat :</b> CDI de 39 heures hebdomadaires.
    <br><b>Salaire :</b> suivant expérience.
    <br><b>Expérience exigée :</b> 3 ans. Cette expérience est indispensable.
    <br><b>Qualification :</b> Technicien.
P_3,
                'city' => "Paris / Île-de-France",
            ],
        ];

        $job_ads_list = [];

        require 'vendor/autoload.php';

        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();

        // Accès base de donnée serveur plesk
        $host = $_ENV["DB_HOST"];
        $username = $_ENV["DB_USERNAME"];
        $password = $_ENV["DB_PASSWORD"];
        $db = $_ENV["DB_NAME"];

        // Récupère toutes les valeur du tableau poste de la base de donnée
        $n = 0;
        $conn = new mysqli($host,$username, $password,$db) ;
        if ($result = $conn -> query('SELECT * FROM poste;')) {
            while($row = $result->fetch_assoc()) {
                $job_ads_list[$n] = [
                    'uniq_id' => $row["poste_id"],
                    'title' => $row["titre"],
                    'description' => $row["descriptif_poste"],
                    'profil' => $row["profil_recherche"],
                    'contrat' => $row["type_contrat"],
                    'salaire' => $row["salaire"],
                    'experience' => $row["experience_exigee"],
                    'qualification' => $row["qualification"],
                    'city' => $row["city"],
                ];
                $n++;
            }
        }
    ?>
        <section id="job-ads" class="page-section pb-5">
        <div class="page-container">
            <div class="page-section-header text-center mb-50">
                <!--h1 class="ttitle th1 mb-80">Offres d'emploi</h1-->
                <h1 class="ttitle th1 mb-80">Postes à pourvoir</h1>
                <p>Nous sommes toujours en recherche d'opportunité de collaboration avec de nouvelles personnes souhaitant s'investir dans une entreprise respectueuse des valeurs humaines, morales et environnementales. Si vous souhaitez nous rejoindre envoyer nous votre CV via le formulaire, nous étudions toutes propositions.</p>
            </div>
            <!--<?php if(empty($job_ads_list)): ?>
                <p class="text-muted text-center">Aucun poste n'est disponible pour l'instant.</p>
            <?php endif; ?>-->
        </div>
        <?php if(!empty($job_ads_list)): ?>
            <div class="page-small-container">
                <div class="accordion accordion-flush" id="job-ads-accordion">
                    <?php foreach($job_ads_list as $item): ?>
                        <?php if(($item['title']) || ($item['city'])): ?>
                            <div class="accordion-item" data-ref="<?php echo($item['uniq_id']); ?>">
                            <h2 class="accordion-header" id="job-ad-heading-<?php echo($item['uniq_id']); ?>">
                                <button type="button" class="accordion-button collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#job-ad-collapse-<?php echo($item['uniq_id']); ?>"
                                        aria-expanded="false" aria-controls="job-ad-collapse-<?php echo($item['uniq_id']); ?>">
                                    <span class="job-ad-title" style="font-size: 1.125rem;""><?php echo($item['title']); ?></span>
                                    <div style="margin-left: auto; font-size: 1rem; text-align: right; color: #C8C8C8;">
                                        <span class="job-ad-address"><?php echo($item['city']); ?></span>
                                        <i class="fas fa-map-marker-alt" aria-hidden="true" style="margin-left: 0.5rem;"></i>
                                    </div>
                                </button>
                            </h2>
                            <div id="job-ad-collapse-<?php echo($item['uniq_id']); ?>" class="accordion-collapse collapse" aria-labelledby="job-ad-heading-<?php echo($item['uniq_id']); ?>" data-bs-parent="#job-ads-accordion">
                                <div class="accordion-body">
                                    <div class="mb-3" style="color: #7D7D7D; font-size: 1rem;">
                                        <?php if(!empty($item['description'])): ?>
                                            <b>Descriptif du poste :</b>
                                            <br><?php echo($item['description']); ?>
                                            <br>
                                        <?php endif; ?>
                                        <?php if(!empty($item['profil'])): ?>
                                            <br><b>Profil recherché :</b>
                                            <br><?php echo($item['profil']); ?>
                                            <br>
                                        <?php endif; ?>
                                        <?php
                                            // Accès base de donnée serveur plesk
                                            $host = $_ENV["DB_HOST"];
                                            $username = $_ENV["DB_USERNAME"];
                                            $password = $_ENV["DB_PASSWORD"];
                                            $db = $_ENV["DB_NAME"];

                                            $i = 0;

                                            $savoirs_list = [];

                                            // Récupère la liste des savoir faire
                                            $conn = new mysqli($host,$username, $password,$db) ;
                                            if ($result = $conn -> query('SELECT * FROM savoirs WHERE poste_id = "'.$item['uniq_id'].'"; ')) {
                                                while($row = $result->fetch_assoc()) {
                                                    $savoirs_list[$i] = $row["savoir_faire"];
                                                    $i++;
                                                }
                                            }
                                        ?>
                                        <?php if(!empty($savoirs_list)): ?>
                                            <br><b>Savoirs et savoir-faire :</b>
                                            <ul>
                                                <?php foreach($savoirs_list as $savoir_item): ?>
                                                    <li><?php echo($savoir_item); ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                        <?php if(!empty($item['contrat'])): ?>
                                            <br><b>Type de contrat :</b> <?php echo($item['contrat']); ?>
                                        <?php endif; ?>
                                        <?php if(!empty($item['salaire'])): ?>
                                            <br><b>Salaire :</b> <?php echo($item['salaire']); ?>
                                        <?php endif; ?>
                                        <?php if(!empty($item['experience'])): ?>
                                            <br><b>Expérience exigée :</b> <?php echo($item['experience']); ?>
                                        <?php endif; ?>
                                        <?php if(!empty($item['qualification'])): ?>
                                            <br><b>Qualification :</b> <?php echo($item['qualification']); ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="text-center">
                                        <a href="#join-us-form" class="candidate-prefill-form btn btn-primary tlink tsize-small text-uppercase text-white">Postuler</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </section>
    <!-- Rejoignez-nous -->
    <section id="join-us" class="page-section pt-5">
        <div id="join-us-title" class="page-container page-section-block text-center mb-50">
            <!--
            <h1 class="ttitle th1 mb-80">Rejoignez-nous</h1>
            <p>Vous souhaitez donner un nouvel élan à votre carrière et rejoindre une entreprise à taille humaine qui place l'esprit d'équipe et sans action face aux enjeux environnementaux au cœur de ses préoccupations ?
                <br><br>Consultez nos offres ou faites-nous parvenir une candidature spontanée.
            </p>
            -->
        </div>
            <div id="join-us-content" class="position-relative">
                <div id="join-us-background"></div>
                <div class="page-container">
                    <div class="page-form-card card bg-senary text-white">
                        <div class="card-body">
                            <form id="join-us-form" class="w-100" action="./controllers/join.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="submit" value="1">
                                <div class="row gx-3 gy-4 mb-60">
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" name="first_name" placeholder="Prénom*"
                                               aria-label="Votre prénom" required>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" name="last_name" placeholder="Nom*"
                                               aria-label="Votre nom" required>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="email" class="form-control" name="email" placeholder="Email*"
                                               aria-label="Votre email" required>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" name="tel" placeholder="Téléphone*"
                                               aria-label="Votre numéro de téléphone"
                                               pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" required>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="object" placeholder="Sujet*"
                                               aria-label="Sujet" required>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <label for="join-us-resume" class="input-group">
                                            <input type="text" class="form-control" placeholder="Ajouter votre CV*"
                                                   aria-label="Ajouter votre CV*" style="pointer-events: none; user-select: none;">
                                            <span class="input-group-text bg-primary text-white text-uppercase" style="pointer-events: none; user-select: none;">Parcourir…</span>
                                        </label>
                                        <input id="join-us-resume" class="d-none" type="file" name="file"
                                               accept="image/*,application/pdf"
                                               onchange="this.parentNode.querySelector('.input-group input').value = (this.files.length > 0 ? this.files[0].name : '');">
                                        <div class="form-text text-white tsize-small mt-2">Format image ou PDF acceptés. Poids maximum : 1&nbsp;Mo.</div>
                                    </div>
                                    <div class="col-12">
                                        <textarea id="join-us-message" class="form-control" name="message" placeholder="Votre message*" rows="6" required></textarea>
                                    </div>

                                    <div class="col-12">
                                        <div class="g-recaptcha" data-sitekey="6LdDKr8bAAAAAF58VKC5KKs_vBG-dntwz6yHV5GT"></div>
                                        <div class="form-text text-white tsize-small my-2"><sup>*</sup>Champs obligatoires</div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary tlink tsize-small text-uppercase">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <?php include_once('./includes/footer.php'); ?>
</main>
<?php include_once('./includes/modals.php'); ?>
<?php include_once('./includes/scripts.php'); ?>
<script>
    var $form = $('#join-us-form');

    if ($('.candidate-prefill-form').length > 0) {
        $('.candidate-prefill-form').on('click', function() {
            var $job_add_button = $(this);
            var $job_add_item = $job_add_button.parents('.accordion-item');
            var job_ad_title = $job_add_item.find('.job-ad-title').html();
            var job_ad_address = $job_add_item.find('.job-ad-address').html();
            var $object_field = $form.find('input[name="object"]');
            $object_field.val(`Candidature au poste de ${job_ad_title} [${job_ad_address}]`);
        });
    }

    $form.on('submit', function(event) {
        event.preventDefault();
        var method = $form.attr('method');
        var action = $form.attr('action');
        var form = $form.get(0);
        var form_data = new FormData(form);

        $.ajax({
            url: action,
            method: method,
            data: form_data,
            processData: false,
            contentType: false,
        }).done(function(response) {
            console.log(response);
            if (response !== null && typeof response === "object" && 'message' in response) {
                alert(response.message);
                if('type' in response && response.type === 'success') {
                    document.location.reload(true);
                }
            }
        }).fail(function (jqXHR, textStatus, errorThrown) {
            console.error(jqXHR, textStatus, errorThrown);
        });

    });
</script>
</body>
