<?php

namespace App\Http\Controllers;

use App\Models\Bpjs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BpjsController extends Controller
{
    public function edit(Bpjs $bpjs)
    {
        $cardtype = $bpjs->jenis_bpjs;

        $nikselect = DB::table('bpjs')
        ->where('bpjs.id_bpjs', '=', $bpjs->id_bpjs)
        ->select('nik_bpjs');

        $nama = DB::table('ktps')
        ->where('ktps.nik', '=', $nikselect)
        ->get();

        return view('BPJS.edit', compact('bpjs', 'cardtype', 'nama'));
    }

    public function update(Request $request, $nik)
    {
        $request->validate([
            'id',
            'no_bpjs' => 'required',
            'jenis_bpjs' => 'required'
        ]);

        Bpjs::where('nik_bpjs', $nik)
        ->update([
            'no_bpjs' => $request->no_bpjs,
            'jenis_bpjs' => $request->jenis_bpjs
        ]);

        return redirect()->route('detail-anggota', ['nik' => $nik]);
    }

    public function updatebpjs(Request $request, $nik)
    {
        $request->validate([
            'id_bpjs',
            'no_bpjs' => 'required',
            'jenis_bpjs' => 'required'
        ]);

        Bpjs::where('nik_bpjs', $nik)
        ->update([
            'no_bpjs' => $request->no_bpjs,
            'jenis_bpjs' => $request->jenis_bpjs
        ]);

        return redirect()->route('home');
    }

    // FROM INDEXNULL
    public function editnull(Bpjs $bpjs)
    {
        $cardtype = $bpjs->jenis_bpjs;

        $nikselect = DB::table('bpjs')
        ->where('bpjs.id_bpjs', '=', $bpjs->id_bpjs)
        ->select('nik_bpjs');

        $nama = DB::table('ktps')
        ->where('ktps.nik', '=', $nikselect)
        ->get();

        return view('BPJS.edit-null', compact('bpjs', 'cardtype', 'nama'));
    }

    public function updatenull(Request $request, $nik)
    {
        $request->validate([
            'id_bpjs',
            'no_bpjs' => 'required',
            'jenis_bpjs' => 'required'
        ]);

        Bpjs::where('nik_bpjs', $nik)
        ->update([
            'no_bpjs' => $request->no_bpjs,
            'jenis_bpjs' => $request->jenis_bpjs
        ]);

        return redirect('/nulldata');
    }
}
