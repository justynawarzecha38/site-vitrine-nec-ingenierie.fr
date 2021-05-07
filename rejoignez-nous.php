<!DOCTYPE HTML>
<html lang="fr">
<head>
    <?php
        $main_title = 'Rejoignez-nous';
        $main_nav_key = 'join-us';
        include_once('./includes/head.php');
    ?>
    <?php include_once('./includes/styles.php'); ?>
    <style>
        #join-us-background {
            position: absolute;
            top: 0;
            left: 0;
            bottom: auto;
            right: 0;
            height: 200px;
            background: url(./images/bands/join-us-mobile.png?v=<?php echo(date("Y-m-d-H-i-s", filemtime('./images/bands/join-us-mobile.png'))) ?>) no-repeat center center;
            background-size: cover;
            z-index: -1;
        }
        @media (min-width: 992px) {
            #join-us-background {
                height: 620px;
                background: url(./images/bands/join-us.png?v=<?php echo(date("Y-m-d-H-i-s", filemtime('./images/bands/join-us.png'))) ?>) no-repeat center center;
            }
        }
        #join-us-content {
            padding-top: 130px;
        }
        @media (min-width: 992px) {
            #join-us-content {
                padding-top: 365px;
            }
        }


        #job-ads-accordion {
            background-color: white;
            border-radius: 4px;
            border: 2px solid white;
            box-shadow: 7px 7px 20px rgba(0, 0, 0, 0.161);
        }
        #job-ads-accordion .accordion-button {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            background-color: #F5F5F5;
            border-color: white !important;
            box-shadow: none !important;
        }
        #job-ads-accordion .accordion-item:first-child .accordion-button {
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
        }
        #job-ads-accordion .accordion-item:last-child .accordion-button {
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
        }
        #job-ads-accordion .accordion-button::before {
            flex-shrink: 0;
            width: 1.25rem;
            height: 1.25rem;
            margin-right: 1rem;
            content: "";
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23C8C8C8'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-size: 1.25rem;
            transition: transform .2s ease-in-out;
        }
        #job-ads-accordion .accordion-button::after {
            content: none;
        }
        #job-ads-accordion .accordion-button:not(.collapsed) {
            color: currentColor;
        }
        #job-ads-accordion .accordion-button:not(.collapsed)::before {
            transform: rotate(180deg);
        }
        #job-ads-accordion .accordion-item:last-of-type .accordion-collapse {
            border: none;
        }
    </style>
</head>

