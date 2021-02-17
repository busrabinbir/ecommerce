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
    public function getCategories()
    {
        $response = Http::get('https://gorest.co.in/public-api/categories');
        $data = json_decode($response, true); //kategoriler alındı

        return view('home', ['data' => $data]);
    }
}
