<?php

namespace App\Http\Controllers;

use App\Models\Lc;
use App\Models\ChangeLc;
use Illuminate\Http\Request;

class LcController extends Controller
{
    public function add(Lc $lc)
    {
        $cardtype = $lc->jenis_kartu;
        $datasource = $lc->sumber_data;
        return view('LC.add', compact('lc', 'cardtype', 'datasource'));
    }

    public function edit(Lc $lc)
    {
        $cardtype = $lc->jenis_kartu;
        $datasource = $lc->sumber_data;
        return view('LC.edit', compact('lc', 'cardtype', 'datasource'));
    }

    public function update(Request $request, $nik)
    {
        $request->validate([
            'id',
            'no_kartu' => 'required',
            'jenis_kartu',
            'tanggal_pembuatan',
            'sumber_data' => 'required',
            'nama_koor' => 'required',
        ]);

        Lc::where('nik_lc', $nik)
        ->update([
            'no_kartu' => $request->no_kartu,
            'jenis_kartu' => $request->jenis_kartu,
            'tanggal_pembuatan' => $request->tanggal_pembuatan,
            'sumber_data' => $request->sumber_data,
            'nama_koor' => $request->nama_koor,
            'scan_lc' => $request->scan_lc
        ]);

        $changelc = new Changelc;
        $changelc->no_kartu = $request->no_kartu;
        $changelc->jenis_kartu = $request->jenis_kartu;
        $changelc->tanggal_upgrade = $request->tanggal_pembuatan;
        $changelc->save();

        return redirect()->route('detail-anggota', ['nik' => $nik]);
    }
}
