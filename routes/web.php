<?php

use App\Http\Controllers\BpjsController;
use App\Http\Controllers\ChangeLcController;
use App\Http\Controllers\KtpsController;
use App\Http\Controllers\KkController;
use App\Http\Controllers\LcController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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
Route::middleware('guest')->group(function() {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::get('/register', [RegisterController::class, 'register']);
    Route::post('/register', [RegisterController::class, 'store']);
});

// HOME
Route::middleware('auth')->group(function() {
    Route::get('/', [KtpsController::class, 'index'])->name('home');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/tambah-anggota', [KtpsController::class, 'create']);
    Route::post('/ktps', [KtpsController::class, 'store']);
    Route::get('/detail-anggota/{nik}', [KtpsController::class, 'show'])->name('detail-anggota');
    Route::get('/detail-anggota/{ktp}/edit/ktp', [KtpsController::class, 'edit']);
    Route::put('/update-anggota/{nik}', [KtpsController::class, 'update']);

    // Route::get('/{nik}/tambah-kk', [KtpsController::class, 'addkk']);

    // KK -------------------------------------------------------------------------------
    Route::get('/detail-anggota/{kk}/edit/kk', [KkController::class, 'edit']);
    Route::put('/update-anggota-kk/{nik}', [KkController::class, 'update']);
    Route::get('/tambah-anggota-kk/{kk}', [KkController::class, 'create']);
    Route::post('/ktp-kk/{nik}', [KkController::class, 'store']);

    // LC -------------------------------------------------------------------------------
    Route::get('/detail-anggota/{lc}/edit/lc', [LcController::class, 'edit']);
    Route::get('/detail-anggota/{lc}/add/lc', [LcController::class, 'add']);
    Route::put('/update-anggota-lc/{nik}', [LcController::class, 'update']);

    // BPJS -------------------------------------------------------------------------------
    Route::get('/detail-anggota/{bpjs}/edit/bpjs', [BpjsController::class, 'edit']);
    Route::put('/update-anggota-bpjs/{nik}', [BpjsController::class, 'update']);
    Route::get('/{bpjs}/tambah-bpjs', [BpjsController::class, 'addbpjs']);
    Route::put('/save-anggota-bpjs/{bpjs}', [BpjsController::class, 'storebpjs']);

    // OTHER -------------------------------------------------------------------------------
    Route::get('/detail-anggota/{other}/edit/lainnya', [OtherController::class, 'edit']);
    Route::put('/update-anggota-lainnya/{nik}', [OtherController::class, 'update']);

    // LC -------------------------------------------------------------------------------
    Route::get('/ubah-kartu/{lc}', [ChangeLcController::class, 'create']);
    Route::post('/ubah-kartu-lc/{nik}', [ChangeLcController::class, 'store']);
});

// EVENT -------------------------------------------------------------------------------
// INDEX / LIST
Route::get('/acara', function () {
    return view('Event/index');
});