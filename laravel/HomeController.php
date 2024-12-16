<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profil;
use App\Models\Products;


class HomeController extends Controller
{
    public function index()
    {
        $user = "Tracklyn";
        return view('welcome', ['user'=>$user]);
    }

    public function Operation() 
    {
        return view('Operation');
    }
    public function Products() 
    {
        $products = products::all()->sortByDesc('id');

        return view('products', ['products'=>$products]);
    }
    public function Reporting() 
    {
        return view('Reporting');
    }
    public function Help() 
    {
        return view('Help');
    }

    // public function store(Request $request)
    // {
    //     $validateData = $request->validate([
    //         'nama_produk'=> 'required',
    //         'deskripsi_produk'=> 'required',
    //         'kuantitas'=> 'required',
    //         'image'=> 'nullable',
    //     ]);

    //     product::create($validateData);

    //     return response()->json(['message' => 'produk berhasil ditambahkan']);
    // }

    public function create()
    {
        return view('products-create'); // Tampilkan form tambah produk
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'deskripsi_produk' => 'required',
            'kuantitas' => 'required|integer|min:1',
            'image' => 'nullable|url', // Validasi URL untuk gambar
        ]);

        $products = Products::create([
            'nama_produk'=> $request->nama_produk,
            'deskripsi_produk'=> $request->deskripsi_produk,
            'kuantitas'=> $request->kuantitas,
            'image' => $request->image,
        ]); // Simpan data ke database
        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit(Products $products)
    {
        return view('products-edit', compact('products')); // Tampilkan form edit
    }

    public function update(Request $request, Products $products)
    {
        $request->validate([
            'nama_produk' => 'required',
            'deskripsi_produk' => 'required',
            'kuantitas' => 'required|integer|min:1',
            'image' => 'nullable|url',
        ]);

        $products->update([
            'nama_produk'=> $request->nama_produk,
            'deskripsi_produk'=> $request->deskripsi_produk,
            'kuantitas'=> $request->kuantitas,
            'image'=> $request->image,
        ]);
        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui');
    }

    public function destroy(Products $products)
    {
        $products->delete(); // Hapus data produk
        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus');
    }

}