<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetching data dari table spps
        $spps = DB::table('spps')->get();
        // return ke view  dan kirimkan data $spps
        return view('spp.index', compact('spps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('spp.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 
        $request->validate([
            'tahun' => 'required|min:4',
            'nominal' => 'required',
        ]);

        // 
        $query = DB::table('spps')->insert([
            'tahun' => $request['tahun'],
            'nominal' => $request['nominal'],
        ]);
        //
        return redirect()->route('spp.index')->with(['success' => 'Data Berhasil Ditambahkan']);
    }

    /**
     * Display the specified resource.
     */
    // SppController.php
public function show(string $id)
{
    //
    $spp = DB::table('spps')->where('id_spps', $id)->first();
    //
    return view('spp.show', compact('spp'));
}


    /**
     * Show the form for editing the specified resource.
     */
   // SppController.php
// SppController.php
public function edit(string $id)
{
    $spp = DB::table('spps')->where('id_spps', $id)->first();
    return view('spp.edit', compact('spp'));
}



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'tahun' => 'required|min:4',
            'nominal' => 'required',
        ]);

        // 
        $query = DB::table('spps')
        ->where('id_spps', $id)
        ->update([
        'tahun' => $request['tahun'], 
        'nominal' => $request['nominal'],
    ]);

    // periksa apakah update berhasil
    if ($query) {
        // Jika berhasil, kembalikan pengguna ke halaman index dengan pesan sukses
        return redirect()->route('spp.index')->with('success', 'Data berhasil diperbarui');
    } else {
        // Jika gagal, kembalikan pengguna ke halaman sebelumnya dengan pesan kesalahan
        return back()->withInput()->with('error', 'Gagal memperbarui data');
    }
    
    }

    /**
     * Remove the specified resource from storage.
     */
     public function destroy(string $id)
    {
        $spps = DB::table('spps')->where('id_spps', $id)->delete();
        return redirect()->route('spp.index')->with('success', 'Data berhasil dihapus');
    }
}