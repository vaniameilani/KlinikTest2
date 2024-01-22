<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Other;
use App\Models\Province;
use App\Models\Regency;
use App\Models\TpsList;
use App\Models\TpsVillage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OtherController extends Controller
{
    public function edit(Other $other)
    {
        // $tps['data'] = DB::table('tps_lists')
        // ->select('id', 'no_tps')
        // ->get();

        $prov = Province::all();
        $disabilitas = $other->disabilitas;

        return view('Others.edit', compact('other', 'prov', 'disabilitas'));

        // return view('Others.edit')->with("tps", $tps);
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

    public function fatchTpsVillage(Request $request)
    {
        $data['tps_villages'] = TpsVillage::where('district_id', $request->district_id)->get();
        return response()->json($data);
    }

    public function fatchTps(Request $request)
    {
        $data['tps_lists'] = TpsList::where('village_id', $request->village_id)->get();
        return response()->json($data);
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
