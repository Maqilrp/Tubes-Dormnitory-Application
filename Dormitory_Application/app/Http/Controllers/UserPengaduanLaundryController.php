<?php

namespace App\Http\Controllers;

use App\Models\Gedung;
use App\Models\pengaduan_laundry;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserPengaduanLaundryController extends Controller
{
    public function showPengaduanLaundryForm(Request $request)
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $gedung = Gedung::all();
        return view('page.pengaduan_laundry', compact('gedung', 'user'));
    }

    public function create(Request $request,$id)
    {
        //dd($request->all());
        // Validate data
        $request->validate([
            'id_user',
            'id_gedung',
            'permasalahan' => 'required',
        ]);

        // Create a new perizinan
        // $userId = Auth::id();
        // $user = User::findOrFail($userId);
        $laundry = new pengaduan_laundry();
        $laundry->id_user = $request->input('id_user');
        $laundry->id_gedung = $request->input('id_gedung');
        $laundry->permasalahan = $request->input('permasalahan');
        $laundry->save();

        // Redirect the perizinan to the desired location
        return redirect()->route('pengaduanlaundry.form', ['id' => $id]);

    }
}
