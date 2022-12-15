<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public $form;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->data=$data;
        $this->form=$data['mail'];
    }

    /**
     * Get the message envelope.
     *
     * @return @this
     */
    public function build()
    {
        return $this->from($this->form)->subject('New Customer Equiry')->view('sendmail')->with('data', $this->data);
        
      
    }

}
