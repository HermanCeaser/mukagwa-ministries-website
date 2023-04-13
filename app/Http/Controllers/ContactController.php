<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index()
    {
        $title = "Contact Us";
        return view('pages.contact', compact('title'));
    }




    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:4|max:50',
            'email' => 'required|email',
            'subject' => 'required|string|min:4|max:50',
            'message' => 'required|min:10|max:250'
        ]);

        // $name = $request->name;
        // $email = $request->email;
        // $subject = $request->subject;
        // $message = $request->name;

        // $EmailTo = "info@mukagwaministries.com";
        // // Prepare Email Body Text
        // $Body = null;
        // $Body .= "<p><b>Name:</b> {$name}</p>";
        // $Body .= "<p><b>Email:</b> {$email}</p>";
        // $Body .= "<p><b>Subject:</b> {$subject}</p>";
        // $Body .= "<p><b>Message:</b> </p><p>{$message}</p>";

        // // Send Email
        // $headers = 'MIME-Version: 1.0' . "\r\n";
        // $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        // $headers .= 'From:  ' . $name . ' <' . $email . '>' . " \r\n" .
        //     'Reply-To: ' .  $EmailTo . "\r\n" .
        //     'X-Mailer: PHP/' . phpversion();

        try {
            // mail($EmailTo, $subject, $message, $headers);
            $contact = Contact::create($request->all());
            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMail($contact));
            return redirect()->back()->with(['success' => 'Thank you for contacting us. We will get back to you Shortly']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => 'Failed to send the Email. Try Again Later']);
        }
    }
}
