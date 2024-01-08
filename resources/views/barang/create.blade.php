@extends('layout')

@section('content')

<div class="container mt-5">
    <div class="card border-0 shadow-lg">
        <div class="card-body">
            <h5 class="card-title text-center">Tambah Data Barang</h5>
            <hr class="my-4">
            <form action="/barang/store" method="POST">
                @csrf
                <div class="mb-3 row">
                    <label for="kode_barang" class="col-sm-3 col-form-label">Kode Barang</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="kode_barang" name="kode_barang" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama_barang" class="col-sm-3 col-form-label">Nama Barang</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="stok" class="col-sm-3 col-form-label">Stok</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="stok" name="stok" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="harga" name="harga" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
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
                <button type="submit" class="btn btn-dark btn-block mt-4">Tambah barang</button>
                <a href="/" class="btn btn-dark btn-block mt-4">Kembali</a>
            </form>
        </div>
    </div>
</div>

@endsection