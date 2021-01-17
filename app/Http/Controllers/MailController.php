<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function SendMail(){
        $details = [
            'title'=> 'Mail from med',
            'body' => 'this is for test'
        ];
        Mail::to('miloudimohamed1986@gmail.com')->send(new TestMail($details));
        return 'Email sent';
    }
    
}
   
