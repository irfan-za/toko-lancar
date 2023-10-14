@extends('layouts.app')
  
@section('title', 'Edit Produk')
  
@section('contents')
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Nama Produk" value="{{ $product->name }}">
            </div>
            <div class="col">
                <input type="number" name="price" class="form-control" placeholder="Harga" value="{{ $product->price }}">
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
                <input type="number" name="stock" class="form-control" placeholder="Stok" value="{{ $product->stock }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Deskripsi">{{ $product->description }}</textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection