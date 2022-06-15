<!-- INSCRIPTION -->
<style>
    @media(max-width: 767.98px) {
        #aside-newsletter input[type="text"] {
            margin-bottom: 0.5rem;
        }
        #aside-newsletter input[type="text"],
        #aside-newsletter-submit {
            width: 100%;
            border-radius: 0.25rem;
        }
    }
</style>
<aside id="aside-newsletter" class="page-section bg-quinary text-white py-4">
    <div class="page-container">
        <form id="newsletter-register" action="./controllers/newsletter.php" method="post" class="row g-0">
            <div class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-4 text-center text-lg-start">
                <div class="ttitle th4">Inscrivez-vous à notre newsletter</div>
                <p class="tsize-xsmall">et soyez le premier à être informé de nos dernières actus, réalisations, etc...</p>
            </div>
            <div class="col-12 col-lg d-flex align-items-center">
                <div class="input-group h-100">
                    <input type="text" name="email" class="form-control flex-column flex-md-row" placeholder="Entrez votre email"
                           aria-label="Entrer votre email" aria-describedby="aside-newsletter-submit">
                    <button type="submit" class="btn btn-primary btn-lg tlink tfont-bold text-uppercase px-5" id="aside-newsletter-submit">S'inscrire</button>
                </div>
            </div>
        </form>
    </div>
</aside>
<!-- PIED DE PAGE -->
<footer class="page-footer bg-gray">
    <div class="page-container">
        <div class="row gx-5 gy-4">
            <!-- Description -->
            <div class="col-12 col-lg-4 text-center text-lg-start">
                <div style="height: 66px;">
                    <img class="img-contain" id="LOGO_Concept" src="./images/logos/Logo_NEC_Concept.jpg?v=<?php echo(date("Y-m-d-H-i-s", filemtime('./images/logos/Logo_NEC_Concept.jpg'))) ?>" alt="Logo NEW Énergie Concept (noir)">
                    <img class="img-contain" id="LOGO_Concept" src="./images/logos/Logo_NEC_Construction.jpg?v=<?php echo(date("Y-m-d-H-i-s", filemtime('./images/logos/Logo_NEC_Concept.jpg'))) ?>" alt="Logo NEW Énergie Concept (noir)">
                </div>
                <p class="tsize-xsmall tfont-medium mb-3" style="opacity: 0.65;">New Energie Concept est spécialisé en Ingénierie Fluides, Audit énergétique et Économie de la Construction.</p>
                <div class="row align-items-end justify-content-around">
                    <div class="col-6">
                        <img class="img-contain" src="./images/logos/NEC_OPQIBI.jpg?v=<?php echo(date("Y-m-d-H-i-s", filemtime('./images/logos/NEC_OPQIBI.jpg'))) ?>" alt="Qualification OPQIBI" style="max-width: 130px;">
                    </div>
                    <img class="img-contain" src="./images/logos/logo_OPQIBI_RGE_NEC_HD.png?v=<?php echo(date("Y-m-d-H-i-s", filemtime('./images/logos/logo_OPQIBI_RGE_NEC_HD.jpg'))) ?>" alt="Qualification OPQIBI RGE" style="max-width: 130px;">
                    <div class="col-6">
                        <img src="./images/logos/logo_OPQIBI_RGE_NEC_HD.png?v=<?php echo(date("Y-m-d-H-i-s", filemtime('./images/logos/logo_OPQIBI_RGE_NEC_HD.jpg'))) ?>">
                    </div>
                </div>
            </div>
            <!-- Liens utiles -->
            <div class="col-6 col-lg-2">
                <div class="ttitle tsize-small mb-2 mb-lg-3">Liens utiles</div>
                <ul class="list-unstyled mb-0">
                    <?php foreach($main_nav as $key => $item): ?>
                        <li class="<?php echo($main_nav_key === $key ? ' active' : ''); ?>">
                            <a class="tlink tsize-xsmall tfont-regular h-100 w-100 <?php echo($main_nav_key === $key ? ' active' : ''); ?>"
                               href="<?php echo($item['href']); ?>"><?php echo($item['title']); ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!-- Siège social -->
            <!--<div class="col-6 col-lg-3">
                <div class="ttitle tsize-small mb-2 mb-lg-3">Siège social</div>
                <ul class="list-unstyled mb-0 tsize-xsmall">
                    <li class="d-flex mb-2">
                        <div style="width: 1.5rem">
                            <i class="fas fa-map-marker-alt tsize-small"></i>
                        </div>
                        <p>1 rue Saint-Nicolas
                            <br>88000 EPINAL</p>
                    </li>
                    <li class="d-flex mb-2">
                        <div style="width: 1.5rem">
                            <i class="fas fa-phone-alt tsize-small"></i>
                        </div>
                        <p>Tél. : 09 72 601 901</p>
                    </li>
                    <li class="d-flex">
                        <div style="width: 1.5rem">
                            <i class="fas fa-envelope tsize-small"></i>
                        </div>
                        <p class="email-link-container" data-pre="administratif" data-domain="nec-ingenierie.fr" data-classes="tlink tfont-regular tsize-xsmall"></p>
                    </li>
                </ul>
            </div>-->
            <!-- Contact -->
            <div class="col-12 col-lg-3 text-center text-lg-start">
                <div class="ttitle tsize-small mb-2 mb-lg-3">Contact</div>
                <p class="tsize-xsmall mb-2">Besoin de renseignements, d'un devis ?</p>
                <a href="contact.php" class="btn btn-primary btn-xl text-uppercase px-4">Nous contacter</a>
            </div>
            <!-- Logo Carbone -->
            <div class="col-12 col-lg-3">
                <div style="height: 90px;">
                    <img class="img-contain" id="LOGO_Concept" src="./images/logos/Logo_NEC_Carbone.jpg?v=<?php echo(date("Y-m-d-H-i-s", filemtime('./images/logos/Logo_NEC_Carbone.jpg'))) ?>" alt="Logo NEW Énergie Carbone">
                </div>
                <p class="tsize-xsmall tfont-medium mb-3" style="opacity: 0.65;">New Energie Carbone est spécialiste de la réglementation thermique et environnemental</p>
            </div>
            <!-- Mentions légales -->
            <div class="col-6">
                <a href="#!" class="tlink tsize-xsmall tfont-regular" data-bs-toggle="modal" data-bs-target="#modal-disclaimer">Mentions légales •&nbsp;©NEW Énergie Concept</a>
            </div>
            <!-- Autres mentions
            <div class="col-6 text-end">
                <p class="tsize-xsmall">Design By Gaëlle Dumay - 2020</p>
            </div> -->
        </div>
    </div>
</footer>
