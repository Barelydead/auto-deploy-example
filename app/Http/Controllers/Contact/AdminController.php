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
     * GET contact form config
     *
     * @return void
     */
    public function getContactForm()
    {
        $mailConfig = new MailConfig();
        $mailConfig = $mailConfig->first();
        return view('contact.admin.contact-form', [
            "mailConfig" => $mailConfig,
            "result" => null]);
    }



    /**
     * POST method for contact form config
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
     * GET method for stored address
     *
     * @return void
     */
    public function getAddress()
    {
        $address = new Address();
        $address = $address->getAddress();

        return view('contact.admin.address', [
            "result" => null,
            "address" => $address
        ]);
    }



    /**
     * POST method for stored address
     *
     * @return void
     */
    public function postAddress(Request $request)
    {
        try {
            $address = new Address();
            $address = $address->first();
            $address->companyName = $request->post('companyName');
            $address->street1 = $request->post('street1');
            $address->street2 = $request->post('street2');
            $address->postalcode = $request->post('postalcode');
            $address->city = $request->post('city');
            $address->state = $request->post('state');
            $address->country = $request->post('country');
            $address->telephone = $request->post('telephone');
            $address->email = $request->post('email');
            $address->save();
            $result = true;
            $resultMsg = "<strong>Success!</strong> Successfully updated.";
        } catch (Exception $e) {
            $result = false;
            $resultMsg = "<strong>Failed!</strong>Update not successfull.";
        }
        return view('contact.admin.address', [
            "address" => $address->getAddress(),
            "result" => $result,
            "resultMsg" => $resultMsg
        ]);
    }



    public function getMessages()
    {
        return view('contact.admin.messages');
    }
}
