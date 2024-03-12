<?php

namespace App\Http\Controllers;

use App\Models\Gedung;
use App\Models\air_minum;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserAirMinumController extends Controller
{
    public function showAirMinumForm(Request $request)
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $gedung = Gedung::all();
        return view('page.air_minum', compact('gedung', 'user'));
    }

    public function create(Request $request,$id)
    {
        //dd($request->all());
        // Validate data
        $request->validate([
            'id_user',
            'id_gedung',
            'jumlah_galon' => 'required',
            'jenis_pembayaran' => 'required'
        ]);

        // Create a new perizinan
        // $userId = Auth::id();
        // $user = User::findOrFail($userId);
        $laundry = new air_minum();
        $laundry->id_user = $request->input('id_user');
        $laundry->id_gedung = $request->input('id_gedung');
        $laundry->jumlah_galon = $request->input('jumlah_galon');
        $laundry->jenis_pembayaran = $request->input('jenis_pembayaran');
        $laundry->save();

        // Redirect the perizinan to the desired location
        return redirect()->route('airMinum.form', ['id' => $id]);

    }
}
