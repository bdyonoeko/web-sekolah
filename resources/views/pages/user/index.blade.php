@extends('layouts.app')

@section('title', 'My Profile')

@section('content')
  <!-- hero -->
  <div class="container my-profile">

    <div class="justify-content-center">
      <div class="col-md-2">
        @if (!$user->image || $user->image == 'null' || $user->image == null)
        <img src="{{ url('assets/images/logo/user.png') }}" alt="" height="150px" class="rounded-circle border">
        @else
        <img src="{{ Storage::url($user->image) }}" alt="" height="150px" class="rounded-circle border">
        @endif
      </div>
    </div>

    <table class="table table-bordered col-md-8 mt-3">
      <tr>
        <th>Nama</th>
        <td>{{ $user->name }}</td>
      </tr>
      <tr>
        <th>Email</th>
        <td>{{ $user->email }}</td>
      </tr>
      <tr>
        <th>Kelas</th>
        <td>{{ (!$user->class_id ? 'Belum update kelas' : $user->kelas->nama) }}</td>
      </tr>
    </table>

    <a href="{{ route('user.edit',  $user->id ) }}" class="btn px-4 btn-secondary">Edit</a>

  </div>
@endsection