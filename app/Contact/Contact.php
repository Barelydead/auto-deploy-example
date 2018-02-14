<?php


namespace App\Contact;



use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // Table
    protected $table = 'contact';
    public $reciever = 'reciever@example.com';
    public $sender = "sender@example.com";
    public $sendername = "ContactForm Webpage";
    public $subject = "ContactForm - Message";
}