<body class="flex-column-nowrap" style="overflow: hidden;">
    <?php include_once('./includes/header.php'); ?>
    <main class="container-fluid flex-column-nowrap flex-adapt-height flex-scrollable p-0">
        <?php include_once('./includes/aside.php'); ?>
        <!-- OFFRES D'EMPLOI -->
        <?php
            $job_ads_list = [
                [
                    'uniq_id' => 'j0001',
                    'title' => "Technicien",
                    'description' => "Qui aut lam, nobis por autem iunti nectem ut ut harum evenimpedi con con reped que doluptius sint dolo vel maiorepe voluptat vellabore pre nos earuptur modit laborpor seque inti nos ditat parum rempore, sim imilite quia il ipiet et voluptat hariand uciantur magnatur, aut atem hillacc usapis non nullabore porrum estibusam veligenihil mod quae.",
                    'city' => "Différents secteurs géographiques",
                ],
                /*[
                    'uniq_id' => 'j0002',
                    'title' => "Enienesti omnistiatur",
                    'description' => "Qui aut lam, nobis por autem iunti nectem ut ut harum evenimpedi con con reped que doluptius sint dolo vel maiorepe voluptat vellabore pre nos earuptur modit laborpor seque inti nos ditat parum rempore, sim imilite quia il ipiet et voluptat hariand uciantur magnatur, aut atem hillacc usapis non nullabore porrum estibusam veligenihil mod quae.",
                    'city' => "Paris",
                ],
                [
                    'uniq_id' => 'j0003',
                    'title' => "Enienesti omnistiatur",
                    'description' => "Qui aut lam, nobis por autem iunti nectem ut ut harum evenimpedi con con reped que doluptius sint dolo vel maiorepe voluptat vellabore pre nos earuptur modit laborpor seque inti nos ditat parum rempore, sim imilite quia il ipiet et voluptat hariand uciantur magnatur, aut atem hillacc usapis non nullabore porrum estibusam veligenihil mod quae.",
                    'city' => "Paris",
                ],
                [
                    'uniq_id' => 'j0004',
                    'title' => "Enienesti omnistiatur",
                    'description' => "Qui aut lam, nobis por autem iunti nectem ut ut harum evenimpedi con con reped que doluptius sint dolo vel maiorepe voluptat vellabore pre nos earuptur modit laborpor seque inti nos ditat parum rempore, sim imilite quia il ipiet et voluptat hariand uciantur magnatur, aut atem hillacc usapis non nullabore porrum estibusam veligenihil mod quae.",
                    'city' => "Paris",
                ],
                [
                    'uniq_id' => 'j0005',
                    'title' => "Enienesti omnistiatur",
                    'description' => "Qui aut lam, nobis por autem iunti nectem ut ut harum evenimpedi con con reped que doluptius sint dolo vel maiorepe voluptat vellabore pre nos earuptur modit laborpor seque inti nos ditat parum rempore, sim imilite quia il ipiet et voluptat hariand uciantur magnatur, aut atem hillacc usapis non nullabore porrum estibusam veligenihil mod quae.",
                    'city' => "Paris",
                ],*/
            ];
        ?>
        <section id="job-ads" class="page-section">
            <div class="page-container">
                <div class="page-section-header text-center mb-80">
                    <!--h1 class="ttitle th1 mb-80">Offres d'emploi</h1-->
                    <h1 class="ttitle th1 mb-80">Postes à pourvoir</h1>
                    <p>La liste suivante affiche nos postes actuellement requis. Cette liste sera mise à jour régulièrement.</p>
                </div>
            </div>
            <div class="page-small-container">
                <div class="accordion accordion-flush" id="job-ads-accordion">
                    <?php foreach($job_ads_list as $item): ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="job-ad-heading-<?php echo($item['uniq_id']); ?>">
                                <button type="button" class="accordion-button collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#job-ad-collapse-<?php echo($item['uniq_id']); ?>"
                                        aria-expanded="false" aria-controls="job-ad-collapse-<?php echo($item['uniq_id']); ?>">
                                    <span style="font-size: 1.125rem;""><?php echo($item['title']); ?></span>
                                    <div style="margin-left: auto; font-size: 1rem; text-align: right; color: #C8C8C8;">
                                        <span><?php echo($item['city']); ?></span>
                                        <i class="fas fa-map-marker-alt" aria-hidden="true" style="margin-left: 0.5rem;"></i>
                                    </div>
                                </button>
                            </h2>
                            <div id="job-ad-collapse-<?php echo($item['uniq_id']); ?>" class="accordion-collapse collapse" aria-labelledby="job-ad-heading-<?php echo($item['uniq_id']); ?>" data-bs-parent="#job-ads-accordion">
                                <div class="accordion-body">
                                    <p class="mb-3" style="color: #7D7D7D; font-size: 1rem;"><?php echo($item['description']); ?></p>
                                    <div class="text-center">
                                        <a href="#join-us-form" class="btn btn-primary tlink tsize-small text-uppercase text-white"
                                           data-ref="<?php echo($item['uniq_id']); ?>">Postuler</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Rejoignez-nous -->
        <section id="join-us" class="page-section px-0">
            <div id="join-us-title" class="page-container page-section-block text-center mb-80">
                <h1 class="ttitle th1 mb-80">Rejoignez-nous</h1>
                <p>Vous souhaitez donner un nouvel élan à votre carrière et rejoindre une entreprise à taille humaine qui place l'esprit d'équipe au cœur de ses préoccupations ?
                    <br>Consultez nos offres ou faites-nous parvenir une candidature spontanée.</p>
            </div>
            <div id="join-us-content" class="position-relative">
                <div id="join-us-background"></div>
                <div class="page-container">
                    <div class="page-form-card card bg-senary text-white">
                        <div class="card-body">
                            <form id="join-us-form" class="w-100" action="" method="POST">
                                <div class="row gx-3 gy-4 mb-60">
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" name="first_name" placeholder="Prénom*"
                                               aria-label="Votre prénom" required>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" name="last_name" placeholder="Nom*"
                                               aria-label="Votre nom" required>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="email" class="form-control" name="email" placeholder="Email*"
                                               aria-label="Votre email" required>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" name="tel" placeholder="Téléphone*"
                                               aria-label="Votre numéro de téléphone"
                                               pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" required>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="object" placeholder="Sujet*"
                                               aria-label="Sujet" required>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <label for="join-us-resume" class="input-group">
                                            <input type="text" class="form-control" placeholder="Ajouter votre CV*"
                                                   aria-label="Ajouter votre CV*" style="pointer-events: none; user-select: none;">
                                            <span class="input-group-text bg-primary text-white text-uppercase" style="pointer-events: none; user-select: none;">Parcourir…</span>
                                        </label>
                                        <input id="join-us-resume" class="d-none" type="file" name="file"
                                               accept="image/*,application/pdf"
                                               onchange="this.parentNode.querySelector('.input-group input').value = (this.files.length > 0 ? this.files[0].name : '');">
                                        <div class="form-text text-white tsize-small mt-2">Format image ou PDF acceptés. Poids maximum : 1&nbsp;Mo.</div>
                                    </div>
                                    <div class="col-12">
                                        <textarea id="join-us-message" class="form-control" name="message" placeholder="Votre message*" rows="6" required></textarea>
                                        <div class="form-text text-white tsize-small my-2"><sup>*</sup>Champs obligatoires</div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary tlink tsize-small text-uppercase">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include_once('./includes/footer.php'); ?>
    </main>
    <?php include_once('./includes/modals.php'); ?>
    <?php include_once('./includes/scripts.php'); ?>
</body>