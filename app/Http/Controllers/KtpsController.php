<?php

namespace App\Http\Controllers;

use App\Models\Ktp;
use App\Models\Bpjs;
use App\Models\ChangeLc;
use App\Models\kk;
use App\Models\Lc;
use App\Models\Other;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Support\Collection;


class KtpsController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        
        // $ktps = Ktp::all();
        // return view('Home.index', compact('ktps'));

        $data = DB::table('ktps')
        ->join('bpjs', 'ktps.nik', '=', 'bpjs.nik_bpjs')
        ->join('lcs', 'ktps.nik', '=', 'lcs.nik_lc')
        ->select('ktps.nik', 'ktps.nama', 'bpjs.no_bpjs', 'lcs.no_kartu')
        ->where('lcs.no_kartu', 'like', '%'.$search.'%')
        ->orwhere('ktps.nama', 'like', '%'.$search.'%')
        ->Paginate(10);
        
        return view('Home.index', compact('data'));
    }

    public function create()
    {
        return view('KTP.add');
    }

    public function store(Request $request)
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

        return redirect('/')->with('success', 'Data berhasil ditambahkan');
    }

    // DETAIL
    public function show(Ktp $nik)
    {
        $kkselect = DB::table('kks')
        ->where('kks.nik_kk', '=', $nik->nik)
        ->select('kks.kk');
        
        $listkk = DB::table('kks')
        ->where('kks.kk', '=', $kkselect)
        ->get();

        $lc = DB::table('lcs')
        ->where('lcs.nik_lc', '=', $nik->nik)
        ->get();

        $kk = DB::table('kks')
        ->where('kks.nik_kk', '=', $nik->nik)
        ->get();
        
        $bpjs = DB::table('bpjs')
        ->where('bpjs.nik_bpjs', '=', $nik->nik)
        ->get();
        
        $other = DB::table('others')
        ->where('others.nik_other', '=', $nik->nik)
        ->get();

        $lcselect = DB::table('lcs')
        ->where('lcs.nik_lc', '=', $nik->nik)
        ->select('lcs.no_kartu');

        $changelc = DB::table('change_lcs')
        ->where('change_lcs.no_kartu', '=', $lcselect)
        ->orderBy('tanggal_upgrade', 'desc')
        ->paginate(3);

        return view('Member.detail', [
            'kk' => $kk,
            'ktp' => $nik,
            'lc' => $lc,
            'kk' => $kk,
            'bpjs' => $bpjs,
            'other' => $other,
            'listkk' => $listkk,
            'changelc' => $changelc,
            'lcselect' => $lcselect
        ]);
        
        // $ktp = Ktp::find($nik);
        // $nik_lc = $nik;
        // return view('Member.detail', [
        //     'ktp' => Ktp::find($nik)
        // ]);
    }

    public function edit(Ktp $ktp)
    {
        // dd($gender);
        $gender = $ktp->jenis_kelamin;
        $marriage = $ktp->status_perkawinan;
        $agama = $ktp->agama;
        $citizen = $ktp->kewarganegaraan;
        return view('KTP.edit', compact('ktp', 'gender', 'marriage', 'agama', 'citizen'));
    }

    public function update(Request $request, $nik)
    {
        // dd($nik);
        $request->validate([
            'nik',
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
            // 'nik_kk' => 'required',
            // 'nik_lc' => 'required',
            // 'nik_bpjs' => 'required',
            // 'nik_other' => 'required',
            // 'scan_ktp' => 'required'
        ]);
        Ktp::where('nik', $nik)
        ->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'status_perkawinan' => $request->status_perkawinan,
            'kewarganegaraan' => $request->kewarganegaraan,
            'asal_negara' => $request->asal_negara,
            'scan_ktp' => $request->scan_ktp
        ]);
        Kk::where('nik_kk', $nik)
        ->update([
            'nama' => $request->nama
        ]);
        
        return redirect()->route('detail-anggota', ['nik' => $nik]);
        // return redirect()->route('detail-anggota', $nik);
        // return redirect()->back();
    }
}
