<?php
//Load Composer's autoloader
require '../vendor/autoload.php';
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;
try {
    // Local directory
    $dir = dirname(__DIR__, 1);
    // Remote directory
    // $dir = $_SERVER["DOCUMENT_ROOT"];
    $dotenv = Dotenv::createImmutable($dir);
    $dotenv->load();

    /*$input_data = $_POST;
    $data = [];
    $data['first_name'] = isset($input_data['first_name']) ? $input_data['first_name'] : "";
    $data['last_name'] = isset($input_data['last_name']) ? $input_data['last_name'] : "";
    $data['email'] = isset($input_data['email']) ? $input_data['email'] : "";
    $data['tel'] = isset($input_data['tel']) ? $input_data['tel'] : "";
    $data['object'] = isset($input_data['object']) ? $input_data['object'] : "";
    $data['message'] = isset($input_data['message']) ? $input_data['message'] : "";
    $data['file'] = isset($_FILES['file']) ? $_FILES['file'] : '';*/

    $options = [
        'first_name' 	=> FILTER_SANITIZE_STRING,
        'last_name' 	=> FILTER_SANITIZE_STRING,
        'email' 		=> FILTER_VALIDATE_EMAIL,
        'tel' 		    => FILTER_SANITIZE_NUMBER_INT,
        'object' 		=> FILTER_SANITIZE_STRING,
        'message' 		=> FILTER_SANITIZE_STRING
    ];
    $data = filter_input_array(INPUT_POST, $options);
    $data['file'] = isset($_FILES['file']) ? $_FILES['file'] : '';

    header('Content-type: application/json');

    /*echo json_encode([
        'message' => $data,
        'type' => "warning",
    ], true);
    exit();*/

    if (!$data['first_name']) {
        echo json_encode([
            'message' => "Le prénom renseigné n'est pas valide.",
            'type' => "warning",
        ]);
        exit();
    }
    if (!$data['last_name']) {
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
    if (!$data['object']) {
        echo json_encode([
            'message' => "Le sujet renseigné n'est pas valide.",
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
    if (!$data['file']) {
        echo json_encode([
            'message' => "Le CV renseigné n'est pas valide.",
            'type' => "warning",
        ]);
        exit();
    }

    //$dir = __DIR__;
    $datetime = new \Datetime();
    $str_datetime = $datetime->format('Y-m-d-H-i-s');

    $file_extension = pathinfo($data['file']['name'], PATHINFO_EXTENSION);
    $new_filename = $dir ."/forms/join/files/".$str_datetime.".".$file_extension;

    if (file_exists($new_filename)){
        echo json_encode([
            'message' => "Un problème est survenu lors de l'exécution de la requête.",
            'type' => "warning",
        ]);
        exit();
    }
    // Check file size
    if ($data['file']["size"] > 1048576){
        echo json_encode([
            'message' => "Le poids du fichier envoyé dépasse 1 Mo.",
            'type' => "warning",
        ]);
        exit();
    }
    // Allow certain file formats
    if(!in_array($file_extension, ['jpg', 'jpeg', 'png', 'gif', 'pdf'])){
        echo json_encode([
            'message' => "Le format du fichier n'est pas valide. Vous ne pouvez envoyer qu'une image ou un fichier au format PDF.",
            'type' => "warning",
        ]);
        exit();
    }
    // Try to upload file
    /*if (!move_uploaded_file($_FILES['file']["tmp_name"], $new_filename)):
        echo json_encode([
            'message' => "Un problème est survenu lors de l'envoi du fichier.",
            'type' => "warning",
        ]);
    endif;*/

    //if (!file_exists($dir ."/forms/join/".$str_datetime.".txt")):
    $text = "<b>".htmlentities("Prénom")." : </b>".htmlentities($data['first_name'])."\r\n\r\n";
    $text .= "<b>Nom</b> : ".htmlentities($data['last_name'])."\r\n\r\n";
    $text .= "<b>Email</b> : ".htmlentities($data['email'])."\r\n\r\n";
    $text .= "<b>".htmlentities("Téléphone")." : </b>".htmlentities($data['tel'])."\r\n\r\n";
    $text .= "<b>Message</b> : ".nl2br(htmlentities($data['message']))."\r\n\r\n";

    $new_file = tempnam(sys_get_temp_dir(), hash('sha256', $data['file']['name']));

    /*echo json_encode([
        'message' => "Votre candidature a été envoyée avec succès.",
        'type' => 'success',
    ]);*/
    //endif;
    if (!move_uploaded_file($data['file']['tmp_name'], $new_file)){
        echo json_encode([
            'message' => "Un problème est survenu lors de l'envoi du fichier.",
            'type' => "warning",
        ]);
        exit();
    }


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
        $mail->AddAddress("sebastien.colbe@pmb-software.fr");
        //$mail->AddAddress($_ENV['MAIL_FROM_ADDRESS']);
        $mail->addAttachment($new_file, $data['file']['name']);

        //Content
        $mail->Subject = $data['object'];
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
} catch (\Exception $e) {
    echo json_encode([
        'message' => $e->getMessage(),
        'type' => 'warning',
    ]);
}
exit();