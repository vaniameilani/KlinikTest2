<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilterController extends Controller
{
    public function filter()
    {
        $collect = DB::table('ktps')
        ->join('bpjs', 'ktps.nik', '=', 'bpjs.nik_bpjs')
        ->join('lcs', 'ktps.nik', '=', 'lcs.nik_lc')
        ->join('kks', 'ktps.nik', '=', 'kks.nik_kk');

        $datanullkk = DB::table('kks')
        ->whereNull('kks.kk')
        ->count();

        $datanullbpjs = DB::table('bpjs')
        ->whereNull('bpjs.jenis_bpjs')
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
       

        return view('Home.index-filter', compact('datanull'));
    }
}
