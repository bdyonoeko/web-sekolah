@extends('layouts.app')

@section('title', 'Web Sekolah')

@section('content')
  <!-- school-class -->
  <div class="container school-class py-4">
    <div class="row justify-content-center">

      @foreach ($classes as $class)
      <div class="col-md-4 mb-3">
        <div class="card" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">{{ $class->nama }}</h5>
            <h6 class="card-subtitle my-1 text-muted">Wali Kelas: {{ $class->wali_kelas }}</h6>
            <h6 class="card-subtitle my-1 mb-3 text-muted">Ketua Kelas: {{ $class->ketua_kelas }}</h6>
            <a href="{{ route('detail-kelas', $class->id) }}" class="btn btn-sm btn-info">Lihat</a>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
@endsection