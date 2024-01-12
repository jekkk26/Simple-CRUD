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

            
            <a href="/create" type="button" class="btn btn-primary mb-4"><i class="bi bi-plus-lg"></i> Tambah Data Barang</a>   
            <form action="admin/barang/search" method="GET" class="mb-4">
                <div class="input-group">
                    <input type="text" class="form-control" name="keyword" placeholder="Cari barang...">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit"><i class="bi bi-search"></i> Cari</button>
                    </div>
                </div>
            </form>
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
                                <a href="/edit/{{ $item->kode_barang }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i>Edit</a>
                                <a href="/destory/barang/{{ $item->kode_barang }}" class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i>Hapus</a>
                            </td>
                        </tr>   
                    @endforeach
                </tbody>
            </table>
            <a href="/admin/admin" class="btn btn-success btn-block mt-1"><i class="bi bi-arrow-left-circle"></i> Kembali</a>
        </main>
    </div>
@endsection
