@extends('layouts.app')
  

  
@section('contents')
    <h1 class="mb-0">Tambah Barang</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
            </div>
            <div class="col">
                <input type="text" name="merk_barang" class="form-control" placeholder="Merk Barang">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="number" name="jumlah_barang" class="form-control" placeholder="Jumlah Barang">
            </div>
            <div class="col">
                <textarea class="form-control" name="deskripsi" placeholder="Deskripsi"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </form>
@endsection