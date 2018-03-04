<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactMessage;
use App\Contact\MailConfig as MailConfig;
use App\Contact\Address as Address;
use App\Contact\Message as Message;

class AdminController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function getContactForm()
    {
        return view('contact.admin.contact-form');
    }


    public function getAddress()
    {
        return view('contact.admin.address');
    }


    public function getMessages()
    {
        return view('contact.admin.messages');
    }
}
