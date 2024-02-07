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
        $cardtype = $lc->jenis_kartu;
        $datasource = $lc->sumber_data;

        return view('LC.edit', compact('lc', 'cardtype', 'datasource'));
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
            'status' => "Aktif"
        ]);

        $lc = Lc::where('nik_lc', $nik)->first();
        if($request->hasFile('scan_lc'))
        {   
            $destination = public_path().$lc->scan_lc;
            if($lc->scan_lc != '' && $lc->scan_lc != null)
                {
                    unlink($destination);
                }
            $filename = time().'.'.$request->file('scan_lc')->getClientOriginalExtension();
            $path = $request->file('scan_lc')->storeAs('images', $filename, 'public');
            $ext = '/storage/'.$path;
            Lc::where('nik_lc', $nik)->update(['scan_lc' => $ext]);
        };
        
        $updateclc = ChangeLc::where('nik_clc', $nik)->orderBy('id', 'desc')->first();
        $updateclc->update([
            'no_kartu' => $request->no_kartu,
            'jenis_kartu' => $request->jenis_kartu
        ]);
        return redirect()->route('detail-anggota', ['nik' => $nik]);

    }
    public function addupdate(Request $request, $nik)
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
            'status' => "Aktif"
        ]);

        $lc = Lc::where('nik_lc', $nik)->first();
        if($request->hasFile('scan_lc'))
        {   
            $destination = public_path().$lc->scan_lc;
            if($lc->scan_lc != '' && $lc->scan_lc != null)
                {
                    unlink($destination);
                }
            $filename = time().'.'.$request->file('scan_lc')->getClientOriginalExtension();
            $path = $request->file('scan_lc')->storeAs('images', $filename, 'public');
            $ext = '/storage/'.$path;
            Lc::where('nik_lc', $nik)->update(['scan_lc' => $ext]);
        };

        $changelc = new Changelc;
        $changelc->nik_clc = $nik;
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
            'status' => "Aktif"
        ]);

        $lc = Lc::where('nik_lc', $nik)->first();
        if($request->hasFile('scan_lc'))
        {   
            $destination = public_path().$lc->scan_lc;
            if($lc->scan_lc != '' && $lc->scan_lc != null)
                {
                    unlink($destination);
                }
            $filename = time().'.'.$request->file('scan_lc')->getClientOriginalExtension();
            $path = $request->file('scan_lc')->storeAs('images', $filename, 'public');
            $ext = '/storage/'.$path;
            Lc::where('nik_lc', $nik)->update(['scan_lc' => $ext]);
        };

        $changelc = new Changelc;
        $changelc->nik_clc = $nik;
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
            'status' => "Aktif"
        ]);

        $lc = Lc::where('nik_lc', $nik)->first();
        if($request->hasFile('scan_lc'))
        {   
            $destination = public_path().$lc->scan_lc;
            if($lc->scan_lc != '' && $lc->scan_lc != null)
                {
                    unlink($destination);
                }
            $filename = time().'.'.$request->file('scan_lc')->getClientOriginalExtension();
            $path = $request->file('scan_lc')->storeAs('images', $filename, 'public');
            $ext = '/storage/'.$path;
            Lc::where('nik_lc', $nik)->update(['scan_lc' => $ext]);
        };

        $changelc = new Changelc;
        $changelc->nik_clc = $nik;
        $changelc->no_kartu = $request->no_kartu;
        $changelc->jenis_kartu = $request->jenis_kartu;
        $changelc->tanggal_upgrade = $request->tanggal_pembuatan;
        $changelc->save();

        return redirect('/nulldata');
    }

    public function openstatus (Lc $lc)
    {
        $cardtype = $lc->jenis_kartu;
        $datasource = $lc->sumber_data;

        return view('LC.edit', compact('lc', 'cardtype', 'datasource'));
    }

    public function status (Request $request, $lc)
    {
        $nikselect = DB::table('lcs')
        ->where('lcs.id_lc', '=', $lc->id_lc)
        ->select('nik_lc');

        $nik = DB::table('ktps')
        ->where('ktps.nik', '=', $nikselect)
        ->get();

        $request->validate([
            'id_lc',
            'nik_lc',
            'no_kartu',
            'jenis_kartu',
            'tanggal_pembuatan',
            'sumber_data',
            'nama_koor',
            'telp_koor',
            'status' => 'required',
            'tanggal_penarikan' => 'required',
            'alasan_penarikan' => 'required',
        ]);

        Lc::where('nik_lc', $nik)
        ->update([
            'no_kartu' => $request->no_kartu,
            'jenis_kartu' => $request->jenis_kartu,
            'tanggal_pembuatan' => $request->tanggal_pembuatan,
            'sumber_data' => $request->sumber_data,
            'nama_koor' => $request->nama_koor,
            'telp_koor' => $request->telp_koor,
            'scan_lc' => $request->scan_lc,
            'status' => $request->status,
            'tanggal_penarikan' => $request->tanggal_penarikan,
            'alasan_penarikan' => $request->alasan_penarikan,
        ]);

        return redirect()->route('detail-anggota', ['nik' => $nik]);
    }

    public function freezeortaken (Request $request, $nik)
    {

        $request->validate([
            'status' => 'required',
            // 'tanggal_penarikan' => 'required',
            // 'alasan_penarikan' => 'required',
        ]);
        if($request->status == 'Aktif'){
            Lc::where('nik_lc', $nik)
            ->update([
            'status' => $request->status,
            'tanggal_penarikan' => NULL,
            'alasan_penarikan' => NULL,
        ]);
        }else{
        Lc::where('nik_lc', $nik)
        ->update([
            'status' => $request->status,
            'tanggal_penarikan' => $request->tanggal_penarikan,
            'alasan_penarikan' => $request->alasan_penarikan,
        ]);
        }

        return redirect()->route('detail-anggota', ['nik' => $nik]);
    }

}
