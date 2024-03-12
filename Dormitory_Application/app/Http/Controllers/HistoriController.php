<?php

namespace App\Http\Controllers;

use App\Models\histori;
use App\Models\user;
use App\Models\gedung;
use App\Models\perizinan;
use App\Models\laundry;
use App\Models\air_minum;
use App\Models\listrik;
use App\Models\paket;
use Illuminate\Http\Request;

class HistoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $histori = histori::all();
        return view('admin.histori.index',compact('histori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.histori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_user' => 'required',
            'id_perizinan' => 'required',
            'id_laundry' => 'required',
            'id_listrik' => 'required',
            'id_air_minum' => 'required',
            'id_paket' => 'required'
        ]);

        $histori = histori::create($validatedData);

        return redirect('admin.histori.index')->with('success', 'Data Histori Berhasil Ditambahkan.') ;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $histori = histori::find($id);
        return view('admin.histori.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(histori $histori)
    {
        return view('admin.histori.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, histori $histori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(histori $histori)
    {
        //
    }
}
