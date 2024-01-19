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
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Support\Collection;


class KtpsController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $collect = DB::table('ktps')
        ->join('bpjs', 'ktps.nik', '=', 'bpjs.nik_bpjs')
        ->join('lcs', 'ktps.nik', '=', 'lcs.nik_lc')
        ->join('kks', 'ktps.nik', '=', 'kks.nik_kk');

        
        $countktp = $collect
        ->count('ktps.nik');

        $countlc = $collect
        ->wherenotnull('lcs.no_kartu')
        ->count('lcs.no_kartu');

        $countnullkk = DB::table('kks')
        ->whereNull('kks.kk')
        ->count();

        $countnullbpjs = DB::table('bpjs')
        ->whereNull('bpjs.no_bpjs')
        ->count();

        if ((int)$countnullkk > (int)$countnullbpjs) {
            $countnull = $countnullkk;
        }else{
            $countnull = $countnullbpjs;
        };

        $data = $collect
        ->select('ktps.nik', 'ktps.nama', 'kks.kk', 'bpjs.no_bpjs', 'bpjs.nik_bpjs', 'lcs.no_kartu', 'lcs.id')
        ->where('lcs.no_kartu', 'like', '%'.$search.'%')
        ->orwhere('ktps.nama', 'like', '%'.$search.'%')
        ->orderBy('lcs.id', 'DESC')
        ->Paginate(10);
        
        return view('Home.index', compact('data', 'countktp', 'countlc', 'countnull'));
    }

    public function create()
    {
        $prov = Province::all();
        return view('KTP.add', compact('prov'));
    }

    public function fatchRegency(Request $request)
    {
        $data['regencies'] = Regency::where('province_id', $request->province_id)->get();
        return response()->json($data);
    }

    public function fatchDistrict(Request $request)
    {
        $data['districts'] = District::where('regency_id', $request->regency_id)->get();
        return response()->json($data);
    }

    public function store(Request $request)
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
        $ktp->provinsi = $request->provinsi;
        $ktp->kota_kab = $request->kota_kab;
        $ktp->kecamatan = $request->kecamatan;
        $ktp->desa_kel = $request->desa_kel;
        $ktp->rt = $request->rt;
        $ktp->rw = $request->rw;
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
        
        $listdata = DB::table('kks')
        ->join('bpjs', 'kks.nik_kk', '=', 'bpjs.nik_bpjs')
        ->join('lcs', 'kks.nik_kk', '=', 'lcs.nik_lc')
        ->join('ktps', 'kks.nik_kk', '=', 'ktps.nik')
        ->select('ktps.nik', 'ktps.nama', 'kks.kk', 'bpjs.no_bpjs', 'bpjs.nik_bpjs', 'lcs.no_kartu', 'bpjs.id')
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

        // $prov = DB::table('provinces')
        // ->where('provinces.id', '=', $nik->provinsi)
        // ->get();

        // $rgc = DB::table('regencies')
        // ->where('regencies.id', '=', $nik->kota_kab)
        // ->get();

        // $dist = DB::table('districts')
        // ->where('districts.id', '=', $nik->kecamatan)
        // ->get();

        return view('Member.detail', [
            'kk' => $kk,
            'ktp' => $nik,
            'lc' => $lc,
            'kk' => $kk,
            'bpjs' => $bpjs,
            'other' => $other,
            'listkk' => $listkk,
            'changelc' => $changelc,
            'listdata' => $listdata,
            'lcselect' => $lcselect,
            // 'prov' => $prov,
            // 'rgc' => $rgc,
            // 'dist' => $dist
        ]);
    }

    public function edit(Ktp $ktp)
    {
        // dd($gender);
        $gender = $ktp->jenis_kelamin;
        $prov = $ktp->provinsi;
        $kota_kab = $ktp->kota_kab;
        $kec = $ktp->kecamatan;
        $desa_kel = $ktp->desa_kel;
        $marriage = $ktp->status_perkawinan;
        $agama = $ktp->agama;
        $citizen = $ktp->kewarganegaraan;
        return view('KTP.edit', compact('ktp', 'gender', 'prov', 'kota_kab', 'kec', 'desa_kel', 'marriage', 'agama', 'citizen'));
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
            'provinsi' => 'required',
            'kota_kab' => 'required',
            'kecamatan' => 'required',
            'desa_kel' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'status_perkawinan' => 'required',
            'kewarganegaraan' => 'required',
            'asal_negara' => 'required',
        ]);
        Ktp::where('nik', $nik)
        ->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'provinsi' => $request->provinsi,
            'kota_kab' => $request->kota_kab,
            'kecamatan' => $request->kecamatan,
            'desa_kel' => $request->desa_kel,
            'rt' => $request->rt,
            'rw' => $request->rw,
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
    }
    
    public function indexnull()
    {

        $datanull = DB::table('ktps')
        ->join('bpjs', 'ktps.nik', '=', 'bpjs.nik_bpjs')
        ->join('lcs', 'ktps.nik', '=', 'lcs.nik_lc')
        ->join('kks', 'ktps.nik', '=', 'kks.nik_kk')
        ->select('ktps.nik', 'ktps.nama', 'kks.kk', 'bpjs.no_bpjs', 'bpjs.nik_bpjs', 'lcs.no_kartu', 'lcs.id')
        ->whereNull('kks.kk')
        ->orwhereNull('bpjs.no_bpjs')
        ->get();

        return view('Home.indexnull', compact('datanull'));
    }
}
