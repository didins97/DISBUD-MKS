<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" id="topNavbar">
  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>
  <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <h2 class="judul text-gray-800">@yield('topbar-title')</h2>
  </div>
  <ul class="navbar-nav ml-auto">
    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="javascript:;" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-400 small">v{{ config('app.version') }} |</span>
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->email }}</span>
        <!-- <img class="img-profile rounded-circle" src="{{ asset('storage/assets/user/' . auth()->user()->photo) }}"> -->
        <img class="img-profile rounded-circle" src="{{ auth()->user()->photo != 'user.png'? asset('storage/assets/user/' . auth()->user()->photo) : asset('assets/admin/img/avatar/default-user-image.jpeg') }}">
      </a>
      <!-- Dropdown - User Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <!-- <a class="dropdown-item" href="user.html">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profile
          </a> -->
        <a class="dropdown-item" href="{{ route('admin.setting.index') }}">
          <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
          Pengaturan
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="javascript:;" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Logout
        </a>
      </div>
    </li>
  </ul>
</nav>
<!-- End of Topbar -->