<?php

namespace App\Http\Controllers;

use App\Mail\smtpmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request){

        $details =[

            'title' => 'Mail from blah',
            'body' => 'this is blah'
        ];

        Mail::to("suyash@openspaceservices.com")-> send(new smtpmail($details));
        return "email sent";
    }
}
