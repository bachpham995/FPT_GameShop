<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailService extends Mailable
{
    use Queueable, SerializesModels;

    public $emailParam;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $emailParam = $data;
        //dd($emailParam);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('devil.game.shop@gmail.com')
                    ->view('mail.change_password')
                    ->text("mail.change_password_plain")
                    ;
    }
}
