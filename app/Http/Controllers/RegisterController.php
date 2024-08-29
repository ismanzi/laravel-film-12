<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\{
    User,
    Profile,
};

class RegisterController extends Controller
{
    public function showForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Logika registrasi
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('templates.component.login');//
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(User $user, Request $request, Profile $profile)
    {
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $request->validate([
            'alamat' => 'required|string|max:225',
            'umur' => 'required|integer',
            'bio' => 'nullable|string'
        ]);


        $profile = new Profile;
        $profile->alamat = $request->alamat;
        $profile->umur = $request->umur;
        $profile->bio = $request->bio;
        $profile->save();

        $user = User::create([
        'name'   => $request->name,
        'email'  => $request->email,
        'password' => Hash::make($request->password),
        'profile_id' => $profile->id,
        'role_id' => 1,
        ]);

        // $data['name'] = $request->name;
        // $data['email'] = $request->email;
        // $data['password'] = Hash::make($request->password);
        // $data['profile_id'] = $request->profile_id;
        // $data['role_id'] = $request->role_id;

        // $user = User::create($data);

        //  $request->validate([
        // 'alamat' => 'required|string|max:255',
        // 'umur' => 'required|integer',
        // 'bio' => 'nullable|string',
        // ]);

        // $profile = new Profile;
        // $profile ->alamat = $request->alamat;
        // $profile ->umur = $request->umur;
        // $profile ->bio = $request->bio;
        // $profile ->save();
        
       
//
   
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}