<?php

namespace App\Http\Controllers;

use App\Models\gedung;
use Illuminate\Http\Request;

class GedungController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = gedung::all();

        return view('admin.gedung.index', compact('data'),['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gedung.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_gedung' => 'required|max:100',
            'no_kamar' => 'required|max:100',
            'deskripsi' => 'required|max:100',
        ]);

        // Create a new gedung
        $gedung = new gedung();
        $gedung->no_gedung = $request->input('no_gedung');
        $gedung->no_kamar = $request->input('no_kamar');
        $gedung->deskripsi = $request->input('deskripsi');
        $gedung->save();

        // Optionally, you can log in the gedung after registration
        //auth()->login($gedung);

        // Redirect the gedung to the desired location
        return redirect('/admin/gedung');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = gedung::find($id);

        if (!$data) {
            // Handle the case when the user with the provided ID is not found
            return redirect()->back()->with('error', 'User not found.');
        }

        return view('admin.gedung.show', compact('data'),['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = gedung::find($id);

        return view('admin.gedung.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'no_gedung' => 'required|max:100',
            'no_kamar' => 'required|max:100',
            'deskripsi' => 'required|max:100',
        ]);

        // Create a new gedung
        $gedung = new gedung();
        $gedung->no_gedung = $request->input('no_gedung');
        $gedung->no_kamar = $request->input('no_kamar');
        $gedung->deskripsi = $request->input('deskripsi');
        $gedung->save();

        // Optionally, you can log in the gedung after registration
        //auth()->login($gedung);

        // Redirect the gedung to the desired location
        return redirect('/admin/gedung');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $gedung = gedung::find($id);

        if (!$gedung) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $gedung->delete();

        return redirect('/admin/gedung')->with('success', 'User deleted successfully.');
        }
}
