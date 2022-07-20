<!DOCTYPE HTML>
<html lang="fr">
<head>
    <?php
        $main_title = 'À propos';
        $main_nav_key = 'about';
        include_once('./includes/head.php');
    ?>
    <?php include_once('./includes/styles.php'); ?>
    <link rel="stylesheet" href="./styles/pages/about.css?v=<?php echo(date("Y-m-d-H-i-s", filemtime('./styles/pages/about.css'))) ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/picturefill/3.0.3/picturefill.min.js" integrity="sha512-Nh/FthCqOFq56kGp1DsNb6GKK29iIv2ZJc7Fylln1WRrWpeE5LjSBWeAp61dkBASDxZT12aL9mZyIrhsAqgRpw==" crossorigin="anonymous"></script>
</head>

<body class="flex-column-nowrap" style="overflow: hidden;">
    <?php
        session_start();
        include_once('./includes/header.php'); ?>
    <main class="container-fluid flex-column-nowrap flex-adapt-height flex-scrollable p-0">
        
        <!-- QUI SOMMES-NOUS ? -->
        <?php
        $about_intro_list = [
            [
                'color' => '#8E1113',
                'picture' => './images/pages/about/intro/plan.svg',
                'text' => "Maîtrise d'œuvre fluides \nen tant que mandataire \nou co-traitant",
                'href' => './nos-solutions.php#ingenierie-fluide',
            ],
            [
                'color' => '#F29170',
                'picture' => './images/pages/about/intro/magnifying-glass-energy-performance-diagnostic.svg',
                'text' => "Audit energitique",
                'href' => './nos-solutions.php#audit-energetique',
            ],
            [
                'color' => '#E20714',
                'picture' => './images/pages/about/intro/energy-performance-diagnostic-environment.svg',
                'text' => "Études thermiques et environnementales",
                'href' => './nos-solutions.php#etude-thermique',
            ],
            [
                'color' => '#ED6939',
                'picture' => './images/pages/about/intro/pill-of-coins.svg',
                'text' => "Economie de la construction",
                'href' => './nos-solutions.php#economie-construction',
            ],
        ];
        ?>
        <section id="about-intro" class="page-section">
            <div class="page-container">
                <div class="page-section-header text-center">
                    <h2 class="ttitle th1">Qui sommes-nous ?</h2>
                </div>
                <div class="page-section-block text-center">
                    <p>Nous sommes basés à Lyon, Épinal et Paris, cela nous permet de rayonner sur la grande majorité du territoire
                        <br class="d-none d-md-block"><b>et de vous accompagner dans les missons&nbsp;:</b>
                    </p>
                </div>
                <div class="page-section-block">
                    <ul id="about-intro-list" class="row g-0 justify-content-center list-unstyled">
                        <?php foreach($about_intro_list as $item): ?>
                            <li class="col-12 col-md-6 col-xl-5">
                                <a href="<?php echo($item['href']); ?>">
                                    <div class="card h-100 text-white text-center" style="background-color: <?php echo($item['color']); ?>;">
                                        <div class="card-body">
                                            <div class="mb-4" style="height: 200px;">
                                                <?php if(isset($item['icon'])) { ?>
                                                    <i class="<?php echo($item['icon']) ?>" aria-hidden="true" style="font-size: 80px;"></i>
                                                <?php } else { ?>
                                                    <img class="img-contain" src="<?php echo($item['picture']); ?>?v=<?php echo(date("Y-m-d-H-i-s", filemtime($item['picture']))) ?>">
                                                <?php } ?>
                                            </div>
                                            <h3 class="ttitle th5"><?php echo(nl2br($item['text'])); ?></h3>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!--div class="text-center">
                    <div class="page-section-block">
                        <p class="mb-3">Nos Techniciens sont :</p>
                        <ul class="text-start mb-3">
                            <li>Qualifiés 8711 et 8721 par Qualibat pour les mesures de Perméabilité à l'Air</li>
                            <li>Certifiés AFNOR et VERITAS pour les DPE et Attestations de prise en compte de la Réglementation Thermique</li>
                            <li>Formés aux Inspections CEE</li>
                        </ul>
                        <p>Grâce à nos agences régionales, nos Techniciens peuvent intervenir sur tout le territoire national aussi bien pour des Constructions neuves : Maisons Individuelles, Logements Collectifs que pour des Rénovations : Inspections CEE.</p>
                    </div>
                </div-->
            </div>
        </section>
        <!-- HISTORIQUE -->
        <section id="about-timeline" class="page-section">
            <div class="page-container card" style="background-color: rgba(255, 255, 255, 0.85);">
                <div class="page-section-header text-center mt-page-section">
                    <h2 class="ttitle th1">Historique</h2>
                </div>
                <div class="page-section-block">
                    <div class="w-100 text-center">
                        <picture>
                            <source srcset="images/pages/about/timeline-2022-6.svg" media="(min-width: 992px)">
                            <img class="img-contain" src="./images/pages/about/timeline-mobile-2022.svg?v=<?php echo(date("Y-m-d-H-i-s", filemtime('./images/pages/about/timeline-mobile-2022.svg'))) ?>" alt="">
                        </picture>
                    </div>
                </div>
            </div>
        </section>
        <!-- NOTRE ÉQUIPE -->
        <!--section id="about-team" class="page-section">
            <div class="page-container">
                <div class="page-section-header text-center">
                    <h2 class="ttitle th1">Notre équipe</h2>
                </div>
                <div class="page-section-block mb-5">
                    <?php
                    $about_team_jobs_list = [
                        [
                            'size' => 1,
                            'name' => 'Directeur'
                        ],
                        [
                            'size' => 1,
                            'name' => 'Directeur Technique'
                        ],
                        [
                            'size' => 1,
                            'name' => 'Directrice Qualité et Administratif'
                        ],
                        [
                            'size' => 4,
                            'name' => "Responsables d'Agences"
                        ],
                        [
                            'size' => 8,
                            'name' => 'Assistantes'
                        ],
                        [
                            'size' => 2,
                            'name' => 'Animatrices Qualité'
                        ],
                        [
                            'size' => 28,
                            'name' => 'Techniciens'
                        ],
                    ];
                    $about_team_jobs_loop = 0;
                    ?>
                    <ul id="about-team-jobs-list" class="row list-unstyled justify-content-center">
                        <?php foreach($about_team_jobs_list as $item): ?>
                            <li class="<?php echo($about_team_jobs_loop === 0 ? 'col-12' : 'col-6'); ?> col-lg-3 text-center mb-3">
                                <div class="ttitle th2 text-primary"><?php echo($item['size']); ?></div>
                                <p><?php echo($item['name']); ?></p>
                            </li>
                            <?php $about_team_jobs_loop++; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php
            $about_poles_list = [
                [
                    'color' => 'var(--tertiary-color)',
                    'picture' => './images/pages/about/poles/schedule.svg',
                    'name' => "Administratif",
                    'description' => "Centralisé à Toulouse, ce pôle a pour mission de planifier les interventions des techniciens.\nTél : 09 72 599 799",
                ],
                [
                    'color' => 'var(--quaternary-color)',
                    'picture' => './images/pages/about/poles/qualite.svg',
                    'name' => "Qualité",
                    'description' => "Ce pôle a pour mission d’accompagner , animer les CMI qui souhaitent s’engager dans une Démarche Qualité Perméabilité à l’Air.",
                ],
                [
                    'color' => 'var(--quinary-color)',
                    'picture' => './images/pages/about/poles/suivi_chantier.svg',
                    'name' => "Technique",
                    'description' => "Répartis sur toute la France, les techniciens réalisent des contrôles de fin de chantier RT2012 (Pack 2 ou Pack 3).",
                ],
            ];
            ?>
            <div id="about-team-poles-title" class="page-container page-section-block text-center">
                <h3 class="ttitle th2">Notre activité s'articule autour de 3 pôles</h3>
            </div>
            <div class="about-team-poles position-relative">
                <div class="about-team-poles-content page-container text-center">
                    <div id="about-team-poles-background" style="/*--aspect-ratio: 1920/620;*/ "></div>
                    <ul id="about-team-poles-list" class="row g-0 list-unstyled justify-content-center">
                        <?php foreach($about_poles_list as $item): ?>
                            <li class="col-12 col-md-6 col-lg-4">
                                <div class="card h-100 text-white text-center" style="background-color: <?php echo($item['color']); ?>;">
                                    <div class="card-body">
                                        <div class="mb-35" style="height: 80px;">
                                            <img class="h-100 w-auto" src="<?php echo($item['picture']); ?>?v=<?php echo(date("Y-m-d-H-i-s", filemtime($item['picture']))) ?>">
                                        </div>
                                        <h3 class="ttitle th3 mb-35"><?php echo($item['name']); ?></h3>
                                        <p class="roboto-condensed"><?php echo(nl2br($item['description'])); ?></p>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </section-->
        <!-- Rejoignez-nous -->
        <section id="about-join-us" class="page-section">
            <div class="page-container">
                <div class="page-section-header text-center">
                    <h2 class="ttitle th1">Rejoignez-nous</h2>
                </div>
                <div class="page-section-block text-center">
                    <p>Vous souhaitez donner un nouvel élan à votre carrière et rejoindre une entreprise à taille humaine qui place l'esprit d'équipe au cœur de ses préoccupations ? Consultez nos offres ou faites nous parvenir une candidature spontanée.
                        <br>
                        <br>Dans la mesure du possible nous privilégions la mobilité interne. Cependant nous sommes en croissance constante et avons toujours besoin de nouveaux talents pour venir renforcer les équipes en place. À bientôt !
                        </b>
                    </p>
                </div>
                <div class="text-center">
                    <a href="./rejoignez-nous.php" class="btn btn-primary tlink text-uppercase text-white px-4">Consultez les annonces</a>
                </div>
            </div>
        </section>
        <?php include_once('./includes/footer.php'); ?>
    </main>
    <?php include_once('./includes/modals.php'); ?>
    <?php include_once('./includes/scripts.php'); ?>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper-container', {
            // Navigation arrows
            navigation: {
                nextEl: '.slider-button-next',
                prevEl: '.slider-button-prev',
            },
        });
    </script>
</body>
