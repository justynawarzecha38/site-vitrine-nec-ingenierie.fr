<!DOCTYPE  html>
<html>
<head>
<meta  charset="utf-8"  />
    <?php

    use Dotenv\Dotenv;

    $main_title = 'Connection';
    $main_nav_key = 'connexion';
    include_once('./includes/head.php');
    ?>
    <?php include_once('./includes/styles.php'); ?>
    <link rel="stylesheet" href="./styles/pages/home.css?v=<?php echo(date("Y-m-d-H-i-s", filemtime('./styles/pages/home.css'))) ?>">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>

<?php
session_start();
include_once('./includes/header.php');
?>

<body class="flex-column-nowrap" style="overflow: hidden;">
    <main class="container-fluid flex-column-nowrap flex-adapt-height flex-scrollable p-0">
        <center>
            <h1>Authentification</h1>
            <div  class="erreur"></div>
            <form  name="form" method="post" action="./controllers/verifie_connection.php">
                <input type="text" class="m-1" name="iden" placeholder="identifiant"  /><br  />
                <input type="password" class="m-1" name="password" placeholder="mot de passe"  /><br  />
                <?php if(empty($_SESSION['acces'])): ?>
                    <input  type="submit" class="btn btn-primary btn-lg tlink tfont-bold text-uppercase m-1"  name="button"  value="S'authentifier"  />
                <?php elseif($_SESSION['acces'] == "no"): ?>
                    <input  type="submit" class="btn btn-primary btn-lg tlink tfont-bold text-uppercase m-1"  name="button"  value="S'authentifier"  />
                <?php elseif ($_SESSION["acces"] == "yes"): ?>
                    <input  type="submit" class="btn btn-primary btn-lg tlink tfont-bold text-uppercase m-1" name="button"  value="S'authentifier"  /><br>
                    <input  type="submit" class="btn btn-primary btn-lg tlink tfont-bold text-uppercase m-1" name="button"  value="Se deconnecter"  />
                <?php endif; ?>
            </form>
        </center>
    </main>
</body>

<?php include_once('./includes/footer.php'); ?>
