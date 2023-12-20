<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class IntegrationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $integrationCode;
    public $user;

    public function __construct($integrationCode, $user)
    {
        $this->integrationCode = $integrationCode;
        $this->user = $user;
    }

    public function build()
    {
        return $this->view('emails.integration_code');
    }
}
