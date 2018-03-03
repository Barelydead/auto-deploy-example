<?php

namespace App\Contact;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'contact_messages';

    /**
     * Add Message to DB
     *
     * @param array $data
     * @param string $reciever
     * @param string $sender
     * @param string $subject
     * @return this
     */
    public function addMessage($data, $reciever, $sender, $subject)
    {
        $this->reciever = $reciever;
        $this->sender = $sender;
        $this->subject = $subject;

        foreach ($data as $key => $val) {
            $this->{$key} = $val;
        }

        $this->save();
        return $this;
    }
}
