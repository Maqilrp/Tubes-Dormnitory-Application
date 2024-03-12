<?php

namespace App\Http\Controllers;

use App\Models\gedung;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        $gedung = gedung::all();
        return view('register', compact('gedung'));
    }

    public function register(Request $request)
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
        auth()->login($user);

        // Redirect the user to the desired location
        return redirect('/');
    }
}
