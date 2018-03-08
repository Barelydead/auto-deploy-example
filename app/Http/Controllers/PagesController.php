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
        $searchQuery = htmlentities($request->query("search"));

        $articles = DB::table('content')
            ->whereRaw('content LIKE ?', ["%$searchQuery%"])
            ->orWhereRaw('title LIKE ?', ["%$searchQuery%"])
            ->orWhereRaw('category LIKE ?', ["%$searchQuery%"])
            ->get();

        foreach ($articles as $val) {
            $val->content = substr($val->content, 0, 250);
        }

        return view("search_results", ["articles" => $articles, "query" => $searchQuery]);
    }

    public function getPerformance()
    {
        $articles = DB::table('content')
            ->where('subcategory', "performance")
            ->get();


        return view("performance-test2", ["articles" => $articles]);
    }
}
