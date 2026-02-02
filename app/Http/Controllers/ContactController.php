<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $data = $request->validate(['name' => 'required', 'email' => 'required|email', 'message' => 'required']);
        Mail::to(config('mail.from.address'))->send(new ContactMail($data));

        return back()->with('success', 'Inviato! 🎭');
    }
}
