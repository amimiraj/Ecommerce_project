<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller {

    
    
    
    
    public function sendEmail() {
        
        $details=[
            'title'=>'mail from miraj',
            'body'=>'this is for testing'
            
        ];
                \Mail::to("akibmiraj1998@gmail.com")->send(new\App\Mail\TestMail($details));
                return "Email sent";
        
    }

    
    
}
