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
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }} " href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('sekolah') ? 'active' : '' }} " href="{{ route('sekolah') }}">Profil Sekolah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('kelas*') ? 'active' : '' }} " href="{{ route('kelas') }}">Kelas</a>
        </li>

        @guest
        <li class="nav-item">
          <a class="btn btn-success" class="nav-link" href="{{ url('/login') }}">Login</a>
        </li>
        @endguest

        @auth

          @if (Auth::user()->role == 'ADMIN')
            <li class="nav-item">
              <a class="nav-link {{ Request::is('admin*') ? 'active' : '' }} " href="{{ route('dashboard') }}">Dashboard</a>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link {{ Request::is('user*') ? 'active' : '' }} " href="{{ route('user.index') }}">My Profile</a>
            </li>
          @endif

        <li class="nav-item">
          <form action="{{ url('/logout') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger" class="nav-link" href="{{ url('/logout') }}" onclick="return confirm('Anda akan logout?')">Logout</button>
          </form>
        </li>
        @endauth
      </ul>
    </div>

  </div>
</nav>