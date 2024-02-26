<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Http\Requests\StoreKelasRequest;
use App\Http\Requests\UpdateKelasRequest;


class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // mengambil semua kelas dari basisi data
        $kelas = Kelas::select('id_kelass', 'nama_kelas', 'kompetensi_keahlian')->get();
        // meneruskan data kelas yang diambil  ke sebuah view untuk ditampilkan
        return view('kelas.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     * 
     */
    public function create()
    {
        // Menampilkan view 'kelas.create'
        return view('kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKelasRequest $request, kelas $kelas)
    {
        $kelas->create($request->all());
        return redirect()->route('kelas.index')->with(['Success'=>'Data '.$request['nama_kelas']. ' Berhasil Disimpan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelas $kelas)
    {
        return view('kelas.show', compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelas $kelas)
    {
        return view('kelas.edit', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKelasRequest $request, Kelas $kelas)
    {
        $kelas->update($request->all());
        return redirect()->route('kelas.index')->with(['Success'=>'Data '.$request['kelas']. 'Berhasil Diedit']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $kelas)
    {
        $kelas->delete();
        return redirect()->route('kelas.index')->with(['Success'=>'Data Berhasil Dihapus']);
    }
}
