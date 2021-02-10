<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    // public $stringaTest;

    public function __construct()
    {
        // $this -> stringaTest = $stringaTest;
    }

    public function build()
    {
        return $this->from('test-laravel@laravel.com') -> view('mail.testMail-page');
    } 
}
