<?php

namespace App\Http\Controllers;

use App\Models\ChangeLc;
use App\Models\Lc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use League\CommonMark\Extension\Table\TableExtension;

class ChangeLcController extends Controller
{
    public function create(Request $request, $lc)
    {
        // $data = DB::table('lcs')
        // ->join('changelcs', 'lcs.no_kartu', '=', 'changelcs.no_kartu')
        // ->select('lcs.no_kartu');

        // $cardtype = $lc->jenis_kartu;
        // $datasource = $lc->sumber_data;

        $data = DB::table('lcs')
        ->where('lcs.id_lc', $lc)
        ->get();

        $cardtype = DB::table('lcs')
        ->where('lcs.id_lc', $lc)
        ->value('lcs.jenis_kartu');

        $nama = DB::table('lcs')
        ->join('ktps', 'ktps.nik', '=', 'lcs.nik_lc')
        ->get();

        return view('LC.change-card', compact('data', 'nama', 'cardtype'));
    }

    public function store(Request $request, $nik)
    {
        $request->validate([
            'no_kartu'=> 'required',
            'jenis_kartu' => 'required',
            'tanggal_upgrade' => 'required',
            'alasan_upgrade' => 'required',
        ]);

        $changelc = new Changelc;
        $changelc->nik_clc = $nik;
        $changelc->no_kartu = $request->no_kartu;
        $changelc->jenis_kartu = $request->jenis_kartu;
        $changelc->tanggal_upgrade = $request->tanggal_upgrade;
        $changelc->alasan_upgrade = $request->alasan_upgrade;
        $changelc->save();

        Lc::where('nik_lc', $nik)
        ->update([
            'no_kartu' => $request->no_kartu,
            'jenis_kartu' => $request->jenis_kartu,
            'tanggal_pembuatan' => $request->tanggal_upgrade
        ]);
        return redirect()->route('detail-anggota', ['nik' => $nik]);
    }


}
