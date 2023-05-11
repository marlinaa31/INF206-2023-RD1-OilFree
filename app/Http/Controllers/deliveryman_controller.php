<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;

class deliveryman_controller extends Controller
{
    //
    public function index()
    {
        
        return view('dashboarddeliveryman');
    }

    public function takeOrder(){
        $pemesanans = Pemesanan::all();
        return view('masuk_pesanan', compact('pemesanans'));

    }

}
