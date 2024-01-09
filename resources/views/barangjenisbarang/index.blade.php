@extends('layout')

@section('content')
    <div class="container">
        <header class="mb-4">
            <h1 class="text-center">Daftar  Barang Dan Jenis Barang</h1>
        </header>
        <main>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <a href="/create/barangjenisbarang" type="button" class="btn btn-primary mb-4">Tambah Data Barang</a>
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID</th>
                        <th scope="col">Id Jenis</th>
                        <th scope="col">Kode Barang</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangjenisbarang as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->idbarangjenisbarang }}</td>
                            <td>{{ $item->id_jenis }}</td>
                            <td>{{ $item->kode_barang }}</td>
                            <td>
                                 <a href="/edit/barangjenis/{{ $item->idbarangjenisbarang}}" class="btn btn-warning btn-sm">Edit</a>
                                 <form action="{{ route('destroy', $item->idbarangjenisbarang) }}" method="POST"
                                    style="display: inline-block;" onsubmit="return confirm('Yakin ingin hapus data?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-success btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="/logout" class="btn btn-sm btn-danger">Logout >></a>
        </main>
    </div>
@endsection
