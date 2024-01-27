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
use App\Models\TpsList;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Support\Collection;

class FilterController extends Controller
{
    public function filter(Request $request)
    {           
        $listkec = DB::table('districts')
        ->where('regency_id', '=', '1902')
        ->orWhere('regency_id', '=', '1906')
        ->orderBy('name')
        ->get();

        $kecbelitung = DB::table('districts')
        ->where('regency_id', '=', '1902')
        ->get('name');
        $kecbeltim = DB::table('districts')
        ->where('regency_id', '=', '1906')
        ->get('name');

        $kecamatan = District::all()->where('id', $request->kecamatan)->pluck('name');

        $desa_kel = Village::all()->where('id', $request->desa_kel)->pluck('name');

        $no_tps = TpsList::all()->where('id', $request->no_tps)->pluck('no_tps');

        $belitung1 = ["LESUNG BATANG", "PANGKALLALANG", "BULUH TUMBANG", "PERAWAS", "DUKONG", "JURU SEBERANG", "AIR MERBAU", "AIK KETEKOK", "AIK RAYAK"];
        $belitung2 = ["KOTA", "PARIT", "TANJUNGPENDAM", "PAAL SATU", "KAMPONG DAMAI", "AIR SAGA", "AIK PELEMPANG JAYA"];
        $belitung3 = ["AIR SELUMAR", "AIR SERUK", "BATU ITAM", "KECIPUT", "PELEPAK PUTE", "SIJUK", "SUNGAI PADANG"," TANJONG TINGGI", "TANJUNG BINGA", "TERONG", "AIR BATU BUDING", "BADAU", "CERUCUK", "IBUL", "KACANG BOTOR", "PEGANTUNGAN", "SUNGAI SAMAK"];
        $belitung4 = ["BANTAN", "GUNUNG RITING", "KEMBIRI", "LASSAR", "MEMBALONG", "MENTIGI", "PADANG KANDIS", "PERPAT", "PULAU SELIU", "PULAU SUMEDANG", "SIMPANG RUSA", "TANJUNGRUSA", "PETALING", "PULAU GERSIK", "SELAT NASIK", "SUAK GUAL"];
        $beltim1 = ["BARU", "BENTAIAN JAYA", "BUKU LIMAU", "KELUBI", "KURNIA JAYA", "LALANG", "LALANG JAYA", "MEKAR JAYA", "PADANG", "AIK MADU", "LINTANG", "RENGGIANG", "SIMPANG TIGA"];
        $beltim2 = ["BALOK", "DENDANG", "JANGKANG", "NYURUK", "BATU PENYU", "GANTUNG", "JANGKAR ASAM", "LENGGANG", "LILANGAN", "LIMBONGAN", "SELINGSING", "DUKONG", "SIMPANG PESAK", "TANJUNG BATU ITAM", "TANJUNG KELUMPANG"];
        $beltim3 = ["BUDING", "CENDIL", "MAYANG", "MENTAWAK", "PEMBAHARUAN", "SENYUBUK", "AIR KELIK", "BURONG MANDI", "MEMPAYA", "MENGKUBANG", "SUKAMANDI" ];

        if($request->dapil == "BELITUNG 1"){
        $dapil = ["LESUNG BATANG", "PANGKALLALANG", "BULUH TUMBANG", "PERAWAS", "DUKONG", "JURU SEBERANG", "AIR MERBAU", "AIK KETEKOK", "AIK RAYAK"];
        }elseif($request->dapil == "BELITUNG 2"){
        $dapil = ["KOTA", "PARIT", "TANJUNGPENDAM", "PAAL SATU", "KAMPONG DAMAI", "AIR SAGA", "AIK PELEMPANG JAYA"];
        }elseif($request->dapil == "BELITUNG 3"){
        $dapil = ["AIR SELUMAR", "AIR SERUK", "BATU ITAM", "KECIPUT", "PELEPAK PUTE", "SIJUK", "SUNGAI PADANG"," TANJONG TINGGI", "TANJUNG BINGA", "TERONG", "AIR BATU BUDING", "BADAU", "CERUCUK", "IBUL", "KACANG BOTOR", "PEGANTUNGAN", "SUNGAI SAMAK"];
        }elseif($request->dapil == "BELITUNG 4"){
        $dapil = ["BANTAN", "GUNUNG RITING", "KEMBIRI", "LASSAR", "MEMBALONG", "MENTIGI", "PADANG KANDIS", "PERPAT", "PULAU SELIU", "PULAU SUMEDANG", "SIMPANG RUSA", "TANJUNGRUSA", "PETALING", "PULAU GERSIK", "SELAT NASIK", "SUAK GUAL"];
        }elseif($request->dapil == "BELITUNG TIMUR 1"){
        $dapil = ["BARU", "BENTAIAN JAYA", "BUKU LIMAU", "KELUBI", "KURNIA JAYA", "LALANG", "LALANG JAYA", "MEKAR JAYA", "PADANG", "AIK MADU", "LINTANG", "RENGGIANG", "SIMPANG TIGA"];
        }elseif($request->dapil == "BELITUNG TIMUR 2"){
        $dapil = ["BALOK", "DENDANG", "JANGKANG", "NYURUK", "BATU PENYU", "GANTUNG", "JANGKAR ASAM", "LENGGANG", "LILANGAN", "LIMBONGAN", "SELINGSING", "DUKONG", "SIMPANG PESAK", "TANJUNG BATU ITAM", "TANJUNG KELUMPANG"];
        }else{
        $dapil = ["BUDING", "CENDIL", "MAYANG", "MENTAWAK", "PEMBAHARUAN", "SENYUBUK", "AIR KELIK", "BURONG MANDI", "MEMPAYA", "MENGKUBANG", "SUKAMANDI" ];
        };
        $collect = DB::table('ktps')
        ->join('bpjs', 'ktps.nik', '=', 'bpjs.nik_bpjs')
        ->join('lcs', 'ktps.nik', '=', 'lcs.nik_lc')
        ->join('kks', 'ktps.nik', '=', 'kks.nik_kk')
        ->join('others', 'ktps.nik', '=', 'others.nik_other');

        if (isset($request->dapil) && $request->dapil != ''){
            $datadapil = $collect
            ->select('ktps.nik', 'ktps.nama', 'ktps.kecamatan', 'ktps.desa_kel', 'ktps.alamat', 'kks.kk', 'bpjs.jenis_bpjs', 'bpjs.nik_bpjs', 'lcs.no_kartu', 'lcs.id_lc', 'kks.id_kk', 'bpjs.id_bpjs', 'others.no_hp')
            ->whereIn('ktps.desa_kel', $dapil);
        }else{
            $datadapil = $collect
            ->select('ktps.nik', 'ktps.nama', 'ktps.kecamatan', 'ktps.desa_kel', 'ktps.alamat', 'kks.kk', 'bpjs.jenis_bpjs', 'bpjs.nik_bpjs', 'lcs.no_kartu', 'lcs.id_lc', 'kks.id_kk', 'bpjs.id_bpjs', 'others.no_hp');
        };
        if (isset($request->faskes) && $request->faskes != '' && isset($request->jenis_bpjs) && $request->jenis_bpjs != ''){
            $filterdata =$datadapil
            ->where('bpjs.faskes_bpjs', '=', $request->faskes)
            ->where('bpjs.jenis_bpjs', '=', $request->jenis_bpjs);
        }elseif(isset($request->faskes) && $request->faskes != ''){
            $filterdata =$datadapil
            ->where('bpjs.faskes_bpjs', '=', $request->faskes);
        }elseif(isset($request->jenis_bpjs) && $request->jenis_bpjs != ''){
            $filterdata =$datadapil
            ->where('bpjs.jenis_bpjs', '=', $request->jenis_bpjs);
        }else{
            $filterdata =$datadapil
            ->select('ktps.nik', 'ktps.nama', 'ktps.kecamatan', 'ktps.desa_kel', 'ktps.alamat', 'kks.kk', 'bpjs.jenis_bpjs', 'bpjs.nik_bpjs', 'lcs.no_kartu', 'lcs.id_lc', 'kks.id_kk', 'bpjs.id_bpjs', 'others.no_hp');
        };

        if(isset($request->kecamatan) && $request->kecamatan != '' &&  $request->desa_kel == '' && $request->no_tps == ''){
            $datanull = $filterdata
            ->where('ktps.kecamatan', '=', $kecamatan)
            ->paginate(25);
        }elseif(isset($request->desa_kel) && $request->desa_kel != '' && $request->no_tps == ''){
            $datanull = $filterdata
            ->where('ktps.desa_kel', '=', $desa_kel)
            ->paginate(25);
        }elseif(isset($request->no_tps) && $request->no_tps != ''){
            $datanull = $filterdata
            ->where('ktps.desa_kel', '=', $desa_kel)
            ->where('others.no_tps', '=', $no_tps)
            ->paginate(25);
        }else{
            $datanull = $filterdata
            ->paginate(25);
        };
       

        return view('Home.index-filter', compact('kecbeltim', 'kecbelitung', 'datanull', 'listkec', 'kecamatan', 'desa_kel', 'no_tps', 'belitung1', 'belitung2', 'belitung3', 'belitung4', 'beltim1', 'beltim2', 'beltim3'));
    }
}
