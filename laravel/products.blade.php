@extends('layouts.app')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}">
@endsection
@section('content')
    <div class="carde">
        <h2>Data Produk</h2>
        <h5>Daftar Produk Tersedia</h5>
        <a href="{{ route('products.create') }}">Tambah Produk</a>
        <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Deskripsi Produk</th>
                    <th>Kuantitas</th>
                    <th>Gambar</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                </tr>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->nama_produk }}</td>
                    <td>{{ $product->deskripsi_produk }}</td>
                    <td>{{ $product->kuantitas }}</td>
                    <td>
                        @if ($product->image)
                            <img src="{{ $product->image }}" alt="Gambar Produk" style="width: 100px; height: auto;">
                        @else
                            Tidak ada gambar
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('products.edit', $product) }}">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('products.destroy', $product) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus produk ini?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
@endsection
