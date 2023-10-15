@extends('layouts.app')
  
@section('title', 'Daftar Produk')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <form  action="{{ route('products') }}" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
            <input name="search" type="text" placeholder="Cari produk..." value="{{ request('search') }}" class="form-control bg-light border-0 small">
            <div class="input-group-append">
                <button class="btn btn-success" type="submit">
                <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
            </div>
        </form>
        <a href="{{ route('products.create') }}" class="btn btn-success">Tambah Produk</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-success">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($products->count() > 0)
                @foreach($products as $product)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $product->name }}</td>
                        <td class="align-middle">{{ $product->price }}</td>
                        <td class="align-middle">{{ $product->stock }}</td>
                        <td class="align-middle">{{ $product->category->name }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('products.show', $product->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('products.edit', $product->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Yakin ingin menghapus produk?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Produk tidak ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection