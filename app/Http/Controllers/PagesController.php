<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Content\Content;
use App\Content\Images;

class PagesController extends Controller
{
    public function getHome()
    {
        return view("home");
    }

    public function getAbout()
    {
        $content = DB::table('content')
                ->where('category', 'about')
                ->first();

        // break up paraghraps to enable layout
        // $content->content = explode("\n", $content->content);

        return view("about", ['content' => $content]);
    }

    public function getProductsAmu()
    {
        // Nytt
        // Se till att lägga in imgurl i database och sätt subcategory till thumbnail för products
        $thumbnails = DB::select('select * from content WHERE category LIKE ? AND subcategory LIKE ?', ["products", "thumbnail"]);

        $data = [
            'thumbnails'    => $thumbnails
        ];
        return view("products_amu2", ["flashImage" => 'product.png'], $data);
    }

    public function getProductsRoof()
    {
        return view("products_roof");
    }

    public function getFutureProducts()
    {
        $content = new Content();
        $images = new Images();

        return view("future_products", [
            "content"   => $content->getContentByCategory("future"),
            "images"    => $images->getImagesByContentCategory("future")
        ]);
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
