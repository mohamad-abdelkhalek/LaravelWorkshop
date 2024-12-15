<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    // Show contact form
    public function index()
    {
        return view('contactUs');
    }

    // Handle contact form submission
    public function store(Request $request)
    {
        // Validate input data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Extract validated data
        $name = $validatedData['name'];
        $subject = $validatedData['subject'];
        $email = $validatedData['email'];
        $userMessage = $validatedData['message']; // Avoid conflict with $message object

        // Define recipient email
        $recipientEmail = 'support@example.com';

        // Send the email
        Mail::send(
            'email.contact', // View file for the email body
            compact('name', 'subject', 'email', 'userMessage'),
            function ($mail) use ($recipientEmail, $subject, $email) {
                $mail->to($recipientEmail);
                $mail->from($email);
                $mail->subject($subject);
            }
        );

        // Redirect back with success message
        return back()->with('success', 'Thank you for contacting us!');
    }
}
