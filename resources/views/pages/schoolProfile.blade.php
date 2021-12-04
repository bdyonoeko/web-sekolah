@extends('layouts.app')

@section('title', 'Web Sekolah')

@section('content')
  <!-- visi-misi -->
  <div class="container visi-misi">
    <div class="text-center">
      <h2>Visi</h2>
      <p>{!! $profil->visi !!}</p>
      <h2>Misi</h2>
      <p>{!! $profil->misi !!}</p>
    </div>
  </div>

  <!-- school-profile -->
  <div class="container school-profile mt-5">
    <div class="row justify-content-center p-4 border shadow-sm">
      <div class="col-md-4 text-center">
        <h2>
          <i class="fas fa-map-marked-alt text-info"></i>
          Alamat
        </h2>
        <p>{{ $profil->alamat }}</p>
      </div>
      <div class="col-md-4 text-center">
        <h2>
          <i class="fas fa-phone-alt text-info"></i>
          Telp
        </h2>
        <p>{{ $profil->telepon }}</p>
      </div>
      <div class="col-md-4 text-center">
        <h2>
          <i class="fas fa-envelope text-info"></i>
          Email
        </h2>
        <p>{{ $profil->email_sekolah }}</p>
      </div>
    </div>
  </div>
@endsection