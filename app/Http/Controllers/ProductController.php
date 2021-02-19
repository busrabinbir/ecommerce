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
    public function getCategories()
    {
        $resCategories = Http::get('https://gorest.co.in/public-api/categories');

        return json_decode($resCategories, true);
    }

    public function listProducts($id)
    {
        $categories = $this->getCategories();

        $resProducts = Http::get('https://gorest.co.in/public-api/products?categories='. $id);
        $products = json_decode($resProducts, true);

        $cat_id = $id;

        return view('product.index', compact('products','categories', 'cat_id'));
    }

    public function viewProducts($id)
    {
        $categories = $this->getCategories();

        $resProducts = Http::get('https://gorest.co.in/public-api/products/'. $id);
        $product = json_decode($resProducts, true);
        $item = $product['data'];

        return view('product.view', compact('item','categories'));
    }

    public function pagination($id, $page)
    {
        $categories = $this->getCategories();

        $resProducts = Http::get('https://gorest.co.in/public-api/products?categories='.$id.'&page='. $page);
        $products = json_decode($resProducts, true);

        $cat_id = $id;

        return view('product.index', compact('categories','products', 'cat_id'));
    }
}
