<?php

namespace App\Http\Controllers;

use App\Models\Other;
use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function edit(Other $other)
    {
        $disabilitas = $other->disabilitas;
        return view('Others.edit', compact('other', 'disabilitas'));
    }

    public function update(Request $request, $nik)
    {
        $request->validate([
            'id',
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
