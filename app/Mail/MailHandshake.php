<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailHandshake extends Mailable
{
    use Queueable, SerializesModels;

    protected $username;
    protected $sms;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username,$sms)
    {
        $this->username = $username;
        $this->sms = $sms;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');
        return $this->from('n.ngnapat@gmail.com')
                    ->view('emails.handshake')
                    ->with([
                        'username' => $this->username,
                        'sms' => $this->sms,
                    ]);
    }
}
