@extends('layouts.admin')

@section('title', 'Detail Kelas')

@section('content')
  <h1 class="h3 mb-4 text-gray-800">Detail Kelas</h1>

  <div class="card">
    <div class="card-body">

      <h2>{{ $class->nama }}</h2>
      <p class="my-1">Wali Kelas: {{ $class->wali_kelas }}</p>
      <p class="my-1">Ketua Kelas: {{ $class->ketua_kelas }}</p>

      <h2 class="mt-4">Tugas</h2>
      <div class="container border py-2">
        <p>{!! $class->tugas !!}</p>
      </div>

      <h2 class="mt-4">Daftar Siswa</h2>
      <!-- DataTales Example -->
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>

            @forelse ($users as $user)
            <tr>
              <td>{{ $user->name }}</td>
              <td>
                <a href="{{ route('user.show', $user->id) }}" class="btn btn-info">
                  Detail
                </a>
              </td>
            </tr>
            @empty
              <tr>
                <td colspan="2" class="text-center">Belum ada siswa</td>
              </tr>
            @endforelse

          </tbody>
        </table>
      </div>

    </div>
  </div>
@endsection

@push('styles')
  <!-- Custom styles for this page -->
  <link href="{{ url('template-admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
  <!-- Page level plugins -->
  <script src="{{ url('template-admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ url('template-admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ url('template-admin/js/demo/datatables-demo.js') }}"></script>
@endpush