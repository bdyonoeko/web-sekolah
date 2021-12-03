<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
      <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-graduation-cap"></i>
      </div>
      <div class="sidebar-brand-text mx-3">
        Web Sekolah
      </div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Profil sekolah -->
  <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="fas fa-school"></i>
          <span>Profil Sekolah</span>
      </a>
  </li>

  <!-- Nav Item - kelas -->
  <li class="nav-item">
      <a class="nav-link" href="index.html">
          <i class="fas fa-chalkboard-teacher"></i>
          <span>Kelas</span>
      </a>
  </li>

  <!-- Nav Item - kelas -->
  <li class="nav-item">
      <a class="nav-link" href="index.html">
          <i class="fas fa-user-graduate"></i>
          <span>Siswa</span>
      </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->