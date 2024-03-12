<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\gedung;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;



class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::all();

        return view('admin.users.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $gedung = gedung::all();


        return view('admin.users.create', compact('gedung'),['id_gedung' => $gedung]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'nim' => 'required|max:10',
            'no_telp' => 'required|max:13',
            'foto' => 'required|image|mimes:jpg,png,jpeg|max:5000',
            'password' => 'required|min:8',
            'level',
            'id_gedung' => 'required',
        ]);

        // Create a new user
        $user = new User();
        $user->nama = $request->input('nama');
        $user->email = $request->input('email');
        $user->nim = $request->input('nim');
        $user->no_telp = $request->input('no_telp');

        // foto upload
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoPath = $foto->store('foto','public');
            $user->foto = $fotoPath;
        }

        $user->password = Hash::make($request->input('password'));
        $user->id_gedung = $request->input('id_gedung');
        $user->save();

        // Optionally, you can log in the user after registration
        //auth()->login($user);

        // Redirect the user to the desired location
        return redirect('/admin/users');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = User::find($id);

        if (!$data) {
            // Handle the case when the user with the provided ID is not found
            return redirect()->back()->with('error', 'User not found.');
        }

        return view('admin.users.show', compact('data'),['data' => $data]);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    $data = User::find($id);
    $gedung = Gedung::all(); // Assuming you want to retrieve all Gedung records

    return view('admin.users.edit', compact('data', 'gedung'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'nim' => 'required|max:10',
            'no_telp' => 'required|max:13',
            'foto' => 'image|mimes:jpg,png,jpeg|max:5000',
            'password' => 'required|min:8',
            'level',
            'id_gedung' => 'required',
        ]);

        // Create a new user
        $user = User::find($id);
        $user->nama = $request->input('nama');
        $user->email = $request->input('email');
        $user->nim = $request->input('nim');
        $user->no_telp = $request->input('no_telp');

        // foto upload
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoPath = $foto->store('foto','public');
            $user->foto = $fotoPath;
        }

        $user->password = Hash::make($request->input('password'));
        $user->id_gedung = $request->input('id_gedung');
        $user->save();

        // Optionally, you can log in the user after registration
        //auth()->login($user);

        // Redirect the user to the desired location
        return redirect('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
    $user = User::find($id);

    if (!$user) {
        return redirect()->back()->with('error', 'User not found.');
    }

    $user->delete();

    return redirect('/admin/users')->with('success', 'User deleted successfully.');
    }

}
