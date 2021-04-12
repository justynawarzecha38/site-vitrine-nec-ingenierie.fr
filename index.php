<!DOCTYPE HTML>
<html lang="fr">
<head>
    <?php
        $main_title = 'Accueil';
        $main_nav_key = 'home';
        include_once('./includes/head.php');
    ?>
    <?php include_once('./includes/styles.php'); ?>
    <link rel="stylesheet" href="./styles/pages/home.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>

<body class="flex-column-nowrap" style="overflow: hidden;">
    <?php include_once('./includes/header.php'); ?>
    <main class="container-fluid flex-column-nowrap flex-adapt-height flex-scrollable p-0" style="overflow-x: hidden;">
        <?php include_once('./includes/aside.php'); ?>
        <?php
            /*$home_news = [
                [
                    'picture' => './images/originals/500_F_24220893_B8VqELkMRoi6k1fi18X9J0k41GaQ5YK6.jpg',
                    'title' => "Lancement Constéo",
                    'text' => "Ihicate landeliquas diae oditiis re num quodis et ut aborerum <b>acescid ut iuntist iberibus maio</b>. Uci ulpa quiaestium cusa…",
                    'href' => './article.php',
                ],
                [
                    'picture' => './images/originals/500_F_113420161_fKOMDPzVhn8cESPuN0KHa0myIef5x1QT.jpg',
                    'title' => "OPIQIBI NEC",
                    'text' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                    'href' => './article.php',
                ],
                [
                    'picture' => './images/originals/500_F_295355543_lZc2ueRdkMwUhUrXzVZ7oQGsz56mcXjE.jpg',
                    'title' => "Le protocole Promevent",
                    'text' => "La réglementation thermique impose la construction de bâtiments de plus en plus étanches à l’air, <b>il est donc…</b>",
                    'href' => './article.php',
                ],
            ];*/
            $home_news = [
                [
                    'uniq_id' => '0014',
                    'created_at' => '2020-04-22 12:47',
                    'picture' => './images/originals/500_F_24220893_B8VqELkMRoi6k1fi18X9J0k41GaQ5YK6.jpg',
                    'tags' => ['construction', 'Grenelle Environnement', 'logement', 'norme 2012', 'permis de construire', 'rt', 'rt2012', 'réglementation thermique', 'thermique'],
                    'title' => "Contrôle système de ventilation suivant le protocole PROMEVENT",
                    'intro' => "<p>La réglementation thermique impose la construction de bâtiments de plus en plus étanches à l’air, <strong>il est donc indispensable de s’assurer du bon fonctionnement des systèmes de ventilation pour garantir une bonne qualité d’air intérieur.</strong></p>",
                    'text' => "<p>Le contrôle du système de ventilation peut être réalisé en suivant le protocole PROMEVENT, il se décompose en plusieurs phases dont :</p>
<ul>
<li>Pré-Inscription</li>
<li>Vérifications fonctionnelles</li>
<li>Mesures fonctionnelles aux bouches</li>
<li>Mesure spécifique de perméabilité à l’air des réseaux</li>
</ul>
<p>Ces phases peuvent-être réalisées individuellement à la demande du Maître d’ouvrage.</p>
<p>Les Techniciens NRJ Diags sont tous formés à la réalisation de ce protocole. Pour les mesures de perméabilité à l’air des réseaux, ils sont également autorisés qualifiés 8721 par QUALIBAT</p>",
                    'href' => './article.php',
                ],
                [
                    'uniq_id' => '0013',
                    'created_at' => '2020-04-22 12:14',
                    'picture' => './images/originals/500_F_24220893_B8VqELkMRoi6k1fi18X9J0k41GaQ5YK6.jpg',
                    'tags' => ['construction', 'Grenelle Environnement', 'logement', 'norme 2012', 'permis de construire', 'rt', 'rt2012', 'réglementation thermique', 'thermique'],
                    'title' => "Contrôle conduit 3CEP",
                    'intro' => "<p>L’<a href=\"https://www.legifrance.gouv.fr/loda/id/JORFTEXT000036667631/\" target=\"_blank\" rel=\"noopener\">arrêté du 23 février 2018</a>&nbsp;relatif aux règles techniques et de sécurité applicables aux installations de gaz combustible des bâtiments d'habitation individuelle ou collective, y compris les parties communes&nbsp;<b>modifie les contrôles à effectuer sur les conduits 3CEp</b>.</p>",
                    'text' => "<p>En effet, depuis le 1er janvier 2020, chaque dépôt de permis de construire doit respecter cet arrêté et dans certains cas de figure, les bâtiments en cours de construction doivent également le respecter.</p>
<p>A noter, le document&nbsp;<a href=\"medias/solutions/cerfa_16026-01.pdf\">Cerfa n°16026*01</a>&nbsp;: Certificat de Conformité pour une installation Individuelle de Gaz – Modèle 2, a été mis à jour pour se mettre en conformité avec l’arrêté du 23 février 2018.<br>A présent,&nbsp;<b>si le bâtiment comporte un conduit 3CEp, alors, il doit être accompagné de la phase 1 et 2 du&nbsp;<a href=\"medias/solutions/Nouveau%20Protocole%20conduit%203CEp%20extrait%20EVAPDC%20sept%202019.pdf\">« Protocole de mise en service du 3CEp et d’installation et de mise en service des chaudières associées »</a></b>.</p>
<p>Vous trouverez ci-dessous les grandes lignes de chacune des phases :</p>
<ul>
<li>Phase 1 : Vérification du dimensionnement, de la mise en œuvre et de l’étanchéité du conduit 3CEp</li>
<li>Phase 2 : Montage, raccordement et contrôle des appareils installés sur le conduit 3CEp</li>
<li>Phase 3 : Mise en service et vérification du bon fonctionnement de l’installation complète</li>
</ul>
<p>NRJ DIAGS est donc en mesure de réaliser la phase 1 dudit protocole sur toute la France.</p>",
                    'href' => './article.php',
                ],
                [
                    'uniq_id' => '0012',
                    'created_at' => '2019-09-18 09:02',
                    'picture' => './images/originals/500_F_24220893_B8VqELkMRoi6k1fi18X9J0k41GaQ5YK6.jpg',
                    'tags' => ['construction', 'Grenelle Environnement', 'logement', 'norme 2012', 'permis de construire', 'rt', 'rt2012', 'réglementation thermique', 'thermique'],
                    'title' => "Air Sain",
                    'intro' => "<p>Comme l’a annoncé la loi ELAN, la qualité d’air intérieur des logements sera prise en compte dans les années à venir… <strong>mais pourquoi attendre pour respirer un air sain ?</strong></p>",
                    'text' => "<p>Nous passons 80% de notre temps dans des espaces clos, et la majorité de ce temps se passe dans votre maison. L’air que nous respirons à l’intérieur de notre logement est parfois plus pollué que l’air extérieur.</p>
<p>Air Sain est la mise en place de différentes étapes et moyens pour améliorer la bonne qualité d’air intérieur dans le logement.
Ces moyens permettent entre autres d’attester le bon fonctionnement du système de ventilation du logement, qui est une des causes principales de dégradation de la qualité d’air intérieur dans le logement.</p>
<p>Pour en savoir plus sur les démarches à adopoter&nbsp;<a href=\"http://www.airsain.fr/\">www.airsain.fr</a></p>",
                    'href' => './article.php',
                ],
            ];
        ?>
        <header id="home-header">
            <!-- Background image -->
            <div class="home-header-background"></div>
            <!-- Citation image -->
            <div class="home-header-quote-picture"></div>
            <!-- News -->
            <div id="home-header-news">
                <div style="display: flow-root;">
                    <div style="float: right;">
                        <!-- Slider main container -->
                        <div id="home-header-slider" class="swiper-container">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="home-header-news-card card">
                                        <div class="card-body" style="padding: 35px 35px 22px;">
                                            <div class="ttitle titalic text-primary tsize-xsmall">Dernière news</div>
                                            <h3 class="ttitle th4 text-truncate" style="margin-bottom: 30px;">Titre</h3>
                                            <p class="tsize-small line-clamp" data-limit="5" style="margin-bottom: 30px;">Ihicate landeliquas diae oditiis re num quodis et ut aborerum acescid ut iuntist iberibus maio. Uci ulpa quiaestium cusa nemquid quiatqu amuscim olorem dipsum rempore ptatatur, aliquatur, utem atur solor suntio imus molupti onsequat.</p>
                                            <a class="tlink tsize-small text-primary text-uppercase" href="./article.php">Lire l'article</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="home-header-news-card card">
                                        <div class="card-body" style="padding: 35px 35px 22px;">
                                            <div style="height: 18px;"></div>
                                            <h3 class="ttitle th4 text-truncate" style="margin-bottom: 30px;">Titre</h3>
                                            <p class="tsize-small line-clamp" data-limit="5" style="margin-bottom: 30px;">Ihicate landeliquas diae oditiis re num quodis et ut aborerum acescid ut iuntist iberibus maio. Uci ulpa quiaestium cusa nemquid quiatqu amuscim olorem dipsum rempore ptatatur, aliquatur, utem atur solor suntio imus molupti onsequat.</p>
                                            <a class="tlink tsize-small text-primary text-uppercase" href="./article.php">Lire l'article</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="home-header-news-card card">
                                        <div class="card-body" style="padding: 35px 35px 22px;">
                                            <div style="height: 18px;"></div>
                                            <h3 class="ttitle th4 text-truncate" style="margin-bottom: 30px;">Titre</h3>
                                            <p class="tsize-small line-clamp" data-limit="5" style="margin-bottom: 30px;">Ihicate landeliquas diae oditiis re num quodis et ut aborerum acescid ut iuntist iberibus maio. Uci ulpa quiaestium cusa nemquid quiatqu amuscim olorem dipsum rempore ptatatur, aliquatur, utem atur solor suntio imus molupti onsequat.</p>
                                            <a class="tlink tsize-small text-primary text-uppercase" href="./article.php">Lire l'article</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-button-prev"></div>
                            <div class="slider-button-next"></div>
                        </div>
                        <div class="text-center" style="margin-top: 20px;">
                            <a href="./news.php" class="tlink tsize-small tfont-black titalic" style="text-shadow: 0 0 2px white;">Toutes les news</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom band -->
            <div class="home-header-bottom page-container">
                <div class="home-header-bottom-card card flex-column align-items-center justify-content-center w-100 text-center bg-primary text-white">
                    <h1 class="home-header-bottom-title ttitle th4">NRJ Diags</h1>
                    <!--p class="home-header-bottom-text th5 text-uppercase">Bureau d'études techniques spécialisé dans le contrôle<br class="d-none d-md-block"> sur site des différentes réglementations thermiques</p-->
                    <p class="home-header-bottom-text th5 text-uppercase">Contrôleurs Techniques spécialisés dans le Contrôle de la RT2012 et <br class="d-none d-md-block">RE 2020 ainsi que dans les Inspections Certificats Economie Energie.</p>
                </div>
            </div>

        </header>

        <!-- QUI SOMMES-NOUS ? -->
        <?php
            $home_about_list = [
                [
                    'color' => 'var(--primary-color)',
                    'picture' => './images/pages/about/poles/qualite.svg',
                    'text' => "Certification \nPerméabilité à l'air - \nDémarche Qualité \nAnnexe VII",
                ],
                [
                    //'color' => 'var(--tertiary-color)',
                    'color' => 'var(--secondary-color)',
                    'picture' => './images/pages/about/intro/permeabilite.svg',
                    'text' => "Mesure de \nperméabilité \nà l'air du bâti \net réseaux VMC",
                ],
                [
                    //'color' => 'var(--quaternary-color)',
                    'color' => 'var(--tertiary-color)',
                    'picture' => './images/pages/about/intro/vmc.svg',
                    //'text' => "Mesure \nd'étanchéité \ndes réseaux \nde VMC",
                    'text' => "Vérification \nVentilation \nselon protocole \nPROMEVENT",
                ],
                [
                    //'color' => 'var(--quinary-color)',
                    'color' => 'var(--quaternary-color)',
                    'picture' => './images/pages/about/intro/dpe.svg',
                    'text' => "DPE",
                ],
                [
                    //'color' => 'var(--senary-color)',
                    'color' => 'var(--quinary-color)',
                    'picture' => './images/pages/about/intro/fin_chantier.svg',
                    //'text' => "Attestation \nthermique \nde fin \nde travaux",
                    'text' => "Attestation de \nprise en compte de \nla Réglementation \nthermique",
                ],
                [
                    'color' => 'var(--senary-color)',
                    'icon' => 'fab fa-searchengin',
                    'text' => "Inspections CEE",
                ],
            ];
        ?>
        <section id="home-about" class="page-section">
            <div class="page-container">
                <div class="page-section-header text-center">
                    <h2 class="ttitle th1">Qui sommes-nous ?</h2>
                </div>
                <div class="page-section-block text-center">
                    <!--p>Nous sommes spécialistes du contrôle et des mesures en fin de chantier qui attestent de la qualité de vos réalisations.
                        <br><b>Nous intervenons principalement autour des prestations :</b>
                    </p-->
                    <p>Nous sommes spécialisés dans le Contrôle de la RT2012 et RE 2020 ainsi que dans les Inspections Certificats Economie Energie.</p>
                </div>
                <div class="page-section-block">
                    <ul id="home-about-list" class="row list-unstyled justify-content-center gy-0 mb-0" style="--bs-gutter-x: 30px;">
                        <?php foreach($home_about_list as $item): ?>
                        <li class="col-12 col-md-6 col-xl-4" style="margin-bottom: 35px;">
                            <div class="card h-100 text-white text-center" style="background-color: <?php echo($item['color']); ?>;">
                                <div class="card-body">
                                    <div class="mb-4" style="height: 80px;">
                                        <?php if(isset($item['icon'])) { ?>
                                            <i class="<?php echo($item['icon']) ?>" aria-hidden="true" style="font-size: 80px;"></i>
                                        <?php } else { ?>
                                            <img class="img-contain" src="<?php echo($item['picture']); ?>">
                                        <?php } ?>
                                    </div>
                                    <h3 class="ttitle th5"><?php echo(nl2br($item['text'])); ?></h3>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="text-center">
                    <!--p class="page-section-block">Nos Techniciens sont qualifiés 8711 par Qualibat
                        <br>afin de réaliser les mesures de perméabilité à l’air et sont certifiés DPE par l’AFNOR.</p-->
                    <div class="page-section-block">
                        <p class="mb-3">Nos Techniciens sont :</p>
                        <ul class="text-start mb-0">
                            <li>Qualifiés 8711 et 8721 par Qualibat pour les mesures de Perméabilité à l'Air</li>
                            <li>Certifiés DPE par AFNOR pour les DPE et Attestations de prise en compte de la Réglementation Thermique</li>
                            <li>Formés aux Inspections CEE</li>
                        </ul>
                    </div>
                    <a href="./a-propos.php" class="btn btn-primary tlink tsize-small text-uppercase text-white">En savoir +</a>
                </div>
            </div>
        </section>
        <!-- NOS SOLUTIONS -->
        <?php
        $home_solutions_list = [
            [
                'background' => './images/pages/solutions/list/pack3.png',
                'color' => 'var(--senary-color)',
                'picture' => './images/pages/solutions/intro/pack3.png',
                'title' => "Pack 3",
                'text' => "Test de perméabilité à l’air, DPE et attestation de prise en compte de la réglementation Thermique à l’achèvement des travaux…",
                'href' => './nos-solutions.php#pack-3',
            ],
            [
                'background' => './images/pages/solutions/list/qualite.png',
                'color' => 'var(--tertiary-color)',
                'picture' => './images/pages/solutions/intro/qualite.svg',
                'title' => "Démarche qualité",
                'text' => "Si vous souhaitez réaliser des économies substantielles, vous pouvez vous engager dans un process de Certification de la Perméabilité à l’Air…",
                'href' => './nos-solutions.php#demarche-qualite',
            ],
            [
                'background' => './images/pages/solutions/list/pack2.png',
                'color' => 'var(--quinary-color)',
                'picture' => './images/pages/solutions/intro/pack2.png',
                'title' => "Pack 2",
                'text' => "DPE et attestation de prise en compte de la réglementation Thermique à l’achèvement des travaux…",
                'href' => './nos-solutions.php#pack-2',
            ],
            [
                'background' => './images/pages/solutions/list/co2.png',
                'color' => 'var(--quaternary-color)',
                'picture' => './images/pages/solutions/intro/co2.svg',
                'title' => "Contrôle sur conduit 3CEP",
                'text' => "L’arrêté du 23 février 2018 et applicable au 1er janvier 2020 relatif aux règles techniques et de sécurité…",
                'href' => './nos-solutions.php#3cep',
            ],
        ];
        ?>
        <section id="home-solutions" class="page-section">
            <div class="page-container">
                <div class="page-section-header text-center">
                    <h2 class="ttitle th1 text-center">Nos solutions</h2>
                </div>
                <div class="page-section-block">
                    <ul id="home-solutions-list" class="row g-0 list-unstyled">
                        <?php foreach($home_solutions_list as $item): ?>
                            <li class="home-solutions-item col-12 col-md-6" style="--rel-aspect-ratio: 540/525;">
                                <div class="home-solution">
                                    <div class="home-solution-picture-block" style="--aspect-ratio: 510/370;">
                                        <img class="home-solution-picture img-cover" src="<?php echo($item['background']); ?>">
                                        <div class="home-solution-picture-overlay"></div>
                                        <div class="home-solution-icons-wrapper">
                                            <div class="home-solution-icons-container">
                                                <img class="home-solution-icons-picture img-contain" src="<?php echo($item['picture']); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="home-solution-card card text-white" style="background-color: <?php echo($item['color']); ?>;">
                                        <div class="home-solution-card-body card-body">
                                            <h3 class="home-solution-card-title ttitle th2"><?php echo(nl2br($item['title'])); ?></h3>
                                            <p class="home-solution-card-text"><?php echo(nl2br($item['text'])); ?></p>
                                        </div>
                                        <div class="home-solution-card-footer card-footer">
                                            <a class="home-solution-card-footer-button text-white" href="<?php echo($item['href']); ?>">
                                                <i class="fas fa-plus" aria-hidden="true"></i>
                                                <span class="sr-only"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </section>
        <!-- NEWS -->
        <?php
        $home_news = array_merge($home_news, $home_news, $home_news);
        ?>
        <section id="home-news" class="page-section bg-gray">
            <div class="page-container">
                <div class="page-section-header text-center">
                    <h2 class="ttitle th1 text-center mb-3">News</h2>
                    <p>Suivez toute l'actualité de NRJ Diags.</p>
                </div>
                <div class="page-section-block">
                    <!-- Slider main container -->
                    <div id="home-news-slider" class="swiper-container overflow-visible overflow-lg-hidden">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <?php foreach($home_news as $item): ?>
                                <!-- Slides -->
                                <div class="swiper-slide my-3">
                                    <div class="card h-100">
                                        <div style="--aspect-ratio: 16/9;">
                                            <img class="card-img-top img-cover" src="<?php echo($item['picture']); ?>" alt="">
                                        </div>
                                        <div class="card-body flex-column-nowrap">
                                            <h3 class="ttitle th4 mb-3 text-truncate"><?php echo(nl2br($item['title'])); ?></h3>
                                            <div class="line-clamp mb-3 flex-adapt-height" data-limit="4"><?php echo(nl2br($item['text'])); ?></div>
                                            <a class="tlink tfont-bold text-uppercase text-primary" href="<?php echo(nl2br($item['href'])); ?>">Lire l'article</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="slider-button-prev d-none d-lg-block"></div>
                        <div class="slider-button-next d-none d-lg-block"></div>
                    </div>
                </div>

                <div class="text-center">
                    <a href="./news.php" class="btn btn-primary tlink text-uppercase text-white px-4">Toutes les news</a>
                </div>
            </div>

        </section>
        <!-- NOS PARTENAIRES -->
        <?php
            $home_partners = [
                ['img' => ['src' => './images/partner/2LGN.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/ab-maisons.jpg', 'alt' => ""], 'href' => ''],
                //['img' => ['src' => './images/partner/alliance-constructions.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/alpha-construction.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/aquitaine-habitat.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/artisans-du-languedoc.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/ast-groupe.png', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/atec.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/B2C-ingenierie.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/batim.png', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/batisseurs-bourguignons.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/batisseurs-d-ici.png', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/baty-bois.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/construction-zenith.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/couleur-villas.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/cta-construction.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/ed-construction.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/espace2lhabitat.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/flandres-batiment.png', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/groupe-mat.png', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/habitat-picard.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/hamster.png', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/harmony-home.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/la-maison-constructeur.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/lco-concept.png', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/le-pavillon-français.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/les maisons rennaises.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/les-bastides-du-midi.png', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/les-constructions-du-belon.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/les-maisons-by-chantal-b.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/les-maisons-clefs-d-or.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/les-maisons-françois-leon.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/logémaine.png', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/loonis.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/lugdunum-construction.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/maison-eureka.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/maisonneuve.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/maisons-axial.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/maisons-babeau-seguin.png', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/maisons-battais-constructeur.png', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/maisons-clair-logis.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/maisons-clair-logis.png', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/maisons-clairlande.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/maisons-concept.png', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/maisons-crisalis.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/maisons-d-en-france.jpg', 'alt' => ""], 'href' => 'https://maisonsdenfrance-bretagne.fr/'],
                ['img' => ['src' => './images/partner/maisons-domeo.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/maisons-florène.png', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/maisons-foyer-roannais.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/maisons-lca.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/maisons-marcou.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/maisons-optima.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/maisons-socopa.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/maisons-stephane-berger.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/maisons-sésame.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/maisons-villasclub.png', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/maisons-vivre-ici.png', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/maitriz-habitat.png', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/metre-carre.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/natilia.png', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/nexity.png', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/ovalie-construction.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/pavillons-cognaçais.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/pep-s.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/perspective.png', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/primo-habitat.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/sm-maison.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/so-9-habitat.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/trabeco.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/villas-et-maisons-de-france.jpg', 'alt' => ""], 'href' => ''],
                ['img' => ['src' => './images/partner/ya-k-construire.jpg', 'alt' => ""], 'href' => ''],
            ];
            $home_partners_list = array_chunk($home_partners, 12);
        ?>
        <section id="home-partners" class="page-section">
            <div class="page-container">
                <div class="page-section-header text-center">
                    <h2 class="ttitle th1 text-center">Nos partenaires</h2>
                </div>
                <div>
                    <!-- Slider main container -->
                    <div id="home-partners-slider" class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <?php foreach($home_partners_list as $chunk): ?>
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <ul class="home-partners-list row list-unstyled">
                                    <?php foreach($chunk as $item): ?>
                                        <li class="col-4 col-sm-4 col-md-3 col-lg-2 d-flex align-items-center justify-content-center mb-3 p-2" style="height: 5rem;">
                                            <img class="img-contain" src="<?php echo($item['img']['src']); ?>" alt="" style="filter: grayscale(1);">
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="slider-button-prev"></div>
                        <div class="slider-button-next"></div>
                    </div>
                </div>
            </div>
        </section>
        <?php include_once('./includes/footer.php'); ?>
    </main>
    <?php include_once('./includes/modals.php'); ?>
    <?php include_once('./includes/scripts.php'); ?>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const header_slider = new Swiper('#home-header-slider', {
            // Navigation arrows
            navigation: {
                nextEl: '.slider-button-next',
                prevEl: '.slider-button-prev',
            },
        });
        const partner_slider = new Swiper('#home-partners-slider', {
            // Navigation arrows
            navigation: {
                nextEl: '.slider-button-next',
                prevEl: '.slider-button-prev',
            },
        });
        const news_slider = new Swiper('#home-news-slider', {
            slidesPerView: 'auto',
            slidesPerGroup: 1,
            centeredSlides: true,
            centeredSlidesBounds: true,
            spaceBetween: 0,
            // Navigation arrows
            navigation: {
                nextEl: '.slider-button-next',
                prevEl: '.slider-button-prev',
            },
            breakpoints: {
                576: {
                    centeredSlides: false,
                    slidesPerView: 2,
                    slidesPerGroup: 2,
                },
                992: {
                    centeredSlides: false,
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                },
            }
        });
    </script>
</body>