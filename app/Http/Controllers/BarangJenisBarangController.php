<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\BarangJenisBarang;
use App\Models\jenisBarang;
use Illuminate\Http\Request;

class BarangJenisBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangjenisbarang = BarangJenisBarang::all();
        return view('barangjenisbarang.index', compact('barangjenisbarang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tambahbarangjenis = BarangJenisBarang::orderBy('idbarangjenisbarang', 'desc')->first();
        $tambahbarangjenis = $tambahbarangjenis ? $tambahbarangjenis->idbarangjenisbarang + 1 : 1;

        $barang = Barang::all();
        $jenis = JenisBarang::all();
        return view('barangjenisbarang.create', compact('barang', 'jenis', 'tambahbarangjenis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'idbarangjenisbarang' => 'required',
            'kode_barang' => 'required',
            'id_jenis' => 'required',
        ]);

        BarangJenisBarang::create([
            'idbarangjenisbarang' => $request->idbarangjenisbarang,
            'kode_barang' => $request->kode_barang,
            'id_jenis' => $request->id_jenis,
        ]);

        return redirect()->route('barangjenisbarang.index')->with('success', 'Berhasil menambah data!');
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
    public function edit($idbarangjenisbarang)
    {
        $barangjenisbarang = BarangJenisBarang::find($idbarangjenisbarang);
        $barang = Barang::all();
        $jenis = JenisBarang::all();
        // dd($barangjenisbarang);
        return view('barangjenisbarang.edit', compact('barangjenisbarang', 'barang', 'jenis'));
    }

    public function update(Request $request, $idbarangjenisbarang)
    {
        $request->validate([
            'kode_barang' => 'required',
            'id_jenis' => 'required',
        ]);

        $barangjenisbarang = BarangJenisBarang::find($idbarangjenisbarang);
        $barangjenisbarang->update([
            'kode_barang' => $request->kode_barang,
            'id_jenis' => $request->id_jenis,
        ]);

        return redirect()->route('barangjenisbarang.index')->with('success', 'Berhasil memperbarui data!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $barangjenisbarang = BarangJenisBarang::find($id);

        if ($barangjenisbarang) {
            $barangjenisbarang->delete();
            return redirect()->route('barangjenisbarang.index')->with('success', 'Berhasil menghapus data.');
        } else {
            return redirect()->route('barangjenisbarang.index')->with('error', 'Data tidak ditemukan.');
        }
    }
}
