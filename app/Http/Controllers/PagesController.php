<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Content\Content;
use App\Content\Images;
use App\Gallery\Gallery as Gallery;

class PagesController extends Controller
{
    public function getHome()
    {
        $gallery = new Gallery();

        $gallery->init(["/img/upload/home/home01.jpg", "/img/upload/home/home02.jpg", "/img/upload/home/home03.jpg", "/img/upload/home/home04.jpg", "/img/upload/home/home05.jpg", "/img/upload/home/home06.jpg", "/img/upload/home/home07.png", "/img/upload/home/home08.jpg", "/img/upload/home/home09.jpg", "/img/upload/home/home10.jpg", "/img/upload/home/home11.jpg", "/img/upload/home/home12.jpg", "/img/upload/home/home13.jpg", "/img/upload/home/home21.jpg", "/img/upload/home/home15.jpg", "/img/upload/home/home16.jpg", "/img/upload/home/home17.jpg", "/img/upload/home/home22.jpg", "/img/upload/home/home27.jpg", "/img/upload/home/home20.jpg"]);

        return view("home2", [
                "gallery" => $gallery->getHtmlGrid()
            ]
        );
    }

    public function getAbout()
    {
        $subcategory = [
            'history',
            'preformance',
            'future'
        ];

        foreach($subcategory as $sub) {
            $content[$sub]  = DB::table('content')
                                ->where('category', 'about')
                                ->where('subCategory', $sub)
                                ->first();
        }

        // break up paraghraps to enable layout
        // $content->content = explode("\n", $content->content);

        return view("about", ["flashImage" => 'about.png'], ['content' => $content]);
    }

    public function getProductsAmu()
    {
        // Nytt
        // Se till att lägga in imgurl i database och sätt subcategory till thumbnail för products
        // $thumbnails = DB::select('select * from content WHERE category LIKE ? AND subcategory LIKE ?', ["products", "thumbnail"]);

        $content = new Content();
        $images = new Images();

        $data = [
            "content"       => $content->getContentByCategory("products"),
            "images"        => $images->getImagesByContentCategory("products"),
            "flashImage"    => 'product.png'
        ];
        return view("products_amu2", $data);
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
            "content"       => $content->getContentByCategory("future"),
            "images"        => $images->getImagesByContentCategory("future"),
            "flashImage"    => 'future-products.jpg'
        ]);
    }

    public function getMaterialsApplications()
    {
        $content = new Content();

        $data = [
            "wood"          => $content->getContentById("49"),
            "asphalt"       => $content->getContentById("50"),
            "glass"         => $content->getContentById("51"),
            "concrete"      => $content->getContentById("52"),
            "vinyl"         => $content->getContentById("53"),
            "steel"         => $content->getContentById("54"),
            "plastic"       => $content->getContentById("55"),
            "masonry"       => $content->getContentById("56"),
            "houses"        => $content->getContentById("57"),
            "military"      => $content->getContentById("58"),
            "bridges"       => $content->getContentById("59"),
            "stripings"      => $content->getContentById("60"),
            "turbines"      => $content->getContentById("61"),
            "roofs"         => $content->getContentById("62"),
            "pipelines"     => $content->getContentById("63"),
            "ports"         => $content->getContentById("64"),
            "flashImage"    => 'material.png'
        ];

        return view("material_applications", $data);
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
        $content = new Content();
        $images = new Images();
        $colors = ["rdcseablue rdcwhite-text", "", "rdcsand", "", "rdcdeepred rdcwhite-text"];

        return view("performance-test2", [
            "content"   => $content->getContentByCategoryAndSubcategory("research", "performance"),
            "images"    => $images->getImagesByContentCategory("research"),
            "colors"    => $colors,
            "flashImage" => 'dumper-truck.jpg'
        ]);
    }


    public function getResearch()
    {
        $content = new Content();
        $images = new Images();

        return view("research", [
            "flashImage" => 'research.jpeg',
            'articles' => $content->getContentByCategoryAndSubcategory("research", "research")
        ]);
    }
}
