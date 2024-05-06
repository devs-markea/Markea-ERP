<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class WebSitesController extends Controller
{
    //

    public function saveFormData(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            // Add more validations as per your requirements
        ]);

        // Create a new form instance
        $form = new Form([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'company' => $request->input('company'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            // Add more fields as per the data you expect from the form
        ]);

        // Save the form data to the database
        $form->save();
        //Load Composer's autoloader
//        require __DIR__ . '/../vendor/autoload.php';



//Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp-relay.brevo.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'kalanobleasmkt@gmail.com';                     //SMTP username
            $mail->Password   = 'wk7bxRE8BhJFyW19';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
//    $mail->Port       = 587;
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            //Recipients
            $mail->setFrom('admin@markea.agency', 'Administrador');
//    $mail->setFrom('info@mnamaquila.com', 'MNA Maquila');
            $mail->addAddress('dennis@markea.agency', 'MNA Maquila');     //Add a recipient
//    $mail->addAddress('ellen@example.com');               //Name is optional
//    $mail->addReplyTo('info@example.com', 'Information');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');

            //Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            // Obtener el contenido del template HTML

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            // Incluir el template PHP y pasar el mensaje del formulario como parámetro


            $contactMessage = new \stdClass();
            // Supongamos que $contactMessage es un objeto stdClass vacío
            $contactMessage->message = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc in iaculis urna. Ut lobortis feugiat rhoncus. Nullam tempus, velit sit amet dignissim congue, diam ex rutrum sem, vel pellentesque ipsum ipsum quis metus. Curabitur pellentesque, sapien non blandit sollicitudin, risus neque sagittis libero, ut blandit nibh lorem ut elit. Fusce suscipit fringilla blandit. ';
            $contactMessage->telephone = $request->input('phone');
            $contactMessage->email = $request->input('email');
            $contactMessage->name = $request->input('first_name') .' '. $request->input('last_name');
            $contactMessage->organization = $request->input('company');
//            $contactMessage->imagenPathLogo = public_path('images/logo-mna-maq.png');
            $contactMessage->imagenPathHero = public_path('images/header-markea.png');

            // Adjuntar la imagen al correo electrónico
            $mail->AddEmbeddedImage($contactMessage->imagenPathHero, 'heroimg');
//            $mail->AddEmbeddedImage($contactMessage->imagenPathLogo, 'logoimg');

            ob_start();
            require app_path('Email/contact-message.php');

            $html = ob_get_clean();
            $mail->Subject = 'Nuevo de mensaje de ' . $request->input('first_name') . $request->input('last_name');
            $mail->Body .= $html;
            $mail->AltBody = 'Mensaje 2';
            $mail->send();

// Tu lógica PHP aquí

// Luego, genera el código JavaScript para SweetAlert



        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        // Return a success response
        return response()->json(['message' => 'Form data saved successfully'], 201);
    }
}
