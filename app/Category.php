<?php

namespace App;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /*protected $fillable = [
        'id', 'name', 'description', 'status'
    ];

    public function category()
    {
        $response = Http::get('https://gorest.co.in/public-api/product-categories');
        $data = json_decode($response, true);

        return $data;
    }

    public function product()
    {
        return $this->hasMany('App\Product','id','product_id');
    }*/
}
