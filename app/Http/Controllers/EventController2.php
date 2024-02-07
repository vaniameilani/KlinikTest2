<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ktp;
use App\Models\Lc;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Psy\Readline\Hoa\Console;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('Event.index', compact('events'));
    }

    public function add()
    {
        $ktps = DB::table('lcs')
        ->whereNotNull('no_kartu')
        ->join('ktps', 'lcs.nik_lc', '=', 'ktps.nik')
        ->select('ktps.nik', 'ktps.nama', 'lcs.jenis_kartu', 'lcs.no_kartu')
        ->get();

        return view('Event.add', compact('ktps'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_acara' => 'required',
            'tgl_acara' => 'required',
            'lokasi_acara' => 'required',
            'daftar_anggota' => 'required'
        ]);

        $acara = new Event;
        $acara->nama_acara = $request->nama_acara;
        $acara->tgl_acara = $request->tgl_acara;
        $acara->lokasi_acara = $request->lokasi_acara;
        $acara->daftar_anggota = json_encode($request->daftar_anggota);
        $acara->save();

        return redirect('/acara')->with('success', 'Data berhasil ditambahkan');
    }

    public function show(Event $event)
    {
        $names = json_decode($event->daftar_anggota);
        // $count = count($names);
        // dd($count);

        // CEK
        // $message = array();
        // for ($i = 0; $i < $count; $i++) {
        //     $message[] =  $names[$i];
        // }
        // print_r($message);

        $datas = array();
        $lcs = array();
        foreach ($names as $ms)
        {
            // $ktps[] = DB::table('ktps')
            // ->where('ktps.nik', '=', $ms)
            // ->get();

            $datas[] = DB::table('lcs')
            ->join('ktps', 'lcs.nik_lc', '=', 'ktps.nik')
            ->select('ktps.nik', 'ktps.nama', 'lcs.no_kartu', 'lcs.jenis_kartu')
            ->where('lcs.no_kartu', '=', $ms)
            ->get();

        }
        // dd($ktps);

        return view('Event.detail', compact('event', 'datas'));
    }
}
