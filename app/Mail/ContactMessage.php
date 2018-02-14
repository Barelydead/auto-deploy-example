<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public $address;
    public $name;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $contact)
    {
        $this->data = $data;
        $this->address = $contact->sender;
        $this->name = $contact->sendername;
        $this->subject = $contact->subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact-email')
            ->from($this->address, $this->name)
            ->replyTo($this->address, $this->name)
            ->subject($this->subject);
    }
}
