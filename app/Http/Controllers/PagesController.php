<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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


    //     return view("home");
    // }

    public function getPerformanceTest()
    {
        return view("performance-test");
    }

    public function getSearch(Request $request)
    {
        $searchQuery = $request->query("search");

        $articles = DB::select('select * from content WHERE content LIKE ?', ["%$searchQuery%", "%$searchQuery%", "%$searchQuery%"]);

        $articles = isset($articles) ? $articles : [];

        return view("search_results", ["articles" => $articles, "query" => $searchQuery]);
    }
}
