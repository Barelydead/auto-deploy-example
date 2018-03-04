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
        $mailConfig = new MailConfig();
        $mailConfig = $mailConfig->first();
        return view('contact.admin.contact-form', ["mailConfig" => $mailConfig]);
    }

    public function postContactForm(Request $request)
    {
        $mailConfig = new MailConfig();
        $mailConfig = $mailConfig->first();
        $mailConfig->reciever = $request->post('reciever');
        $mailConfig->sender = $request->post('sender');
        $mailConfig->sendername = $request->post('sendername');
        $mailConfig->subject = $request->post('subject');
        $mailConfig->save();

        return view('contact.admin.contact-form', ["mailConfig" => $mailConfig]);
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
