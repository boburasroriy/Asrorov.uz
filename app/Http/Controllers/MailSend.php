<?php

namespace App\Http\Controllers;

use App\Mail\FormSubmitted;
use App\Models\MailfromUsers;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use function Laravel\Prompts\alert;

class MailSend extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'message' => 'required|string',
        ]);
        $user = new MailfromUsers($validatedData);
        $user->save();
        Mail::to('Boburasrorov2005@gmail.com')->send(new FormSubmitted($user));
        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');

    }

}
