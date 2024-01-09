<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Costumer;
use App\Models\pembayaran;
use App\Models\Pemesanan;

class pembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = pembayaran ::all();
        return view('pembayaran.index', compact('rows'));
        // //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $costumer = costumer::all();
        $pemesanan = Pemesanan::all();

        return view('pembayaran.create', compact('costumer', 'pemesanan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        pembayaran::create([
            'costumer_id' => $request->costumer_id,
            'pemesanan_id' => $request->pemesanan_id,
            'metode_pembayaran' => $request->metode_pembayaran,
            'tgl_pembayaran' => $request->tgl_pembayaran,
            'jumlah' => $request->jumlah
        ]);
        return redirect('pembayaran');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = pembayaran::find($id);
        $costumer = costumer::all();
        $pemesanan = Pemesanan::all();

        return view('pembayaran.edit', compact('row', 'costumer', 'pemesanan')); //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = pembayaran::findOrFail($id);

        $row->update([
            'costumer_id' => $request->costumer_id,
            'pemesanan_no' => $request->pemesanan_id,
            'metode_pembayaran' => $request->metode_pembayaran,
            'tgl_pembayaran' => $request->tgl_pembayaran,
            'jumlah' => $request->jumlah

        ]);
//
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = pembayaran::findOrFail($id);

        $row->delete();

        return redirect('pembayaran');
    }
}
