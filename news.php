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
                'uniq_id' => '0001',
                'created_at' => '2015-09-02 09:10',
                'tags' => ['construction', 'Grenelle Environnement', 'logement', 'norme 2012', 'permis de construire', 'rt', 'rt2012', 'réglementation thermique', 'thermique'],
                'title' => "Contrôle système de ventilation suivant le protocole PROMEVENT",
                'intro' => "<p>Vous trouverez ci-après deux newsletters au sujet des récente évolutions réglementaires</p>",
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
        ];
        $news = [];
        ?>
        <section id="news" class="page-section">
            <div class="page-container filtr-block">
                <div class="page-section-header text-center">
                    <h1 class="ttitle th1 text-center mb-3">News</h1>
                    <p>Suivez toute l'actualité de NEW Énergie Concept.</p>
                </div>

                <?php if(empty($news)): ?>
                    <div class="text-center">
                        <i class="far fa-newspaper fa-3x text-muted"></i>
                        <small class="d-block text-muted">Aucun article n'est encore disponible.</small>
                    </div>
                <?php else: ?>
                <div class="page-section-block">
                    <form class="row" action="" method="POST">
                        <div class="input-group mb-3 mb-lg-0 col-12 col-lg">
                            <input id="news-field-search" type="text" class="filtr-search form-control" name="search" style="border: 1px solid #ced4da !important;">
                            <label for="news-field-search" class="input-group-text bg-secondary text-white" id="inputGroup-sizing-default">
                                <i class="fas fa-search"></i>
                            </label>
                        </div>
                    </form>
                </div>
                <div class="page-section-block">
                    <ul id="news-list" class="filtr-container row gy-0 list-unstyled" style="--bs-gutter-x: 30px; margin-left: -15px; margin-right: -15px;">
                        <?php foreach($news as $item): ?>
                            <li class="filtr-item col-12 col-md-6 col-lg-4" style="margin-bottom: 40px;">
                                <div class="filtr-item-content card h-100">
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
                                    <div class="card-body">
                                        <h3 class="filtr-item-name ttitle th4 mb-40"><?php echo(nl2br($item['title'])); ?></h3>
                                        <div class="line-clamp" data-limit="4"><?php echo(nl2br($item['intro'])); ?></div>
                                    </div>
                                    <footer class="card-footer" style="">
                                        <a class="tlink tfont-bold text-uppercase text-primary" href="<?php echo($item['href']); ?>?id=<?php echo($item['uniq_id']); ?>">Lire l'article</a>
                                    </footer>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
        </section>
        <?php include_once('./includes/footer.php'); ?>
    </main>
    <?php include_once('./includes/modals.php'); ?>
    <?php include_once('./includes/scripts.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Shuffle/5.3.0/shuffle.min.js" integrity="sha512-Z2o9xls9hRQjtzU0G8qTxaj9cyVgqw/b2ocZ3X9LbF/OiXnbyR7E/d5+Yl8mSeulNW77w9vXq5hhUHarzacKKw==" crossorigin="anonymous"></script>
    <script>
        var Shuffle = window.Shuffle;

        function resizeCards() {
            var bigger_height = Math.max.apply(Math, $('.filtr-item').map(function(){
                return $(this).height();
            }).get());
            $('#test').remove();
            $('head').append(`<style id="test">
            .filtr-item {
                height: ${bigger_height}px;
            }
            </style>`);
        }

        resizeCards();

        $('.filtr-container').each(function (index, container) {
            var $container = $(container);
            var $block = $($container.parents('.filtr-block')[0]);
            var shuffle_component = new Shuffle(container, {
                useTransforms: true
            });

            // Search
            $block.find('.filtr-search').on('keyup', function(event) {
                var search = event.target.value.toLowerCase();

                shuffle_component.filter(function (element, shuffle) {
                    var title_element = element.querySelector('.filtr-item-name');
                    var title_text = title_element.textContent.toLowerCase().trim();

                    return title_text.indexOf(search) !== -1;
                });
            });
        });

        $(window).on('resize orientationchange', function () {
            resizeCards();
        });
    </script>
</body>