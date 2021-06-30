<?php
    $input_data = $_POST;
    $data = [];
    $data['agency'] = isset($input_data['agency']) ? $input_data['agency'] : "";
    $data['company'] = isset($input_data['company']) ? $input_data['company'] : "";
    $data['name'] = isset($input_data['name']) ? $input_data['name'] : "";
    $data['email'] = isset($input_data['email']) ? $input_data['email'] : "";
    $data['tel'] = isset($input_data['tel']) ? $input_data['tel'] : "";
    $data['message'] = isset($input_data['message']) ? $input_data['message'] : "";

    header('Content-type: application/json');

    if (!$data['agency']) {
        echo json_encode([
            'message' => "L'agence renseignée n'est pas valide.",
            'type' => "warning",
        ]);
        exit();
    }
    if (!$data['name']) {
        echo json_encode([
            'message' => "Le nom renseigné n'est pas valide.",
            'type' => "warning",
        ]);
        exit();
    }
    if (!$data['email']) {
        echo json_encode([
            'message' => "L'adresse email renseignée n'est pas valide.",
            'type' => "warning",
        ]);
        exit();
    }
    if (!$data['tel']) {
        echo json_encode([
            'message' => "Le numéro de téléphone renseigné n'est pas valide.",
            'type' => "warning",
        ]);
        exit();
    }
    if (!$data['message']) {
        echo json_encode([
            'message' => "Le message renseigné n'est pas valide.",
            'type' => "warning",
        ]);
        exit();
    }

    //$dir = explode('\controllers', __DIR__)[0];
    $dir = $_SERVER["DOCUMENT_ROOT"];
    $datetime = new \Datetime();
    $str_datetime = $datetime->format('Y-m-d-H-i-s');
    if (!file_exists($dir ."/forms/contact/".$str_datetime.".txt")) {
        try {
            $text = "Agence : ".$data['agency']."\r\n";
            $text .= "Société : ".$data['company']."\r\n";
            $text .= "Nom : ".$data['name']."\r\n";
            $text .= "Email : ".$data['email']."\r\n";
            $text .= "Téléphone : ".$data['tel']."\r\n";
            $text .= "Message : ".nl2br($data['message']);

            $new_file = fopen($dir ."/forms/contact/".$str_datetime.".txt", "w");
            fwrite($new_file, $text);
            fclose($new_file);
            header('Content-type: application/json');
            echo json_encode([
                'message' => "Votre demande de contact a été envoyée avec succès.",
                'type' => 'success',
            ]);
        } catch (\Exception $e) {
            header('Content-type: application/json');
            echo json_encode([
                'message' => $e->getMessage(),
                'type' => 'warning',
            ]);
        }
    }
    exit();