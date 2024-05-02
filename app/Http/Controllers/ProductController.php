<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Controller;


class ProductController extends Controller
{
    public function index()
    {
        $product = Product::orderBy('created_at', 'DESC')->get();

        return view('product.index', compact('product'));
    }
    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        // Aturan validasi untuk setiap field
        $validatedData = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'product_code' => 'required',
            'description' => 'required',
        ], [
            'title.required' => 'Nama Barang harus diisi',
            'price.required' => 'Harga harus diisi',
            'product_code.required' => 'Satuan harus diisi',
            'description.required' => 'Deskripsi harus diisi',
        ]);

        // Jika validasi berhasil, simpan data
        Product::create($validatedData);

        return redirect()->route('product.index')->with('success', 'Product added successfully');
    }

    public function show(string $id)
    {
        $product = Product::findOrFail($id);

        return view('product.show', compact('product'));
    }

    public function edit(string $id)
    {
        $product = Product::findOrFail($id);

        return view('product.edit', compact('product'));
    }

    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $product->update($request->all());

        return redirect()->route('product.index')->with('success', 'product updated successfully');
    }

    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('product.index')->with('success', 'product deleted successfully');
    }

}
