@extends('layouts.app')

  
@section('contents')
    <h1 class="mb-0">Update Data Barang</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" placeholder="Title" value="{{ $product->nama_barang }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Merk Barang</label>
                <input type="text" name="merk_barang" class="form-control" placeholder="Price" value="{{ $product->merk_barang }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Jumlah Barang</label>
                <input type="text" name="jumlah_barang" class="form-control" placeholder="Product Code" value="{{ $product->jumlah_barang }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Descripsi</label>
                <textarea class="form-control" name="deskripsi" placeholder="Descriptoin" >{{ $product->deskripsi }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection