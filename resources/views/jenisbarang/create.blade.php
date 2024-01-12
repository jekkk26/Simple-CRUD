@extends('layout')

@section('content')

    <div class="container mt-5">
        <div class="card border-0 shadow-lg">
            <div class="card-body">
                <h5 class="card-title text-center">Tambah Data Jenis Barang</h5>
                <hr class="my-4">
                <form action="/store/jenisbarang" method="POST">
                    @csrf
                    <div class="mb-3 row">
                        <label for="id_jenis" class="col-sm-3 col-form-label">Id Jenis</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="id_jenis" value="{{ $tambahjenis }}"
                                name="id_jenis" required readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama_jenis_barang" class="col-sm-3 col-form-label">Nama Jenis Barang</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_jenis_barang" name="nama_jenis_barang"
                                required>
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
                    <button type="submit" class="btn btn-success btn-block mt-4"><i class="bi bi-plus-lg"></i> Tambah Data
                        Barang</button>
                    <a href="/barang/jenis/" class="btn btn-warning btn-block mt-4"><i class="bi bi-arrow-left-circle"></i>
                        Kembali</a>
                </form>
            </div>
        </div>
    </div>

@endsection
