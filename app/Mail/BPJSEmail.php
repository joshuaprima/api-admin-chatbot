<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BPJSEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $data;
    public $digit;

    public function __construct($data, $digit)
    {
        $this->data = $data;
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
                    ->view('email')
                    ->subject('Reset Akun')
                    ->with([
                        'data' => $this->data,
                        'digit' => $this->digit
                    ]);
    }
}
