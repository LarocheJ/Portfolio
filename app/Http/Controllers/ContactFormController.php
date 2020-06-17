<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create()
    {
        $title = 'Contact';
        return view('contact.create')->with('title', $title);
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'email|required',
            'subject' => 'string|nullable',
            'message' => 'required',
        ]);

        Mail::to('contact@jimmylaroche.com')->send(new ContactFormMail($data));

        return redirect('contact')->with('success', 'Thank you for reaching out! I will be in touch as soon as possible!');

    }
}
