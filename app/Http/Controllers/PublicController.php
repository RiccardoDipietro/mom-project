<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('home', 'contatti', 'recensioni');
    }

    function home() {
        return view('home');
    }

    function contatti() {
        return view('contatti');
    }

    function send(Request $request) {

        $name = $request->name;
        $surname = $request->surname;
        $email = $request->email;
        $number = $request->number;
        $body = $request->body;

        $finalMail = new ContactMail($name, $surname, $email, $number, $body);

        Mail::to($email)->send($finalMail);


        return redirect(route('contatti'))->with('message', 'Mail inviata correttamente');
    }

    

}
