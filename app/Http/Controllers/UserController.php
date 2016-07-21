<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Contact;
use Session;
use Mail;
class UserController extends Controller
{
    //
     public function index(){
    
      		dd("index");
     }   
     public function store(Request $request){
     	 $contact=new Contact($request['name'],$request['phone'],$request['email'],$request['question']);
     	
     	     $this->enviar_correo('email.notice',$contact);
    		 Session::flash('mensaje', 'Su Correo sera evaluado oportunamente');
      		return redirect('/');
     }    
      public function create(){
    
      		dd("store");
     }   
     public function enviar_correo($vista,$contact){

        $data = array(
            'contact' => $contact,
        );
        Mail::send($vista, $data, function ($message) use ($contact) {
            $message->from('nuevojuanchaco67@gmail.com', 'Mundocente');
            $message->to($contact->email)->subject("Responder Urgente");
        });
    }
}
