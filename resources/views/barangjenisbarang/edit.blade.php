@extends('layout')

@section('content')
    <div class="container">
        <header class="mb-4">
            <h1 class="text-center">Edit Barang dan Jenis Barang</h1>
        </header>
        <main>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ url('/update/barangjenis', ['id' => $barangjenisbarang->idbarangjenisbarang]) }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="kode_barang">Kode Barang:</label>
                    <select name="kode_barang" class="form-control">
                        @foreach ($barang as $barangItem)
                            <option value="{{ $barangItem->kode_barang }}"
                                @if ($barangItem->kode_barang == $barangjenisbarang->kode_barang) selected @endif>{{ $barangItem->nama_barang }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="id_jenis">ID Jenis:</label>
                    <select name="id_jenis" class="form-control">
                        @foreach ($jenis as $jenisItem)
                            <option value="{{ $jenisItem->id_jenis }}" @if ($jenisItem->id_jenis == $barangjenisbarang->id_jenis) selected @endif>
                                {{ $jenisItem->nama_jenis_barang }}</option>
                        @endforeach
                    </select>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group">
                    <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Simpan Perubahan</button>
                    <a href="/barang/barangdanjenis" class="btn btn-warning btn-block mt-2"><i class="bi bi-arrow-left-circle"></i> Kembali</a>
                </div>
            </form>
        </main>
    </div>
@endsection
