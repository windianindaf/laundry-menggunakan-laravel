<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Costumer;

class CostumerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Costumer::all();
        return view('costumer.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('costumer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Costumer::create([
            'nama' => $request->nama,
            'email_customer' => $request->email_customer,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'kelamin' => $request->kelamin
        ]);

        return redirect('costumer');
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
        $row = Costumer::find($id);
        return view('costumer.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Costumer::findOrFail($id);

        $row->update([
            'nama' => $request->nama,
            'email_customer' => $request->email_customer,
            'alamat' => $request->user_id,
            'no_telp' => $request->no_telp,
            'kelamin' => $request->kelamin
        ]);

        return redirect('costumer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Costumer::findOrFail($id);

        $row->delete();

        return redirect('costumer');
    }
}
