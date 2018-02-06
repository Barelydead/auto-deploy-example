<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome()
    {
        return view("home");
    }

    public function getAbout()
    {
        return view("about");
    }

    public function getContact()
    {
        $adress = (object)[
            "street" => "New Street"
        ];
        return view("contact", compact('adress'));
    }

    public function getForm()
    {
        return view("home");
    }
}
