<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Exception;

class ControllerCategory extends Controller
{

    public function __invoke(Request $request, string $slug)
    {
        try
        {
        $price = $request->query('price');

        $category = Category::where('slug', $slug)->where('active', true)->firstOrFail();

        if (!$category->active) {
            abort(404);
        }

            if (!empty($price)) {

                $products = $category->product
                ->where('price', 'like', '%'.$price.'%')->paginate(20);
            } 


            if (empty($code) and empty($name) and empty($tag)) {
                $products = $category->product
                ->paginate(20);
            }
    

            return view('category', compact('products', 'price'));
        }
      catch (Exception) {
        abort(404);
    }

    }
}
