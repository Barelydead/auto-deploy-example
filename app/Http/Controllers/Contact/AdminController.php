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
    /**
     * Construct method for Controller
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }



    /**
     * Get contact form config
     *
     * @return void
     */
    public function getContactForm()
    {
        $mailConfig = new MailConfig();
        $mailConfig = $mailConfig->first();
        return view('contact.admin.contact-form', [
            "mailConfig" => $mailConfig,
            "result" => null]
        );
    }



    /**
     * Post method for contact form config
     *
     * @param Request $request
     * @return void
     */
    public function postContactForm(Request $request)
    {
        try {
            $mailConfig = new MailConfig();
            $mailConfig = $mailConfig->first();
            $mailConfig->reciever = $request->post('reciever');
            $mailConfig->sender = $request->post('sender');
            $mailConfig->sendername = $request->post('sendername');
            $mailConfig->subject = $request->post('subject');
            $mailConfig->save();
            $result = true;
            $resultMsg = "<strong>Success!</strong> Successfully updated.";
        } catch (Exception $e) {
            $result = false;
            $resultMsg = "<strong>Failed!</strong>Update not successfull.";
        }
        return view('contact.admin.contact-form', [
            "mailConfig" => $mailConfig,
            "result" => $result,
            "resultMsg" => $resultMsg]);
    }



    /**
     * Get method for stored address
     *
     * @return void
     */
    public function getAddress()
    {
        return view('contact.admin.address');
    }


    public function getMessages()
    {
        return view('contact.admin.messages');
    }
}
