<?php

namespace App\Http\Controllers;

use App\Models\Lc;
use App\Models\ChangeLc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LcController extends Controller
{
    public function add(Lc $lc)
    {
        // $koor = $lc->nama_koor;
        // $cardtype = $lc->jenis_kartu;
        // $datasource = $lc->sumber_data;

        $nikselect = DB::table('lcs')
        ->where('lcs.id_lc', '=', $lc->id_lc)
        ->select('nik_lc');

        $nama = DB::table('ktps')
        ->where('ktps.nik', '=', $nikselect)
        ->get();

        return view('LC.add', compact('lc', 'nama'));
    }

    public function edit(Lc $lc)
    {
        $koor = $lc->nama_koor;
        $cardtype = $lc->jenis_kartu;
        $datasource = $lc->sumber_data;

        return view('LC.edit', compact('lc', 'cardtype', 'koor', 'datasource'));
    }

    public function update(Request $request, $nik)
    {
        $request->validate([
            'id_lc',
            'no_kartu' => 'required',
            'jenis_kartu',
            'tanggal_pembuatan',
            'sumber_data' => 'required',
            'nama_koor' => 'required',
            'telp_koor' => 'required',
        ]);

        Lc::where('nik_lc', $nik)
        ->update([
            'no_kartu' => $request->no_kartu,
            'jenis_kartu' => $request->jenis_kartu,
            'tanggal_pembuatan' => $request->tanggal_pembuatan,
            'sumber_data' => $request->sumber_data,
            'nama_koor' => $request->nama_koor,
            'telp_koor' => $request->telp_koor,
            'scan_lc' => $request->scan_lc
        ]);

        $changelc = new Changelc;
        $changelc->no_kartu = $request->no_kartu;
        $changelc->jenis_kartu = $request->jenis_kartu;
        $changelc->tanggal_upgrade = $request->tanggal_pembuatan;
        $changelc->save();

        return redirect()->route('detail-anggota', ['nik' => $nik]);
    }

    public function updatelc(Request $request, $nik)
    {
        $request->validate([
            'id_lc',
            'no_kartu' => 'required',
            'jenis_kartu',
            'tanggal_pembuatan',
            'sumber_data' => 'required',
            'nama_koor' => 'required',
            'telp_koor' => 'required',
        ]);

        Lc::where('nik_lc', $nik)
        ->update([
            'no_kartu' => $request->no_kartu,
            'jenis_kartu' => $request->jenis_kartu,
            'tanggal_pembuatan' => $request->tanggal_pembuatan,
            'sumber_data' => $request->sumber_data,
            'nama_koor' => $request->nama_koor,
            'telp_koor' => $request->telp_koor,
            'scan_lc' => $request->scan_lc
        ]);

        $changelc = new Changelc;
        $changelc->no_kartu = $request->no_kartu;
        $changelc->jenis_kartu = $request->jenis_kartu;
        $changelc->tanggal_upgrade = $request->tanggal_pembuatan;
        $changelc->save();

        return redirect()->route('home');
    }

    // for /nulldata
    public function addnull(Lc $lc)
    {
        // $koor = $lc->nama_koor;
        // $cardtype = $lc->jenis_kartu;
        // $datasource = $lc->sumber_data;

        $nikselect = DB::table('lcs')
        ->where('lcs.id_lc', '=', $lc->id_lc)
        ->select('nik_lc');

        $nama = DB::table('ktps')
        ->where('ktps.nik', '=', $nikselect)
        ->get();

        return view('LC.add-null', compact('lc', 'nama'));
    }

    public function updatenull(Request $request, $nik)
    {
        $request->validate([
            'id_lc',
            'no_kartu' => 'required',
            'jenis_kartu',
            'tanggal_pembuatan',
            'sumber_data' => 'required',
            'nama_koor' => 'required',
            'telp_koor' => 'required',
        ]);

        Lc::where('nik_lc', $nik)
        ->update([
            'no_kartu' => $request->no_kartu,
            'jenis_kartu' => $request->jenis_kartu,
            'tanggal_pembuatan' => $request->tanggal_pembuatan,
            'sumber_data' => $request->sumber_data,
            'nama_koor' => $request->nama_koor,
            'telp_koor' => $request->telp_koor,
            'scan_lc' => $request->scan_lc
        ]);

        $changelc = new Changelc;
        $changelc->no_kartu = $request->no_kartu;
        $changelc->jenis_kartu = $request->jenis_kartu;
        $changelc->tanggal_upgrade = $request->tanggal_pembuatan;
        $changelc->save();

        return redirect('/nulldata');
    }

}
