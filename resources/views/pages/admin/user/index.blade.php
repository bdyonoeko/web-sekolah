@extends('layouts.admin')

@section('title', 'Dashboard Siswa')

@section('content')
  <h1 class="h3 mb-4 text-gray-800">Daftar Siswa</h1>

  <div class="card">
    <div class="card-body py-5">
      {{-- pesan sukses --}}
      @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
          {{ session('success') }}
        </div>
      @endif

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
                <a href="{{ route('user.show', $user->id) }}" class="btn btn-info btn-sm">
                  Detail
                </a>
                <form action="{{ route('user.destroy', $user->id) }}" method="post" class="d-inline">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus user ini?')">Delete</button>
                </form>
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