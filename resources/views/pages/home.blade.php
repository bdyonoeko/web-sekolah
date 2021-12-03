@extends('layouts.app')

@section('title', 'Web Sekolah')

@section('content')
  <!-- hero -->
  <div class="container hero">
    <div class="row justify-content-center">
      <div class="col-md-6 my-auto">
        <p class="quotes text-center">"Pendidikan mempunyai akar yang pahit, tapi buahnya manis."</p>
        <p class="originator text-center">- Aristoteles</p>
      </div>
      <div class="col-md-6">
        <img src="{{ url('assets/images/logo/hero.jpg') }}" alt="">
      </div>
    </div>
  </div>
@endsection