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

<body class="flex-column-nowrap" style="overflow: hidden;">
    <?php include_once('./includes/header.php'); ?>
    <main class="container-fluid flex-column-nowrap flex-adapt-height flex-scrollable p-0" style="overflow-x: hidden;">
        <?php include_once('./includes/aside.php'); ?>
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
<p>Les Techniciens NRJ Diags sont tous formés à la réalisation de ce protocole. Pour les mesures de perméabilité à l’air des réseaux, ils sont également autorisés qualifiés 8721 par QUALIBAT</p>",
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
            <div class="home-header-bottom page-container">
                <div class="home-header-bottom-card card flex-column align-items-center justify-content-center w-100 text-center bg-primary text-white">
                    <h1 class="home-header-bottom-title ttitle th4">NEW Énergie Concept</h1>
                    <!--p class="home-header-bottom-text th5 text-uppercase">Bureau d'études techniques spécialisé dans le contrôle<br class="d-none d-md-block"> sur site des différentes réglementations thermiques</p-->
                    <p class="home-header-bottom-text th5 text-uppercase">Bureau d'étude technique spécialiste dans les études fluides<br class="d-none d-md-block">et électriques ainsi que dans l'économie de la construction.</p>
                </div>
            </div>

        </header>

        <!-- QUI SOMMES-NOUS ? -->
        <?php
            $home_about_list = [
                [
                    'color' => 'var(--secondary-color)',
                    'picture' => './images/pages/about/intro/plan.svg',
                    'text' => "Maîtrise d'œuvre complète \nou spécialisée \nen tant que mandataire \nou co-traitant",
                ],
                [
                    'color' => 'var(--tertiary-color)',
                    'picture' => './images/pages/about/intro/engineering.svg',
                    'text' => "Ingénierie \ntraditionnelle",
                ],
            ];
        ?>
        <section id="home-about" class="page-section">
            <div class="page-container">
                <div class="page-section-header text-center">
                    <h2 class="ttitle th1">Qui sommes-nous ?</h2>
                </div>
                <div class="page-section-block text-center">
                    <p>Nous sommes basés à Lyon, cela nous permet de rayonner sur la grande moitié Est de la France
                        <br class="d-none d-md-block"><b>et de vous accompagner dans les missons&nbsp;:</b>
                    </p>
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
                                            <img class="img-contain" src="<?php echo($item['picture']); ?>?v=<?php echo(date("Y-m-d-H-i-s", filemtime($item['picture']))) ?>">
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
                    <a href="./a-propos.php" class="btn btn-primary tlink tsize-small text-uppercase text-white">En savoir +</a>
                </div>
            </div>
        </section>
        <!-- NOS SOLUTIONS -->
        <?php
        $home_solutions_list = [
            [
                'background' => './images/pages/solutions/list/economie-construction.png',
                'color' => 'var(--primary-color)',
                'picture' => './images/pages/solutions/intro/paper-pencil.svg',
                'title' => "Économie de la construction",
                'text' => "Estimatif financier sommaire du projet en fonction des surfaces et principales orientations techniques…",
                'href' => './nos-solutions.php#economie-construction',
            ],
            [
                'background' => './images/pages/solutions/list/ingenierie-fluide.png',
                'color' => 'var(--quaternary-color)',
                'picture' => './images/pages/solutions/intro/measure.svg',
                'title' => "Ingénierie fluide",
                'text' => "Vérification des plans et des besoins d'adaptations liés à l'implantation et à la circulation des équipements techniques…",
                'href' => './nos-solutions.php#ingenierie-fluide',
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
                                        <img class="home-solution-picture img-cover" src="<?php echo($item['background']); ?>?v=<?php echo(date("Y-m-d-H-i-s", filemtime($item['background']))) ?>">
                                        <div class="home-solution-picture-overlay"></div>
                                        <div class="home-solution-icons-wrapper">
                                            <div class="home-solution-icons-container">
                                                <img class="home-solution-icons-picture img-contain" src="<?php echo($item['picture']); ?>?v=<?php echo(date("Y-m-d-H-i-s", filemtime($item['picture']))) ?>">
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
        <!--?php
        $home_news = array_merge($home_news, $home_news, $home_news);
        ?-->
        <section id="home-news" class="page-section bg-gray">
            <div class="page-container">
                <div class="page-section-header text-center">
                    <h2 class="ttitle th1 text-center mb-3">News</h2>
                    <p>Suivez toute l'actualité de NRJ Diags.</p>
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
                                            <img class="img-contain" src="<?php echo($item['img']['src']); ?>?v=<?php echo(date("Y-m-d-H-i-s", filemtime($item['img']['src']))) ?>" alt="" style="filter: grayscale(1);">
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