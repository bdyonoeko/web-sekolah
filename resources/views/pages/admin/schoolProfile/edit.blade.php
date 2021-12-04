@extends('layouts.admin')

@section('title', 'Dashboard Profil Sekolah')

@section('content')
  <h1 class="h3 mb-4 text-gray-800">Profil Sekolah</h1>

  <div class="card">
    <div class="card-body">
      <form action="{{ route('profil-sekolah.update', $profil->id) }}" method="post">
        @csrf
        @method('put')
  
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="input" class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" placeholder="Alamat" value="{{ old('alamat', $profil->alamat) }}">
        </div>
  
        <div class="form-group">
          <label for="email_sekolah">Email</label>
          <input type="input" class="form-control @error('email_sekolah') is-invalid @enderror" name="email_sekolah" id="email_sekolah" placeholder="Email Sekolah" value="{{ old('email_sekolah', $profil->email_sekolah) }}">
        </div>
  
        <div class="form-group">
          <label for="telepon">Telepon</label>
          <input type="input" class="form-control @error('telepon') is-invalid @enderror" name="telepon" id="telepon" placeholder="Telepon" value="{{ old('telepon', $profil->telepon) }}">
        </div>

        <div class="form-group">
          <label for="tentang">Tentang</label>
          <input type="hidden" id="tentang" name="tentang" class="@error('tentang') is-invalid @enderror" value="{{ old('tentang', $profil->tentang) }}">
          <trix-editor input="tentang"></trix-editor>
        </div>
  
        <div class="form-group">
          <label for="visi">Visi</label>
          <input type="hidden" id="visi" name="visi" class="@error('visi') is-invalid @enderror" value="{{ old('visi', $profil->visi) }}">
          <trix-editor input="visi"></trix-editor>
        </div>
  
        <div class="form-group">
          <label for="misi">Misi</label>
          <input type="hidden" id="misi" name="misi" @error('misi') is-invalid @enderror value="{{ old('misi', $profil->misi) }}">
          <trix-editor input="misi"></trix-editor>
        </div>

        <button type="submit" class="btn btn-primary d-block ml-auto">Update</button>
  
      </form>
    </div>
  </div>
@endsection

@push('styles')
  <link rel="stylesheet" href="{{ url('assets/trix/trix.css') }}">
  <style>
    trix-toolbar [data-trix-button-group='file-tools']{
      display: none;
    }
  </style>
@endpush

@push('scripts')
  <script src="{{ url('assets/trix/trix.js') }}"></script>

  <script>
    document.addEventListener('trix-file-accept', function(e){
      e.preventDefault();
    })
  </script>
@endpush