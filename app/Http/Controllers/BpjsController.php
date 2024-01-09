<?php

namespace App\Http\Controllers;

use App\Models\Bpjs;
use Illuminate\Http\Request;

class BpjsController extends Controller
{
    public function edit(Bpjs $bpjs)
    {
        $cardtype = $bpjs->jenis_bpjs;
        return view('BPJS.edit', compact('bpjs', 'cardtype'));
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

    public function addbpjs(Bpjs $bpjs)
    {
        $cardtype = $bpjs->jenis_bpjs;
        return view('BPJS.edit', compact('bpjs', 'cardtype'));
    }

    public function storebpjs(Request $request, $nik)
    {
        $request->validate([
            'id',
            'nik_bpjs',
            'no_bpjs' => 'required',
            'jenis_bpjs' => 'required'
        ]);

        Bpjs::where('nik_bpjs', $nik)
        ->update([
            'no_bpjs' => $request->no_bpjs,
            'jenis_bpjs' => $request->jenis_bpjs
        ]);

        return redirect('/');
    }
}
