<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $appointment;
    public $user_email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($appointment, $user_email)
    {
        $this->appointment = $appointment;
        $this->user_email = $user_email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail from PIST-OSAS')
                    ->view('emails.sendEmail');
    }
}
