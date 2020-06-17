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

        $mail = Mail::to('jimmy.lar91@gmail.com')->send(new ContactFormMail($data));

        if($mail) {
            return redirect('contact')->with('success', 'Thank you for reaching out! I will be in touch as soon as possible!');
        } else {
            return redirect('contact')->with('error', 'An error occured. Please try again later or email me at contact@jimmylaroche.com');
        }

    }
}
