<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends Controller
{
    public function getData()
    {
        //categories
        $resCategories = Http::get('https://gorest.co.in/public-api/categories');
        $categories = json_decode($resCategories, true);

        //products
        $resProducts = Http::get('https://gorest.co.in/public-api/products');
        $products = json_decode($resProducts, true);

        $response = Http::get('https://gorest.co.in/public-api/product-categories');
        $data = json_decode($response, true);
       /* $categories = $data['data'];
        $cat_id = $categories['category_id'];
        dd($cat_id);*/

        return view('home', compact('data','categories','products'));
    }
}
