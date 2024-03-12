<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Gedung;
use Illuminate\Support\Facades\Auth;

class ProfileUserController extends Controller
{
    public function edit()
    {

        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $gedung = Gedung::all();

        return view('page.profile_user', compact('user', 'gedung'));
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|max:10',
            'no_telp' => 'required|max:13',
            'foto' => 'image|mimes:jpg,png,jpeg|max:5000',
            'id_gedung' => 'required',
        ]);

        // Create a new user
        $user = User::findOrFail($id);
        $user->nama = $request->input('nama');
        $user->nim = $request->input('nim');
        $user->no_telp = $request->input('no_telp');

        // foto upload
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoPath = $foto->store('foto','public');
            $user->foto = $fotoPath;
        }

        $user->id_gedung = $request->input('id_gedung');
        $user->save();

        // Optionally, you can log in the user after registration
        //auth()->login($user);

        // Redirect the user to the desired location
        return redirect()->route('profile_user.edit',['id' => $id])->with('success', 'Profile updated successfully.');
    }
}
