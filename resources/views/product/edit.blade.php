@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Barang</label>
                <input type="text" name="title" class="form-control" value="{{ $product->title }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Harga</label>
                <input type="text" name="price" class="form-control" value="{{ $product->price }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Satuan</label>
                <input type="text" name="product_code" class="form-control" value="{{ $product->product_code }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea class="form-control" name="description" >{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-auto">
                <div class="d-grid">
                    <button class="btn btn-danger btn-md">Update</button>
                </div>
            </div>
            <div class="col-auto">
                <div class="d-grid">
                    <button class="btn btn-danger btn-md" onclick="window.location.href='{{ route('product.index') }}'">Kembali</button>
                </div>
            </div>
        </div>
    </form>
@endsection
