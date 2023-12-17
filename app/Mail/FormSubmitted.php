<?php

namespace App\Mail;
use App\Models\User;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use http\Env\Request;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class  FormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

public $infoRequest;


    public function __construct($user)
    {
        $this->infoRequest = $user;
    }

    public function build()
    {
        return $this->view('mails.mailsStyle');
    }


}

