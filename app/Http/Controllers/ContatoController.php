<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;






class ContatoController extends Controller
{
    public function index()
    {
        return view('Contato.Contato');
    }

    public function send(Request $request) {
        {

            $name = $request->name;
            $email = $request->email;
            $subject = $request->subject;
            $message = $request->message;


            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->CharSet = "UTF-8";
            $mail->Host = 'sandbox.smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Port = 2525;
            $mail->Username = '931b167fbf5161';
            $mail->Password = '8a4dbe2117fcec';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;
            $mail->setFrom($email,$name);
            $mail->addAddress('naoresponda@pizzaapp.sad');
            $mail->isHTML(true);
            $mail->Subject = $subject;


            $mail->Body = $message;
            // $mail->FromName = $name;
            // $mail->From = $email;
            $dt = $mail->send();
            if($dt){
                return redirect()->route('contato')->with('success', 'E-mail enviado com sucesso');
            } else{
                return redirect()->route('contato')->with('error', 'Não foi possivel enviar o seu E-mail');
            }

        }
    }
}
