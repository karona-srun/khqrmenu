<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Store;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
        $user = User::all();
        return view('user.index', compact('user'));
    }

    public function create()
    {
        $stores = Store::all();
        return view('user.create', compact('stores'));
    }   

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('photo')){
            $photo = $request->file('photo')->store('users','public');
        } else {
            $photo = 'https://placehold.co/100x100';
        }

        $user = new User();
        $user->store_id = $request->store_id;
        $user->name = $request->name;
        $user->role_id = $request->role_id;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->is_active = $request->is_active ? 1 : 0;
        $user->photo_url = $photo;
        $user->save();
        return redirect('users')->with('success', 'User created successfully');
    }

    public function edit($id)
    {
        $user = User::find($id);
        $stores = Store::all();
        return view('user.edit', compact('user', 'stores'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);    

        if($request->hasFile('photo')){
            $photo = $request->file('photo')->store('users','public');
        } else {
            $photo = 'https://placehold.co/100x100';
        }

        $user->store_id = $request->store_id;
        $user->role_id = $request->role_id;
        $user->name = $request->name;
        $user->email = $request->email;
        if($request->password){
            $user->password = Hash::make($request->password);
        }
        $user->is_active = $request->is_active ? 1 : 0;
        $user->photo_url = $photo;
        $user->save();
        return redirect('users')->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('users')->with('success', 'User deleted successfully');
    }
}   
