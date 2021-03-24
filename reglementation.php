<!DOCTYPE HTML>
<html lang="fr">
<head>
    <?php
        $main_title = 'Réglementation';
        $main_nav_key = 'regulations';
        include_once('./includes/head.php');
    ?>
    <?php include_once('./includes/styles.php'); ?>
    <style>
        #regulations-list ul {
            list-style-type: disc;
            padding-left: 1.125rem;
        }
        #regulations-list table {
            table-layout: fixed;
            width: 100%;
            font-size: 0.875rem;
        }
        #regulations-list table a {
            font-size: 0.875rem;
            word-break: break-all;
        }
        /*#regulations-list table th {
            white-space: nowrap;
        }*/
        #regulations-list table th,
        #regulations-list table td {
            padding: 0.5rem;
        }
        #regulations-list table td {
            vertical-align: text-top;
        }
        #regulations-list table thead tr {
            color: white;
            background-color: var(--senary-color);
        }
        #regulations-list table tbody tr:nth-child(even) {
            background-color: #FCFCFC;
        }
        #regulations-list table tbody tr:nth-child(odd) {
            background-color: #EBEBEB;
        }
    </style>
</head>

<body class="flex-column-nowrap" style="overflow: hidden;">
    <?php include_once('./includes/header.php'); ?>
    <main class="container-fluid flex-column-nowrap flex-adapt-height flex-scrollable p-0">
        <?php include_once('./includes/aside.php'); ?>
        <!-- RÉGLEMENTATION -->
        <?php
        $regulations_loop = 0;
        $regulations_list = [
            [
                'color' => 'var(--quinary-color)',
                'picture' => './images/pages/regulations/logo-batiment-a-energie-positive-et-reduction-carbone.png',
                'title' => "La réglementation environnementale 2020",
                'text' => "A partir de l’été 2021, les permis de construire déposés devront respectés la RE 2020. Les textes sont toujours en cours de rédaction et signature et donc, ce qui suit pourra donc encore être amené à évoluer. Pour ce qui nous concerne cela impliquerait&nbsp;:\n\n<ul><li>Maintien de l’obligation de réaliser un test de perméabilité à l’air pour chaque nouvelle construction. Les limites à ne pas dépasser seraient toujours probablement 0,60 <sup>m3</sup>/(h.m²) en maison et 1,<sup>m3</sup>/(h.m²) en logements collectifs</li><li>La mise en place d’une obligation de vérification des installations de ventilation à la livraison</li></ul>",
            ],
            [
                'color' => 'var(--tertiary-color)',
                'picture' => './images/pages/regulations/logo-grenelle.png',
                'title' => "La réglementation thermique 2O12",
                'text' => "Depuis le 1<sup>er</sup> janvier 2013, chaque dépôt de Permis de Construire de maisons ou de logements collectifs doit respecter la RT 2012. Elle impose un objectif de résultat en termes d’étanchéité à l’air pour chaque nouvelle construction.\n\nEn règle générale, les limites à ne pas dépasser sont : 0,60 <sup>m3</sup>/(h.m²) en maison et 1,<sup>m3</sup>/(h.m²) en logements collectifs. Cependant, le Bureau d’Etudes Thermiques qui a réalisé l’étude thermique peut prendre en compte des valeurs d’étanchéité à l’air plus faible. Dans ce cas, les mesures effectuées in situ devront être inférieures ou égales à la valeur prise en compte par le Thermicien.\n\nLa recherche de fuites : chaque mesure est accompagnée systématiquement d’une recherche de fuites. Pour ce faire, notre Technicien peut utiliser une machine à fumée ou un anémomètre à fil chaud. Cette recherche de fuite est essentielle pour identifier les points sensibles afin de permettre au Maitre d’Ouvrage d’améliorer encore plus son niveau d’étanchéité.\n\nPlus d’étanchéité, c’est plus de confort et d’économie d’énergie !",
            ],
            [
                'color' => 'var(--senary-color)',
                'picture' => './images/pages/regulations/logo-reglementation-thermique-batiments-existants.jpg',
                'title' => "La réglementation thermique des bâtiments existants",
                'text' => "En extension, surélévation de maisons, une fiche d’application précise les modalités de prise en compte de la RT2012 (définies par les arrêtés* ci-dessous) dans le cas d’une partie nouvelle d’un bâtiment existant.**\n\n* Article 52 de l’arrêté du 26 octobre 2010 modifié par l’arrêté du 11 décembre 2014\n* Article 35 de l’arrêté du 28 décembre 2012 modifié par l’arrêté du 11 décembre 2014\n** Selon la date de dépôt de permis de construire, c’est la Fiche d’application en vigueur à cette date qui est applicable\nLes modalités ci-dessous sont celles de la Fiche d’application Extension en vigueur pour les dépôts de PC à compter du 8 janvier 2015.\n\n<div class='table-responsive'><table class='table'><thead><tr><th>Permis de construire</th><th>Études Thermiques</th><th>Contrôle fin de chantier à réaliser</th></tr></thead><tbody><tr><td>Extension ou surélévation ≤&nbsp;50m² Srt<sup>*</sup></td><td>RT existant par élément\n<a href='http://www.rt-batiment.fr/fileadmin/documents/RT2005/pdf/arrete_3_mai_2007_R131-28.pdf'>http://www.rt-batiment.fr/fileadmin/documents/RT2005/pdf/arrete_3_mai_2007_R131-28.pdf</a></td><td>Attestation Thermique Fin de Travaux «&nbsp;adaptée&nbsp;» (Contrôle des valeurs animales ci-dessous)</td></tr><tr><td>Extension ou surélévation ≥&nbsp;50m² et ≤&nbsp;100m² Srt</td><td>Etude de Respect du Bbiomax Respect des articles 20, 22 et 24 de l’arrêté du 26 octobre 2010</td><td>Attestation Thermique Fin de Travaux «&nbsp;simplifiée&nbsp;» (Contrôle sur site à partir du fichier XML)</td></tr><tr><td>Extension ou surélévation ≥&nbsp;100m² Srt</td><td>Etude Thermique RT 2012</td><td>Mesure de Perméabilité à l’air<sup>**</sup> DPE - Attestation Thermique Fin de Travaux «&nbsp;RT 2012&nbsp;» (Contrôle sur site à partir du fichier XML)</td></tr></tbody></table></div><p style='font-size: 10px;'>* Surface thermique au sens de la RT\n** Mesure de Perméabilité à l’air réalisée uniquement sur l’extension ou surélévation de la maison. La partie nouvelle du bâtiment est dispensée de mesure de perméabilité à l’air dès lors qu’elle communique avec la partie existante par une porte de surface maximale 110 cm x 220 cm (si grande ouverture : pas de possibilité de monter la porte soufflante, donc pas de mesure).\n
La mesure effectuée doit être ≤ 0,60 <sup>m3</sup>/(h.m²) de parois déperditives, hors plancher bas, en maison individuelle</p>",
            ],
            [
                'color' => 'var(--quaternary-color)',
                'picture' => './images/pages/solutions/list/co2.png',
                'title' => "Les contrôles sur conduit 3CEP",
                'text' => "L’arrêté du 23 février 2018 relatif aux règles techniques et de sécurité applicables aux installations de gaz combustible des bâtiments d’habitation individuelle ou collective, y compris les parties communes modifie les contrôles à effectuer sur les conduits 3CEp.\n\nEn effet, depuis le 1er janvier 2020, chaque dépôt de permis de construire doit respecter cet arrêté et dans certains cas de figure, les bâtiments en cours de  construction doivent également le respecter.\n\nA noter, le document Cerfa n°16026*01 : Certificat de Conformité pour une installation Individuelle de Gaz – Modèle 2, a été mis à jour pour se mettre en conformité avec l’arrêté du 23 février 2018. A présent, si le bâtiment comporte un conduit 3CEp, alors, il doit être accompagné de la phase 1 et 2 du «&nbsp;Protocole de mise en service du 3CEp et d’installation et de mise en service des chaudières associées&nbsp;».\nVous trouverez ci-dessous les grandes lignes de chacune des phases :\n\n<p><span style='font-weight: bold; color: var(--primary-color);'>Phase 1 :</span> Vérification du dimensionnement, de la mise en œuvre et de
  l’étanchéité du conduit 3Cep</p>\n<p><span style='font-weight: bold; color: var(--primary-color);'>Phase 2 :</span> Montage, raccordement et contrôle des appareils installés sur le conduit 3Cep</p>\n<p><span style='font-weight: bold; color: var(--primary-color);'>Phase 3 :</span> Mise en service et vérification du bon fonctionnement de l’installation complète</p>",
            ],
        ];
        ?>
        <section id="regulations" class="page-section">
            <div class="page-container">
                <div class="page-section-header text-center">
                    <h1 class="ttitle th1 text-center text-truncate">Réglementation</h1>
                </div>
                <div class="page-section-block">
                    <ul id="regulations-list" class="list-unstyled mb-0">
                        <?php foreach($regulations_list as $item): ?>
                            <li class="row gx-0 align-items-center" style="margin-bottom: 75px;">
                                <div class="d-none d-lg-flex align-items-center justify-content-center col-4">
                                    <div style="max-height: 200px; max-width: 200px;">
                                        <img class="img-contain" src="<?php echo($item['picture']); ?>" alt="">
                                    </div>
                                </div>
                                <div class="col col-lg-8<?php echo($regulations_loop % 2 === 1 ? ' order-first' : ''); ?>">
                                    <div class="card">
                                        <div class="d-lg-none p-3 p-lg-5 text-center mx-auto" style="max-width: 75%;">
                                            <img class="img-contain" src="<?php echo($item['picture']); ?>" alt="">
                                        </div>
                                        <div class="card-body" style="padding: 120px 75px;">
                                            <h2 class="ttitle th4 mb-4" style="color: <?php echo($item['color']); ?>;"><?php echo(nl2br($item['title'])); ?></h2>
                                            <p><?php echo(nl2br($item['text'])); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php $regulations_loop++; ?>
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