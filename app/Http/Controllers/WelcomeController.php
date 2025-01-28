<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index($slug = null)
    {
        if ($slug) {
            $slug = str_replace('-', ' ', $slug);
            $store = Store::where('name', $slug)->first();
            if($store){
                $categories = Category::where('store_id', $store->id)
                    ->with('products')
                    ->get();
                $product = Product::where('store_id', $store->id)->get();
                return view('khqrmenu', compact('store','categories','product'));
            }else{
                return view('welcome');
            }
        }

        return view('welcome');
    }
}
