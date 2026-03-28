<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;


class contactcontroller extends Controller
{
    public function send(ContactRequest $request)
    {
        $contact = Contact::create($request->validated());

        $data = [
            'name' => $contact->name,
            'email' => $contact->email,
            'phone' => $contact->phone,
            'subject' => $contact->subject,
            'messageContent' => $contact->message,
        ];

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to('your@email.com')
                    ->subject($data['subject']);
        });

        return back()->with('success', 'Message sent & saved successfully!');
    }
}
