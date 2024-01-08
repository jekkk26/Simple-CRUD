<?php

namespace App\Http\Controllers;

use App\Models\JenisBarang;
use Illuminate\Http\Request;

class JenisBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenisbarang = JenisBarang::all();
        return view('jenisbarang.index', compact('jenisbarang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenisbarang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_jenis' => 'required',
            'nama_jenis_barang' => 'required',
        ]);

        JenisBarang::create([
            'id_jenis' => $request->id_jenis,
            'nama_jenis_barang' => $request->nama_jenis_barang,
        ]);

        return redirect()->route('jenisbarang.index')->with('success', 'Berhasil menambah data!');
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
    public function edit($id)
    {
        $jenisbarang = JenisBarang::find($id);
        return view('jenisbarang.edit', compact('jenisbarang'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $jenis = JenisBarang::find($id);

        $request->validate([
            'id_jenis',
            'nama_jenis_barang',
        ]);

        $jenis->update([
            'id_jenis' => $request->id_jenis,
            'nama_jenis_barang' => $request->nama_jenis_barang,
        ]);

        return redirect()->route('jenisbarang.index')->with('success', 'Berhasil menambah data!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jenis = JenisBarang::find($id);

        if (!$jenis) {
            return redirect()->route('jenisbarang.index')->with('error', 'Record not found');
        }
        $jenis->delete();
        // dd($jenis);
        return redirect()->route('jenisbarang.index')->with('success', 'Record deleted successfully');
    }
}
