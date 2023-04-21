<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Exception;

class ControllerProduct extends Controller
{
    public function __invoke(Request $request, string $slug) {
        try {
            $products = Product::where('slug', $slug)->firstOrFail();

            return view('product')->with('products', $products);
        } catch (Exception) {
            abort(404, 'Product is not found!');
        }
    }
}
