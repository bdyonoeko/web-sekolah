@extends('layouts.app')

@section('title', 'Edit My Profile')

@section('content')
  <!-- hero -->
  <div class="container my-profile">

    <form action="{{ route('user.update', $user->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('put')

      <div class="form-group">
        <label for="name">Nama</label>
        <input type="input" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Nama" value="{{ old('name', $user->name) }}">
        @error('name')
          <div class="text-danger">
            <small>{{ $message }}</small>
          </div>
        @enderror
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="input" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" value="{{ old('email', $user->email) }}">
        @error('email')
          <div class="text-danger">
            <small>{{ $message }}</small>
          </div>
        @enderror
      </div>

      <div class="form-group">
        <label for="class_id">Kelas</label>
        <select name="class_id" class="form-control @error('class_id') is-invalid @enderror" id="class_id">
          @foreach ($classes as $class)
            @if (old('class_id') == $class->id)
              <option value="{{ $class->id }}" selected>{{ $class->nama }}</option>
            @else
              <option value="{{ $class->id }}">{{ $class->nama }}</option>
            @endif
          @endforeach
        </select>
        @error('class_id')
          <div class="text-danger">
            <small>{{ $message }}</small>
          </div>
        @enderror
      </div>

      <div class="form-group">
        <label for="image">Foto</label>
        <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
        @error('class_id')
          <div class="text-danger">
            <small>{{ $message }}</small>
          </div>
        @enderror
      </div>

      <button type="submit" class="btn btn-primary">Update</button>

    </form>

  </div>
@endsection