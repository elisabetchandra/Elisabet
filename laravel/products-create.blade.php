@extends('layouts.app')

@section('content')
    <div class="card">
        <h2>Form Tambah Produk</h2>
        <div class="container">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-25">
                        <label for="nama_produk">Nama Produk</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="nama_produk" name="nama_produk" placeholder="Nama Produk..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="deskripsi_produk">Deskripsi Produk</label>
                    </div>
                    <div class="col-75">
                        <textarea id="deskripsi_produk" name="deskripsi_produk" placeholder="Deskripsi Produk.."></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="kuantitas">Kuantitas</label>
                    </div>
                    <div class="col-75">
                        <input type="number" id="kuantitas" name="kuantitas" placeholder="Kuantitas..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="image">Gambar (URL)</label>
                    </div>
                    <div class="col-75">
                        <input type="url" id="image" name="image" placeholder="Link Gambar..">
                    </div>
                </div>
                <div class="row" style="margin-top: 10px">
                    <input type="submit" value="Tambah Produk">
                </div>
            </form>
        </div>
    </div>
@endsection
