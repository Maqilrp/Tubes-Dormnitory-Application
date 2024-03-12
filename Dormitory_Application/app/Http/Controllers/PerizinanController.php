<?php

namespace App\Http\Controllers;

use App\Models\perizinan;

//foreign key
use app\Http\Controllers\UsersController;
use App\Models\gedung;
use App\Models\User;
use Illuminate\Http\Request;

class PerizinanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //view index perizinan
        $data = Perizinan::with('user','gedung')->get();
        return view('admin.perizinan.index', compact('data'), ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $perizinan = User::all();
        $gedung = gedung::all();
        // view create perizinan
        return view('admin.perizinan.create', compact('perizinan','gedung'),['id_user' => $perizinan, 'id_gedung' => $gedung]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi data
        $request->validate([
            'id_user' => 'required',
            'id_gedung' => 'required',
            'jenis_perizinan' => 'required',
            'tanggal_waktu' => 'required',
            'alasan' => 'required|max:250'
        ]);

        // Create a new perizinan
        $perizinan = new perizinan();
        $perizinan->id_user = $request->input('id_user');
        $perizinan->id_gedung = $request->input('id_gedung');
        $perizinan->jenis_perizinan = $request->input('jenis_perizinan');
        $perizinan->tanggal_waktu = $request->input('tanggal_waktu');
        $perizinan->alasan = $request->input('alasan');

        // // foto upload
        // if ($request->hasFile('foto')) {
        //     $foto = $request->file('foto');
        //     $fotoPath = $foto->store('foto','public');
        //     $perizinan->foto = $fotoPath;
        // }


        // $perizinan->id_gedung = $request->input('id_gedung');
        // $perizinan->save();

        // Optionally, you can log in the perizinan after registration
        //auth()->login($perizinan);

        // Redirect the perizinan to the desired location
        return redirect('/admin/perizinan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = perizinan::find($id);

        if (!$data) {
            // Handle the case when the user with the provided ID is not found
            return redirect()->back()->with('error', 'User not found.');
        }

        return view('admin.perizinan.show', compact('data'),['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = perizinan::find($id);
        $user = User::all();
        $gedung = Gedung::all(); // Assuming you want to retrieve all Gedung records

        return view('admin.perizinan.edit', compact('data','user' ,'gedung'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, perizinan $perizinan)
    {
        //validasi data
        $request->validate([
            'id_user' => 'required',
            'id_gedung' => 'required',
            'jenis_perizinan' => 'required',
            'tanggal_waktu' => 'required',
            'alasan' => 'required|max:250'
        ]);

        // Create a new perizinan
        $perizinan = perizinan::find();
        $perizinan->id_user = $request->input('id_user');
        $perizinan->id_gedung = $request->input('id_gedung');
        $perizinan->jenis_perizinan = $request->input('jenis_perizinan');
        $perizinan->tanggal_waktu = $request->input('ranggal_waktu');
        $perizinan->alasan = $request->input('alasan');

        // // foto upload
        // if ($request->hasFile('foto')) {
        //     $foto = $request->file('foto');
        //     $fotoPath = $foto->store('foto','public');
        //     $perizinan->foto = $fotoPath;
        // }


        // $perizinan->id_gedung = $request->input('id_gedung');
        // $perizinan->save();

        // Optionally, you can log in the perizinan after registration
        //auth()->login($perizinan);

        // Redirect the perizinan to the desired location
        return redirect('/admin/perizinan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $perizinan = perizinan::find($id);

        if (!$perizinan) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $perizinan->delete();

        return redirect('/admin/perizinan')->with('success', 'User deleted successfully.');
        }
}
