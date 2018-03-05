<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactMessage;
use App\Contact\MailConfig as MailConfig;
use App\Contact\Address as Address;
use App\Contact\Message as Message;
use Mail;

class ContactController extends Controller
{
    /**
     * Get contact form page
     *
     * @return void
     */
    public function getContactForm()
    {
        $addressObj = new Address;
        $address = $addressObj->getAddress();
        return view('contact.contact', [
            "flashImage" => 'contact-us.jpg',
            "address" => $address]);
    }



    /**
     * Post method for form.
     *
     * @param Request $request
     * @return void
     */
    public function postContactForm(Request $request)
    {
        $contact = new MailConfig();
        $contact = $contact->first();

        $data['firstname'] = $request->get('firstname');
        $data['lastname'] = $request->get('lastname');
        $data['email'] = $request->get('email');
        $data['phoneNumber'] = $request->get('phoneNumber');
        $data['companyName'] = $request->get('companyName');
        $data['title'] = $request->get('title');
        $data['message'] = $request->get('message');

        Mail::to($contact->reciever)->send(new ContactMessage($data, $contact));

        $messageDb = new Message();
        $messageDb->addMessage($data, $contact->reciever, $contact->sender, $contact->subject);
        return view('contact.success');
    }
}
