<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;  // Ensure this is the correct namespace for your Mailable class
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $email = 'shrupatil1319@gmail.com';
        $message = 'Hello, welcome!';
        $subject = 'Welcome to my site';

        try {
            // Send email
            Mail::to($email)->send(new WelcomeEmail($message, $subject));

            // If you reach here, email was sent successfully
            return 'Email sent successfully!';
        } catch (\Exception $e) {
            // Handle any errors during the mail sending process
            return 'Failed to send email: ' . $e->getMessage();
        }
    }
}
