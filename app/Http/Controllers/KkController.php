<?php

namespace App\Http\Controllers;

use App\Models\Ktp;
use App\Models\Bpjs;
use App\Models\ChangeLc;
use App\Models\District;
use App\Models\kk;
use App\Models\Lc;
use App\Models\Other;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Support\Collection;

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
            'id_kk',
            'nik_kk',
            'kk' => 'required',
            'dokumen_kk' => 'required',
            'status' => 'required',
            'scan_kk'
        ]);

        kk::where('nik_kk', $nik)
        ->update([
            'kk' => $request->kk,
            'dokumen_kk' => $request->dokumen_kk,
            'status' => $request->status,
        ]);

        $kk = kk::where('nik_kk', $nik)->first();
        if($request->hasFile('scan_kk'))
        {   
            $destination = public_path().$kk->scan_kk;
            if($kk->scan_kk != '' && $kk->scan_kk != null)
                {
                    unlink($destination);
                }
            $filename = time().'.'.$request->file('scan_kk')->getClientOriginalExtension();
            $path = $request->file('scan_kk')->storeAs('images', $filename, 'public');
            $ext = '/storage/'.$path;
            kk::where('nik_kk', $nik)->update(['scan_kk' => $ext]);
        };

        return redirect()->route('detail-anggota', ['nik' => $nik]);

    }

    public function updatekk(Request $request, $nik)
    {
        $request->validate([
            'id_kk',
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

    
    // For /nulldata page
    public function editnull(kk $kk)
    {
        $status = $kk->status;
        return view('KK.edit-null', compact('kk', 'status'));
    }

    public function updatenull(Request $request, $nik)
    {
        $request->validate([
            'id_kk',
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

        return redirect('/nulldata');
        
    }


    // cek apakah digunakan atau nggak 2 functions dibawah ini
    public function create(Request $request, $kk)
    {
        $kk = DB::table('kks')
        ->where('kks.kk', $kk)
        ->get();
        $prov = Province::all()->sortBy('name');

        return view('KK.add', compact('kk', 'prov'));
    }

    public function store(Request $request, $nik)
    {
        $request->validate([
            'nik' => 'required|unique:ktps,nik',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'provinsi' => 'required',
            'kota_kab' => 'required',
            'kecamatan' => 'required',
            'desa_kel' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'alamat' => 'required',
            'kode_pos' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'status_perkawinan' => 'required',
            'kewarganegaraan' => 'required',
            'asal_negara' => 'required',
            'scan_ktp',
            'kk'
            // 'scan_ktp' => 'required',
        ]);

        $ssprovinsi = DB::table('provinces')
        ->where('provinces.id', '=', $request->provinsi)
        ->value('provinces.name');

        $sskotakab = DB::table('regencies')
        ->where('regencies.id', '=', $request->kota_kab)
        ->value('regencies.name');

        $sskecamatan = DB::table('districts')
        ->where('districts.id', '=', $request->kecamatan)
        ->value('districts.name');

        $ssdesakel = DB::table('villages')
        ->where('villages.id', '=', $request->desa_kel)
        ->value('villages.name');

        $ktp = new Ktp;
        $ktp->nik = $request->nik;
        $ktp->nama = $request->nama;
        $ktp->jenis_kelamin = $request->jenis_kelamin;
        $ktp->agama = $request->agama;
        $ktp->pekerjaan = $request->pekerjaan;
        $ktp->provinsi = $ssprovinsi;
        $ktp->kota_kab = $sskotakab;
        $ktp->kecamatan = $sskecamatan;
        $ktp->desa_kel = $ssdesakel;
        $ktp->rt = $request->rt;
        $ktp->rw = $request->rw;
        $ktp->alamat = $request->alamat;
        $ktp->kode_pos = $request->kode_pos;
        $ktp->tempat_lahir = $request->tempat_lahir;
        $ktp->tanggal_lahir = $request->tanggal_lahir;
        $ktp->status_perkawinan = $request->status_perkawinan;
        $ktp->kewarganegaraan = $request->kewarganegaraan;
        $ktp->asal_negara = $request->asal_negara;
        if($request->hasFile('scan_ktp')){
            $filename = time().'.'.$request->file('scan_ktp')->getClientOriginalExtension();
            $path = $request->file('scan_ktp')->storeAs('images', $filename, 'public');
            $ext = '/storage/'.$path;
            $ktp->scan_ktp = $ext;
        }
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
