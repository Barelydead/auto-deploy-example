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
        return view("products_amu", ["flashImage" => 'product.png']);
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

    public function getSearch(Request $request)
    {
        $searchQuery = $request->query("search");

        $articles = DB::select('select * from content WHERE content LIKE ?', ["%$searchQuery%", "%$searchQuery%", "%$searchQuery%"]);

        $articles = isset($articles) ? $articles : [];

        return view("search_results", ["articles" => $articles, "query" => $searchQuery]);
    }

    public function getPerformance()
    {
        $articles = DB::table('content')
            ->Where('subcategory', "performance test")
            ->get();

        return view("performance-test2", ["articles" => $articles]);
    }
}
