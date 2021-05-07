<!DOCTYPE HTML>
<html lang="fr">
<head>
    <?php
        $main_title = 'Nos solutions';
        $main_nav_key = 'solutions-2';
        include_once('./includes/head.php');
    ?>
    <?php include_once('./includes/styles.php'); ?>
    <link rel="stylesheet" href="./styles/pages/our-solutions.css?v=<?php echo(date("Y-m-d-H-i-s", filemtime('./styles/pages/our-solutions.css'))) ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
</head>

<body class="flex-column-nowrap" style="overflow: hidden;">
    <?php include_once('./includes/header.php'); ?>
    <main class="container-fluid flex-column-nowrap flex-adapt-height flex-scrollable p-0">
        <?php include_once('./includes/aside.php'); ?>
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
                            <img class="img-contain" src="images/pages/solutions/cofrac-logo.svg?v=<?php echo(date("Y-m-d-H-i-s", filemtime('images/pages/solutions/cofrac-logo.svg'))) ?>">
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
                                                <img class="img-contain" src="<?php echo($item['picture']); ?>?v=<?php echo(date("Y-m-d-H-i-s", filemtime($item['picture']))) ?>">
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