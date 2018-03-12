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
            "flashImage"    => 'contact-us.jpg',
            "address"       => $address]);
    }



    /**
     * Post method for form.
     *
     * @param Request $request
     * @return void
     */
    public function postContactForm(Request $request)
    {
        // Trick to avoid SPAM bots
        if ($request->post('emailtest') != null) {
            return redirect("contact");
        }

        $contact = new MailConfig();
        $contact = $contact->first();

        $data['firstname']      = $request->post('firstname');
        $data['lastname']       = $request->post('lastname');
        $data['email']          = $request->post('email');
        $data['phoneNumber']    = $request->post('phoneNumber');
        $data['companyName']    = $request->post('companyName');
        $data['title']          = $request->post('title');
        $data['message']        = $request->post('message');

        Mail::to($contact->reciever)->send(new ContactMessage($data, $contact));

        $messageDb = new Message();
        $messageDb->addMessage($data, $contact->reciever, $contact->sender, $contact->subject);
        return view('contact.success');
    }
}
