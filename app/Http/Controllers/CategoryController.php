<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
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
        $category = Category::get();
        return view('category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:stores',
            'description' => 'nullable|string',
        ]);
        
        $validatedData['user_id'] = Auth::user()->id;
        $validatedData['store_id'] = Auth::user()->store_id;
        $validatedData['is_active'] = true;
        
        // Create and save the store record
        $category = new Category();
        $category->fill($validatedData); // Dynamically fill the attributes
        $category->save();

        return redirect('category')->with('key', 'value');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:stores',
            'description' => 'nullable|string',
        ]);
        
        $validatedData['is_active'] = true;
        
        // Create and save the store record
        $category = Category::find($id);
        $category->fill($validatedData); // Dynamically fill the attributes
        $category->save();

        return redirect('category')->with('key', 'value');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
