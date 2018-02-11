<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact;
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
        $data = $request->all();
        unset($data['_token']);
        Mail::to('reciever@example.com')->send(new Contact($data));
        return view('contact.success');
    }
}
