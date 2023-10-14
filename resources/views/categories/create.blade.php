@extends('layouts.app')
  
@section('title', 'Tambah Kategori')
  
@section('contents')
    <hr />
    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3 col-sm-6">
            <div class="col">
                <label class="form-label" for="name">Nama Kategori</label>
                <input type="text" name="name" class="form-control" placeholder="Nama Kategori">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mb-3 col-sm-6">
            <div class="col">
                <label class="form-label" for="description">Deskripsi Kategori</label>
                <textarea class="form-control" name="description" placeholder="Deskripsi" rows="5"></textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
 
        <div class="row col-sm-6">
            <div class="d-grid">
                <button type="submit" class="btn btn-success">Tambah</button>
            </div>
        </div>
    </form>
@endsection