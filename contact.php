<!DOCTYPE HTML>
<html lang="fr">
<head>
    <?php
        $main_title = 'Contact';
        $main_nav_key = 'contact';
        include_once('./includes/head.php');
    ?>
    <?php include_once('./includes/styles.php'); ?>
    <style>
        #contact-background {
            position: absolute;
            top: 0;
            left: 0;
            bottom: auto;
            right: 0;
            height: 200px;
            background: url(./images/bands/contact-mobile.png?v=<?php echo(date("Y-m-d-H-i-s", filemtime('./images/bands/contact-mobile.png'))) ?>) no-repeat center center;
            background-size: cover;
            z-index: -1;
        }
        @media (min-width: 992px) {
            #contact-background {
                height: 620px;
                background: url(./images/bands/contact.png?v=<?php echo(date("Y-m-d-H-i-s", filemtime('./images/bands/contact.png'))) ?>) no-repeat center center;
            }
        }
        #contact-content {
            padding-top: 130px;
        }
        @media (min-width: 992px) {
            #contact-content {
                padding-top: 365px;
            }
        }
    </style>
</head>

<body class="flex-column-nowrap" style="overflow: hidden;">
    <?php include_once('./includes/header.php'); ?>
    <main class="container-fluid flex-column-nowrap flex-adapt-height flex-scrollable p-0">
        <?php include_once('./includes/aside.php'); ?>
        <!-- CONTACT -->
        <section id="contact" class="page-section px-0">
            <div id="contact-title" class="page-container page-section-block text-center">
                <h1 class="ttitle th1">Contactez-nous</h1>
            </div>
            <div id="contact-content" class="position-relative">
                <div id="contact-background"></div>
                <div class="page-container">
                    <div class="page-form-card card bg-quinary text-white">
                        <div class="card-body">
                            <form id="contact-form" class="w-100" action="" method="POST">
                                <div class="row gx-3 gy-4 mb-60">
                                    <div class="col-12">
                                        <label class="form-label">Agence<sup>*</sup></label>
                                        <select name="agency" id="Agence" class="form-select" required>
                                            <option value="" selected disabled>Choisir votre agence de référence</option>
                                            <option value="contact@nrjdiags.fr">Mulhouse</option>
                                            <option value="contact@nrjdiags.fr">Lyon</option>
                                            <option value="contact@nrjdiags.fr">Salon de Provence</option>
                                            <option value="contact@nrjdiags.fr">Toulouse</option>
                                            <option value="contact@nrjdiags.fr">Bordeaux</option>
                                            <option value="contact@nrjdiags.fr">Rennes</option>
                                            <option value="contact@nrjdiags.fr">Paris</option>
                                            <option value="contact@nrjdiags.fr">Lille</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-lg-6 align-self-end">
                                        <input type="text" class="form-control" name="company" placeholder="Société"
                                               aria-label="Votre société">
                                    </div>
                                    <div class="col-12 col-lg-6 align-self-end">
                                        <input type="text" class="form-control" name="name" placeholder="Nom*"
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
                                        <textarea id="contact-message" class="form-control" name="message" placeholder="Votre message*" rows="6" required></textarea>
                                        <div class="form-text text-white tsize-small my-2"><sup>*</sup>Champs obligatoires</div>
                                    </div>

                                    <a class="btn btn-primary w-auto mx-auto" href="medias/contact/Processus%20Gestion%20Appels%20et%20Réclamations.pdf" download>
                                        <i class="fas fa-download" aria-hidden="true"></i>
                                        <span>Télécharger nos processus en matière d'appels et de réclamations</span>
                                    </a>
                                </div>
                                <div class="mb-60">
                                    CAPTCHA A METTRE EN PLACE
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