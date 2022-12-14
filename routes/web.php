<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelCrud;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/admin', function () {
    return view('admin.admin');
})->middleware(['auth'])->name('admin');
Route::get('/Sesneg', function () {
    return view('main.SekretarisNegara');
});
Route::get('/kabinet', function () {
    return view('main.kabinet');
});
Route::get('/keuangan', function () {
    return view('main.Keuangan');
});
Route::get('/dagri', function () {
    return view('main.kemendagri');
});
Route::get('/luarNegeri', function () {
    return view('main.LuarNegeri');
});
Route::get('/psdm', function () {
    return view('main.PSDM');
});
Route::get('/kominfo', function () {
    return view('main.Kominfo');
});
Route::get('/senibudaya', function () {
    return view('main.SeniBudaya');
});
Route::get('/olahraga', function () {
    return view('main.Olahraga');
});
Route::get('/sospengmas', function () {
    return view('main.Sospengmas');
});
Route::get('/nasionalisme', function () {
    return view('main.Nasionalisme');
});
Route::get('/kerohanian', function () {
    return view('main.Kerohanian');
});
Route::get('/daftarStaff', function () {
    return view('admin.register');
});
Route::get('/login', function () {
    return view('admin.login');
});
Route::get('/forgetpassword', function () {
    return view('admin.forgetpassword');
});
Route::get('/halamanregisteradminbemus999000', function () {
    return view('admin.registerAdmin');
});

Route::get('crud', [LaravelCrud::class, 'index']);
Route::post('add', [LaravelCrud::class, 'add']);
Route::get('/admin', [LaravelCrud::class, 'show'])->middleware(['auth'])->name('admin');

Route::get('daftar', [LaravelCrud::class, 'daftar'])->name('daftar');
Route::post('daftar', [LaravelCrud::class, 'daftar_action'])->name('daftar.action');
Route::get('daftarAdmin', [LaravelCrud::class, 'daftarAdmin'])->name('daftarAdmin');
Route::post('daftarAdmin', [LaravelCrud::class, 'daftarAdmin_action'])->name('daftarAdmin.action');
Route::get('login', [LaravelCrud::class, 'login'])->name('login');
Route::post('login', [LaravelCrud::class, 'login_action'])->name('login.action');
require __DIR__.'/auth.php';

// Route::get('/', function () {
//     return view('main.index');
// });

