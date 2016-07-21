<?php

namespace App\Http\Controllers;

class Contact 
{
    //
    public $email;
    public $question;
    public $name;
    public $phone;
    function __construct($name,$phone,$email,$question) {
           $this->email=$email;
           $this->question=$question;
           $this->name=$name;
           $this->phone=$phone; 
    } 

    public function setEmail($email){
        $this->email=$email;        
    }
     public function setQuestion($question){
        $this->$question=$question;        
    }
     public function setName($name){
        $this->name=$name;        
    }
     public function setPhone($phone){
        $this->phone=$phone;        
    }


}
