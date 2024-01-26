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

        $kecamatan = District::all()->where('id', $request->kecamatan)->pluck('name');
        $desa_kel = Village::all()->where('id', $request->desa_kel)->pluck('name');
        $no_tps = TpsList::all()->where('id', $request->no_tps)->pluck('no_tps');
        $collect = DB::table('ktps')
        ->join('bpjs', 'ktps.nik', '=', 'bpjs.nik_bpjs')
        ->join('lcs', 'ktps.nik', '=', 'lcs.nik_lc')
        ->join('kks', 'ktps.nik', '=', 'kks.nik_kk')
        ->join('others', 'ktps.nik', '=', 'others.nik_other');

        if (isset($request->faskes) && $request->faskes != '' && isset($request->jenis_bpjs) && $request->jenis_bpjs != ''){
            $filterdata =$collect
            ->select('ktps.nik', 'ktps.nama', 'kks.kk', 'bpjs.no_bpjs', 'bpjs.nik_bpjs', 'lcs.no_kartu', 'lcs.id_lc', 'kks.id_kk', 'bpjs.id_bpjs')
            ->where('bpjs.faskes_bpjs', '=', $request->faskes)
            ->where('bpjs.jenis_bpjs', '=', $request->jenis_bpjs);
        }elseif(isset($request->faskes) && $request->faskes != ''){
            $filterdata =$collect
            ->select('ktps.nik', 'ktps.nama', 'kks.kk', 'bpjs.no_bpjs', 'bpjs.nik_bpjs', 'lcs.no_kartu', 'lcs.id_lc', 'kks.id_kk', 'bpjs.id_bpjs')
            ->where('bpjs.faskes_bpjs', '=', $request->faskes);
        }elseif(isset($request->jenis_bpjs) && $request->jenis_bpjs != ''){
            $filterdata =$collect
            ->select('ktps.nik', 'ktps.nama', 'kks.kk', 'bpjs.no_bpjs', 'bpjs.nik_bpjs', 'lcs.no_kartu', 'lcs.id_lc', 'kks.id_kk', 'bpjs.id_bpjs')
            ->where('bpjs.jenis_bpjs', '=', $request->jenis_bpjs);
        }else{
            $filterdata =$collect
            ->select('ktps.nik', 'ktps.nama', 'kks.kk', 'bpjs.no_bpjs', 'bpjs.nik_bpjs', 'lcs.no_kartu', 'lcs.id_lc', 'kks.id_kk', 'bpjs.id_bpjs');
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
       

        return view('Home.index-filter', compact('datanull', 'listkec'));
    }
}
