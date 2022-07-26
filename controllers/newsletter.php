<?php

    //$dir = explode('\controllers', __DIR__)[0];
    $dir = $_SERVER["DOCUMENT_ROOT"] . "/site-vitrine-nec-ingenierie.fr";
    if (empty($_POST['email'])) {
        header('Content-type: application/json');
        echo json_encode([
            'message' => "Vous n'avez renseigné aucun email.",
            'type' => 'warning'
        ]);
        exit();
    }
    $datetime = new \Datetime();
    $str_datetime = $datetime->format('Y-m-d-H-i-s');
    if (!file_exists($dir ."/forms/list/".$str_datetime.".txt")) {
        try {
            $new_file = fopen($dir ."/forms/list/".$str_datetime.".txt", "w");
            fwrite($new_file, $_POST['email']);
            fclose($new_file);
            header('Content-type: application/json');
            echo json_encode([
                'message' => "Votre inscription a été envoyée avec succès.",
                'type' => 'success',
                'filename' => $dir ."/forms/list/".$str_datetime.".txt",
            ]);
            exit();
        } catch (\Exception $e) {
            header('Content-type: application/json');
            echo json_encode([
                'message' => $e->getMessage(),
                'type' => 'warning',
            ]);
            exit();
        }
    }
    exit();
