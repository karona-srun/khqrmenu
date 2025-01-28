<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class StoreController extends Controller
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
        $store = Store::with('user')->get();
        return view('store.index', compact('store'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::pluck('name', 'id');
        return view('store.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'nullable|integer',
            'name' => 'required|string|max:255|unique:stores',
            'phone_number' => 'nullable|string|max:15', // Combined logo validation
            'location' => 'nullable|string',
            'description' => 'required|string',
            'instragram_link' => 'nullable|string', // Fixed typo: 'instragram' to 'instagram'
            'telegram_link' => 'nullable|string',
            'facebook_link' => 'nullable|string',
        ]);
        
        // Handle logo upload if provided
        if ($request->hasFile('logo')) {
            $validatedData['logo'] = $request->file('logo')->store('logo', 'public');
        }
        
        // Create and save the store record
        $store = new Store();
        $store->fill($validatedData); // Dynamically fill the attributes
        $store->save();

        return redirect('setup-store')->with('key', 'value');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $store = Store::find($id);
        $name = env('APP_URL').'/'.$store->name;
        $qrcode = QrCode::size(300)->generate($name);
        return view('store.show', compact('store','qrcode','name'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $store = Store::find($id);
        $users = User::pluck('name', 'id');
        return view('store.edit', compact('store','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'user_id' => 'nullable|integer',
            'name' => 'sometimes|required|string|max:255',
            'phone_number' => 'nullable|string|max:15',
            'location' => 'nullable|string',
            'description' => 'sometimes|required|string',
            'instragram_link' => 'nullable|string',
            'telegram_link' => 'nullable|string',
            'facebook_link' => 'nullable|string',
        ]);

        $store = Store::find($id);

        // Handle logo upload if provided
        if ($request->hasFile('logo')) {
            $validatedData['logo'] = $request->file('logo')->store('logo', 'public');
        }

        $store->update($validatedData);
        return redirect('setup-store')->with('key', 'value');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $store = Store::find($id);
        $store->delete(); 
        return redirect('setup-store')->with('key', 'value');
    }
}
