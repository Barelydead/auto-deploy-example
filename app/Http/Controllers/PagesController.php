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


    public function getProductsAmu() {
        return view("products_amu");
    }

    public function getProductsRoof() {
        return view("products_roof");
    }

    public function getForm() {

        return view("home");
    }
}
