@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Detail Product</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Barang</label>
            <input type="text" name="title" class="form-control" value="{{ $product->title }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Harga</label>
            <input type="text" name="price " class="form-control" value="{{ $product->price }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Satuan</label>
            <input type="text" name="product_code" class="form-control" value="{{ $product->product_code }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="description" readonly>{{ $product->description }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Dibuat Pada</label>
            <input type="text" name="created_at" class="form-control"value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Diperbarui Pada</label>
            <input type="text" name="updated_at" class="form-control" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
    <div class="col-1">
        <div class="d-grid">
            <button class="btn btn-danger btn-md btn-auto" onclick="window.location.href='{{ route('product.index') }}'">Kembali</button>
        </div>
    </div>
@endsection
