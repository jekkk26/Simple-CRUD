@extends('layout')

@section('content')
    <div class="container">
        <header class="mb-4">
            <h1 class="text-center">Daftar Barang Dan Jenis Barang</h1>
        </header>
        <main>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('Welcome'))
                <div class="alert alert-success">
                    {{ session('Welcome') }}
                </div>
            @endif

            <a href="/create/barangjenisbarang" type="button" class="btn btn-primary mb-4"><i class="bi bi-plus-lg"></i> Tambah
                Data</a>
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID</th>
                        <th scope="col">Jenis Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangjenisbarang as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->idbarangjenisbarang }}</td>
                            <td>{{ $item->jenis->nama_jenis_barang }}</td>
                            <td>{{ $item->barang->nama_barang }}</td>
                            <td>
                                <a href="/edit/barangjenis/{{ $item->idbarangjenisbarang }}"
                                    class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i>Edit</a>
                                <form action="{{ route('destroy', $item->idbarangjenisbarang) }}" method="POST"
                                    style="display: inline-block;" onsubmit="return confirm('Yakin ingin hapus data?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                            class="bi bi-trash3-fill"></i>Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if (Auth::user()->role == 'admin')
                <a href="/admin/admin" class="btn btn-sm btn-success"><i class="bi bi-box-arrow-in-left"></i> Kembali</a>
            @endif
            @if (Auth::user()->role == 'staf')
                <a href="/logout" class="btn btn-sm btn-success"><i class="bi bi-box-arrow-in-left"></i> Logout >></a>
            @endif
        </main>
    </div>
@endsection
