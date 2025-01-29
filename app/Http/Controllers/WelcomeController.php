<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class WelcomeController extends Controller
{
    public function index($slug = null)
    {
        if (!$slug) {
            return view('welcome');
        }

        try {
            $store = Store::where('slug', $slug)->firstOrFail();
            $categories = Category::where('store_id', $store->id)
                ->with('products')
                ->get();
            $products = Product::where('store_id', $store->id)->get();
            
            return view('khqrmenu', compact('store', 'categories', 'products'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return view('welcome');
        }
    }
}
