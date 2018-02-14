<?php

namespace App\Http\Controllers\Contact;

use Illuminate\Http\Request;
use App\Mail\ContactMessage;
use App\Contact as Contact;
use Mail;

class ContactController extends Controller
{
    public function getContactForm()
    {
        $adress = (object)[
            "street" => "New Street"
        ];
        return view('contact.contact', compact('adress'));
    }



    public function postContactForm(Request $request)
    {
        $contact = new Contact();

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
