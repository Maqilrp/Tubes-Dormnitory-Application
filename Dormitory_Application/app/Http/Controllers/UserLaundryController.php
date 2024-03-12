<?php

namespace App\Http\Controllers;

use App\Models\Gedung;
use App\Models\laundry;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserLaundryController extends Controller
{
    public function showLaundryForm(Request $request)
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $gedung = Gedung::all();
        return view('page.laundry', compact('gedung', 'user'));
    }

    public function create(Request $request,$id)
    {
        //dd($request->all());
        // Validate data
        $request->validate([
            'id_user',
            'id_gedung',
            'atur_jadwal' => 'required',
            'jumlah_per_kg' => 'required',
            'jenis_pembayaran' => 'required'
        ]);

        // Create a new perizinan
        // $userId = Auth::id();
        // $user = User::findOrFail($userId);
        $laundry = new laundry();
        $laundry->id_user = $request->input('id_user');
        $laundry->id_gedung = $request->input('id_gedung');
        $laundry->atur_jadwal = $request->input('atur_jadwal');
        $laundry->jumlah_per_kg = $request->input('jumlah_per_kg');
        $laundry->jenis_pembayaran = $request->input('jenis_pembayaran');
        $laundry->save();

        // Redirect the perizinan to the desired location
        return redirect()->route('laundry.form', ['id' => $id]);

    }
}
