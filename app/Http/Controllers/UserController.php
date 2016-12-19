<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Contact;
use Session;
use Mail;
use App\Http\Requests\ValidationFormulario;
class UserController extends Controller
{
    //
     public function index(){
    
      		
     }   
     public function store(ValidationFormulario $request){            
            $contact=new Contact($request['name'],$request['phone'],$request['email'],$request['question']);
            $this->enviar_correo('email.notice',$contact);            
             return view('alert.email')->with([
                'created' => false,              
            ]);                
     }    
    public function create(){
    
      		
     }   
     public function enviar_correo($vista,$contact){

        $data = array(
            'contact' => $contact,
        );
        Mail::send($vista, $data, function ($message) use ($contact) {
            $message->from($contact->email, 'EVSSA');
            $message->to($contact->email)->subject("Solicitud en proceso.");
        });
        Mail::send('email.company', $data, function ($message) use ($contact) {
            $message->from($contact->email, 'RECIBIDO');
            $message->to('essotec.ing@gmail.com')->subject("Procesar solicitud");
        });
    }
}
