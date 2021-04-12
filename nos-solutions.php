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
                    'text' => "Test de perméabilité à l’air, DPE et attestation de prise en compte de la réglementation Thermique à l’achèvement des travaux.\n\nNos Techniciens se déplacent une unique fois sur vos chantiers avant la livraison pour :\n<span class='tfont-bold' style='color: var(--senary-color);'>1. Effectuer le test de perméabilité à l’air.</span> Les Techniciens NRJ Diags sont d’ailleurs tous Opérateurs Autorisés par QUALIBAT pour réaliser ces mesures.\n<span class='tfont-bold' style='color: var(--senary-color);'>2.Etablir le DPE.</span> Les Techniciens NRJ Diags sont tous Diagnostiqueurs certifiés par Afnor Certification. Ils sont donc autorisés à vérifier la cohérence entre l’étude thermique et les équipements installés.\n<span class='tfont-bold text-senary'>3. Délivrer l’attestation de prise en compte de la réglementation thermique</span> si les 2 points précédents sont conformes.\n\n<i class='fas fa-plus text-senary' aria-hidden='true'></i>&nbsp;<span class='tfont-black'>Mesurer la pression des bouches VMC (conforme à l’Avis Technique)</span>",
                    'picture-aspect-ratio-at-breakpoint' => '650/465',
                    'icon-aspect-ratio-at-breakpoint' => '560/465',
                ],
                [
                    'anchor' => 'demarche-qualite',
                    'background' => './images/pages/solutions/list/qualite.png',
                    'color' => 'var(--tertiary-color)',
                    'picture' => './images/pages/solutions/intro/qualite.svg',
                    'title' => "Démarche qualité",
                    'text' => "Si vous souhaitez réaliser des économies substantielles, vous pouvez vous engager dans un <span class='tfont-bold text-tertiary'>process de Certification de la Perméabilité à l’Air</span>. Une fois obtenue, vous pouvez vous affranchir d’une mesure de perméabilité à l’air systématique sur vos chantiers en ne testant qu’un échantillon d’environ 10- 15 % de vos constructions.\n\nPour ce faire nous vous accompagnerons au quotidien, grâce à nos Techniciens terrain et votre assistante dédiée, depuis l’audit d’état des lieux jusqu’aux audits de renouvellement annuels.",
                    'picture-aspect-ratio-at-breakpoint' => '557/465',
                    'icon-aspect-ratio-at-breakpoint' => '557/335',
                ],
                [
                    'anchor' => 'pack-2',
                    'background' => './images/pages/solutions/list/pack2.png',
                    'color' => 'var(--quinary-color)',
                    'picture' => './images/pages/solutions/intro/pack2.png',
                    'title' => "Pack 2",
                    'text' => "DPE et attestation de prise en compte de la réglementation Thermique à l’achèvement des travaux.\n\nDans le cadre d’une démarche qualité perméabilité à l’air, seul un échantillon de vos maisons sera soumis au test de perméabilité à l’air. Dans ce cadre nos Techniciens se déplacent une unique fois sur vos chantiers avant la livraison pour :\n<span class='tfont-bold text-quinary'>1. Etablir le DPE.</span> Les Techniciens NRJ Diags sont tous Diagnostiqueurs certifiés par Afnor Certification. Ils sont donc autorisés à vérifier la cohérence entre l’étude thermique et les équipements installés.\n<span class='tfont-bold text-quinary'>2. Délivrer l’attestation de prise en compte de la réglementation thermique</span> si le point précédent est conforme.\n\n<i class='fas fa-plus text-senary' aria-hidden='true'></i>&nbsp;<span class='tfont-black'> Mesurer la pression des bouches VMC (conforme à l’Avis Technique)</span>",
                    'picture-aspect-ratio-at-breakpoint' => '515/465',
                    'icon-aspect-ratio-at-breakpoint' => '515/300',
                ],
                [
                    'anchor' => '3cep',
                    'background' => './images/pages/solutions/list/co2.png',
                    'color' => 'var(--quaternary-color)',
                    'picture' => './images/pages/solutions/intro/vent.svg',
                    //'title' => "Contrôle sur conduit 3CEP",
                    /*'text' => "L’arrêté du 23 février 2018 et applicable au 1er janvier 2020 relatif aux règles techniques et de sécurité applicables aux installations de gaz combustible des bâtiments d'habitation individuelle ou collective, y compris les parties communes modifie les contrôles à effectuer sur les conduits 3Cep.\nNos Techniciens se déplacent sur site pour effectuer les contrôles de la phase 1 : <span class='tfont-bold text-quaternary'>Vérification du dimensionnement, de la mise en œuvre et de l’étanchéité du conduit 3CEp.</span>",*/
                    'title' => "Vérification des systèmes VMC selon protocole PROMEVENT",
                    'text' => "Nos Techniciens se déplacent pour <span class='tfont-bold text-quaternary'>vérifier le système de ventilation selon le protocole PROMEVENT.</span>\nPréalablement, nous sommes en capacité de vous accompagner dans la mise en place d'un plan d'actions afin d'améliorer en continu la qualité de vos installations de ventilation.",
                    'picture-aspect-ratio-at-breakpoint' => '650/495',
                    'icon-aspect-ratio-at-breakpoint' => '560/495',
                ],
            ];
        ?>
        <section id="solutions-intro" class="page-section">
            <div class="page-container">
                <div class="page-section-header text-center">
                    <h1 class="ttitle th1 text-center">Nos solutions</h1>
                    <h2 class="ttitle th2 text-center text-primary">Constructions neuves</h2>
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

        <?php
        $other_solutions_list = [
            [
                'anchor' => 'inspection-isolation-toitures',
                'color' => 'var(--primary-color)',
                'icon' => 'bih-attic',
                'title' => "Inspection \nIsolation de toitures",
                'text' => "BAR-EN-101\nBAT-EN-101",
            ],
            [
                'anchor' => 'inspection-renovation-globale',
                'color' => 'var(--secondary-color)',
                'icon' => 'bih-outside',
                'title' => "Inspection \nRénovation globale",
                'text' => "BAR-TH-145\nBAT-TH-164",
            ],
            [
                'anchor' => 'inspection-isolation-plancher',
                'color' => 'var(--tertiary-color)',
                'icon' => 'bih-cellar',
                'title' => "Inspection \nIsolation d’un plancher",
                'text' => "BAR-EN-103\nBAT-EN-103",
            ],
            [
                'anchor' => 'inspection-par-contact',
                'color' => 'var(--quaternary-color)',
                'icon' => 'fas fa-user-headset',
                'title' => "Inspection \npar contact",
                'text' => "",
            ],
            [
                'anchor' => 'inspection-isolation-murs',
                'color' => 'var(--quinary-color)',
                'icon' => 'bih-home',
                'title' => "Inspection \nIsolation des murs",
                'text' => "BAR-EN-102\nBAT-EN-102",
            ],
            [
                'anchor' => 'inspection-isolation-reseau-hydraulique',
                'color' => 'var(--senary-color)',
                'icon' => 'bih-sewerage-treatment',
                'title' => "Inspection \nIsolation d’un \nréseau hydraulique",
                'text' => "BAR-TH-145\nBAT-TH-164",
            ],
        ];
        ?>
        <?php $reno_part = true; ?>
        <?php if($reno_part): ?>
        <section id="other-solutions" class="page-section">
            <div class="page-container">
                <div class="page-section-header text-center">
                    <h1 class="ttitle th1 text-center">Nos solutions</h1>
                    <h2 class="ttitle th2 text-center text-primary">Rénovation – Inspection CEE</h2>
                </div>
                <div class="page-section-block">
                    <div class="row g-0">
                        <div class="col-4 col-md-3 col-xl-2 pe-2">
                            <img class="img-contain" src="images/pages/solutions/cofrac-logo.svg">
                        </div>
                        <div class="col-8 col-md-9 col-xl-10">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="ttitle th3 mb-35">Organisme accrédité COFRAC</h3>
                                    <p style="font-size: 1rem;">Accréditation n°XXXXX
                                        <br>Liste des implantations et portées disponibles sur www.cofrac.fr
                                        <br>Organisme d’inspection accrédité dans le cadre du dispositif de délivrance des Certificats d’Economie d’Energie, NRJ Diags propose, sur toute la France, des services d’inspection d’opérations CEE adaptés à vos besoins.
                                        <br>
                                        <br>NRJ Diags répond à l’arrêté du 6 mars 2020 en tant qu’organisme d’inspection de type A.
                                        <br>
                                        <br>Contrôles d’opérations standardisées d’économies d’énergies réalisés dans les secteurs suivants :
                                        <ul class="mb-0" style="font-size: 1rem;">
                                            <li>Bâtiment résidentiel</li>
                                            <li>Bâtiment tertiaire</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-section-block">
                    <ul id="other-solutions-list" class="row list-unstyled justify-content-center gy-0 mb-0" style="--bs-gutter-x: 30px;">
                        <?php foreach($other_solutions_list as $item): ?>
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
                                        <h3 class="ttitle th5 mb-35"><?php echo(nl2br($item['title'])); ?></h3>
                                        <p style="font-size: 1rem;"><?php echo(nl2br($item['text'])); ?></p>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </section>
        <?php endif; ?>
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