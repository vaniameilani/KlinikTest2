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
use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Arr;


class KtpsController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $collect = DB::table('ktps')
        ->join('bpjs', 'ktps.nik', '=', 'bpjs.nik_bpjs')
        ->join('lcs', 'ktps.nik', '=', 'lcs.nik_lc')
        ->join('kks', 'ktps.nik', '=', 'kks.nik_kk');

        $countktp = DB::table('ktps')
        ->count('ktps.nik');

        $countlc = DB::table('lcs')
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
        
        if(ctype_alpha($search)){
            $data = $collect
            ->select('ktps.nik', 'ktps.nama', 'kks.kk', 'bpjs.no_bpjs', 'bpjs.nik_bpjs', 'lcs.no_kartu', 'lcs.id_lc', 'kks.id_kk', 'bpjs.id_bpjs')
            ->where('ktps.nama', 'like', '%'.$search.'%')
            ->orderBy('lcs.id_lc', 'DESC')
            ->Paginate(10);
        }elseif(ctype_digit($search)){
            $data = $collect
            ->select('ktps.nik', 'ktps.nama', 'kks.kk', 'bpjs.no_bpjs', 'bpjs.nik_bpjs', 'lcs.no_kartu', 'lcs.id_lc', 'kks.id_kk', 'bpjs.id_bpjs')
            ->where('ktps.nik', 'like', '%'.$search.'%')
            ->orderBy('lcs.id_lc', 'DESC')
            ->Paginate(10);
        }elseif(ctype_alnum($search)){
            $data = $collect
            ->select('ktps.nik', 'ktps.nama', 'kks.kk', 'bpjs.no_bpjs', 'bpjs.nik_bpjs', 'lcs.no_kartu', 'lcs.id_lc', 'kks.id_kk', 'bpjs.id_bpjs')
            ->where('lcs.no_kartu', 'like', '%'.$search.'%')
            ->orderBy('lcs.id_lc', 'DESC')
            ->Paginate(10);
        }else{        
            $data = $collect
            ->select('ktps.nik', 'ktps.nama', 'kks.kk', 'bpjs.no_bpjs', 'bpjs.nik_bpjs', 'lcs.no_kartu', 'lcs.id_lc', 'kks.id_kk', 'bpjs.id_bpjs')
            ->orderBy('lcs.id_lc', 'DESC')
            ->Paginate(10);
        };

        
        return view('Home.index', compact('data', 'countktp', 'countlc', 'countnull'));
    }

    public function create()
    {
        $prov = Province::all()->sortBy('name');
        return view('KTP.add', compact('prov'));
    }

    public function fatchRegency(Request $request)
    {
        $data['regencies'] = Regency::where('province_id', $request->province_id)->orderBy('name')->get();
        return response()->json($data);
    }

    public function fatchDistrict(Request $request)
    {
        $data['districts'] = District::where('regency_id', $request->regency_id)->orderBy('name')->get();
        return response()->json($data);
    }

    public function fatchVillage(Request $request)
    {
        $data['villages'] = Village::where('district_id', $request->district_id)->orderBy('name')->get();
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
            'kode_pos' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'status_perkawinan' => 'required',
            'kewarganegaraan' => 'required',
            'asal_negara' => 'required',
            'scan_ktp',
        ]);

        // $fileName = time().$request->file('photo')->getClientOriginalName();
        // $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        // $requestData["photo"] = '/storage/'.$path;

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
        // $ktp->scan_ktp = $request->scan_ktp;
        if($request->hasFile('scan_ktp')){
            // $file = $request->file('scan_ktp');
            // $ext = $file->getClientOriginalExtension();
            // $filename = time().'.'.$ext; 
            // $file->move('uploads/buku/', $filename); 
            // $ktp->scan_ktp = $filename;

            $filename = time().'.'.$request->file('scan_ktp')->getClientOriginalExtension();
            $path = $request->file('scan_ktp')->storeAs('images', $filename, 'public');
            $ext = '/storage/'.$path;
            $ktp->scan_ktp = $ext;
        }

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
        ->select('ktps.nik', 'ktps.nama', 'kks.kk', 'bpjs.no_bpjs', 'bpjs.nik_bpjs', 'lcs.no_kartu', 'bpjs.id_bpjs', 'lcs.id_lc')
        ->where('kks.kk', '=', $kkselect)
        ->orderBy('ktps.nama')
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
        ->where('change_lcs.nik_clc', '=', $nik->nik)
        ->orderBy('tanggal_upgrade', 'desc')
        ->paginate(3);

        $kartu = $lcselect->value('lcs.no_kartu');
        
        if($kartu == null){
            $events = null;
        }else{
            $events = DB::table('events')
            ->where('daftar_anggota', 'like', '%'.$kartu.'%')
            ->select('daftar_anggota', 'id_acara', 'nama_acara', 'status', 'tgl_acara', 'lokasi_acara')
            ->orderBy('tgl_acara', 'DESC');
        }

        if($events == null || count($events->get()) == 0){
            $getevents = null;
            $idevent = null;
            $idacara = null;
            $statuses = null;
            $nokartu = null;
            $sscard = null;
            $ss_status = null;
            $results = null;
            $stat = null;
        
        }else{
            $getevents = $events->paginate(3);
            $idevent = $events->pluck('id_acara')->toArray();
            $idacara = count($getevents);
            $statuses = $events->pluck('status');
            $nokartu = $events->pluck('daftar_anggota');
        
            foreach ($nokartu as $card){
                $sscard[] = json_decode($card);
            }

            foreach ($statuses as $status){
                $ss_status[] = json_decode($status);
            }
            for($i=0; $i <= $idacara - 1; $i++){
                $results[] = array_combine($sscard[$i], $ss_status[$i]);
            }
            $stat = array_combine($idevent, $results);
        }
        // $result=array(); 
        // foreach($getcard as $key=>$value ){ 
        //   $val=$getstatus[$key]; 
        //   $result[$key]=array($value,$val); 
        // } 


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
            'results' => $results,
            'stat' => $stat,
            'getevents' => $getevents
            // 'prov' => $prov,
            // 'rgc' => $rgc,
            // 'dist' => $dist
        ]);
    }

    public function edit(Ktp $ktp)
    {
        // dd($gender);
        $gender = $ktp->jenis_kelamin;
        $desa_kel = $ktp->desa_kel;
        $marriage = $ktp->status_perkawinan;
        $agama = $ktp->agama;
        $citizen = $ktp->kewarganegaraan;
        $prov = $ktp->provinsi;
        $kota_kab = $ktp->kota_kab;
        $kec = $ktp->kecamatan;
        $desa_kel = $ktp->desa_kel;
        
        $ssprov =  Province::all();
        $selectprov = DB::table('provinces')
        ->where('provinces.name', '=', $prov)
        ->value('id');

        $sskotakab = DB::table('regencies')
        ->where('regencies.province_id', '=', $selectprov)
        ->get();

        $selectkotakab = DB::table('regencies')
        ->where('regencies.name', '=', $kota_kab)
        ->value('id');
        
        $sskec = DB::table('districts')
        ->where('districts.regency_id', '=', $selectkotakab)
        ->get();

        $selectkec = DB::table('districts')
        ->where('districts.name', '=', $kec)
        ->value('id');

        $ssvillage = DB::table('villages')
        ->where('villages.district_id', '=', $selectkec)
        ->get();

        return view('KTP.edit', compact('ktp', 'gender', 'prov', 'kota_kab', 'kec', 'desa_kel', 'marriage', 'agama', 'citizen', 'ssprov', 'sskotakab', 'sskec', 'ssvillage'));
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
            'kode_pos' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'status_perkawinan' => 'required',
            'kewarganegaraan' => 'required',
            'asal_negara' => 'required',
            'scan_ktp'
            
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


        Ktp::where('nik', $nik)
        ->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'provinsi' => $ssprovinsi,
            'kota_kab' => $sskotakab,
            'kecamatan' => $sskecamatan,
            'desa_kel' => $ssdesakel,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'alamat' => $request->alamat,
            'kode_pos' => $request->kode_pos,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'status_perkawinan' => $request->status_perkawinan,
            'kewarganegaraan' => $request->kewarganegaraan,
            'asal_negara' => $request->asal_negara,

        ]);

        $ktp = Ktp::where('nik', $nik)->first();
        if($request->hasFile('scan_ktp'))
        {   
            $destination = public_path().$ktp->scan_ktp;
            if($ktp->scan_ktp != '' && $ktp->scan_ktp != null)
                {
                    unlink($destination);
                }
            $filename = time().'.'.$request->file('scan_ktp')->getClientOriginalExtension();
            $path = $request->file('scan_ktp')->storeAs('images', $filename, 'public');
            $ext = '/storage/'.$path;
            Ktp::where('nik', $nik)->update(['scan_ktp' => $ext]);
        };

        Kk::where('nik_kk', $nik)
        ->update([
            'nama' => $request->nama
        ]);

        return redirect()->route('detail-anggota', ['nik' => $nik]);
    }
    
    public function indexnull()
    {
        $collect = DB::table('ktps')
        ->join('bpjs', 'ktps.nik', '=', 'bpjs.nik_bpjs')
        ->join('lcs', 'ktps.nik', '=', 'lcs.nik_lc')
        ->join('kks', 'ktps.nik', '=', 'kks.nik_kk');

        $datanullkk = DB::table('kks')
        ->whereNull('kks.kk')
        ->count();

        $datanullbpjs = DB::table('bpjs')
        ->whereNull('bpjs.no_bpjs')
        ->count();

        if((int)$datanullkk > (int)$datanullbpjs){
            $datanull = $collect
            ->select('ktps.nik', 'ktps.nama', 'kks.kk', 'bpjs.no_bpjs', 'bpjs.nik_bpjs', 'lcs.no_kartu', 'lcs.id_lc', 'kks.id_kk', 'bpjs.id_bpjs')
            ->whereNull('kks.kk')
            ->paginate(25);
        }else{
            $datanull = $collect
            ->select('ktps.nik', 'ktps.nama', 'kks.kk', 'bpjs.no_bpjs', 'bpjs.nik_bpjs', 'lcs.no_kartu', 'lcs.id_lc', 'kks.id_kk', 'bpjs.id_bpjs')
            ->whereNull('bpjs.no_bpjs')
            ->paginate(25);
        }
       

        return view('Home.indexnull', compact('datanull'));
    }

    public function destroy(Ktp $nik)
    {
        $destination = public_path().$nik->scan_ktp;
            if($nik->scan_ktp != '' && $nik->scan_ktp != null)
                {
                    unlink($destination);
                }
        $deleteBpjs = DB::table('bpjs')->where('nik_bpjs', '=', $nik->nik)->delete();
        $deleteclc = DB::table('change_lcs')->where('nik_clc', '=', $nik->nik)->delete();
        $deletekk = DB::table('kks')->where('nik_kk', '=', $nik->nik)->delete();
        $deletektp = DB::table('ktps')->where('nik', '=', $nik->nik)->delete();
        $deletelc = DB::table('lcs')->where('nik_lc', '=', $nik->nik)->delete();
        $deleteother = DB::table('others')->where('nik_other', '=', $nik->nik)->delete();    

        return redirect('/')->with('success', 'Data telah dihapus');
    }
}
