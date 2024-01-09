<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class usercontroller extends Controller
{
    //
    public function index()
    {
        $rows = User::all();
        return view('users.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request->namespace,
            'email' => $request->namespace,
            'password' => $request->namespace
        ]);

        return redirect('users');
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
        $row = User::find($id);
        return view('users.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = User::findOrFail($id);

        $row->update([
            'name' => $request->namespace,
            'email' => $request->namespace,
            'password' => $request->namespace
        ]);

        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = User::findOrFail($id);

        $row->delete();

        return redirect('users');}
}
