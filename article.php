<!DOCTYPE HTML>
<html lang="fr">
<head>
    <?php
        function group_by($key, $data) {
            $result = array();

            foreach($data as $val) {
                if(array_key_exists($key, $val)){
                    $result[$val[$key]][] = $val;
                }else{
                    $result[""][] = $val;
                }
            }

            return $result;
        }

        $news = [
        [
            'uniq_id' => '0014',
            'created_at' => '2020-04-22 12:47',
            //'picture' => './images/originals/old/500_F_24220893_B8VqELkMRoi6k1fi18X9J0k41GaQ5YK6.jpg',
            'tags' => ['construction', 'Grenelle Environnement', 'logement', 'norme 2012', 'permis de construire', 'rt', 'rt2012', 'réglementation thermique', 'thermique'],
            'title' => "Contrôle système de ventilation suivant le protocole PROMEVENT",
            'intro' => "<p>La réglementation thermique impose la construction de bâtiments de plus en plus étanches à l’air, <strong>il est donc indispensable de s’assurer du bon fonctionnement des systèmes de ventilation pour garantir une bonne qualité d’air intérieur.</strong></p>",
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
        [
            'uniq_id' => '0013',
            'created_at' => '2020-04-22 12:14',
            'tags' => ['construction', 'Grenelle Environnement', 'logement', 'norme 2012', 'permis de construire', 'rt', 'rt2012', 'réglementation thermique', 'thermique'],
            'title' => "Contrôle conduit 3CEP",
            'intro' => "<p>L’<a href=\"https://www.legifrance.gouv.fr/loda/id/JORFTEXT000036667631/\" target=\"_blank\" rel=\"noopener\">arrêté du 23 février 2018</a>&nbsp;relatif aux règles techniques et de sécurité applicables aux installations de gaz combustible des bâtiments d'habitation individuelle ou collective, y compris les parties communes&nbsp;<b>modifie les contrôles à effectuer sur les conduits 3CEp</b>.</p>",
            'text' => "<p>En effet, depuis le 1er janvier 2020, chaque dépôt de permis de construire doit respecter cet arrêté et dans certains cas de figure, les bâtiments en cours de construction doivent également le respecter.</p>
<p>A noter, le document&nbsp;<a href=\"medias/solutions/cerfa_16026-01.pdf\">Cerfa n°16026*01</a>&nbsp;: Certificat de Conformité pour une installation Individuelle de Gaz – Modèle 2, a été mis à jour pour se mettre en conformité avec l’arrêté du 23 février 2018.<br>A présent,&nbsp;<b>si le bâtiment comporte un conduit 3CEp, alors, il doit être accompagné de la phase 1 et 2 du&nbsp;<a href=\"medias/solutions/Nouveau%20Protocole%20conduit%203CEp%20extrait%20EVAPDC%20sept%202019.pdf\">« Protocole de mise en service du 3CEp et d’installation et de mise en service des chaudières associées »</a></b>.</p>
<p>Vous trouverez ci-dessous les grandes lignes de chacune des phases :</p>
<ul>
<li>Phase 1 : Vérification du dimensionnement, de la mise en œuvre et de l’étanchéité du conduit 3CEp</li>
<li>Phase 2 : Montage, raccordement et contrôle des appareils installés sur le conduit 3CEp</li>
<li>Phase 3 : Mise en service et vérification du bon fonctionnement de l’installation complète</li>
</ul>
<p>NRJ DIAGS est donc en mesure de réaliser la phase 1 dudit protocole sur toute la France.</p>",
            'href' => './article.php',
        ],
        [
            'uniq_id' => '0012',
            'created_at' => '2019-09-18 09:02',
            'tags' => ['construction', 'Grenelle Environnement', 'logement', 'norme 2012', 'permis de construire', 'rt', 'rt2012', 'réglementation thermique', 'thermique'],
            'title' => "Air Sain",
            'intro' => "<p>Comme l’a annoncé la loi ELAN, la qualité d’air intérieur des logements sera prise en compte dans les années à venir… <strong>mais pourquoi attendre pour respirer un air sain ?</strong></p>",
            'text' => "<p>Nous passons 80% de notre temps dans des espaces clos, et la majorité de ce temps se passe dans votre maison. L’air que nous respirons à l’intérieur de notre logement est parfois plus pollué que l’air extérieur.</p>
<p>Air Sain est la mise en place de différentes étapes et moyens pour améliorer la bonne qualité d’air intérieur dans le logement.
Ces moyens permettent entre autres d’attester le bon fonctionnement du système de ventilation du logement, qui est une des causes principales de dégradation de la qualité d’air intérieur dans le logement.</p>
<p>Pour en savoir plus sur les démarches à adopoter&nbsp;<a href=\"http://www.airsain.fr/\">www.airsain.fr</a></p>",
            'href' => './article.php',
        ],
        [
            'uniq_id' => '0011',
            'created_at' => '2017-02-20 18:26',
            'tags' => ['construction', 'Grenelle Environnement', 'logement', 'norme 2012', 'permis de construire', 'rt', 'rt2012', 'réglementation thermique', 'thermique'],
            'title' => "Différences entre DPE et Etude Thermique",
            'intro' => "<p>Il n’est pas rare, dans la moitié Nord de la France, que des Maitres d’Ouvrage s’exclament après avoir vu l’étiquette énergétique du DPE de leur construction classée B alors que le logement construit respecte la réglementation thermique RT2012.</p>",
            'text' => <<<EOT
<div class="itemFullText">
<p style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal;">Petit rappel des principales différences entre DPE et Etude Thermique&nbsp;:</p>
<table border="1" style="border-collapse: collapse; border: none;" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td colspan="2" style="width: 453.1pt; border: 1pt solid windowtext; padding: 0cm 5.4pt;" valign="top" width="604"><strong>Différences d’OBJECTIF</strong></td>
</tr>
<tr>
<td style="width: 226.55pt; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-top: none; padding: 0cm 5.4pt;" valign="top" width="302"><strong>DPE</strong></td>
<td style="width: 226.55pt; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt;" valign="top" width="302"><strong>Etude Thermique</strong></td>
</tr>
<tr>
<td style="width: 226.55pt; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-top: none; padding: 0cm 5.4pt;" valign="top" width="302">
<p style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal;">Le DPE a pour objectif de&nbsp;:</p>
<ul>
<li>Informer le futur occupant du logement de sa consommation conventionnelle calculées pour des conditions d’usage fixées (on considère que les occupants les utilisent suivant des conditions standard), et pour des conditions climatiques moyennes du lieu.</li>
</ul>
<ul>
<li>Comparer les différents logements entre eux à partir de règles identiques</li>
</ul>
<ul>
<li>Inciter à effectuer des travaux d’économie d’énergie et contribuer à la réduction des émissions de gaz à effet de serre.</li>
</ul>
</td>
<td style="width: 226.55pt; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt;" valign="top" width="302">L’Etude Thermique a pour objectif de vérifier la conformité à la Réglementation Thermique selon les 3 indicateurs&nbsp;:
<ul>
<li>Bbio (Besoins du logement)</li>
<li>Cep (Consommations du logement)</li>
<li>Tic (Confort d’été)</li>
</ul>
</td>
</tr>
</tbody>
</table>
<table border="1" style="border-collapse: collapse; border: none;" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td colspan="2" style="width: 453.1pt; border: 1pt solid windowtext; padding: 0cm 5.4pt;" valign="top" width="604"><strong>Différences d’USAGES CONCERNES PAR LE CALCUL et de SURFACE DE REFERENCE</strong></td>
</tr>
<tr>
<td style="width: 226.55pt; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-top: none; padding: 0cm 5.4pt;" valign="top" width="302"><strong>DPE</strong></td>
<td style="width: 226.55pt; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt;" valign="top" width="302"><strong>Etude Thermique</strong></td>
</tr>
<tr>
<td style="width: 226.55pt; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-top: none; padding: 0cm 5.4pt;" valign="top" width="302">
<p style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal;">3 usages sont pris en compte dans le DPE&nbsp;:</p>
<ul>
<li>Chauffage</li>
<li>Eau Chaude Sanitaire</li>
<li>Refroidissement</li>
</ul>
<p style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal;">Ces 3 usages, exprimés en kWh d’Energie Primaire par m² et par an, sont donc ramenés au m² de Surface Habitable (SHAB).</p>
<p style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal;">L’étiquette énergétique est attribuée en fonction du nombre de kWh<sub>EP</sub>/m².an&nbsp;:</p>
<ul>
<li>≤ 50 = A</li>
<li>51 à 90 = B</li>
<li>91 à 150 = C</li>
<li>151 à 230 = D</li>
<li>231 à 330 = E</li>
<li>331 à 450 = F</li>
<li>&gt; 450 = G</li>
</ul>
</td>
<td style="width: 226.55pt; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt;" valign="top" width="302">
<p style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal;">5 usages sont pris en compte dans le calcul des consommations de l’Etude Thermique&nbsp;:</p>
<ul>
<li>Chauffage</li>
<li>Eau Chaude Sanitaire</li>
<li>Refroidissement</li>
<li>Eclairage</li>
<li>Auxiliaires</li>
</ul>
<p style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal;">Les consommations de ces 5 usages, exprimés en kWh d’Energie Primaire par m² et par an, sont ramenés au m² de Surface au sens de la Réglementation Thermique (SRT).</p>
<p style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal;">Celles-ci doivent être inférieures à 50 kWhEP/m²SRT.an modulés en fonction de&nbsp;:</p>
<ul>
<li>Zone géographique</li>
<li>Altitude</li>
<li>Surface des logements</li>
</ul>
<p style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal;">Par exemple&nbsp;: une maison ayant une SRT de 200 m² dans le département 88 à une altitude de 530 m, doit avoir une consommation ≤ 65 kWhEP/m²SRT.an</p>
</td>
</tr>
</tbody>
</table>
<p style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal;"><strong>En conclusion&nbsp;: Le DPE ne permet pas de vérifier la conformité à la Réglementation Thermique. Chaque document a une utilité à part entière et les confondre est INAPPROPRIE.</strong></p>
<p style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal;">Dans l’exemple d’une maison ayant une SRT de 200 m² et une surface habitable de 160 m² (la SRT est toujours plus grande que la SHAB) dans le département 88 et à une altitude de 530 m, qui aurait une étude thermique dont la consommation réglementaire serait de 60 kWhEP/m²SRT.an, donc <strong>CONFORME à la RT2012</strong> car ≤ 65 kWhEP/m²SRT.an maximum autorisé, réparties ainsi&nbsp;:</p>
<ul>
<li>Chauffage&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 40 kWhEP/m²SRT.an soit 8000 kWhEP (40 x 200 de SRT)</li>
<li>Eau Chaude Sanitaire&nbsp;&nbsp;&nbsp;&nbsp; : 14 kWhEP/m²SRT.an soit 2800 kWhEP (14 x 200 de SRT)</li>
<li>Refroidissement&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 0 kWhEP/m²SRT.an soit 0 kWhEP (0 x 200 de SRT)</li>
<li>Eclairage&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 4 kWhEP/m²SRT.an soit 800 kWhEP (4 x 200 de SRT)</li>
<li>Auxiliaires&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 2 kWhEP/m²SRT.an soit 400 kWhEP (2 x 200 de SRT)</li>
</ul>
<p style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal;"><strong>Le DPE serait de classe B</strong> car les consommations calculées pour les 3 usages sont de 67,5 kWhEP/m²SHAB.an réparties ainsi&nbsp;:</p>
<ul>
<li>Chauffage&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 8000 kWhEP / 160 SHAB = 50 kWhEP/m²SHAB.an</li>
<li>Eau Chaude Sanitaire&nbsp;&nbsp;&nbsp;&nbsp; : 2800 kWhEP / 160 SHAB = 17,5 kWhEP/m²SHAB.an</li>
<li>Refroidissement&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 0 kWhEP / 160 SHAB = 0 kWhEP/m²SHAB.an</li>
</ul>
<p style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal;"><strong>Dans ce cas, la maison serait conforme à la Réglementation Thermique malgré une étiquette énergétique classée&nbsp;B.</strong></p>
	  </div>
EOT,
            'href' => './article.php',
        ],
        [
            'uniq_id' => '0010',
            'created_at' => '2017-01-06 14:06',
            'tags' => ['construction', 'Grenelle Environnement', 'logement', 'norme 2012', 'permis de construire', 'rt', 'rt2012', 'réglementation thermique', 'thermique'],
            'title' => "La RT 2012 = une obligation !",
            'intro' => "<p>La RT 2012 vient tout juste de souffler sa 4ème bougie.
<br>C’est la raison pour laquelle, nous avons décidé de réaliser un article de rappel des obligations de la RT 2012.</p>",
            'text' => <<<EOT
<div class="itemFullText">
	  	
<p style="text-align: justify;">&nbsp;<span style="text-align: justify;">Bien que les habitués de la construction neuve, les professionnels du Bâtiment&nbsp;: Constructeurs de maisons, Promoteurs, Architectes, … ont intégrés le process de la RT 2012 et le respectent, de nombreux «&nbsp;Autoconstructeurs&nbsp;» nous interrogent régulièrement sur la RT 2012 et son caractère obligatoire.</span>&nbsp;</p>
<p style="text-align: justify;"><strong>Etes-vous concerné par la RT 2012&nbsp;?</strong></p>
<p style="text-align: justify;">Quand vous signez une demande permis de construire (que vous soyez professionnel du Bâtiment ou «&nbsp;Autoconstructeur&nbsp;»), vous vous engagez à respecter la réglementation technique, et donc en particulier la réglementation thermique dans la limite de son domaine d'application. Le formulaire de demande de permis précise : <em>«&nbsp;Je m'engage à respecter les règles générales de la construction prévues par les articles L. 111-1 et suivants du Code de la construction et de l'habitation sous peine d'encourir des sanctions pénales applicables en cas de violation de ces règles (articles L. 152-1 à L. 152-11 du Code de la construction et de l'habitation)&nbsp;»</em></p>
<p style="text-align: justify;"><strong>Qu’est-ce que la RT 2012&nbsp;? Et pourquoi&nbsp;?</strong></p>
<p style="text-align: justify;">La RT 2012 est une réglementation dite thermique qui <span style="text-decoration: underline;">s’applique à tous les permis de construire de bâtiments neufs déposés depuis le 1<sup>er</sup> janvier 2013</span>. Autrement dit, les «&nbsp;Autoconstructeurs&nbsp;» ont l’obligation d’appliquer, respecter cette réglementation, même s’ils construisent pour leur propre compte.</p>
<p style="text-align: justify;">Cette réglementation s’inscrit dans le cadre de la politique de réduction des émissions de gaz à effets de serre que la France mène conformément aux différents engagements pris lors&nbsp;: du protocole de KYOTO signé le 11 décembre 1997, de l’accord de la COP 21 signé le 12 décembre 2015, …</p>
<p style="text-align: justify;">Pour parvenir à atteindre ces objectifs de réduction des émissions de gaz à effets de serre, on ne peut pas imaginer que l’Etat accorde une dérogation aux «&nbsp;Autoconstructeurs&nbsp;». La RT 2012 s’applique donc bien à tous.</p>
<p><strong style="text-align: justify;">Quel est le process OBLIGATOIRE de la RT 2012&nbsp;?</strong></p>
<ol>
<li><strong>Lors du dépôt du Permis de Construire = Joindre à votre demande</strong>&nbsp;:</li>
</ol>
<p style="text-align: justify;"><em>Formulaire d’attestation de la prise en compte de la réglementation thermique au dépôt de la demande de permis de construire et, pour les bâtiments de plus de 1000 m2, de la réalisation de l’étude de faisabilité</em>. Ce formulaire est appelé dans le métier communément&nbsp;: Attestation Bbio.</p>
<p style="text-align: justify;">Il est, délivré par le Ministère du Logement et de l’Habitat Durable et le Ministère de l’Environnement, de l’Energie et de la Mer, et réalisé par un Bureau d’Etudes Thermiques après avoir réalisé le calcul du Besoin Bioclimatique de votre projet de construction.</p>
<p style="text-align: justify;">A ce stade, votre Bureau d’Etudes Thermiques peut vous prescrire des modifications techniques et/ou architecturales si toutefois votre projet ne respecte pas certaines exigences émises par la RT 2012. Par exemple&nbsp;: une surface de vitrage &lt; 1/6 de la Surface Habitable, le renforcement de l’isolation, …</p>
<p style="text-align: justify;">La présence de l’Attestation Bbio est contrôlée lors de l’instruction de votre demande de Permis de construire pour une maison individuelle et / ou ses annexes comprenant ou non des démolitions, Cerfa n°13406, PCMI14-1.</p>
<p style="text-align: center;">Pas d’Attestation Bbio, pas de Permis de Construire accordé&nbsp;!</p>
<ol>
<li><strong>2.</strong><strong>Avant le démarrage de la Construction = Réaliser une Etude Thermique complète</strong></li>
</ol>
<p style="text-align: justify;">Avant d’entamer la Construction, il est nécessaire de réaliser une Etude Thermique complète par un Bureau d’Etudes Thermiques afin de <strong>faire valider ses choix techniques et par conséquence le respect des 3 exigences de résultat de la RT 2012</strong>&nbsp;:</p>
<ul>
<li><strong>L'efficacité énergétique du bâti</strong></li>
</ul>
<p style="margin-left: 60px; text-align: justify;">L'exigence d'efficacité énergétique minimale du bâti est définie par le coefficient «&nbsp;Bbiomax&nbsp;» (besoins bioclimatiques du bâti). Cette exigence impose une limitation simultanée du besoin en énergie pour les composantes liées à la conception du bâti (chauffage, refroidissement et éclairage), imposant ainsi son optimisation indépendamment des systèmes énergétiques mis en œuvre.</p>
<ul>
<li><strong>La consommation énergétique du bâtiment</strong></li>
</ul>
<p style="margin-left: 60px; text-align: justify;">L'exigence de consommation conventionnelle maximale d'énergie primaire se traduit par le coefficient «&nbsp;Cepmax&nbsp;», portant sur les consommations de chauffage, de refroidissement, d'éclairage, de production d'eau chaude sanitaire et d'auxiliaires (pompes et ventilateurs). La valeur du Cepmax s'élève à 50 kWh/(m².an) d'énergie primaire, modulé selon la localisation géographique, l'altitude, le type d'usage du bâtiment, la surface moyenne des logements et les émissions de gaz à effet de serre pour le bois énergie et les réseaux de chaleur les moins émetteurs de CO2.</p>
<p style="margin-left: 60px; text-align: justify;">Cette exigence impose, en plus de l'optimisation du bâti exprimée par le Bbio, le recours à des équipements énergétiques performants, à haut rendement.</p>
<ul>
<li><strong>Le confort d'été dans les bâtiments non climatisés</strong></li>
</ul>
<p style="margin-left: 60px; text-align: justify;">A l'instar de la RT 2005, la RT 2012 définit des catégories de bâtiments dans lesquels il est possible d'assurer un bon niveau de confort en été sans avoir à recourir à un système actif de refroidissement. Pour ces bâtiments, la réglementation impose que la température la plus chaude atteinte dans les locaux, au cours d'une séquence de 5 jours très chauds d'été n'excède pas un seuil.</p>
<p style="text-align: justify;">A ce stade, votre Bureau d’Etudes Thermiques peut vous prescrire des modifications techniques si toutefois votre projet ne respecte pas les exigences ci-dessus.</p>
<p style="text-align: justify;">Des exigences de moyens sont également à prévoir pour respecter la RT 2012. Elle se limitent au strict nécessaire, pour refléter la volonté affirmée de faire pénétrer significativement une pratique. Parmi ces exigences, on retrouve&nbsp;:</p>
<ul>
<li>Surface vitrée &gt; 1/6 de la Surface Habitable</li>
<li>Affichage des consommations énergétiques</li>
<li>Recours à un équipement à énergie renouvelable ou considéré comme tel</li>
<li>…</li>
</ul>
<p style="text-align: justify;">Le Bureau d’Etudes Thermiques qui vous accompagne saura vous lister précisément ces exigences de moyens.</p>
<ol>
<li><strong>3.</strong><strong>Pendant la Construction = Respecter l’Etude Thermique complète</strong></li>
</ol>
<p style="text-align: justify;">Pendant la construction, il est nécessaire de&nbsp;:</p>
<ul>
<li>Respecter les produits utilisés dans l’Etude Thermique y compris les équipements à énergie renouvelable ou considéré comme tel.</li>
</ul>
<p style="margin-left: 60px; text-align: justify;">Pourquoi&nbsp;?</p>
<p style="margin-left: 60px; text-align: justify;">Premièrement, car un contrôle de cohérence entre les produits cités dans l’Etude Thermique et ceux réellement installés dans votre Construction sera mené par un organisme indépendant de votre projet de Construction.</p>
<p style="margin-left: 60px; text-align: justify;">Deuxièmement, car le résultat de l’Etude Thermique est issu d’un calcul réalisé à partir de performances de matériaux/équipements, les matériaux/équipements différents ont des performances différentes, le résultat du calcul peut in fine être différent. Le risque étant de ne plus respecter une des 3 exigences évoquées précédemment et donc de ne plus être «&nbsp;Conforme&nbsp;» à la RT 2012.</p>
<ul>
<li>Soigner la mise en œuvre des différents matériaux de construction et le rebouchage des différents éléments traversant chaque paroi (gaines, tuyaux, câble, …). En effet, le niveau d’étanchéité à l’air de votre Construction devra être mesuré par une société habilitée à la fin de vos travaux de Construction. L’étanchéité à l’air de votre construction est en quelque sorte sa capacité à être hermétique et donc sa capacité à limiter les déperditions par renouvellement d’air parasite.</li>
</ul>
<ol>
<li><strong>4.</strong><strong>Lors du dépôt de la Déclaration Achèvement des Travaux = Joindre à votre demande&nbsp;:</strong></li>
</ol>
<p style="text-align: justify;"><em>Formulaire d’attestation de la prise en compte de la réglementation thermique à l’achèvement des travaux</em></p>
<p style="text-align: justify;">Ce formulaire est appelé dans le métier communément : ATh.</p>
<p style="text-align: justify;">Il est, délivré par le Ministère du Logement et de l’Habitat Durable et le Ministère de l’Environnement, de l’Energie et de la Mer, et réalisé par une société habilitée <strong>après qu’une mesure de perméabilité à l’air conforme ait été réalisée ET que l’Etude Thermique soit intégralement respectée.</strong></p>
<p style="text-align: justify;">La présence de l’ATh est contrôlée lors de l’instruction de votre Déclaration Achèvement des Travaux, Cerfa n°13408, AT3.</p>
<p style="text-align: center;">Pas d’ATh, pas d’Achèvement des Travaux accordé&nbsp;!</p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;"><img src="images/news/imgnewsnrj.jpg" alt="RT 2012 une obligation" width="219" height="309"></p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: justify;"><strong>Qui contrôle l’application, le respect de la RT 2012&nbsp;?</strong></p>
<p style="text-align: justify;">Plusieurs organismes, personnes peuvent contrôler le respect de la RT 2012, qui nous le rappelons de nouveau, <span style="text-decoration: underline;">s’applique à tous les permis de construire de bâtiments neufs déposés depuis le 1er janvier 2013</span>&nbsp;:</p>
<ul>
<li>Le service instructeur du Permis de Construire et de l’Achèvement des Travaux</li>
<li>Les agents du ministère en charge de la construction, assermentés et commissionnés à cet effet (article L. 151-1 du code de la construction) jusqu’à 3 ans après l’achèvement des travaux.</li>
<li>Les Banques lorsqu’elles mettent en place des prêts aidés et/ou des hypothèques. En effet, une Construction non conforme à la réglementation a une valeur dépréciée, souvent inférieure au montant du financement accordé par la Banque.</li>
<li>L’administration fiscale</li>
<li>Les Notaires en cas de revente du bien</li>
<li>Le futur Propriétaire de votre Construction.</li>
</ul>
<p style="margin-left: 60px; text-align: justify;">En effet, le non-respect de la RT 2012, pourtant obligatoire, peut être perçu comme un vice caché par le nouveau Propriétaire de la Construction et une action en justice peut être mené par ce dernier.</p>
<p style="text-align: justify;"><strong>Quelles sanctions en cas de non-respect de la RT 2012&nbsp;?</strong></p>
<p style="text-align: justify;">Officiellement, la sanction prévue par la loi est d'ordre pénal, selon le droit pénal de la construction en cas de non-respect de la RT 2012. On retrouve ce champ d'application dans les "sanctions pénales" regroupant les articles L. 152-1 à L. 152-5 du Code de la construction et de l’habitation.</p>
<p style="text-align: justify;">Selon l'article L.152-4 du Code de la construction et de l'habitation, les personnes physiques (utilisateurs du sol, bénéficiaire des travaux, architectes, constructeurs ou toute autre personne responsable de l’exécution des travaux) ayant méconnu les obligations de la RT2012 sont passibles d'une amende de 45.000 € et d'une peine de 6 mois d'emprisonnement en cas de récidive.</p>
<p style="text-align: justify;">Selon l'article 121-2 du Code Pénal, les personnes morales sont également responsables et peuvent encourir une amende jusqu'à 225.000 € ainsi qu'une interdiction d'exercer dans ce domaine d'activité.</p>
<p style="text-align: justify;">L'article L. 152-2 du Code de la construction et de l'habitation prévoit l'interruption des travaux tant que les obligations thermiques n'auront pas été respectées.</p>
<p style="text-align: justify;">En cas de condamnation, l'article L. 152-5 du Code de la construction prévoit la mise en conformité des ouvrages avec les règlements, la démolition ou la réaffection du sol en vue rétablir les lieux dans l'état antérieur.</p>
<p style="text-align: right;">Rafael PEDREGAL – 05 janvier 2017</p>
	  </div>
EOT,
            'href' => './article.php',
        ],
    ];

        $news_by_id = group_by('uniq_id', $news);

        $article_id = $_GET["id"];
        $article = $news_by_id[$article_id][0];
        $main_title = $article['title'];
        include_once('./includes/head.php');
    ?>
    <?php include_once('./includes/styles.php'); ?>
</head>

<body class="flex-column-nowrap" style="overflow: hidden;">
    <?php include_once('./includes/header.php'); ?>
    <main class="container-fluid flex-column-nowrap flex-adapt-height flex-scrollable p-0">
        <?php include_once('./includes/aside.php'); ?>
        <!-- ARTICLE -->
        <?php
        /*$article = [
            'picture' => './images/pages/article/article-example.png',
            'title' => "Contrôle système de ventilation suivant le protocole Promevent",
            'date' => '2020-04-22 12:47',
            'text' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
        ];*/

        setlocale(LC_TIME, "fr_FR","French");
        $date_formatted = strftime("%A, %d %B %Y à %Hh%M", strtotime($article['created_at']));
        ?>
        <section id="article" class="page-section">
            <div class="page-container">
                <div class="page-section-header">
                    <div class="tsize-small tfont-medium text-uppercase mb-3 text-primary text-start"><?php echo($date_formatted); ?></div>
                    <h1 class="ttitle th1 text-start text-lg-center mb-3" style="white-space: break-spaces;"><?php echo($article['title']); ?></h1>
                </div>
                <div class="page-section-block">
                    <?php if(isset($item['picture']) && $item['picture']): ?>
                    <div class="mb-5" style="--aspect-ratio: 16/9;">
                        <img class="img-cover" src="<?php echo($article['picture']); ?>" alt="">
                    </div>
                    <?php endif; ?>
                    <p class="line-clamp mb-3" data-limit="4" style="min-height: 110px;"><?php echo(nl2br($article['text'])); ?></p>
                </div>
            </div>
        </section>
        <?php include_once('./includes/footer.php'); ?>
    </main>
    <?php include_once('./includes/modals.php'); ?>
    <?php include_once('./includes/scripts.php'); ?>
</body>