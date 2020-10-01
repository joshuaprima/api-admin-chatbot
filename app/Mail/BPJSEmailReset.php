<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BPJSEmailReset extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $dataedit;
    public $digit;

    public function __construct($dataedit, $digit)
    {
        $this->dataedit = $dataedit;
        $this->digit = $digit;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('sdimasfarhan@gmail.com')
                    ->view('emailreset')
                    ->subject('Reset Akun')
                    ->with([
                        'dataedit' => $this->dataedit,
                        'digit' => $this->digit
                    ]);
    }
}
