<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

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


    public function getPerformanceTest()
    {
        return view("performance-test", ["flashImage" => 'dumper-truck.jpg']);
    }

    public function getLocation()
    {
        return view("location");
    }

    public function getSearch(Request $request, Content $content)
    {
        $searchQuery = $request->query("search");

        $articles = $content->searchTable($searchQuery);

        return view("search_results", ["articles" => $articles, "query" => $searchQuery]);
    }
}
