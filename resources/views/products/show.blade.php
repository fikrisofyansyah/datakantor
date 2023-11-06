@extends('layouts.app')
  

  
@section('contents')
    <h1 class="mb-0">Detail Barang</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" value="{{ $product->nama_barang }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Merk Barang</label>
            <input type="text" name="merk_barang" class="form-control" placeholder="Merk Barang" value="{{ $product->merk_barang }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Jumlah Barang</label>
            <input type="text" name="jumlah_barang" class="form-control" placeholder="Product Code" value="{{ $product->jumlah_barang }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="Descriptoin" readonly>{{ $product->deskripsi }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection