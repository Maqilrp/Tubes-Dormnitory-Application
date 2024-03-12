<?php

namespace App\Http\Controllers;

use App\Models\Gedung;
use App\Models\listrik;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserListrikController extends Controller
{
    public function showListrikForm(Request $request)
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $gedung = Gedung::all();
        return view('page.listrik', compact('gedung', 'user'));
    }

    public function create(Request $request,$id)
    {
        //dd($request->all());
        // Validate data
        $request->validate([
            'id_user',
            'id_gedung',
            'nominal_pembelian' => 'required',
            'jenis_pembayaran' => 'required'
        ]);

        // Create a new perizinan
        // $userId = Auth::id();
        // $user = User::findOrFail($userId);
        $listrik = new listrik();
        $listrik->id_user = $request->input('id_user');
        $listrik->id_gedung = $request->input('id_gedung');
        $listrik->nominal_pembelian = $request->input('nominal_pembelian');
        $listrik->jenis_pembayaran = $request->input('jenis_pembayaran');
        $listrik->save();

        // Redirect the perizinan to the desired location
        return redirect()->route('listrik.form', ['id' => $id]);

    }
}
