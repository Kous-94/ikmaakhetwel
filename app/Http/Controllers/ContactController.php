<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendContactEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|string', // Validate phone number (optional)
            'message' => 'required|string',
        ]);

        // Store message in database
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone; // Assign phone number if provided
        $contact->message = $request->message;
        $contact->save();

        // Send email notification (optional)
        // Mail::send('emails.contact', [
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone, // Pass phone number to email view if needed
        //     'messageBody' => $request->message,
        // ], function ($message) {
        //     $message->to('kousae.albouni@gmail.com', 'Your Name')->subject('New Contact Message');
        // });

        return redirect()->back()->with('success', 'Thank you! Your message has been sent.');
    }
}
