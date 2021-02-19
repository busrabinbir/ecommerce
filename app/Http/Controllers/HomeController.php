<?php

namespace App\Http\Controllers;

use App\Http\Resources\Product;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Pagination\LengthAwarePaginator;

class HomeController extends Controller
{
    public function getCategories()
    {
        $resCategories = Http::get('https://gorest.co.in/public-api/categories');

        return json_decode($resCategories, true);
    }

    public function index()
    {
        $categories = $this->getCategories();

        $resProducts = Http::get('https://gorest.co.in/public-api/products');
        $products = json_decode($resProducts, true);

        return view('home', compact('categories','products'));
    }

    public function pagination($page)
    {
        $categories = $this->getCategories();

        $resProducts = Http::get('https://gorest.co.in/public-api/products?page='. $page);
        $products = json_decode($resProducts, true);

        return view('home', compact('categories','products'));
    }
}
