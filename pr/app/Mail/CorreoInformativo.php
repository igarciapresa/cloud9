<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CorreoInformativo extends Mailable
{
    use Queueable, SerializesModels;

    private $name = 'Pepe';
    private $asunto = 'Correo informativo';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    function setSubject($subject)
    {
        $this->asunto = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.informativo')->subject($this->asunto)->with(['name2' => $this->name . '2']);
    }
}
