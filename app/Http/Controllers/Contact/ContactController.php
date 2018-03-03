<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactMessage;
use App\Contact\MailConfig as MailConfig;
use App\Contact\Address as Address;
use Mail;

class ContactController extends Controller
{
    public function getContactForm()
    {
        $addressObj = new Address;
        var_dump($addressObj->getAddress());
        $address = $addressObj->getAddress();
        return view('contact.contact', [
            "flashImage" => 'contact-us.jpg',
            "address" => $address]);
    }



    public function postContactForm(Request $request)
    {
        $contact = new MailConfig();

        $data['firstname'] = $request->get('firstname');
        $data['lastname'] = $request->get('lastname');
        $data['email'] = $request->get('email');
        $data['phonenumber'] = $request->get('phonenumber');
        $data['companyname'] = $request->get('companyname');
        $data['title'] = $request->get('title');
        $data['message'] = $request->get('message');

        Mail::to($contact->reciever)->send(new ContactMessage($data, $contact));
        return view('contact.success');
    }
}
