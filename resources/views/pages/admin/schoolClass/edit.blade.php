@extends('layouts.admin')

@section('title', 'Edit Kelas')

@section('content')
  <h1 class="h3 mb-4 text-gray-800">Edit Kelas</h1>

  <div class="card">
    <div class="card-body">

      <form action="{{ route('kelas.update', $class->id) }}" method="post">
        @csrf
        @method('put')
  
        <div class="form-group">
          <label for="nama">Nama Kelas</label>
          <input type="input" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Nama Kelas" value="{{ old('nama', $class->nama) }}">
          @error('nama')
            <div class="text-danger">
              <small>{{ $message }}</small>
            </div>
          @enderror
        </div>
  
        <div class="form-group">
          <label for="wali_kelas">Wali Kelas</label>
          <input type="input" class="form-control @error('wali_kelas') is-invalid @enderror" name="wali_kelas" id="wali_kelas" placeholder="Wali Kelas" value="{{ old('wali_kelas', $class->wali_kelas) }}">
          @error('wali_kelas')
            <div class="text-danger">
              <small>{{ $message }}</small>
            </div>
          @enderror
        </div>
  
        <div class="form-group">
          <label for="ketua_kelas">Ketua Kelas</label>
          <input type="input" class="form-control @error('ketua_kelas') is-invalid @enderror" name="ketua_kelas" id="ketua_kelas" placeholder="Ketua Kelas" value="{{ old('ketua_kelas', $class->ketua_kelas) }}">
          @error('ketua_kelas')
            <div class="text-danger">
              <small>{{ $message }}</small>
            </div>
          @enderror
        </div>

        <div class="form-group">
          <label for="tugas">Tugas</label>
          <input type="hidden" id="tugas" name="tugas" class="@error('tugas') is-invalid @enderror" value="{{ old('tugas', $class->tugas) }}">
          <trix-editor input="tugas"></trix-editor>
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