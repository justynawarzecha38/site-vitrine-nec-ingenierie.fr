<!DOCTYPE HTML>
<html lang="fr">
<head>
    <?php
        $main_title = 'Nos solutions';
        $main_nav_key = 'solutions';
        include_once('./includes/head.php');
    ?>
    <?php include_once('./includes/styles.php'); ?>
    <link rel="stylesheet" href="./styles/pages/our-solutions.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
    <style>
    </style>
</head>

<body class="flex-column-nowrap" style="overflow: hidden;">
    <?php include_once('./includes/header.php'); ?>
    <main class="container-fluid flex-column-nowrap flex-adapt-height flex-scrollable p-0">
        <?php include_once('./includes/aside.php'); ?>
        <!-- PARCOURS CLIENT -->
        <section id="solutions-customer-journey" class="page-section" style="/*max-height: calc(100vh - var(--navbar-height) - 1rem);*/">
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
                            <img class="img-contain" src="./images/pages/solutions/customer-journey-mobile.png" alt="">
                        </picture>
                    </a>

                </div>
            </div>
        </section>
        <!-- NOS SOLUTIONS -->
        <?php
            $solutions_list = [
                [
                    'anchor' => 'pack-3',
                    'background' => './images/pages/solutions/list/pack3.png',
                    'color' => 'var(--senary-color)',
                    'picture' => './images/pages/solutions/intro/pack3.png',
                    'title' => "Pack 3",
                    'text' => "Test de perméabilité à l’air, DPE et attestation de prise en compte de la réglementation Thermique à l’achèvement des travaux.\n\nNos techniciens se déplacent une unique fois sur vos chantiers avant la livraison pour :\n<span class='tfont-bold' style='color: var(--senary-color);'>1. Effectuer le test de perméabilité à l’air.</span> Les Techniciens NRJ Diags sont d’ailleurs tous Opérateurs Autorisés par QUALIBAT pour réaliser ces mesures.\n<span class='tfont-bold' style='color: var(--senary-color);'>2.Etablir le DPE.</span> Les Techniciens NRJ Diags sont tous Diagnostiqueurs certifiés par Afnor Certification. Ils sont donc assermentés pour vérifier la cohérence entre l’étude thermique et les équipements installés.\n<span class='tfont-bold text-senary'>3. Délivrer l’attestation de prise en compte de la réglementation thermique</span> si les 2 points précédents sont conformes.\n\n<i class='fas fa-plus text-senary' aria-hidden='true'></i>&nbsp;<span class='tfont-black'>Mesurer la pression des bouches VMC (conforme à l’Avis Technique)</span>",
                    'picture-aspect-ratio-at-breakpoint' => '650/465',
                    'icon-aspect-ratio-at-breakpoint' => '560/465',
                ],
                [
                    'anchor' => 'demarche-qualite',
                    'background' => './images/pages/solutions/list/qualite.png',
                    'color' => 'var(--tertiary-color)',
                    'picture' => './images/pages/solutions/intro/qualite.svg',
                    'title' => "Démarche qualité",
                    'text' => "Si vous souhaitez réaliser des économies substantielles, vous pouvez vous engager dans un <span class='tfont-bold text-tertiary'>process de Certification de la Perméabilité à l’Air</span>. Une fois obtenue, vous pouvez vous affranchir d’une mesure de perméabilité à l’air systématique sur vos chantiers en ne testant qu’un échantillon d’environ 10- 15 % de vos constructions.\n\nPour ce faire nous vous accompagnerons au quotidien, grâce à nos techniciens terrain et votre assistante dédiée, depuis l’audit d’état des lieux jusqu’aux audits de renouvellement annuels.",
                    'picture-aspect-ratio-at-breakpoint' => '557/465',
                    'icon-aspect-ratio-at-breakpoint' => '557/335',
                ],
                [
                    'anchor' => 'pack-2',
                    'background' => './images/pages/solutions/list/pack2.png',
                    'color' => 'var(--quinary-color)',
                    'picture' => './images/pages/solutions/intro/pack2.png',
                    'title' => "Pack 2",
                    'text' => "DPE et attestation de prise en compte de la réglementation Thermique à l’achèvement des travaux.\n\nDans le cadre d’une démarche qualité perméabilité à l’air, seul un échantillon de vos maisons sera soumis au test de perméabilité à l’air. Dans ce cadre nos techniciens se déplacent une unique fois sur vos chantiers avant la livraison pour :\n<span class='tfont-bold text-quinary'>1. Etablir le DPE.</span> Les Techniciens NRJ Diags sont tous Diagnostiqueurs certifiés par Afnor Certification. Ils sont donc assermentés pour vérifier la cohérence entre l’étude thermique et les équipements installés.\n<span class='tfont-bold text-quinary'>2. Délivrer l’attestation de prise en compte de la réglementation thermique</span> si le point précédent est conforme.\n\n<i class='fas fa-plus text-senary' aria-hidden='true'></i>&nbsp;<span class='tfont-black'> Mesurer la pression des bouches VMC (conforme à l’Avis Technique)</span>",
                    'picture-aspect-ratio-at-breakpoint' => '515/465',
                    'icon-aspect-ratio-at-breakpoint' => '515/300',
                ],
                [
                    'anchor' => '3cep',
                    'background' => './images/pages/solutions/list/co2.png',
                    'color' => 'var(--quaternary-color)',
                    'picture' => './images/pages/solutions/intro/co2.svg',
                    'title' => "Contrôle sur conduit 3CEP",
                    'text' => "L’arrêté du 23 février 2018 et applicable au 1er janvier 2020 relatif aux règles techniques et de sécurité applicables aux installations de gaz combustible des bâtiments d'habitation individuelle ou collective, y compris les parties communes modifie les contrôles à effectuer sur les conduits 3Cep.\nNos techniciens se déplacent sur site pour effectuer les contrôles de la phase 1 : <span class='tfont-bold text-quaternary'>Vérification du dimensionnement, de la mise en œuvre et de l’étanchéité du conduit 3CEp.</span>",
                    'picture-aspect-ratio-at-breakpoint' => '650/495',
                    'icon-aspect-ratio-at-breakpoint' => '560/495',
                ],
            ];
        ?>
        <section id="solutions-intro" class="page-section">
            <div class="page-container">
                <div class="page-section-header text-center">
                    <h1 class="ttitle th1 text-center">Nos solutions</h1>
                </div>
                <div class="page-section-block">
                    <ul id="solutions-list" class="row gx-0 list-unstyled" style="--bs-gutter-y: 50px;">
                        <?php foreach($solutions_list as $item): ?>
                            <li class="col-12 flex-column-nowrap" id="<?php echo($item['anchor']); ?>">
                                <div class="picture"<?php echo(isset($item['picture-aspect-ratio-at-breakpoint']) ? ' style="--md-aspect-ratio: '.$item['picture-aspect-ratio-at-breakpoint'].';"' : ''); ?>>
                                    <img class="img-cover" src="<?php echo($item['background']); ?>">
                                </div>
                                <div class="icon-container"<?php echo(isset($item['icon-aspect-ratio-at-breakpoint']) ? ' style="--md-aspect-ratio: '.$item['icon-aspect-ratio-at-breakpoint'].';"' : ''); ?>>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img class="img-contain" src="<?php echo($item['picture']); ?>">
                                    </div>
                                </div>
                                <div class="card-container flex-adapt-height">
                                    <div class="card">
                                        <div class="card-body" style="padding: 45px;">
                                            <h3 class="ttitle th2 mb-35" style="color: <?php echo($item['color']); ?>;"><?php echo(nl2br($item['title'])); ?></h3>
                                            <p style="font-size: 1rem;"><?php echo(nl2br($item['text'])); ?></p>
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