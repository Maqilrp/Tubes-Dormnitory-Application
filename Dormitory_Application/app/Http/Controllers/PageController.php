<?php

namespace App\Http\Controllers;

use App\Models\page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // coba page
    function coba(){
        return view('coba');
    }

    // login page
    function login(){
        return view('login');
    }

    // register page
    function register(){
        return view('register');
    }

    // home page
    function home(){
        return view('page.home');
    }

    // about page
    function about(){
        return view('page.about');
    }

    // profil_asrama page
    function profil_asrama(){
        return view('page.profil_asrama');
    }

    // aturan_aturan_asrama page
    function aturan_aturan_asrama(){
        return view('page.aturan_aturan_asrama');
    }

    // profile_user page
    function profile_user(){
        return view('page.profile_user');
    }

    // perizinan page
    function perizinan(){
        return view('page.perizinan');
    }

    // laundry page
    function laundry(){
        return view('page.laundry');
    }

    // pengaduan laundry page
    function pengaduan_laundry(){
        return view('page.pengaduan_laundry');
    }

    // air_minum page
    function air_minum(){
        return view('page.air_minum');
    }

    // listrik page
    function listrik(){
        return view('page.listrik');
    }

    //paket page
    function paket(){
        return view('page.paket');
    }

    // pengaduan paket page
    function pengaduan_paket(){
        return view('page.pengaduan_paket');
    }

    //histori page
    function histori(){
        return view('page.histori_page.histori');

    }

    function histori_perizinan(){
        return view('page.histori_page.histori_perizinan');

    }

    function histori_laundry(){
        return view('page.histori_page.histori_laundry');

    }
    function histori_listrik(){
        return view('page.histori_page.histori_listrik');

    }
    function histori_air_minum(){
        return view('page.histori_page.histori_air_minum');

    }
    function histori_paket(){
        return view('page.histori_page.histori_paket');

    }


}
