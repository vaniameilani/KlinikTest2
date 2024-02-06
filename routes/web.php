<?php

use App\Http\Controllers\BpjsController;
use App\Http\Controllers\ChangeLcController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\KtpsController;
use App\Http\Controllers\KkController;
use App\Http\Controllers\LcController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\RegisterController;
use App\Models\Lc;
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

// MAIN
Route::middleware('auth')->group(function() {
    // HOME ----------------------------------------------------------------------------------------------------------
    Route::get('/', [KtpsController::class, 'index'])->name('home');
    // bawah -> halaman daftar anggota yang belum lengkap
    Route::get('/nulldata', [KtpsController::class, 'indexnull']);
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    // HALAMAN INDEX FILTER ----------------------------------------------------------------------------
    Route::get('/filter', [FilterController::class,'filter']);

    // TAMBAH KTP/ANGGOTA ----------------------------------------------------------------------------
    Route::get('/tambah-anggota', [KtpsController::class, 'create']);
    Route::post('api/fetch-regencies', [KtpsController::class, 'fatchRegency']);
    Route::post('api/fetch-districts', [KtpsController::class, 'fatchDistrict']);
    Route::post('api/fetch-villages', [KtpsController::class, 'fatchVillage']);

    // EDIT KTP ---------------------------------------------------------------------------------------
    Route::post('/ktps', [KtpsController::class, 'store']);
    Route::get('/detail-anggota/{nik}', [KtpsController::class, 'show'])->name('detail-anggota');
    Route::get('/detail-anggota/{ktp}/edit/ktp', [KtpsController::class, 'edit']);
    Route::put('/update-anggota/{nik}', [KtpsController::class, 'update']);
    Route::delete('/detail-anggota/{nik}', [KtpsController::class, 'destroy']);


    // KK -------------------------------------------------------------------------------
    Route::get('/detail-anggota/{kk}/edit/kk', [KkController::class, 'edit'])->name('edit-kk');
    Route::put('/update-anggota-kk/{nik}', [KkController::class, 'update']);
    Route::get('/tambah-anggota-kk/{kk}', [KkController::class, 'create']);
    Route::post('/ktp-kk/{nik}', [KkController::class, 'store']);
    Route::get('/{kk}/tambah-kk', [KkController::class, 'edit']);
    Route::put('/update-kk/{nik}', [KkController::class, 'updatekk']);
    
    // for indexnull
    Route::get('{kk}/tambah-data/kk', [KkController::class, 'editnull']);
    Route::put('/update-data/kk/{nik}', [KkController::class, 'updatenull']);

    // LC -------------------------------------------------------------------------------
    Route::get('/detail-anggota/{lc}/edit/lc', [LcController::class, 'edit']);
    Route::get('/detail-anggota/{lc}/add/lc', [LcController::class, 'add'])->name('add-lc');
    Route::get('{lc}/tambah-lc', [LcController::class, 'add']);
    Route::put('/update-anggota-lc/{nik}', [LcController::class, 'update']);
    Route::put('/add-anggota-lc/{nik}', [LcController::class, 'addupdate']);
    Route::put('/update-lc/{nik}', [LcController::class, 'updatelc']);
    Route::put('/update-freeze-taken/{nik}', [LcController::class, 'freezeortaken']);

    Route::get('/status/{lc}/edit', [LcController::class, 'openstatus']);
    Route::put('/update-status-lc/{nik}', [LcController::class, 'status']);

    // for nulldata
    Route::get('{lc}/tambah-data/lc', [LcController::class, 'addnull']);
    Route::put('/update-data/lc/{nik}', [LcController::class, 'updatenull']);

    // BPJS -------------------------------------------------------------------------------
    Route::get('/detail-anggota/{bpjs}/edit/bpjs', [BpjsController::class, 'edit'])->name('edit-bpjs');
    Route::put('/update-anggota-bpjs/{nik}', [BpjsController::class, 'update']);
    // Route::get('/{bpjs}/tambah-bpjs', [BpjsController::class, 'addbpjs']);
    Route::get('/{bpjs}/tambah-bpjs', [BpjsController::class, 'edit']);
    Route::put('/update-bpjs/{nik}', [BpjsController::class, 'updatebpjs']);

    // for indexnull
    Route::get('/{bpjs}/tambah-data/bpjs', [BpjsController::class, 'editnull']);
    Route::put('/update-data/bpjs/{nik}', [BpjsController::class, 'updatenull']);

    // OTHER -------------------------------------------------------------------------------
    Route::get('/detail-anggota/{other}/edit/lainnya', [OtherController::class, 'edit']);
    Route::put('/update-anggota-lainnya/{nik}', [OtherController::class, 'update']);

    // Route::post('api/fetch-regencies', [KtpsController::class, 'fatchRegency']);
    // Route::post('api/fetch-districts', [KtpsController::class, 'fatchDistrict']);

    Route::post('api/fetch-tps-regencies', [OtherController::class, 'fatchRegency']);
    Route::post('api/fetch-tps-districts', [OtherController::class, 'fatchDistrict']);
    Route::post('api/fetch-tps-villages', [OtherController::class, 'fatchVillage']);
    Route::post('api/fetch-tps', [OtherController::class, 'fatchTps']);
    Route::post('api/fetch-alamat-tps', [OtherController::class, 'fatchAlamatTps']);

    // LC -------------------------------------------------------------------------------
    Route::get('/ubah-kartu/{lc}', [ChangeLcController::class, 'create']);
    Route::post('/ubah-kartu-lc/{nik}', [ChangeLcController::class, 'store']);
    // ENDHOME ---------------------------------------------------------------------------------------

    // EVENT ------------------------------------------------------------------------------------
    Route::get('/acara', [EventController::class, 'index']);
    Route::get('/tambah-acara', [EventController::class, 'add']);
    Route::post('/save-acara', [EventController::class, 'store']);
    Route::get('/detail-acara/{event}', [EventController::class, 'show']);
});