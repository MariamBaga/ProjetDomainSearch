<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //

    public function view()
    {
        return view('Contacts.view');
    }
 public function sendmessage(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Mail::to('rece@gmail.com')->send(new ContactFormMail($data));

        return  back()->with('success', 'Thank you for your message. We will get back to you soon.');


}
}
