<?php
    $websites_nav = [
        'abm' => [
            'title' => 'ABM Énergie Conseil',
            'href' => 'https://www.abmec.fr/',
            'hover_color' => '#85ba36',
            'logo_icon' => './images/logos/compositions/insigne-abm.svg',
            'logo_text' => './images/logos/compositions/texte-abm.svg',
        ],
        'acc' => [
            'title' => 'Acousti Control',
            'href' => 'https://www.acousticontrol.fr/',
            'hover_color' => '#b21e7f',
            'logo_icon' => './images/logos/compositions/insigne-acc.svg',
            'logo_text' => './images/logos/compositions/texte-acc.svg',
        ],
        'nec' => [
            'title' => 'New Énergie Concept',
            'href' => 'https://www.nec-ingenierie.fr/',
            'hover_color' => '#d92849',
            'logo_icon' => './images/logos/compositions/insigne-nec.svg',
            'logo_text' => './images/logos/compositions/texte-nec.svg',
        ],
        /*'nrj' => [
            'title' => 'NRJ Diags',
            'href' => 'https://www.nrjdiags.fr/',
            'hover_color' => '#3FB1E1',
            'logo_icon' => './images/logos/compositions/insigne-nrj.svg',
            'logo_text' => './images/logos/compositions/texte-nrj.svg',
        ],*/
        'pmb' => [
            'title' => 'PMB Software',
            'href' => 'https://www.pmb-software.fr/',
            'hover_color' => '#f09c27',
            'logo_icon' => './images/logos/compositions/insigne-pmb.svg',
            'logo_text' => './images/logos/compositions/texte-pmb.svg',
        ],
    ];
?>
<style>
    #websites-nav {
        position: fixed;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        /*z-index: 2000;*/
        z-index: 1020;
    }
    #websites-nav .websites-item {
        display: flex;
        flex-flow: column nowrap;
        align-items: flex-end;
    }
    .websites-item .website-link {
        --website-hover-color: var(--quaternary-color);
        display: flex;
        align-items: center;
        padding: 10px;
        width: 50px;
        height: 50px;
        transition: background-color 0.3s var(--standard-easing), width 0.45s var(--standard-easing);
        background-color: #043F65;
    }
    .websites-item .website-link:hover,
    .websites-item .website-link:focus {
        width: 125px;
        background-color: var(--website-hover-color);
    }
    .websites-item .website-link > * {
        pointer-events: none;
    }
    .website-link .website-logo-icon {
        margin-right: 0.5rem;
        width: 35px;
        height: 35px;
        flex: 0 0 auto;
    }
    .website-link .website-logo-text {
        display: none;
        height: 100%;
        width: 100%;
        opacity: 0;
        transition: opacity 0.6s var(--standard-easing);
    }
    .website-link:hover .website-logo-text,
    .website-link:focus .website-logo-text {
        display: block;
        opacity: 1;
    }
</style>
<aside id="websites-nav">
    <ul class="websites-list list-unstyled mb-0">
        <?php foreach($websites_nav as $key => $item): ?>
            <li class="websites-item">
                <a class="website-link" href="<?php echo($item['href']); ?>"
                   title="<?php echo($item['title']); ?>" style="--website-hover-color: <?php echo($item['hover_color']); ?>;">
                    <div class="website-logo-icon">
                        <img class="img-contain" src="<?php echo($item['logo_icon']); ?>?v=<?php echo(date("Y-m-d-H-i-s", filemtime($item['logo_icon']))) ?>">
                    </div>
                    <div class="website-logo-text">
                        <img class="img-contain" src="<?php echo($item['logo_text']); ?>?v=<?php echo(date("Y-m-d-H-i-s", filemtime($item['logo_text']))) ?>" style="height: 100%;">
                    </div>
                    <span class="sr-only"><?php echo($item['title']); ?></span>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</aside>