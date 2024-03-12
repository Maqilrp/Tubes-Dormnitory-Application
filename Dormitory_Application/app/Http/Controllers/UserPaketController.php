<?php

namespace App\Http\Controllers;

use App\Models\Gedung;
use App\Models\paket;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserPaketController extends Controller
{
    public function showPaketForm(Request $request)
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $gedung = Gedung::all();
        return view('page.paket', compact('gedung', 'user'));
    }

    public function create(Request $request,$id)
    {
        //dd($request->all());
        // Validate data
        $request->validate([
            'id_user',
            'id_gedung',
            'nama_penerima'=>'required',
            'foto_bukti'=>'required|image|mimes:jpg,png,jpeg|max:5000',
            'no_telp'=>'required'
        ]);

        // Create a new perizinan
        // $userId = Auth::id();
        // $user = User::findOrFail($userId);
        $paket = new paket();
        $paket->id_user = $request->input('id_user');
        $paket->id_gedung = $request->input('id_gedung');
        $paket->nama_penerima = $request->input('nama_penerima');

        // foto upload
        if ($request->hasFile('foto_bukti')) {
            $foto_bukti = $request->file('foto_bukti');
            $fotoPath = $foto_bukti->store('foto','public');
            $paket->foto_bukti = $fotoPath;
        }

        $paket->no_telp = $request->input('no_telp');
        $paket->save();

        // Redirect the perizinan to the desired location
        return redirect()->route('paket.form', ['id' => $id]);

    }
}
