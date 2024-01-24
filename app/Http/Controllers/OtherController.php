<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Other;
use App\Models\Province;
use App\Models\Regency;
use App\Models\TpsAddress;
use App\Models\TpsList;
use App\Models\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OtherController extends Controller
{
    public function edit(Other $other)
    {
        // $tps['data'] = DB::table('tps_lists')
        // ->select('id', 'no_tps')
        // ->get();

        $ktp = DB::table('ktps')
        ->where('ktps.nik', '=', $other->nik_other);

        $prov = $ktp->value('provinsi');
        $kota_kab = $ktp->value('kota_kab');
        $kec = $ktp->value('kecamatan');
        $desa_kel = $ktp->value('desa_kel');
        $tps = $other->value('no_tps');
        // $alamat_tps = $other->value('alamat_tps');

        $ssprov = Province::all();
        $disabilitas = $other->disabilitas;

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
        
        $ssdesa_kel = DB::table('villages')
        ->where('villages.district_id', '=', $selectkec)
        ->get();

        $selectdesa_kel = DB::table('villages')
        ->where('villages.name', '=', $desa_kel)
        ->value('id');

        $ssno_tps = DB::table('tps_lists')
        ->where('tps_lists.village_id', '=', $selectdesa_kel)
        ->get();

        $selectno_tps = DB::table('tps_lists')
        ->where('tps_lists.no_tps', '=', $tps)
        ->value('id');

        $ssalamat_tps = DB::table('tps_addresses')
        ->where('tps_addresses.notps_id', '='. $selectno_tps)
        ->get();


        return view('Others.edit', compact('other', 'prov', 'kec', 'kota_kab', 'desa_kel', 'tps', 'ssprov', 'disabilitas', 'sskotakab', 'sskec', 'ssdesa_kel', 'ssno_tps', 'ssalamat_tps'));

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
        $data['villages'] = Village::where('district_id', $request->district_id)->get();
        return response()->json($data);
    }

    public function fatchTps(Request $request)
    {
        $data['tps_lists'] = TpsList::where('village_id', $request->village_id)->get();
        return response()->json($data);
    }

    public function fatchAlamatTps(Request $request)
    {
        $data['tps_addresses'] = TpsAddress::where('notps_id', $request->notps_id)->get();
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
            'nama_bank' => 'required',
            'no_rek' => 'required',
            'alamat_tps' => 'required',
            'disabilitas' => 'required'
        ]);

        $no_tps = DB::table('tps_lists')
        ->where('tps_lists.id', '=', $request->no_tps)
        ->value('tps_lists.no_tps');

        $alamat_tps = DB::table('tps_addresses')
        ->where('tps_addresses.id', '=', $request->alamat_tps)
        ->value('tps_addresses.alamat_tps');

        Other::where('nik_other', $nik)
        ->update([
            'no_hp' => $request->no_hp,
            'nama_bank' => $request->nama_bank,
            'no_rek' => $request->no_rek,
            'no_tps' => $no_tps,
            'alamat_tps' => $alamat_tps,
            'disabilitas' => $request->disabilitas
        ]);

        return redirect()->route('detail-anggota', ['nik'=> $nik]);
    }
}
