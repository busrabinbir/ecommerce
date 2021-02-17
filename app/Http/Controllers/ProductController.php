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

        $resProduct = Http::get('https://gorest.co.in/public-api/products');
        $products = json_decode($resProduct, true);

        $resCatProd = Http::get('https://gorest.co.in/public-api/product-categories');
        $catToProd = json_decode($resCatProd, true);

        $cat_id = $id;

        return view('product.index', compact('products','catToProd', 'categories', 'cat_id'));
    }

    public function viewProducts($id)
    {
        $resCategories = Http::get('https://gorest.co.in/public-api/categories');
        $categories = json_decode($resCategories, true);

        $resProd = Http::get('https://gorest.co.in/public-api/products');
        $product = json_decode($resProd, true);

        $prod_id = $id;

        return view('product.view', compact('product','categories','prod_id'));
    }
}
