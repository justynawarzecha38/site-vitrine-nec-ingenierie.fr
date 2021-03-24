<?php
    if(!isset($main_nav_key)) {
        $main_nav_key = '';
    }
    $main_nav = [
        'home' => ['title' => 'Accueil' , 'href' => './'],
        'about' => ['title' => '&Agrave; propos', 'href' => './a-propos.php'],
        'news' => ['title' => 'News', 'href' => './news.php'],
        'solutions' => ['title' => 'Nos solutions', 'href' => './nos-solutions.php'],
        'regulations' => ['title' => 'R&eacute;glementation', 'href' => './reglementation.php'],
        'contact' => ['title' => 'Contact', 'href' => './contact.php'],
        'join-us' => ['title' => 'Rejoignez-nous', 'href' => './rejoignez-nous.php'],
    ];
?>
<nav id="page-navbar" class="navbar navbar-expand-lg fixed-top navbar-light">
    <div class="container-md">
        <a class="navbar-brand" href="./index.php">
            <img class="w-auto h-100" src="./images/logos/Logo_NrjDiags_quadri.png" alt="" width="215" height="84">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#page-nav"
                aria-controls="page-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="page-nav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php foreach($main_nav as $key => $item): ?>
                <li class="nav-item<?php echo($main_nav_key === $key ? ' active' : ''); ?>">
                    <a class="nav-link tlink tsize-small <?php echo($main_nav_key === $key ? ' active' : ''); ?>"
                       <?php echo($main_nav_key === $key ? 'aria-current="page" ' : ''); ?>
                       href="<?php echo($item['href']); ?>"><?php echo($item['title']); ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>