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
        ->select('ktps.nama', 'lcs.no_kartu', 'lcs.jenis_kartu')
        ->paginate(10);

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

        return redirect('/acara')->with('status', 'Data berhasil ditambahkan');
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

    public function edit(Event $event)
    {
        return view('Event.edit', compact('event'));
    }

    public function update(Request $request, $event)
    {
        $request->validate([
            'nama_acara' => 'required',
            'tgl_acara' => 'required',
            'lokasi_acara' => 'required',
            'daftar_anggota',
        ]);

        Event::where('id_acara', $event)
        ->update([
            'nama_acara' => $request->nama_acara,
            'tgl_acara' => $request->tgl_acara,
            'lokasi_acara' => $request->lokasi_acara,
        ]);
        
        return redirect()->to('detail-acara/'.$event)->with('status', 'Data berhasil diupdate!'); 
    }

    public function search(Request $request)
    {
        $request->get('searchQuest');
        if ($request->get('searchQuest') == 0){
        $collects = '';
        }else{
        $collects = DB::table('ktps')
        ->join('lcs', 'ktps.nik', '=', 'lcs.nik_lc')
        ->whereNotNull('lcs.no_kartu')
        ->where('lcs.no_kartu', 'LIKE','%'.$request->get('searchQuest').'%')
        ->select('ktps.nama', 'lcs.no_kartu', 'lcs.jenis_kartu')
        ->take(5)
        ->get();
        }

        return json_encode( $collects );

    }
}
