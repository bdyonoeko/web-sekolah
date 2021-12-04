@extends('layouts.admin')

@section('title', 'Dashboard Kelas')

@section('content')
  <h1 class="h3 mb-4 text-gray-800">Kelas</h1>

  <div class="card">
    <div class="card-body">

      <div class="px-2">
        {{-- pesan sukses --}}
        @if (session()->has('success'))
          <div class="alert alert-success" role="alert">
            {{ session('success') }}
          </div>
        @endif

        <a href="{{ route('kelas.create') }}" class="btn btn-primary">
          Tambah 
        </a>
      </div>

      <!-- school-class -->
      <div class="px-2 py-4">
        <div class="row justify-content-center">

          @foreach ($classes as $class)
          <div class="col-md-4 mb-3">
            <div class="card" style="width: 100%;">
              <div class="card-body">
                <h5 class="card-title">{{ $class->nama }}</h5>
                <h6 class="card-subtitle my-1 text-muted">Wali Kelas: {{ $class->wali_kelas }}</h6>
                <h6 class="card-subtitle my-1 mb-3 text-muted">Ketua Kelas: {{ $class->ketua_kelas }}</h6>
                <a href="{{ route('kelas.show', $class->id) }}" class="btn btn-sm btn-info">Lihat</a>
                <a href="{{ route('kelas.edit', $class->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                <form action="{{ route('kelas.destroy', $class->id) }}" method="post" class="d-inline">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus kelas ini?')">Delete</button>
                </form>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>

    </div>
  </div>
@endsection