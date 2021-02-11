<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;

use App\Mail\TestMail;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $mailUtenteCollegato = Auth::user() -> email;

        // Mail::to($mailUtenteCollegato) -> send(new TestMail('Contenuto test string'));

        return view('home');
    }

    public function sendMail(Request $request) {

        $mailUtenteCollegato = Auth::user() -> email;
       
        $dati = $request -> validate(
            [
                'testoMail' => 'required'
            ]
        );

        Mail::to($mailUtenteCollegato) -> send(new TestMail($dati['testoMail']));
        return redirect() -> back();
    }
}
