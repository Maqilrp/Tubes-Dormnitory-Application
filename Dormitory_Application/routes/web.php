<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PerizinanController;
use App\Http\Controllers\LaundryController;
use App\Http\Controllers\AirMinumController;
use App\Http\Controllers\ListrikController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\HistoriController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\GedungController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
USE App\Http\Controllers\ProfileUserController;
USE App\Http\Controllers\UserPerizinanController;
USE App\Http\Controllers\UserLaundryController;
USE App\Http\Controllers\UserPengaduanLaundryController;
USE App\Http\Controllers\UserAirMinumController;
USE App\Http\Controllers\UserListrikController;
USE App\Http\Controllers\UserPaketController;
USE App\Http\Controllers\UserPengaduanPaketController;

// use App\Http\Controllers\Auth\LoginController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//coba
Route::get('/coba', [PageController::class,'coba']);

//profil_user page

Route::get('/profile_user/{id}', [ProfileUserController::class, 'edit'])->name('profile_user.edit');
Route::put('/profile_user/update/{id}', [ProfileUserController::class, 'update'])->name('profile_user.update');


// home page route
Route::get('/home', [PageController::class,'home'])->name('home');

// login page
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



//register page
//Route::get('/register', [PageController::class,'register']);
// Route for showing the registration form
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
// Route for handling the registration form submission
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');


//about page
Route::get('/about', [PageController::class,'about']);

//profil_asrama page
Route::get('/profil_asrama', [PageController::class,'profil_asrama']);

//aturan asrama page
Route::get('/aturan_asrama', [PageController::class,'aturan_aturan_asrama']);

//perizinan page
Route::get('/perizinan/{id}', [UserPerizinanController::class, 'showPerizinanForm'])->name('perizinan.form');
Route::post('/perizinan/create/{id}', [UserPerizinanController::class, 'create'])->name('perizinan.create');

//Route::get('/perizinan/{id}', [UserPerizinanController::class, 'showPerizinanForm'])->name('perizinan.form');
// Route for handling the registration form submission
//Route::post('/perizinan/create/{id}', [UserPerizinanController::class, 'perizinan'])->name('perizinan.submit');
//Route::get('/perizinan', [PageController::class,'perizinan']);
// Route::resource('perizinan', PerizinanController::class);

//laundry page
Route::get('/laundry/{id}', [UserLaundryController::class, 'showLaundryForm'])->name('laundry.form');
Route::post('/laundry/create/{id}', [UserlaundryController::class, 'create'])->name('laundry.create');
Route::get('/laundry/pengaduan_laundry/{id}', [UserPengaduanLaundryController::class, 'showPengaduanLaundryForm'])->name('pengaduanlaundry.form');
Route::post('/laundry/pengaduan_laundry/create/{id}', [UserPengaduanlaundryController::class, 'create'])->name('pengaduanlaundry.create');
// Route::get('/laundry', [PageController::class,'laundry']);
//Route::get('/laundry/pengaduan_laundry/{id}', [PageController::class,'pengaduan_laundry'])->name('pengaduan_laundry');

//air_minum page
//Route::get('/air_minum', [PageController::class,'air_minum']);
Route::get('/air_minum/{id}', [UserAirMinumController::class, 'showAirMinumForm'])->name('airMinum.form');
Route::post('/air_minum/create/{id}', [UserAirMinumController::class, 'create'])->name('airMinum.create');

//listrik page
//Route::get('/listrik', [PageController::class,'listrik']);
Route::get('/listrik/{id}', [UserListrikController::class, 'showListrikForm'])->name('listrik.form');
Route::post('/listrik/create/{id}', [UserListrikController::class, 'create'])->name('listrik.create');

// paket page
//Route::get('/paket', [PageController::class,'paket']);
Route::get('/paket/{id}', [UserPaketController::class, 'showPaketForm'])->name('paket.form');
Route::post('/paket/create/{id}', [UserPaketController::class, 'create'])->name('paket.create');
//Route::get('/paket/pengaduan_paket', [PageController::class,'pengaduan_paket']);
Route::get('/laundry/pengaduan_paket/{id}', [UserPengaduanPaketController::class, 'showPengaduanPaketForm'])->name('pengaduanpaket.form');
Route::post('/laundry/pengaduan_paket/create/{id}', [UserPengaduanPaketController::class, 'create'])->name('pengaduanpaket.create');

//histori page
Route::get('/histori', [PageController::class,'histori']);
Route::get('/histori/perizinan', [PageController::class,'histori_perizinan']);
Route::get('/histori/laundry', [PageController::class,'histori_laundry']);
Route::get('/histori/listrik', [PageController::class,'histori_listrik']);
Route::get('/histori/air_minum', [PageController::class,'histori_air_minum']);
Route::get('/histori/paket', [PageController::class,'histori_paket']);


// admin page
// dashboard page
Route::get('/admin', [AdminController::class,'dashboard']);

// users page
//Route::get('/admin/users', [AdminController::class,'users']);
Route::resource('admin/users', UsersController::class);
Route::get('admin/users/{id}/delete', [UsersController::class,'destroy']);

// gedung page
//Route::get('/admin/gedung', [AdminController::class,'gedung']);
Route::resource('admin/gedung', GedungController::class);
Route::get('admin/gedung/{id}/delete', [GedungController::class,'destroy']);

// perizinan page
//Route::get('/admin/perizinan', [AdminController::class,'perizinan']);
Route::resource('admin/perizinan', PerizinanController::class);
Route::get('admin/perizinan/{id}/delete', [PerizinanController::class,'destroy']);

// laundry page
//Route::get('/admin/laundry', [AdminController::class,'laundry']);
Route::resource('admin/laundry', LaundryController::class);

// air minum page
// Route::get('/admin/air_minum', [AdminController::class,'air_minum']);
Route::resource('admin/air_minum', AirMinumController::class);

// listrik page
//Route::get('/admin/listrik', [AdminController::class,'listrik']);
Route::resource('admin/listrik', ListrikController::class);

// paket page
//Route::get('/admin/paket', [AdminController::class,'paket']);
Route::resource('admin/paket', PaketController::class);

// histori page
//Route::get('/admin/histori', [AdminController::class,'histori']);
Route::resource('admin/histori', HistoriController::class);

