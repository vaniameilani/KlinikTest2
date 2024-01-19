<?php

namespace App\Http\Controllers;

use App\Models\Other;
use App\Models\TpsList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OtherController extends Controller
{
    public function edit(Other $other)
    {
        // $tps['data'] = DB::table('tps_lists')
        // ->select('id', 'no_tps')
        // ->get();
        $tps = TpsList::all();
        $disabilitas = $other->disabilitas;
        return view('Others.edit', compact('other', 'tps', 'disabilitas'));
        // return view('Others.edit')->with("tps", $tps);
    }

    // public function getAlamatTps($tps_id=0){
    //     $empData['data'] = DB::table('tps_lists')
    //     ->select('alamat_tps')
    //     ->where('')
    // }

    public function update(Request $request, $nik)
    {
        $request->validate([
            'id_other',
            'no_hp' => 'required',
            'no_tps' => 'required',
            'alamat_tps' => 'required',
            'disabilitas' => 'required'
        ]);

        Other::where('nik_other', $nik)
        ->update([
            'no_hp' => $request->no_hp,
            'no_tps' => $request->no_tps,
            'alamat_tps' => $request->alamat_tps,
            'disabilitas' => $request->disabilitas
        ]);

        return redirect()->route('detail-anggota', ['nik'=> $nik]);
    }
}
