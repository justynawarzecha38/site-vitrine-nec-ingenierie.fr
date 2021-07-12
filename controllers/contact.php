<?php
//Load Composer's autoloader
require '../vendor/autoload.php';
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;
try {
    $dir = $_SERVER["DOCUMENT_ROOT"];
    $dotenv = Dotenv::createImmutable($dir);
    $dotenv->load();

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

    //$datetime = new \Datetime();
    //$str_datetime = $datetime->format('Y-m-d-H-i-s');
    //if (!file_exists($dir ."/forms/contact/".$str_datetime.".txt")) {
    $text = "<b>Agence</b> : ".htmlentities($data['agency'])."\r\n\r\n";
    $text .= "<b>".htmlentities("Société")."</b>  : ".htmlentities($data['company'])."\r\n\r\n";
    $text .= "<b>Nom</b>  : ".htmlentities($data['name'])."\r\n\r\n";
    $text .= "<b>Email</b>  : ".htmlentities($data['email'])."\r\n\r\n";
    $text .= "<b>".htmlentities("Téléphone")."</b>  : ".htmlentities($data['tel'])."\r\n\r\n";
    $text .= "<b>Message</b>  : ".nl2br(htmlentities($data['message']));

    //$new_file = fopen($dir ."/forms/contact/".$str_datetime.".txt", "w");
    //fwrite($new_file, $text);
    //fclose($new_file);


    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = $_ENV['MAIL_ENCRYPTION'];
        $mail->Host       = $_ENV['MAIL_HOST'];
        $mail->Port       = $_ENV['MAIL_PORT'];
        $mail->Username   = $_ENV['MAIL_USERNAME'];
        $mail->Password   = $_ENV['MAIL_PASSWORD'];

        //Recipients
        $mail->setFrom($_ENV['MAIL_FROM_ADDRESS'], $_ENV['MAIL_FROM_NAME']);
        //$mail->AddAddress("sebastien.colbe@pmb-software.fr");
        $mail->AddAddress($_ENV['MAIL_FROM_ADDRESS']);

        //Content
        $mail->Subject = 'Contact';
        $mail->Body    = nl2br($text);
        $mail->isHTML(true);
        $mail->send();

        header('Content-type: application/json');
        echo json_encode([
            'message' => "Votre demande de contact a été envoyée avec succès.",
            'type' => 'success',
        ]);
    } catch (Exception $e) {
        header('Content-type: application/json');
        echo json_encode([
            'message' => 'Mailer Error: ' .$mail->ErrorInfo,
            'type' => 'warning',
        ]);
    }
    //}
} catch (\Exception $e) {
    header('Content-type: application/json');
    echo json_encode([
        'message' => $e->getMessage(),
        'type' => 'warning',
    ]);
}
exit();