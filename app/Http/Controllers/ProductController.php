<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function allProducts()
    {

        sleep(2);

        $products = Product::all();

        if(empty($products)) {
            return response()->json(['message'=>'No products found'], 404);
        }

        return response()->json(['messsage'=>'success', 'products' => $products ]);

    }
}