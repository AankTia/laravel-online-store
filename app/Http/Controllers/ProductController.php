<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public static $products = [
        [
            "id" => "1",
            "name" => "TV",
            "description" => "Best TV",
            "image" => "game.png",
            "price" => "1000"
        ],
        [
            "id" => "2",
            "name" => "iPhone",
            "description" => "Best iPhone",
            "image" => "safe.png",
            "price" => "999"
        ],
        [
            "id" => "3",
            "name" => "Chromecast",
            "description" => "Best Chromecast",
            "image" =>
            "submarine.png",
            "price" => "30"
        ],
        [
            "id" => "4",
            "name" => "Glasses",
            "description" => "Best Glasses",
            "image" => "game.png",
            "price" => "100"
        ]
    ];

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] = "List of Products";
        $viewData["products"] = ProductController::$products;

        return view('product.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] = "List of Products";
        $viewData["product"] = ProductController::$products[$id - 1];

        return view('product.show')->with("viewData", $viewData);
    }
}
