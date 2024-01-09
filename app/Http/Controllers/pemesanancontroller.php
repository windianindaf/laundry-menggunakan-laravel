<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;

class pemesanancontroller extends Controller
{
    //
    public function index()
    {
        $rows = Pemesanan::all();
        return view('pemesanan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemesanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pemesanan::create([
            'jenis' => $request->jenis,
            'berat' => $request->berat,
            'tgl_pemesanan' => $request->tgl_pemesanan,
            'tgl_ambil' => $request->tgl_ambil
        ]);

        return redirect('pemesanan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Pemesanan::find($id);
        return view('pemesanan.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Pemesanan::findOrFail($id);

        $row->update([

            'jenis' => $request->jenis,
            'berat' => $request->berat,
            'tgl_pemesanan' => $request->tgl_pemesanan,
            'tgl_ambil' => $request->tgl_ambil
        ]);

        return redirect('pemesanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pemesanan::findOrFail($id);

        $row->delete();

        return redirect('pemesanan');
    }
}


