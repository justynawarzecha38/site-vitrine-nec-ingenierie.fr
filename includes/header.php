<?php
    if(!isset($main_nav_key)) {
        $main_nav_key = '';
    }
    $main_nav = [
        'home' => ['title' => 'Accueil' , 'href' => './'],
        'about' => ['title' => '&Agrave; propos', 'href' => './a-propos.php'],
        'news' => ['title' => 'News', 'href' => './news.php'],
        'solutions' => ['title' => 'Nos solutions', 'href' => './nos-solutions.php'],
        'contact' => ['title' => 'Contact', 'href' => './contact.php'],
        'join-us' => ['title' => 'Rejoignez-nous', 'href' => './rejoignez-nous.php'],
    ];
?>
<nav id="page-navbar" class="navbar navbar-expand-lg fixed-top navbar-light">
    <div class="container-md">
        <a class="navbar-brand" href="./index.php">
            <img class="w-auto h-100" src="./images/logos/Logo_NEC_Concept.jpg?v=<?php echo(date("Y-m-d-H-i-s", filemtime('./images/logos/Logo_NEC_Concept.jpg'))) ?>" alt="" width="215" height="84">
        </a>
        <a class="navbar-brand" href="./index.php">
            <img class="w-auto h-100" src="./images/logos/Logo_NEC_Concept.jpg?v=<?php echo(date("Y-m-d-H-i-s", filemtime('./images/logos/Logo_NEC_Concept.jpg'))) ?>" alt="" width="215" height="84">
        </a>
        <a class="navbar-brand" href="./index.php">
            <img class="w-auto h-100" src="./images/logos/Logo_NEC_Concept.jpg?v=<?php echo(date("Y-m-d-H-i-s", filemtime('./images/logos/Logo_NEC_Concept.jpg'))) ?>" alt="" width="215" height="84">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#page-nav"
                aria-controls="page-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="page-nav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php foreach($main_nav as $key => $item): ?>
                <?php
                    $has_subnav = isset($item['list']) && !empty($item['list']);
                    $is_active = $main_nav_key === $key;
                    if ($has_subnav) {
                        $is_active = strpos($main_nav_key, $key) !== false;
                    }
                ?>
                <li class="nav-item<?php echo($is_active ? ' active' : ''); echo($has_subnav ? ' dropdown' : ''); ?>">
                    <a id="main-nav-item-<?php echo($key); ?>" type="button"
                       class="nav-link tlink tsize-small<?php echo($is_active ? ' active' : ''); ?>"
                       <?php
                            echo($has_subnav ? ' data-bs-toggle="dropdown" aria-expanded="false"' : ' href="'.$item['href'].'"');
                            echo($is_active && !$has_subnav ? ' aria-current="page"' : '');
                       ?>>
                        <span><?php echo($item['title']); ?></span>
                        <?php if($has_subnav): ?>
                            <i class="fas fa-caret-down" aria-hidden="true"></i>
                        <?php endif; ?>
                    </a>
                    <?php if($has_subnav): ?>
                    <ul class="dropdown-menu" aria-labelledby="main-nav-item-<?php echo($key); ?>">
                        <?php foreach($item['list'] as $subitem): ?>
                            <li>
                                <a class="tsize-small text-uppercase dropdown-item<?php echo($main_nav_key === $subitem['nav_key'] ? ' active' : ''); ?>"
                                    <?php echo($main_nav_key === $subitem['nav_key'] ? 'aria-current="page" ' : ''); ?>
                                   href="<?php echo($subitem['href']); ?>"><?php echo($subitem['title']); ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>
