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

        $news = [];

        $news_by_id = !empty($news) ? group_by('uniq_id', $news) : [];

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
                        <img class="img-cover" src="<?php echo($article['picture']); ?>?v=<?php echo(date("Y-m-d-H-i-s", filemtime($article['picture']))) ?>" alt="">
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