@extends('layouts.app')

@section('title', 'Web Sekolah')

@section('content')
  <!-- visi-misi -->
  <div class="container visi-misi">
    <div class="text-center">
      <h2>Visi</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ratione vitae sequi sint repellat laboriosam in sed qui dicta, perferendis dolorum earum facilis commodi nostrum iure omnis repellendus possimus soluta quae rem provident iusto sunt suscipit. Reprehenderit saepe deserunt quis provident sit natus quia facere!</p>
      <h2>Misi</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ratione vitae sequi sint repellat laboriosam in sed qui dicta, perferendis dolorum earum facilis commodi nostrum iure omnis repellendus possimus soluta quae rem provident iusto sunt suscipit. Reprehenderit saepe deserunt quis provident sit natus quia facere!</p>
    </div>
  </div>

  <!-- school-profile -->
  <div class="container school-profile mt-5">
    <div class="row justify-content-center p-4 border shadow-sm">
      <div class="col-md-4 text-center">
        <h2>
          <i class="fas fa-map-marked-alt text-info"></i>
          Alamat
        </h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis ducimus quia mollitia magni, quae minus fugiat debitis voluptatem, nam officiis modi perferendis quas consequuntur non nemo possimus quaerat </p>
      </div>
      <div class="col-md-4 text-center">
        <h2>
          <i class="fas fa-phone-alt text-info"></i>
          Telp
        </h2>
        <p>123-456-789-101</p>
      </div>
      <div class="col-md-4 text-center">
        <h2>
          <i class="fas fa-envelope text-info"></i>
          Email
        </h2>
        <p>Sekolah@gmail.com</p>
      </div>
    </div>
  </div>
@endsection