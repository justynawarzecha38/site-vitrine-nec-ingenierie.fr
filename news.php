<!DOCTYPE HTML>
<html lang="fr">
<head>
    <?php
        $main_title = 'News';
        $main_nav_key = 'news';
        include_once('./includes/head.php');
    ?>
    <?php include_once('./includes/styles.php'); ?>
    <style>
        #news-list .card-body {
            padding: 50px 30px 30px;
        }
        #news-list .card-footer {
            padding: 0 30px 50px;
        }
    </style>
</head>

<body class="flex-column-nowrap" style="overflow: hidden;">
    <?php include_once('./includes/header.php'); ?>
    <main class="container-fluid flex-column-nowrap flex-adapt-height flex-scrollable p-0">
        <?php include_once('./includes/aside.php'); ?>
        <!-- NEWS -->
        <?php
        $news = [
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
        ];
        $news = array_merge($news, $news, $news, $news);
        ?>
        <section id="news" class="page-section">
            <div class="page-container">
                <div class="page-section-header text-center">
                    <h1 class="ttitle th1 text-center mb-3">News</h1>
                    <p>Suivez toute l'actualité de NRJ Diags.</p>
                </div>
                <div class="page-section-block">
                    <form class="row" action="" method="POST">
                        <div class="input-group mb-3 mb-lg-0 col-12 col-lg">
                            <input id="news-field-search" type="text" class="form-control" name="search" style="border: 1px solid #ced4da !important;">
                            <label for="news-field-search" class="input-group-text bg-secondary text-white" id="inputGroup-sizing-default">
                                <i class="fas fa-search"></i>
                            </label>
                        </div>
                        <div class="form-group tselect-container mb-3 mb-lg-0 col-12 col-lg">
                            <select id="news-field-filter-society" class="form-select" name="filter[society]">
                                <option selected>Toutes les sociétés</option>
                                <option value="abm">ABM Énergie Conseil</option>
                                <option value="nrj">NRJ Diags</option>
                                <option value="nec">NEW Énergie Concept</option>
                                <option value="acc">Acousti Control</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="page-section-block">
                    <ul id="news-list" class="row gy-0 list-unstyled" style="--bs-gutter-x: 30px; margin-left: -15px; margin-right: -15px;">
                        <?php foreach($news as $item): ?>
                            <li class="col-12 col-md-6 col-lg-4" style="margin-bottom: 40px;">
                                <div class="card h-100">
                                    <div style="--aspect-ratio: 16/9;">
                                        <img class="card-img-top img-cover" src="<?php echo($item['picture']); ?>" alt="">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="ttitle th4 mb-40"><?php echo(nl2br($item['title'])); ?></h3>
                                        <p class="line-clamp" data-limit="4"><?php echo(nl2br($item['text'])); ?></p>
                                    </div>
                                    <footer class="card-footer" style="">
                                        <a class="tlink tfont-bold text-uppercase text-primary" href="<?php echo($item['href']); ?>">Lire l'article</a>
                                    </footer>
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
</body>