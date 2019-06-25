<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    //
    public function sendMail(Request $request){
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $str_message = $request->input('message');
        $to_name = 'Rando Dalawis';
        $to_email = 'rando.dalawis07@gmail.com';
        $data = array('firstName'=> $firstName, 'lastName' => $lastName, 
            'subject' => $subject, 'email' => $email, 'str_message' => $str_message);
            
        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                    ->subject('Message From Website Portfolio');
            $message->from('qwerandhong@gmail.com','R.Dev Website');
        });

        return "success";
    }
}
