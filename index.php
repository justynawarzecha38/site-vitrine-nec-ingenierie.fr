<!DOCTYPE HTML>
<html lang="fr">
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

<body class="flex-column-nowrap" style="overflow: hidden;" onload="teste()">
    <?php
        session_start();
        include_once('./includes/header.php'); ?>
    <main class="container-fluid flex-column-nowrap flex-adapt-height flex-scrollable p-0" style="overflow-x: hidden;">

        <?php
            /*$home_news = [
                [
                    'uniq_id' => '0014',
                    'created_at' => '2020-04-22 12:47',
                    //'picture' => './images/originals/old/500_F_24220893_B8VqELkMRoi6k1fi18X9J0k41GaQ5YK6.jpg',
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
<p>Les tests Techniciens NRJ Diags sont tous formés à la réalisation de ce protocole. Pour les mesures de perméabilité à l’air des réseaux, ils sont également autorisés qualifiés 8721 par QUALIBAT</p>",
                    'href' => './article.php',
                ],
            ];*/
            $home_news = [];
        ?>
        <header id="home-header">
            <!-- Background image -->
            <div class="home-header-background"></div>
            <!-- Citation image -->
            <div class="home-header-quote-picture"></div>
            <!-- News -->
            <div id="home-header-news"<?php echo(empty($home_news) ? 'style="opacity: 0; visibility: hidden;"' : ''); ?>>
                <div style="display: flow-root;">
                    <div style="float: right;">
                        <!-- Slider main container -->
                        <div id="home-header-slider" class="swiper-container">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <?php if(empty($home_news)): ?>
                                    <div class="swiper-slide">
                                        <div class="home-header-news-card card">
                                            <div class="card-body" style="padding: 35px 35px 22px;">
                                                <div class="ttitle titalic text-primary tsize-xsmall">Dernière news</div>
                                                <h3 class="ttitle th4 text-truncate" style="margin-bottom: 30px;">Titre</h3>
                                                <div class="tsize-small line-clamp" data-limit="5" style="margin-bottom: 30px;">Intro</div>
                                                <a class="tlink tsize-small text-primary text-uppercase" href="#!">Lire l'article</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <?php foreach($home_news as $item): ?>
                                    <div class="swiper-slide">
                                        <div class="home-header-news-card card">
                                            <div class="card-body" style="padding: 35px 35px 22px;">
                                                <div class="ttitle titalic text-primary tsize-xsmall">Dernière news</div>
                                                <h3 class="ttitle th4 text-truncate" style="margin-bottom: 30px;"><?php echo(nl2br($item['title'])); ?></h3>
                                                <div class="tsize-small line-clamp" data-limit="5" style="margin-bottom: 30px;"><?php echo(nl2br($item['intro'])); ?></div>
                                                <a class="tlink tsize-small text-primary text-uppercase" href="./article.php?id=<?php echo($item['uniq_id']); ?>">Lire l'article</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <div class="slider-button-prev"></div>
                            <div class="slider-button-next"></div>
                        </div>
                        <?php if(empty($home_news)): ?>
                            <div class="text-center" style="margin-top: 20px;">
                                <a href="#!" class="tlink tsize-small tfont-black titalic" style="text-shadow: 0 0 2px white;">Toutes les news</a>
                            </div>
                        <?php else: ?>
                        <div class="text-center" style="margin-top: 20px;">
                            <a href="./news.php" class="tlink tsize-small tfont-black titalic" style="text-shadow: 0 0 2px white;">Toutes les news</a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- Bottom band -->
            <center>
                <div class="home-header-bottom page-container m-3">
                    <div class="home-header-bottom-card card flex-column align-items-center justify-content-center w-100 text-center text-white" style="background-color: #8E1113">
                        <h1 class="home-header-bottom-title ttitle th4">NEW Énergie Concept</h1>
                        <!--p class="home-header-bottom-text th5 text-uppercase">Bureau d'études techniques spécialisé dans le contrôle<br class="d-none d-md-block"> sur site des différentes réglementations thermiques</p-->
                        <p class="home-header-bottom-text th5 text-uppercase">Bureau d'études techniques spécialiste en Ingénierie Fluides</p>
                        <p class="home-header-bottom-text th5 text-uppercase">Audit énergétique</p>
                    </div>
                </div>
                <div class="home-header-bottom page-container m-3">
                    <div class="home-header-bottom-card card flex-column align-items-center justify-content-center w-100 text-center text-white" style="background-color: #E20714">
                        <h1 class="home-header-bottom-title ttitle th4">NEW Énergie Carbone</h1>
                        <!--p class="home-header-bottom-text th5 text-uppercase">Bureau d'études techniques spécialisé dans le contrôle<br class="d-none d-md-block"> sur site des différentes réglementations thermiques</p-->
                        <p class="home-header-bottom-text th5 text-uppercase">Bureau d'études thermiques et environnementales, spécialiste de la RE2020</p>
                        <br>
                        <div class="col-12 col-sm-2 col-md-2 mt-4 mb-0" style="position: relative; left: 40%; bottom: 40%">
                            <img src="./images/logos/RE2020.png?v=<?php echo(date("Y-m-d-H-i-s", filemtime('./images/logos/RE2020.png'))) ?>" class="home-header-bottom-img rounded float-left img-contain h-100" alt="Responsive image">
                        </div>
                    </div>
                </div>
                <div class="home-header-bottom page-container m-3">
                    <div class="home-header-bottom-card card flex-column align-items-center justify-content-center w-100 text-center text-white" style="background-color: #ED6939">
                        <h1 class="home-header-bottom-title ttitle th4">NEW Économies de la Construction</h1>
                        <!--p class="home-header-bottom-text th5 text-uppercase">Bureau d'études techniques spécialisé dans le contrôle<br class="d-none d-md-block"> sur site des différentes réglementations thermiques</p-->
                        <p class="home-header-bottom-text th5 text-uppercase">Bureau d'économie de la construction "Tout corps d'Etat"</p>
                    </div>
                </div>
            </center>
        </header>

        <!-- QUI SOMMES-NOUS ? -->
        <?php
            $home_about_list = [
                [
                    'color' => '#8E1113',
                    'picture' => './images/pages/about/intro/plan.svg',
                    'text' => "Ingénierie fluides",
                    'href' => './nos-solutions.php#ingenierie-fluide',
                ],
                [
                    'color' => '#F29170',
                    'picture' => './images/pages/about/intro/magnifying-glass-energy-performance-diagnostic.svg',
                    'text' => "Audits energitiques",
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
        <section id="home-about" class="page-section">
            <div class="page-container">
                <div class="page-section-header text-center">
                    <h2 class="ttitle th1">Qui sommes-nous ?</h2>
                    <br>
                    <img class="mx-auto d-block w-50 rounded" src="./images/france/carte_france_NEC.svg?v=<?php echo(date("Y-m-d-H-i-s", filemtime('./images/france/carte_france_NEC.svg'))) ?>" alt="Responsive image">
                </div>
                <div class="page-section-block text-center">
                    <p>Nous sommes basés à Lyon, Épinal et Paris, cela nous permet de rayonner sur la grande majorité du territoire
                        <br class="d-none d-md-block"><b>et de vous accompagner dans les missons&nbsp;:</b>
                    </p>
                </div>
                <div class="page-section-block">
                    <ul id="home-about-list" class="row list-unstyled justify-content-center gy-0 mb-0" style="--bs-gutter-x: 30px;">
                        <?php foreach($home_about_list as $item): ?>
                        <li class="col-12 col-md-6 col-xl-5" style="margin-bottom: 35px;">
                            <a href="<?php echo($item['href']); ?>">
                                <div class="card h-100 w-100 text-white text-center" style="background-color: <?php echo($item['color']); ?>;">
                                    <div class="card-body">
                                        <div class="mb-4" style="height: 200px;">
                                            <?php if(isset($item['icon'])) { ?>
                                                <i class="<?php echo($item['icon']) ?>" aria-hidden="true" style="font-size: 90px;"></i>
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
                <div class="text-center">
                    <a href="./a-propos.php" class="btn btn-primary tlink tsize-small text-uppercase text-white">En savoir +</a>
                </div>
            </div>
        </section>
        <!-- NOS SOLUTIONS -->
        <?php
        $home_solutions_list = [
            [
                'background' => './images/pages/solutions/list/ingenierie-fluide.png',
                'color' => '#8E1113',
                'picture' => './images/pages/about/intro/plan.svg',
                'title' => "Ingénierie Fluides",
                'text' => "Vérification des plans et des besoins d'adaptation liés à l'implantation et à la circulation des équipements techniques…",
                'href' => './nos-solutions.php#ingenierie-fluide',
            ],
            [
                'background' => './images/pages/solutions/list/economie-construction.png',
                'color' => '#ED6939',
                'picture' => './images/pages/about/intro/pill-of-coins.svg',
                'title' => "Économie de la Construction",
                'text' => "Estimatif financier sommaire du projet en fonction des surfaces et principales orientations techniques…",
                'href' => './nos-solutions.php#economie-construction',
            ],
            [
                'background' => './images/pages/solutions/list/audit-energetique-2.png',
                'color' => '#F29170',
                'picture' => './images/pages/about/intro/magnifying-glass-energy-performance-diagnostic.svg',
                'title' => "Audit énergétique",
                'text' => "Audit et assistance sur la gestion de la plateforme OPERAT de l'ADEME pour la gestion du dispositif ECO ENERGIE TERTIAIRE.\n\nAudit établi suivant les normes en vigueur 16247-1 et 2 ainsi que les recommandations de l'ADEME.",
                'href' => './nos-solutions.php#audit-energetique',
            ],
            [
                'background' => './images/pages/solutions/list/etude-thermique.png',
                'color' => '#E20714',
                'picture' => './images/pages/about/intro/energy-performance-diagnostic-environment.svg',
                'title' => "Etudes thermiques et environnementales",
                'text' => "Maison individuelle\n\nLogements Collectifs\n\nBâtiments tertiaires\n\nFormations aux différentes réglementations",
                'href' => './nos-solutions.php#etude-thermique',
            ],
        ];
        ?>
        <section id="home-solutions" class="page-section">
            <div class="page-container">
                <div class="page-section-header text-center">
                    <h2 class="ttitle th1 text-center">Nos solutions</h2>
                </div>
                <div class="page-section-block">
                    <ul id="home-solutions-list" class="row g-0 list-unstyled justify-content-center">
                        <?php foreach($home_solutions_list as $item): ?>
                            <li class="home-solutions-item col-12 col-md-6" style="--rel-aspect-ratio: 540/525;">
                                <div class="home-solution">
                                    <div class="home-solution-picture-block" style="--aspect-ratio: 510/370;">
                                        <img class="home-solution-picture img-cover" src="<?php echo($item['background']); ?>?v=<?php echo(date("Y-m-d-H-i-s", filemtime($item['background']))) ?>">
                                        <div class="home-solution-picture-overlay"></div>
                                        <div class="home-solution-icons-wrapper">
                                            <div class="home-solution-icons-container" style="height: 200px">
                                                <img class="img-contain" src="<?php echo($item['picture']); ?>?v=<?php echo(date("Y-m-d-H-i-s", filemtime($item['picture']))) ?>" style="height: 700px; width: 500px" alt="Max-width 100%">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="home-solution-card card text-white" style="background-color: <?php echo($item['color']); ?>;">
                                        <div class="home-solution-card-body card-body">
                                            <h3 class="home-solution-card-title ttitle th2" style="letter-spacing: -0.35px;"><?php echo(nl2br($item['title'])); ?></h3>
                                            <div class="home-solution-card-text"><?php echo(nl2br($item['text'])); ?></div>
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
        //$home_news = array_merge($home_news, $home_news, $home_news);
        ?>
        <?php if(!empty($home_news)): ?>
        <section id="home-news" class="page-section bg-gray">
            <div class="page-container">
                <div class="page-section-header text-center">
                    <h2 class="ttitle th1 text-center mb-3">News</h2>
                    <p>Suivez toute l'actualité de NEW Énergie Concept.</p>
                </div>
                <?php if(empty($home_news)): ?>
                <div class="text-center">
                    <i class="far fa-newspaper fa-3x text-muted"></i>
                    <small class="d-block text-muted">Aucun article n'est encore disponible.</small>
                </div>
                <?php else: ?>
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
                                            <?php if(isset($item['picture']) && $item['picture']): ?>
                                            <img class="card-img-top img-cover" src="<?php echo($item['picture']); ?>?v=<?php echo(date("Y-m-d-H-i-s", filemtime($item['picture']))) ?>" alt="">
                                                <img class="card-img-top img-cover" src="<?php echo($item['picture']); ?>?v=<?php echo(date("Y-m-d-H-i-s", filemtime($item['picture']))) ?>" alt="" style="filter: invert(99%) sepia(100%) saturate(0%) hue-rotate(151deg) brightness(106%) contrast(100%);">
                                            <?php else: ?>
                                            <div style="display: flex; flex-flow: column nowrap; align-items: center; justify-content: center; color: white; background-color: var(--primary-color);">
                                                <i class="fas fa-camera-alt" aria-hidden="true" style="font-size: 48px; margin-bottom: 0.5rem;"></i>
                                                <span>Aucune image disponible</span>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="card-body flex-column-nowrap">
                                            <h3 class="ttitle th4 mb-3 text-truncate"><?php echo(nl2br($item['title'])); ?></h3>
                                            <div class="line-clamp mb-3 flex-adapt-height" data-limit="4"><?php echo(nl2br($item['text'])); ?></div>
                                            <a class="tlink tfont-bold text-uppercase text-primary" href="<?php echo(nl2br($item['href'])); ?>?id=<?php echo($item['uniq_id']); ?>">Lire l'article</a>
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
                <?php endif; ?>
            </div>

        </section>
        <?php endif; ?>
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
    <script type="text/javascript">
        window.onbeforeunload = function(){
            alert('Vous devez vous déconnecter !');
        }
    </script>
</body>
