@extends('layouts.admin')

@section('title', 'Tambah Kelas')

@section('content')
  <h1 class="h3 mb-4 text-gray-800">Tambah Kelas</h1>

  <div class="card">
    <div class="card-body">

      <form action="{{ route('kelas.store') }}" method="post">
        @csrf
  
        <div class="form-group">
          <label for="nama">Nama Kelas</label>
          <input type="input" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Nama Kelas" value="{{ old('nama') }}">
          @error('nama')
            <div class="text-danger">
              <small>{{ $message }}</small>
            </div>
          @enderror
        </div>
  
        <div class="form-group">
          <label for="wali_kelas">Wali Kelas</label>
          <input type="input" class="form-control @error('wali_kelas') is-invalid @enderror" name="wali_kelas" id="wali_kelas" placeholder="Wali Kelas" value="{{ old('wali_kelas') }}">
          @error('wali_kelas')
            <div class="text-danger">
              <small>{{ $message }}</small>
            </div>
          @enderror
        </div>
  
        <div class="form-group">
          <label for="ketua_kelas">Ketua Kelas</label>
          <input type="input" class="form-control @error('ketua_kelas') is-invalid @enderror" name="ketua_kelas" id="ketua_kelas" placeholder="Ketua Kelas" value="{{ old('ketua_kelas') }}">
          @error('ketua_kelas')
            <div class="text-danger">
              <small>{{ $message }}</small>
            </div>
          @enderror
        </div>

        <div class="form-group">
          <label for="tugas">Tugas</label>
          <input type="hidden" id="tugas" name="tugas" class="@error('tugas') is-invalid @enderror" value="{{ old('tugas') }}">
          <trix-editor input="tugas"></trix-editor>
          @error('tugas')
            <div class="text-danger">
              <small>{{ $message }}</small>
            </div>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary d-block ml-auto">Simpan</button>
  
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