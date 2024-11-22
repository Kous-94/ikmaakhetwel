<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all(); // Get all contacts
        return view('contacts.index', compact('contacts'));
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id); // Find a contact by ID
        return view('contacts.show', compact('contact'));
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id); // Find contact by ID
        $contact->delete(); // Delete the contact
        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully');
    }
    
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
