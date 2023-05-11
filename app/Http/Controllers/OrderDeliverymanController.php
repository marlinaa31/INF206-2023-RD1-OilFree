<?php

namespace App\Http\Controllers;

use App\Models\OrderDeliveryman;
use App\Http\Requests\StoreOrderDeliverymanRequest;
use App\Http\Requests\UpdateOrderDeliverymanRequest;
use Illuminate\Http\Request;
use \Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class OrderDeliverymanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $date = Carbon::now();
        // dd(Auth::user()->name);
        // dd($date->format('Ymd).Auth::user()->id.$date->format('his'));
        OrderDeliveryman::create([
            'id' => $date->format('Ymd').Auth::user()->id.$date->format('his'),
            'nama' => Auth::user()->name,
            'no_hp' => $request->hp,
            'berat_minyak' => $request->beratSampah,
            'foto_minyak' => $request->fotoMinyak,
            'alamat' => $request->alamat,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderDeliverymanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderDeliveryman $orderDeliveryman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderDeliveryman $orderDeliveryman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderDeliverymanRequest $request, OrderDeliveryman $orderDeliveryman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderDeliveryman $orderDeliveryman)
    {
        //
    }
}
