@extends('layout')

@section('content')

<div class="container mt-5">
    <div class="card border-0 shadow-lg">
        <div class="card-body">
            <h5 class="card-title text-center">Edit Data Barang</h5>
            <hr class="my-4">
            <form action="{{ url('/barang/update', ['id' => $barang->kode_barang]) }}" method="POST">
                @csrf
                <div class="mb-3 row">
                    <label for="kode_barang" class="col-sm-3 col-form-label">Kode Barang</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="kode_barang" value="{{ $barang->kode_barang }}" required readonly>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama_barang" class="col-sm-3 col-form-label">Nama Barang</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama_barang" value="{{ $barang->nama_barang }}" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="stok" class="col-sm-3 col-form-label">Stok</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="stok" value="{{ $barang->stok }}" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="harga" value="{{ $barang->harga }}" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="deskripsi" value="{{ $barang->deskripsi }}" required>
                    </div>
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
                <button type="submit" class="btn btn-success btn-block mt-4"><i class="bi bi-save"></i> Simpan Perubahan</button>
                <a href="/admin/barang" class="btn btn-warning btn-block mt-4"><i class="bi bi-arrow-left-circle"></i> Kembali</a>
            </form>
        </div>
    </div>
</div>

@endsection