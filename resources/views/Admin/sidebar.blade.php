<div class="sidebar">
  

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
       
        <li class="nav-item">
          <a href="/SI_RW/public/admin" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="laporanshow" class="nav-link">
            <i class="nav-icon far fa-envelope"></i>
            <p>
              Laporan
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="agendaadmin" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              Agenda
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('galeri.index') }}" class="nav-link">
            <i class="nav-icon fas fa-image"></i>
            <p>
              Galeri
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pengurusadmin" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Pengurus
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/SI_RW/public/iuran" class="nav-link">
            <i class="nav-icon fas fa-dollar-sign"></i>
            <p>
              Iuran Warga
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/SI_RW/public/penduduk" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Kelola Penduduk
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/SI_RW/public/bansosfilt" class="nav-link">
            <i class="nav-icon fas fa-columns"></i>
            <p>
              Filter Bansos
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>
        