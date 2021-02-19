<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Category;

class ProductController extends Controller
{
    public function listProducts($id)
    {
        $resCategories = Http::get('https://gorest.co.in/public-api/categories');
        $categories = json_decode($resCategories, true);

        $resProducts = Http::get('https://gorest.co.in/public-api/products');
        $products = json_decode($resProducts, true);

        $resCatProds = Http::get('https://gorest.co.in/public-api/product-categories');
        $catToProds = json_decode($resCatProds, true);

        $cat_id = $id;

        return view('product.index', compact('products','catToProds', 'categories', 'cat_id'));
    }

    public function viewProducts($id)
    {
        $resCategories = Http::get('https://gorest.co.in/public-api/categories');
        $categories = json_decode($resCategories, true);

        $resProducts = Http::get('https://gorest.co.in/public-api/products');
        $product = json_decode($resProducts, true);

        $prod_id = $id;

        return view('product.view', compact('product','categories','prod_id'));
    }
}
