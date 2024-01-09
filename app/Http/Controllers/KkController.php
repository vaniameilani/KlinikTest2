<?php

namespace App\Http\Controllers;

use App\Models\kk;
use App\Models\Ktp;
use App\Models\Lc;
use App\Models\Other;
use App\Models\Bpjs;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KkController extends Controller
{
    public function edit(kk $kk)
    {
        $status = $kk->status;
        return view('KK.edit', compact('kk', 'status'));
    }

    public function update(Request $request, $nik)
    {
        $request->validate([
            'id',
            'nik_kk',
            'kk' => 'required',
            'dokumen_kk' => 'required',
            'status' => 'required',
        ]);

        kk::where('nik_kk', $nik)
        ->update([
            'kk' => $request->kk,
            'dokumen_kk' => $request->dokumen_kk,
            'status' => $request->status,
            'scan_kk' => $request->scan_kk
        ]);

        return redirect()->route('detail-anggota', ['nik' => $nik]);

    }

    public function updatekk(Request $request, $nik)
    {
        $request->validate([
            'id',
            'nik_kk',
            'kk' => 'required',
            'dokumen_kk' => 'required',
            'status' => 'required',
        ]);

        kk::where('nik_kk', $nik)
        ->update([
            'kk' => $request->kk,
            'dokumen_kk' => $request->dokumen_kk,
            'status' => $request->status,
            'scan_kk' => $request->scan_kk
        ]);

        return redirect()->route('home');
        
    }

    public function create(Request $request, $kk)
    {
        $kk = DB::table('kks')
        ->where('kks.kk', $kk)
        ->get();

        return view('KK.add', compact('kk'));
    }

    public function store(Request $request, $nik)
    {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'status_perkawinan' => 'required',
            'kewarganegaraan' => 'required',
            'asal_negara' => 'required',
            'kk'
            // 'scan_ktp' => 'required',
        ]);

        $ktp = new Ktp;
        $ktp->nik = $request->nik;
        $ktp->nama = $request->nama;
        $ktp->jenis_kelamin = $request->jenis_kelamin;
        $ktp->agama = $request->agama;
        $ktp->pekerjaan = $request->pekerjaan;
        $ktp->alamat = $request->alamat;
        $ktp->tempat_lahir = $request->tempat_lahir;
        $ktp->tanggal_lahir = $request->tanggal_lahir;
        $ktp->status_perkawinan = $request->status_perkawinan;
        $ktp->kewarganegaraan = $request->kewarganegaraan;
        $ktp->asal_negara = $request->asal_negara;
        $ktp->scan_ktp = $request->scan_ktp;
        $ktp->save();

        $kk = new kk;
        $kk->nik_kk = $request->nik;
        $kk->nama = $request->nama;
        $kk->kk = $request->kk;
        $kk->save();

        $lc = new Lc;
        $lc->nik_lc = $request->nik;
        $lc->save();

        $bpjs = new Bpjs;
        $bpjs->nik_bpjs = $request->nik;
        $bpjs->save();

        $other = new Other;
        $other->nik_other = $request->nik;
        $other->save();
        
        return redirect()->route('detail-anggota', ['nik' => $nik]);
    }
}
