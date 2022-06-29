<!DOCTYPE HTML>
<html lang="fr">
<head>
    <?php
        $main_title = 'Nos solutions';
        $main_nav_key = 'solutions';
        //$main_nav_key = 'solutions-1';
        include_once('./includes/head.php');
    ?>
    <?php include_once('./includes/styles.php'); ?>
    <link rel="stylesheet" href="./styles/pages/our-solutions.css?v=<?php echo(date("Y-m-d-H-i-s", filemtime('./styles/pages/our-solutions.css'))) ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
</head>

<body class="flex-column-nowrap" style="overflow: hidden;">
    <?php include_once('./includes/header.php'); ?>
    <main class="container-fluid flex-column-nowrap flex-adapt-height flex-scrollable p-0">
        
        <!-- PARCOURS CLIENT -->
        <!--section id="solutions-customer-journey" class="page-section">
            <div class="page-container flex-column-nowrap h-100">
                <div class="page-section-header text-center">
                    <h1 class="ttitle th1 text-center mb-3">Parcours client</h1>
                    <p class="tsize-small">Avec nos partenaires nous vous accompagnons pendant toutes les phases de vos chantiers.<br>Nous pouvons ainsi vous proposer des solutions de la phase conception à la réalisation.
                    </p>
                </div>
                <div class="text-center flex-adapt-height">
                    <a href="./images/pages/solutions/customer-journey.jpg" class="glightbox" data-zoomable="true" data-draggable="false">
                        <picture>
                            <source srcset="./images/pages/solutions/customer-journey.png" media="(min-width: 992px)">
                            <img class="img-contain" src="./images/pages/solutions/customer-journey-mobile.png?v=<?php echo(date("Y-m-d-H-i-s", filemtime('./images/pages/solutions/customer-journey-mobile.png'))) ?>" alt="">
                        </picture>
                    </a>

                </div>
            </div>
        </section-->
        <!-- NOS SOLUTIONS -->
        <?php
        $solutions_list = [
            'ingenierie-fluide' => [
                'anchor' => 'ingenierie-fluide',
                'background' => './images/pages/solutions/list/ingenierie-fluide.png',
                'color' => '#8E1113',
                'picture' => './images/pages/about/intro/plan.svg',
                'title' => "Ingénierie fluides",
                'content' => [
                    [
                        'title' => "Avant-projet définitif",
                        'text' => <<<"IF_1"
<ul class="my-0"><!--
--><li>Vérification des plans et des besoins d'adaptations liés à l'implantation et à la circulation des équipements techniques</li><!--
--><li>Bilan de puissance électrique et prédimensionnement des bassins de rétention d'eaux pluviales</li><!--
--></ul>
IF_1,
                    ],
                    [
                        'title' => "DCE",
                        'text' => <<<"IF_2"
<ul class="my-0"><!--
--><li>Elaborer les CCTP</li><!--
--><li>Elaborer des plans de consultations ainsi que les plans de vente techniques</li><!--
--><li>Réaliser le cadre de décomposition du prix global et forfaitaire (CDPGF)</li><!--
--><li>Définir les quantités de chacun des matériaux</li><!--
--><li>Estimatif financier définitif du projet en fonction des quantités réelles et des choix techniques définitifs avant consultation des entreprises</li><!--
--></ul>
IF_2,
                    ],
                    [
                        'title' => "Phase travaux pour les lots techniques",
                        'text' => <<<"IF_4"
<ul class="my-0"><!--
--><li>Mise à jour des plans de vente pour intégration des TMA client</li><!--
--><li>Elaborer le VISA des éléments d'exécution des entreprises</li><!--
--><li>Accompagnement MOA et MOEx au suivi des travaux sur les lots techniques</li><!--
--><li>Accompagnement à la réception des ouvrages et levés de réserves</li></ul>
IF_4,
                    ],
                    [
                        'title' => "Appel d'offres",
                        'text' => <<<"IF_3"
<ul class="my-0"><!--
--><li>Analyser les réponses aux appels d'offres</li><!--
--><li>Proposer la réponse la plus cohérente au maître d'ouvrage</li><!--
--><li>Mettre à jour les pièces marchés conformément à la validation des appels d'offres</li><!--
--></ul>
IF_3,
                    ],
                ],
                'picture-aspect-ratio-at-breakpoint' => '610/370',
                'icon-aspect-ratio-at-breakpoint' => '610/370',
            ],
            'economie-construction' => [
                'anchor' => 'economie-construction',
                'background' => './images/pages/solutions/list/economie-construction.png',
                'color' => '#ED6939',
                'picture' => './images/pages/about/intro/pill-of-coins.svg',
                'title' => "Économie de \nla construction",
                'content' => [
                    [
                        'title' => "Avant-projet",
                        'text' => "Estimatif financier sommaire du projet en fonction des surfaces et principales orientations techniques"
                    ],
                    [
                        'title' => "DCE",
                        'text' => <<<"EC_2"
<ul class="my-0"><!--
--><li>Elaborer les CCTP et CCAP<!--
--><ul class="my-0"><!--
--><li>Light – sans les mentions des DTU en version DQE</li><!--
--><li>Classique – intégration des DTU et des normes</li><!--
--></ul>
</li><!--
--><li>Réaliser le cadre de décomposition du prix global et forfaitaire (CDPGF)</li><!--
--><li>Définir les quantités de chacun des matériaux</li><!--
--><li>Estimatif financier définitif du projet en fonction des quantités réelles et des choix techniques définitifs avant consultation des entreprises</li><!--
--></ul>
EC_2,
                    ],
                    [
                        'title' => "Appel d'offres",
                        'text' => <<<"EC_3"
<ul class="my-0"><!--
--><li>Envoyer les appels d'offres aux entreprises</li><!--
--><li>Analyser les réponses aux appels d'offres</li><!--
--><li>Proposer la réponse la plus cohérente au maître d'ouvrage</li><!--
--><li>Mettre à jour les pièces marchés conformément à la validation des appels d'offres</li><!--
--></ul>
EC_3,
                    ],
                ],
                'picture-aspect-ratio-at-breakpoint' => '610/370',
                'icon-aspect-ratio-at-breakpoint' => '610/370',
            ],
            'audit-energetique' => [
                'anchor' => 'audit-energetique',
                'background' => './images/pages/solutions/list/audit-energetique-2.jpeg',
                'color' => 'var(--tertiary-color)',
                'picture' => './images/pages/about/intro/magnifying-glass-energy-performance-diagnostic.svg',
                'title' => "Audit énergétique et conseille en maîtrise de l'énergie",
                'content' => [
                    [
                        'title' => "Assistance énergétique",
                        'text' => <<<"AE_1"
<ul class="my-0"><!--
--><li>Saisie, assistance et conseil sur la gestion de la plateforme OPERAT</li><!--
--><li>Saisie initiale de l’année de référence</li><!--
--><li>Récupération annuelle des données de consommations d’énergie</li><!--
--><li>Génération et fourniture de l’attestation ECO ENERGIE TERTIAIRE</li><!--
--><li>Analyse des éventuelles dérives constatées pouvant donner lieu à une visite sur site et à un rapport écrit.</li><!--
--></ul>
AE_1,
                    ],
                    [
                        'title' => "Audit",
                        'text' => <<<"AE_2"
<ul class="my-0"><!--
--><li>Approche théorique via un logiciel de calcul dynamique permettant d’évaluer l’impact des mesures visant à réduire les consommations d’énergie sur les postes d’équipements CVC (relatifs à l’ambiance thermique générale et à la ventilation des locaux), les consommations d’eau chaude sanitaire et les équipements électriques tels que l’éclairage et les AUE.</li><!--
--><li>Approche financière des coûts travaux</li><!--
--><li>Approche des temps de retour sur investissement</li><!--
--><li>Évaluation des éventuelles aides auxquelles peut être éligible le bâtiment en question</li><!--
--></ul>
AE_2,
                    ],
                ],
                'picture-aspect-ratio-at-breakpoint' => '820/370',
                'icon-aspect-ratio-at-breakpoint' => '610/370',
            ],
            'etude-thermique' => [
                'anchor' => 'etude-thermique',
                'background' => './images/pages/solutions/list/etude-thermique.jpeg',
                'color' => '#E20714',
                'picture' => './images/pages/about/intro/energy-performance-diagnostic-environment.svg',
                'title' => "Etudes thermiques et environnementales",
                'content' => [
                    [
                        'title' => "Types de Bâtiments ",
                        'text' => <<<"ET_1"
<ul class="my-0"><!--
--><li>Maison individuelle (architect, maître d'oeuvre, constructeur de maisons individuelle)</li><!--
--><li>Logement collectif (logements sociaux et promotion privée)</li><!--
--><li>Batiment Tertiaire (Bureau, enseignement, activité médico social)</li><!--
--><li>Résidences services (Etudiants, ségnars, tourisme)</li><!--
--></ul>
ET_1,
                    ],
                    [
                        'title' => "Principaux Services",
                        'text' => <<<"ET_2"
<ul class="my-0"><!--
--><li>Etude Thermique</li><!--
--><li>Etude ACV</li><!--
--><li>Calcul des déperditions</li><!--
--><li>Optimisation et conseils</li><!--
--><li>Labels (E+C- / NF / Batiment durable...)</li><!--
--></ul>
ET_2,
                    ],
                    [
                        'title' => "Réglementation",
                        'text' => <<<"ET_3"
<ul class="my-0"><!--
--><li>RT-Existant</li><!--
--><li>RT 2012</li><!--
--><li>RE 2020</li><!--
--><li>Pré-étude thermique</li><!--
--><li>Faisabilité ACV</li><!--
--><li>Éco Énergie Tertiaire</li><!--
--></ul>
ET_3,
                    ],
                    [
                        'title' => "Formation",
                        'text' => <<<"ET_4"
<ul class="my-0"><!--
--><li>Constructeur</li><!--
--><li>Promoteur</li><!--
--><li>Bailleur</li><!--
--><li>Industriels</li><!--
--><li>Partenaires</li><!--
--></ul>
ET_4,
                    ],
                ],
                'picture-aspect-ratio-at-breakpoint' => '610/340',
                'icon-aspect-ratio-at-breakpoint' => '610/370',
            ]
        ];
        ?>
        <section id="solutions-intro" class="page-section">
            <div class="page-container">
                <div class="page-section-header text-center">
                    <h1 class="ttitle th1 text-center">Nos solutions</h1>
                </div>
                <div class="page-section-block" id="<?php echo($solutions_list['ingenierie-fluide']['anchor']); ?>">
                    <ul class="solutions-list m-0 list-unstyled">
                        <li>
                            <div class="picture"<?php echo(isset($solutions_list['ingenierie-fluide']['picture-aspect-ratio-at-breakpoint']) ? ' style="--md-aspect-ratio: '.$solutions_list['ingenierie-fluide']['picture-aspect-ratio-at-breakpoint'].';"' : ''); ?>>
                                <img class="img-cover" src="<?php echo($solutions_list['ingenierie-fluide']['background']); ?>">
                            </div>
                            <div class="icon-container"<?php echo(isset($solutions_list['ingenierie-fluide']['icon-aspect-ratio-at-breakpoint']) ? ' style="--aspect-ratio: '.$solutions_list['ingenierie-fluide']['icon-aspect-ratio-at-breakpoint'].';"' : ''); ?>>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img class="img-contain" src="<?php echo($solutions_list['ingenierie-fluide']['picture']); ?>">
                                </div>
                            </div>
                            <div class="solution-header">
                                <div class="solution-header-block card" style="background-color: <?php echo($solutions_list['ingenierie-fluide']['color']); ?>; color: white;">
                                    <div class="card-body" style="padding: 65px 45px;">
                                        <h3 class="ttitle th2 text-center" style="color: <?php echo($item['color']); ?>;"><?php echo(nl2br($solutions_list['ingenierie-fluide']['title'])); ?></h3>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php foreach($solutions_list['ingenierie-fluide']['content'] as $content): ?>
                            <li>
                                <div class="solution-content-card card flex-adapt-height">
                                    <div class="card-body" style="padding: 50px 35px;">
                                        <h4 class="ttitle th4 mb-35 text-primary"><?php echo(nl2br($content['title'])); ?></h4>
                                        <div class="solution-content" style="font-size: 1rem;">
                                            <?php echo($content['text']); ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="page-section-block" id="<?php echo($solutions_list['economie-construction']['anchor']); ?>">
                    <ul class="solutions-list m-0 list-unstyled">
                        <li>
                            <div class="picture"<?php echo(isset($solutions_list['economie-construction']['picture-aspect-ratio-at-breakpoint']) ? ' style="--md-aspect-ratio: '.$solutions_list['economie-construction']['picture-aspect-ratio-at-breakpoint'].';"' : ''); ?>>
                                <img class="img-cover" src="<?php echo($solutions_list['economie-construction']['background']); ?>">
                            </div>
                            <div class="icon-container"<?php echo(isset($solutions_list['economie-construction']['icon-aspect-ratio-at-breakpoint']) ? ' style="--aspect-ratio: '.$solutions_list['economie-construction']['icon-aspect-ratio-at-breakpoint'].';"' : ''); ?>>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img class="img-contain" src="<?php echo($solutions_list['economie-construction']['picture']); ?>">
                                </div>
                            </div>
                            <div class="solution-header">
                                <div class="solution-header-block card" style="background-color: <?php echo($solutions_list['economie-construction']['color']); ?>; color: white;">
                                    <div class="card-body" style="padding: 65px 45px;">
                                        <h3 class="ttitle th2 text-center" style="color: <?php echo($item['color']); ?>;"><?php echo(nl2br($solutions_list['economie-construction']['title'])); ?></h3>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php foreach($solutions_list['economie-construction']['content'] as $content): ?>
                            <li>
                                <div class="solution-content-card card flex-adapt-height">
                                    <div class="card-body" style="padding: 50px 35px;">
                                        <h4 class="ttitle th4 mb-35 text-primary"><?php echo(nl2br($content['title'])); ?></h4>
                                        <div class="solution-content" style="font-size: 1rem;">
                                            <?php echo($content['text']); ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="page-section-block" id="<?php echo($solutions_list['audit-energetique']['anchor']); ?>">
                    <ul class="solutions-list m-0 list-unstyled">
                        <li>
                            <div class="picture"<?php echo(isset($solutions_list['audit-energetique']['picture-aspect-ratio-at-breakpoint']) ? ' style="--md-aspect-ratio: '.$solutions_list['audit-energetique']['picture-aspect-ratio-at-breakpoint'].';"' : ''); ?>>
                                <img class="img-cover" src="<?php echo($solutions_list['audit-energetique']['background']); ?>">
                            </div>
                            <div class="icon-container"<?php echo(isset($solutions_list['audit-energetique']['icon-aspect-ratio-at-breakpoint']) ? ' style="--aspect-ratio: '.$solutions_list['audit-energetique']['icon-aspect-ratio-at-breakpoint'].';"' : ''); ?>>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img class="img-contain" src="<?php echo($solutions_list['audit-energetique']['picture']); ?>">
                                </div>
                            </div>
                            <div class="solution-header">
                                <div class="solution-header-block card" style="background-color: <?php echo($solutions_list['audit-energetique']['color']); ?>; color: white;">
                                    <div class="card-body" style="padding: 65px 45px;">
                                        <h3 class="ttitle th2 text-center" style="color: <?php echo($item['color']); ?>;"><?php echo(nl2br($solutions_list['audit-energetique']['title'])); ?></h3>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php foreach($solutions_list['audit-energetique']['content'] as $content): ?>
                            <li>
                                <div class="solution-content-card card flex-adapt-height">
                                    <div class="card-body" style="padding: 50px 35px;">
                                        <h1 class="ttitle th5 mb-35 text-primary"><?php echo(nl2br($content['title'])); ?></h1>
                                        <div class="solution-content" style="font-size: 1rem;">
                                            <?php echo($content['text']); ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="page-section-block" id="<?php echo($solutions_list['etude-thermique']['anchor']); ?>">
                    <ul class="solutions-list m-0 list-unstyled">
                        <li>
                            <div class="picture"<?php echo(isset($solutions_list['etude-thermique']['picture-aspect-ratio-at-breakpoint']) ? ' style="--md-aspect-ratio: '.$solutions_list['etude-thermique']['picture-aspect-ratio-at-breakpoint'].';"' : ''); ?>>
                                <img class="img-cover" src="<?php echo($solutions_list['etude-thermique']['background']); ?>">
                            </div>
                            <div class="icon-container"<?php echo(isset($solutions_list['etude-thermique']['icon-aspect-ratio-at-breakpoint']) ? ' style="--aspect-ratio: '.$solutions_list['etude-thermique']['icon-aspect-ratio-at-breakpoint'].';"' : ''); ?>>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img class="img-contain" src="<?php echo($solutions_list['etude-thermique']['picture']); ?>">
                                </div>
                            </div>
                            <div class="solution-header">
                                <div class="solution-header-block card" style="background-color: <?php echo($solutions_list['etude-thermique']['color']); ?>; color: white;">
                                    <div class="card-body" style="padding: 65px 45px;">
                                        <h3 class="ttitle th2 text-center" style="color: <?php echo($item['color']); ?>;"><?php echo(nl2br($solutions_list['etude-thermique']['title'])); ?></h3>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php foreach($solutions_list['etude-thermique']['content'] as $content): ?>
                            <li>
                                <div class="solution-content-card card flex-adapt-height">
                                    <div class="card-body" style="padding: 50px 35px;">
                                        <h4 class="ttitle th4 mb-35 text-primary"><?php echo(nl2br($content['title'])); ?></h4>
                                        <div class="solution-content" style="font-size: 1rem;">
                                            <?php echo($content['text']); ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </section>
        <?php include_once('./includes/footer.php'); ?>
    </main>
    <?php include_once('./includes/modals.php'); ?>
    <?php include_once('./includes/scripts.php'); ?>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script>
        const lightbox = GLightbox({
            touchNavigation: true,
        });
    </script>
</body>