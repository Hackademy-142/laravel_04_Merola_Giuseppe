<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contatti() {
        return view('contattaci');
    }

    public function submit(Request $request){
        // dd($request->all());
        $name = $request->input('name');
        $email = $request->input('mail');
        $message = $request->input('message');

        Mail::to($email)->send(new ContactMail($name,$email,$message));

        return redirect()->route('thankyou', ['name' => $name]);
    }

    public function thankyou($name){
        return view('thankyou', ['name' => $name]);
    }
}
