<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // page dashboard admin
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // page users admin
    public function users()
    {
        return view('admin.users.index');
    }

    // page gedung admin
    public function gedung()
    {
        return view('admin.gedung.index');
    }

    //Page Perizinan Admin
    public function perizinan()
    {
        return view('admin.perizinan.index');
    }

    //Page Laundry Admin
    public function laundry()
    {
        return view('admin.laundry.index');
    }

    //Page Air Minum Admin
    public function air_minum()
    {
        return view('admin.air_minum.index');
    }

    //Page Listrik Admin
    public function listrik()
    {
        return view('admin.listrik.index');
    }

    //Page Paket Admin
    public function paket()
    {
        return view('admin.paket.index');
    }

    //Page History Admin
    public function histori()
    {
        return view('admin.histori.index');
    }
}
