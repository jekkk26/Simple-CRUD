@extends('layout')

@section('content')
    <div class="container">
        <header class="mb-4">
            <h1 class="text-center">Daftar Barang</h1>
        </header>
        <main>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <a href="/create" type="button" class="btn btn-dark mb-4">Tambah Data Barang</a>
            <a href="/barang/jenis" type="button" class="btn btn-dark mb-4">Data Jenis Barang</a>
            <a href="/barang/barangdanjenis" type="button" class="btn btn-dark mb-4">Data Jenis & Barang</a>
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barang as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->kode_barang }}</td>
                            <td>{{ $item->nama_barang }}</td>
                            <td>{{ $item->stok }}</td>
                            <td>{{ $item->harga }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>
                                <a href="/edit/{{ $item->kode_barang }}" class="btn btn-dark btn-sm">Edit</a>
                                <a href="/destory/barang/{{ $item->kode_barang }}" class="btn btn-dark btn-sm">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
    </div>
@endsection
