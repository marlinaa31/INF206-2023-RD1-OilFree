<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PemesananController extends Controller
{
    public function index(){
        return view('pesandeliveryman');
    }

    public function store(Request $request){
        $data = ' ';
        if ($request->hasFile('foto_minyak')) {
            $request->file('foto_minyak')->move('assets/img/', $request->file('foto_minyak')->getClientOriginalName());
            $data=$request->file('foto_minyak')->getClientOriginalName();
        }

        Pemesanan::create([
            'nama' => $request->nama,
            'user_id'=> Auth::user()->id,
            'nohp'=> $request->nohp,
            'alamat'=> $request->alamat,
            'berat_minyak'=> $request->berat_minyak,
            'foto_minyak'=> $data,
            'tanggal'=> $request->tanggal,
            'waktu'=> $request->waktu,
            'status'=> 0,
        ]);

        Alert::info('Tunggu sebentar', 'Kami akan segera menemukan deliveryman untuk anda');

        return to_route('data_deliveryman');
    }
}
