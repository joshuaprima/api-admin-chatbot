<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BPJSEmailKetidaksesuaian extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('sdimasfarhan@gmail.com')
            ->view('emailketidaksesuaian')
            ->subject('Pengajuan Ketidaksesuaian Data')
            ->with([
                'data' => $this->data,
            ]);
    }
}
