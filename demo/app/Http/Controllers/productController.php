<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use function GuzzleHttp\Promise\all;

class productController extends Controller
{
    //
    function index(){
        $data = Product::all();
        return view('product', ['products'=>$data]);
    }
}
