  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center mb-3" href="{{ route('home') }}">
      <img id="logoNavbar" src="{{ asset('assets/img/logo/logo.png') }}" width="90px">
    </a>
    <!-- Divider -->
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::segment(2) == '' ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('admin.home') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <li class="nav-item  {{ Request::segment(3) == 'benda' || Request::segment(3) == 'bangunan' || Request::segment(3) == 'struktur' || Request::segment(3) == 'situs' || Request::segment(3) == 'kawasan' | Request::segment(3) == 'kegiatan1'  ? 'active' : '' }}">
      <a class="nav-link  {{ Request::segment(3) == 'benda' || Request::segment(3) == 'bangunan' || Request::segment(3) == 'struktur' || Request::segment(3) == 'situs' || Request::segment(3) == 'kawasan'  || Request::segment(3) == 'kegiatan1'  ? '' : 'collapsed' }}" href="javascript:;" data-toggle="collapse" data-target="#collapseTwo" aria-expanded=" {{ Request::segment(3) == 'benda' || Request::segment(3) == 'bangunan' || Request::segment(3) == 'struktur' || Request::segment(3) == 'situs' || Request::segment(3) == 'kawasan' | Request::segment(3) == 'kegiatan1' ? 'true' : 'false' }}" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-th-large"></i>
        <span>Parasanganta</span>
      </a>
      <div id="collapseTwo" class="collapse  {{ Request::segment(3) == 'benda' || Request::segment(3) == 'bangunan' || Request::segment(3) == 'struktur' || Request::segment(3) == 'situs' || Request::segment(3) == 'kawasan' || Request::segment(3) == 'kegiatan1' ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
        <div class="bg-submenu-nav py-2 collapse-inner rounded">

           <a class="collapse-item {{ Request::segment(3) == 'benda' ? 'active' : '' }}" href="{{ route('admin.benda.index') }}"><i class="fas fa-fw fa-newspaper mr-1"></i> Benda</a>
          <a class="collapse-item {{ Request::segment(3) == 'bangunan' ? 'active' : '' }}" href="{{ route('admin.bangunan.index') }}"><i class="fas fa-fw fa-newspaper mr-1"></i> Bangunan</a>
          <a class="collapse-item {{ Request::segment(3) == 'struktur' ? 'active' : '' }}" href="{{ route('admin.struktur.index') }}"><i class="fas fa-fw fa-newspaper mr-1"></i> Struktur</a>
          <a class="collapse-item {{ Request::segment(3) == 'situs' ? 'active' : '' }}" href="{{ route('admin.situs.index') }}"><i class="fas fa-fw fa-newspaper mr-1"></i> Situs</a>
          <a class="collapse-item {{ Request::segment(3) == 'kawasan' ? 'active' : '' }}" href="{{ route('admin.kawasan.index') }}"><i class="fas fa-fw fa-newspaper mr-1"></i> Kawasan</a>
          <a class="collapse-item {{ Request::segment(3) == 'kegiatan1' ? 'active' : '' }}" href="{{ route('admin.kegiatan1.index') }}"><i class="fas fa-fw fa-newspaper mr-1"></i> Kegiatan</a>
        </div>
      </div>
    </li>
    <!-- Divider -->
    <li class="nav-item {{ Request::segment(2) == 'labu' && Request::segment(3) == 'konten' ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('admin.konten_labu.index') }}">
        <i class="fas fa-fw fa-edit"></i>
        <span>La'bu</span></a>
    </li>
    <li class="nav-item {{ Request::segment(2) == 'konten' && Request::segment(3) == 'artikel' ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('admin.article.index') }}">
        <i class="fas fa-fw fa-edit"></i>
        <span>Artikel</span></a>
    </li>
    <li class="nav-item {{ Request::segment(2) == 'informasi' && Request::segment(3) == 'kegiatan' ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('admin.kegiatan.index') }}">
        <i class="fas fa-fw fa-edit"></i>
        <span>Event</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item {{ Request::segment(3) == 'rempah' || Request::segment(3) == 'kontributor' ? 'active' : '' }}">
      <a class="nav-link {{ Request::segment(3) == 'rempah' || Request::segment(3) == 'kontributor' ? '' : 'collapsed' }}" href="javascript:;" data-toggle="collapse" data-target="#masterData" aria-expanded="false" aria-controls="masterData">
        <i class="fas fa-fw fa-database"></i>
        <span>Master Data</span>
      </a>
      <div id="masterData" class="collapse {{ Request::segment(3) == 'rempah' || Request::segment(3) == 'kontributor' ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
        <div class="bg-submenu-nav py-2 collapse-inner rounded">
          <a class="collapse-item {{ Request::segment(3) == 'rempah' ? 'active' : '' }}" href="{{ route('admin.rempah.index') }}"><i class="fas fa-fw fa-leaf mr-1"></i>Jenis Rempah</a>
          <a class="collapse-item {{ Request::segment(3) == 'kontributor' ? 'active' : '' }}" href="{{ route('admin.contributor.index') }}"><i class="fas fa-fw fa-edit mr-1"></i>Kontributor</a>
        </div>
      </div>
    </li> --}}
    @if( auth()->user()->role == 'super admin' )
    <li class="nav-item {{ Request::segment(2) == 'user' ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('admin.user.index') }}">
        <i class="fas fa-fw fa-user-circle"></i>
        <span>User Management</span></a>
    </li>
    @endif
    <li class="nav-item {{ Request::segment(2) == 'pengaturan' ? 'active' : '' }}" >
      <a class="nav-link" href="{{ route('admin.setting.index') }}">
        <i class="fas fa-fw fa-cog"></i>
        <span>Pengaturan Profil</span></a>
    </li>
    <!-- Divider -->
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <!-- <button class="rounded-circle border-0" id="sidebarToggle"></button> -->
    </div>
  </ul>
  <!-- End of Sidebar -->
