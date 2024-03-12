<?php
namespace App\Http\Controllers;

use App\Models\Gedung;
use App\Models\Perizinan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserPerizinanController extends Controller
{
    public function showPerizinanForm(Request $request)
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $gedung = Gedung::all();
        return view('page.perizinan', compact('gedung', 'user'));
    }

    public function create(Request $request,$id)
    {
        //dd($request->all());
        // Validate data
        $request->validate([
            'id_user',
            'id_gedung',
            'jenis_perizinan' => 'required',
            'tanggal_waktu' => 'required',
            'alasan' => 'required|max:250'
        ]);

        // Create a new perizinan
        // $userId = Auth::id();
        // $user = User::findOrFail($userId);
        $perizinan = new Perizinan();
        $perizinan->id_user = $request->input('id_user');
        $perizinan->id_gedung = $request->input('id_gedung');
        $perizinan->jenis_perizinan = $request->input('jenis_perizinan');
        $perizinan->tanggal_waktu = $request->input('tanggal_waktu');
        $perizinan->alasan = $request->input('alasan');
        $perizinan->save();

        // Redirect the perizinan to the desired location
        return redirect()->route('perizinan.form', ['id' => $id]);

    }
}
