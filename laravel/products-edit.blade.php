@extends('layouts.app')

@section('content')
<div class="card">
    <h2>Form Edit Produk</h2>
    <div class="container">
        <form action="{{ route('products.update', $products->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-25">
                    <label for="nama_produk">Nama Produk</label>
                </div>
                <div class="col-75">
                    <input type="text" id="nama_produk" name="nama_produk" value="{{ $products->nama_produk }}" placeholder="Nama Produk..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="deskripsi_produk">Deskripsi Produk</label>
                </div>
                <div class="col-75">
                    <input type="text" id="deskripsi_produk" name="deskripsi_produk" value="{{ $products->deskripsi_produk }}" placeholder="Deskripsi Produk..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="kuantitas">Kuantitas</label>
                </div>
                <div class="col-75">
                    <input type="number" id="kuantitas" name="kuantitas" value="{{ $products->kuantitas }}" placeholder="Kuantitas..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="image">Gambar</label>
                </div>
                <div class="col-75">
                    <input type="text" id="image" name="image" value="{{ $products->image }}" placeholder="Link Gambar (URL)..">
                </div>
            </div>
            <div class="row" style="margin-top: 10px">
                <input type="submit" value="Update Produk">
            </div>
        </form>
    </div>
</div>
@endsection
    