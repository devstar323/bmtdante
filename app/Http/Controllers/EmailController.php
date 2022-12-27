<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{
    //
    public function sendEmail(Request $request)
    {
        /** 
         * Store a receiver email address to a variable.
         */
        ////////////////// Email Address of this site //////////////////
        $reveiverEmailAddress = "";
        /**
         * Import the Mail class at the top of this page,
         * and call the to() method for passing the 
         * receiver email address.
         * 
         * Also, call the send() method to incloude the
         * HelloEmail class that contains the email template.
         */

        $data = [];
        
        $data['email'] = $request->email;
        $data['message'] = $request->message;

        Mail::to($reveiverEmailAddress)->send(new Email($data));

        /**
         * Check if the email has been sent successfully, or not.
         * Return the appropriate message.
         */
        if (Mail::failures() != 0) {
            return "Email has been sent successfully.";
        }
        return "Oops! There was some error sending the email.";
    }
}
