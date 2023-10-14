@extends('layouts.app')
  
@section('title', 'Profil Akun')
  
@section('contents')
    <hr />
    <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nama</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ auth()->user()->name }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ auth()->user()->email }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Level</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ auth()->user()->level }}</p>
              </div>
            </div>
            <hr>
          </div>
        </div>
    </div>
@endsection