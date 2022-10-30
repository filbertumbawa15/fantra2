<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
  <div class="header-mobile__bar">
    <div class="container-fluid">
      <div class="header-mobile-inner">
        <a class="logo" href="index.html">
          <img src="{{ asset('images/manilalotto.png') }}" alt="CoolAdmin" style="width:auto;height:60px;" />
        </a>
        <button class="hamburger hamburger--slider" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      </div>
    </div>
  </div>
  <nav class="navbar-mobile">
    <div class="container-fluid">
      <ul class="navbar-mobile__list list-unstyled">
        <li>
          <a href="{{ route('dashboard') }}">
            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
        </li>
        <li>
          <a href="{{ route('admin.result.index') }}">
            <i class="fas fa-chart-bar"></i>Result</a>
        </li>
        <li>
          <a href="{{ route('logout') }}">
            <i class="fas fa-chart-bar"></i>Logout</a>
        </li>
      </ul>
      </li>
      </ul>
    </div>
  </nav>
</header>
<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
  <div class="logo">
    <a href="#">
      <img src="{{ asset('images/manilalotto.png') }}" alt="Cool Admin" style="width:auto;height:70px;" />
    </a>
  </div>
  <div class="menu-sidebar__content js-scrollbar1">
    <nav class="navbar-sidebar">
      <ul class="list-unstyled navbar__list">
        <li class="{{ Route::is('dashboard') ? 'active' : '' }}">
          <a href="{{ route('dashboard') }}">
            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
        </li>
        <li class="{{ Route::is('admin.result.index') ? 'active' : '' }}">
          <a href="{{ route('admin.result.index') }}">
            <i class="fas fa-chart-bar"></i>Result</a>
        </li>
      </ul>
      </li>
      </ul>
    </nav>
  </div>
</aside>
<!-- END MENU SIDEBAR-->

<!-- {{ Route::is('dashboard') ? 'active' : '' }} -->