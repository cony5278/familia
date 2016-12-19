<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Contact;
use Session;
use Mail;
use App\Http\Requests\EmailRequest;
class UserController extends Controller
{
    //
     public function index(){
    
      		
     }   
     public function store(Request $request){

        
        $rules = [
            'name'=>'required',
            'email'=>'required|email',
            'phone' =>'required|numeric',
            'question'=>'required'
            ];
 
        // Ejecutamos el validador, en caso de que falle devolvemos la respuesta
        $validator = \Validator::make($request->all(), $rules);
        if ($validator->fails()) {           
            return view('alert.email')->with([
                'created' => true,
                'errors'  => $validator->errors()->all()
            ]);
        }else{
           
            $contact=new Contact($request['name'],$request['phone'],$request['email'],$request['question']);
        
             $this->enviar_correo('email.notice',$contact);            
             return view('alert.email')->with([
                'created' => false,              
            ]);           
        }

     
         //$contact=new Contact($request['name'],$request['phone'],$request['email'],$request['question']);
     	
     //	     $this->enviar_correo('email.notice',$contact);
    
      
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
