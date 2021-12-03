<!-- navbar -->
<nav class="navbar navbar-expand-lg py-3 navbar-light fixed-top bg-white">
  <div class="container">

    <a class="navbar-brand" href="{{ route('home') }}">
      <i class="fas fa-graduation-cap"></i>
      Web Sekolah</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('profil-sekolah') }}">Profil Sekolah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('kelas') }}">Kelas</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-success" class="nav-link" href="{{ url('/login') }}">Login</a>
        </li>
      </ul>
    </div>

  </div>
</nav>