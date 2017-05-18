<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Redirect;
use Illuminate\Contracts\Mail\Mailer;
use Mail;
use Swift_Transport;
use Swift_Message;
use Swift_Mailer;


/**
*clase Alertascontroller
*@autor jhon jaime ramirez cortes -lucerito Alarcon
*/
class AlertasController extends Controller
{
    

/**
*devuelve datos a la vista alertas blade
*@return  string direccion lista
*
*/
public function post()
{
	
$email=Input::get('email');
$mensaje=Input::get('mensaje');
$asunto=Input::get('asunto');

 $data_toview = array();
            $data_toview['name'] = $mensaje;
 
            $email_sender   = "92ramirescortes@gmail.com";
            $email_pass     = 'llanitos3012';
            $email_to    = $email;
 
            $backup = \Mail::getSwiftMailer();
 
            try{
            
                        $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 587, 'tls');
                        $transport->setUsername($email_sender);
                        $transport->setPassword($email_pass);
 
                        $gmail = new Swift_Mailer($transport);
 
                        \Mail::setSwiftMailer($gmail);
 
                        $data['emailto'] =$email_to;  
                        $data['sender'] = $email_sender;
                        $data['asunto']=$asunto;
 
                        Mail::send('emails.html', $data_toview, function($message) use ($data)
                        {
 
                            $message->from($data['sender'], 'Colegio Bello Horizonte');
                            $message->to($data['emailto'])
                            ->replyTo($data['sender'], 'Colegio Bello Horizonte')
                            ->subject($data['asunto']);
 
                            echo 'The mail has been sent successfully';
 
                        });
 
            }catch(\Swift_TransportException $e){
                $response = $e->getMessage() ;
                echo $response;
            }
 
 
            Mail::setSwiftMailer($backup);
 

return Redirect::to('alertas')->with('success','Envio  Exitoso');

}




}
