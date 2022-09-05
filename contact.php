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
    <?php
        session_start();
        include_once('./includes/header.php'); ?>
    <main class="container-fluid flex-column-nowrap flex-adapt-height flex-scrollable p-0">
        
        <!-- CONTACT -->
        <?php
        $list_locations_agency_NEC = [
            [
                'NEC' => 'NEW ENERGIE CONCEPT',
                'adresse' => "80 rue Mstislav Rostropovitch 75017 PARIS",
                'background-color' => "#ff5101",
            ],
            [
                'NEC' => 'NEW ENERGIE CONCEPT / CARBONE',
                'adresse' => "1293 route de Lyon 38110 SAINT JEAN DE SOUDAIN",
                'background-color' => "#ff595f",
            ],
           
            [
                'NEC' => 'NEW ENERGIE CONCEPT',
                'adresse' => "1 rue Saint Nicolas 88000 EPINAL",
                'background-color' => "#ff9920",
            ],
        ];
        ?>
        <section id="contact" class="page-section px-0">
            <div id="contact-title" class="page-container page-section-block text-center">
                <h1 class="ttitle th1">Contactez-nous</h1>
            </div>
            <div id="contact-content" class="position-relative">
                <div id="contact-background"></div>
                <div class="page-container">
                    <div class="page-form-card card bg-quinary text-white">
                        <div class="card-body">
                            <form id="contact-form" class="w-100" action="./controllers/contact.php" method="POST">
                                <div class="row gx-3 gy-4 mb-60">
                                    <div class="col-12">
                                        <label class="form-label">Nos Adresses :</label>
                                        <ul class="nav navbar-nav navbar-right">
                                            <?php foreach($list_locations_agency_NEC as $item): ?>
                                                <li class="rounded m-1 nav-item" style="background-color: <?php echo($item['background-color']); ?> ">&nbsp; <?php echo($item['NEC']); ?> - <?php echo($item['adresse']); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <div class="col-12 align-self-end">
                                        <img class="mx-auto d-block w-50 rounded" src="./images/france/carte_france_NEC.png?v=<?php echo(date("Y-m-d-H-i-s", filemtime('./images/france/carte_france_NEC.png'))) ?>" alt="Responsive image">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Agence<sup>*</sup></label>
                                        <select name="agency" id="Agence" class="form-select" required>
                                            <option value="" selected disabled>Choisir votre agence de référence</option>
                                            <option value="Epinal">Épinal</option>
                                            <option value="Lyon">Lyon</option>
                                            <option value="Paris">Paris</option>
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
                                    </div>

                                    <div class="col-12">
                                        <div class="g-recaptcha" data-sitekey="6LdDKr8bAAAAAF58VKC5KKs_vBG-dntwz6yHV5GT"></div>
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
    <script>
        var form = document.getElementById('contact-form');

        document.getElementById('contact-form').addEventListener('submit', function(event) {
            event.preventDefault();
            console.log('Test')
            var method = form.getAttribute('method');
            var action = form.getAttribute('action');
            var data = {};
            var form_data = new FormData(form);
            var data_encoded = "";
            for (var pair of form_data.entries()) {
                console.log(pair);
                data[encodeURIComponent(pair[0])] = encodeURIComponent(pair[1]);
                data_encoded += (encodeURIComponent(pair[0])+"="+encodeURIComponent(pair[1])+"&");
            }
            if (data_encoded.length > 1) {
                data_encoded = data_encoded.substring(0, data_encoded.length - 1);
            }
            var xhttp = new XMLHttpRequest();
            xhttp.onload = function(xhttp_event) {
                console.log(xhttp_event.target.responseText);
                try {
                    var res = JSON.parse(xhttp_event.target.response);
                    if (res !== null && typeof res === "object" && 'message' in res) {
                        alert(res.message);
                        if (xhttp_event.target.status === 200) {
                            if ('type' in res && res.type === 'success') {
                                document.location.reload(true);
                            }
                        }
                    }
                } catch (e) {
                    console.error(e);
                }
            };
            xhttp.open(method, action, true);
            xhttp.setRequestHeader(
                "Content-Type",
                "application/x-www-form-urlencoded",
            );
            xhttp.send(data_encoded);
            return false;
        }, false);
    </script>
</body>
