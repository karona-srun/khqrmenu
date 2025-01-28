<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::get();
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::where('store_id', Auth::user()->store_id)->pluck('name', 'id');
        return view('product.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'nullable|integer',
            'name'        => 'required|string|max:255',
            'photo'       => 'nullable|string', 
            'code'       => 'nullable|string',// If you're storing a photo path or URL
            'cost_usd'        => 'nullable|numeric|min:0',
            'cost_khr'        => 'nullable|numeric|min:0',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('logo')) {
            $validatedData['photo'] = $request->file('logo')->store('photo', 'public');
        }
    
        $validatedData['user_id'] = Auth::user()->id;
        $validatedData['store_id'] = Auth::user()->store_id;

        // Process the validated data
        // For example: Create a new record in the database
        Product::create($validatedData);
        return redirect('products')->with('key', 'value');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::where('store_id', Auth::user()->store_id)->pluck('name', 'id');
        $product = Product::find($id);
        return view('product.edit', compact('category','product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'category_id' => 'nullable|integer',
            'name'        => 'required|string|max:255',
            'photo'       => 'nullable|string',
            'code'       => 'nullable|string', // If you're storing a photo path or URL
            'cost_usd'        => 'nullable|numeric|min:0',
            'cost_khr'        => 'nullable|numeric|min:0',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('logo')) {
            $validatedData['photo'] = $request->file('logo')->store('photo', 'public');
        }
    
        $validatedData['user_id'] = Auth::user()->id;
        $validatedData['store_id'] = Auth::user()->store_id;

        $product = Product::find($id);

        $product->update($validatedData);
        return redirect('products')->with('key', 'value');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('products')->with('key', 'value');
    }
}
