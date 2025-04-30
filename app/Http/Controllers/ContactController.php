<?php

namespace App\Http\Controllers;

use App\Mail\Mailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request){
        $jsonAJAX = $request->json()->all();

        $name = $jsonAJAX['name'];
        $organization = $jsonAJAX['organization'];
        $subject = $jsonAJAX['inquiry'];
        $number = $jsonAJAX['number'];
        $email = $jsonAJAX['email'];
        $toEmail = "rojaymerlin@gmail.com";
        // $toEmail = "company@gmail.com";
        $message = $jsonAJAX['message'];

        $email = Mail::to($toEmail)->send(new Mailer($message, $subject, $email, $name, $organization, $number));
        if($email){
            return response()->json(['success' => 'Email sent successfully']);
        }else{
            return response()->json(['error' => 'Email not sent']);
        }
    }
}
