<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(){
        $details = [
            'title' => 'Mail from Chinekwe',
            'body' => 'This is for testing mail using gmail.'
        ];
        Mail::to("clevyhb@gmail.com")->send(new TestMail($details));
        return "Email sent";
    }
}
