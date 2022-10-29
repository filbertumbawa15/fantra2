<!-- Sidebar -->
<!-- partial:../../partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="javascript:void(0)"><img src="{{ asset('/images/manilalotto.png') }}" alt="logo"/></a>
    <a class="sidebar-brand brand-logo-mini" href="javascript:void(0)"><img src="{{ asset('images/logo-mini.svg') }}" alt="logo" /></a>
  </div>
  <ul class="nav">
    <li class="nav-item profile">
      <div class="profile-desc">
        <div class="profile-pic">
          <div class="count-indicator">
            <img class="img-xs rounded-circle " src="{{ asset('images/faces/face15.jpg') }}" alt="">
            <span class="count bg-success"></span>
          </div>
          <div class="profile-name">
            <h5 class="mb-0 font-weight-normal">Admin</h5>
          </div>
        </div>
      </div>
    </li>
    <li class="nav-item menu-items {{ Route::is('dashboard') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <span class="menu-icon">
          <i class="mdi mdi-home"></i>
        </span>
        <span class="menu-title">Home</span>
      </a>
    </li>
    <li class="nav-item menu-items {{ Route::is('admin.result.index') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('admin.result.index') }}">
        <span class="menu-icon">
          <i class="mdi mdi-file-document-box"></i>
        </span>
        <span class="menu-title">Result</span>
      </a>
    </li>
  </ul>
</nav>