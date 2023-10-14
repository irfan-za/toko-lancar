@extends('layouts.app')
  
@section('title', 'Tambah Produk')
  
@section('contents')
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Nama Produk">
            </div>
            <div class="col">
                <input type="number" name="price" class="form-control" placeholder="Harga">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col row d-flex align-items-center mr-2">
                <label for="category_id" class="form-label col-sm-2">Kategori</label>
                <select name="category_id" class="form-control col-sm-10">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <input type="number" name="stock" class="form-control" placeholder="Stok">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Deskripsi"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-success">Tambah</button>
            </div>
        </div>
    </form>
@endsection