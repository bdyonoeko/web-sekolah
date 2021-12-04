@extends('layouts.admin')

@section('title', 'Dashboard Profil Sekolah')

@section('content')
  <h1 class="h3 mb-4 text-gray-800">Profil Sekolah</h1>

  <div class="card">
    <div class="card-body py-5">

      <!-- visi-misi -->
      <div class="px-2 mb-5">
        <div class="text-center">
          <h2>Visi</h2>
          <p>{!! $profil->visi !!}</p>
          <h2>Misi</h2>
          <p>{!! $profil->misi !!}</p>
        </div>
      </div>
    
      <!-- school-profile -->
      <div class="px-2 school-profile">
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

      <div class="px-2">
        <a href="{{ route('profil-sekolah.edit', $profil->id) }}" class="btn btn-primary text-right mt-4 px-4">Edit</a>
      </div>
    </div>
  </div>
@endsection