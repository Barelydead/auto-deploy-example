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

    public function getProductsAmu()
    {
        return view("products_amu");
    }

    public function getProductsRoof()
    {
        return view("products_roof");
    }

    public function getFutureProducts()
    {
        return view("future_products");
    }

    public function getForm()
    {

        return view("home");
    }
}
