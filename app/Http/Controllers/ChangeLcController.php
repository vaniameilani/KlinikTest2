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

        $data = DB::table('lcs')
        ->where('lcs.id', $lc)
        ->get();

        $nama = DB::table('lcs')
        ->join('ktps', 'ktps.nik', '=', 'lcs.nik_lc')
        ->get();

        return view('LC.change-card', compact('data', 'nama'));
    }

    public function store(Request $request, $nik)
    {
        $request->validate([
            'no_kartu',
            'jenis_kartu' => 'required',
            'tanggal_upgrade' => 'required',
            'alasan_upgrade' => 'required',
        ]);

        $changelc = new Changelc;
        $changelc->no_kartu = $request->no_kartu;
        $changelc->jenis_kartu = $request->jenis_kartu;
        $changelc->tanggal_upgrade = $request->tanggal_upgrade;
        $changelc->alasan_upgrade = $request->alasan_upgrade;
        $changelc->save();

        return redirect()->route('detail-anggota', ['nik' => $nik]);
    }


}
