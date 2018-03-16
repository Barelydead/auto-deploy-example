<?php

namespace App\Contact;

use Illuminate\Support\Facades\DB;
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



    /**
     * Get all stored messages from DB.
     *
     * @return messages
     */
    public function getMessages($order = "asc")
    {
        $messages = [];
        $messagesDB = $this::orderBy('id', $order)->get();
        foreach ($messagesDB as $message) {
            $messageArr['id']           = $message->id;
            $messageArr['sender']       = $message->sender;
            $messageArr['reciever']     = $message->id;
            $messageArr['subject']      = $message->subject;
            $messageArr['firstname']    = $message->firstname;
            $messageArr['lastname']     = $message->lastname;
            $messageArr['email']        = $message->email;
            $messageArr['title']        = $message->title;
            $messageArr['phoneNumber']  = $message->phoneNumber;
            $messageArr['companyName']  = $message->companyName;
            $messageArr['message']      = $message->message;
            $messageArr['created_at']   = $message->created_at;
            $messageArr['deleted_at']   = $message->deleted_at;
            array_push($messages, $messageArr);
        }
        return $messages;
    }
}
