<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Models\Product;

class ProductController extends Controller
{
    public function showProduct(){
        $products = Product::all();


        return view('index', [
            'products' => $products,

        ]);
    }

}
