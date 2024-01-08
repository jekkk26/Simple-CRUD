<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = barang::all();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'stok' => 'integer',
            'harga' => 'integer',
            'deskripsi' => 'required',
        ]);

        Barang::create([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('barang.index')->with('success', 'Berhasil menambah data!');
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
        $barang = Barang::find($id);

        if (!$barang) {
            return redirect()->route('index')->with('error', 'Record not found');
        }

        return view('barang.edit', compact('barang'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);

        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'stok' => 'integer',
            'harga' => 'integer',
            'deskripsi' => 'required',
        ]);
        $barang->update([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('barang.index')->with('success', 'Berhasil menambah data!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $barang = Barang::find($id);

        if ($barang) {
            if ($barang->delete()) {
                return redirect()->route('barang.index')->with('success', 'Record deleted successfully');
            } else {
                return redirect()->route('barang.index')->with('error', 'Failed to delete record');
            }
        } else {
            return redirect()->route('barang.index')->with('error', 'Record not found');
        }
    }
}
